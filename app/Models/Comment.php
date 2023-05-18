<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Comment extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'body', 'post_id', 'user_id', 'parent_comment_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'media',
    ];

    /**
     * The attributes that should be appended.
     *
     * @var array<string, string>
     */
    protected $appends = [
        'avatar',
        'images',
        'likes_counter',
        'dislikes_counter',
        'reaction_type',
        'replies_counter',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('avatar')
            ->width(400)
            ->height(400)
            ->nonOptimized()
            ->performOnCollections('comment_images');
    }

    // get group avatar
    public function getAvatarAttribute()
    {
        $conversionGenerated = $this->getFirstMedia('comment_images') ? $this->getFirstMedia('comment_images')->hasGeneratedConversion('avatar') : false; // returns true or false
        if ($conversionGenerated) {
            return $this->getFirstMediaUrl('comment_images', 'avatar');
        } else {
            return null;
        }
    }

    // Get id and link of images
    public function getImagesAttribute()
    {
        $images = [];
        if ($this->getMedia('comment_images')) {
            foreach ($this->getMedia('comment_images') as $key => $media) {
                $images[$key] = ['id' => $media->id, 'url' => $media->getUrl(), 'order' => $media->order_column];
            }
        }
        return $images;
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentLikes()
    {
        return $this->hasMany(CommentLike::class);
    }

    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    public function childrenComments()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }

    public function getLikesCounterAttribute()
    {
        $counter = CommentLike::where('comment_id', $this->id)->where('user_id', auth()->id())->where('is_liked', 1)->count();
        return $counter;
    }

    public function getDislikesCounterAttribute()
    {
        $counter = CommentLike::where('comment_id', $this->id)->where('user_id', auth()->id())->where('is_liked', 0)->count();
        return $counter;
    }

    public function getReactionTypeAttribute()
    {
        $reaction = CommentLike::where('comment_id', $this->id)->where('user_id', auth()->id())->select('is_liked')->first();
        if ($reaction != null) {
            // Check if liked
            if ($reaction->is_liked) {
                return 'like';
            } else if (!$reaction->is_liked) {
                if ($reaction->is_liked != 0 || $reaction->is_liked == '') {
                    return NULL;
                } else {
                    return 'dislike';
                }
            } else {
                return NULL;
            }
        } else {
            return null;
        }
        return null;
    }

    public function getRepliesCounterAttribute()
    {
        // Check if the comment has replies or not
        $isReply = $this->parent_comment_id;
        if (!$isReply) {
            return $this->childrenComments()->count();
        } else {
            return 0;
        }
    }
}
