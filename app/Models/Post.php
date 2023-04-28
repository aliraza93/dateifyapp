<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded  = [];

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
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('avatar')
            ->width(400)
            ->height(400)
            ->nonOptimized()
            ->performOnCollections('post_images');
    }

    // get group avatar
    public function getAvatarAttribute()
    {
        $conversionGenerated = $this->getFirstMedia('post_images') ? $this->getFirstMedia('post_images')->hasGeneratedConversion('avatar') : false; // returns true or false
        if ($conversionGenerated) {
            return $this->getFirstMediaUrl('post_images', 'avatar');
        } else {
            return null;
        }
    }

    // Get id and link of images
    public function getImagesAttribute()
    {
        $images = [];
        if ($this->getMedia('post_images')) {
            foreach ($this->getMedia('post_images') as $key => $media) {
                $images[$key] = ['id' => $media->id, 'url' => $media->getUrl(), 'order' => $media->order_column];
            }
        }
        return $images;
    }

    public function likes()
    {
        return $this->hasMany(PostLike::class);
    }

    public function getLikesCounterAttribute()
    {
        $counter = PostLike::where('user_id', auth()->id())->where('post_id', $this->id)->where('is_liked', 1)->count();
        return $counter;
    }

    public function getDislikesCounterAttribute()
    {
        $counter = PostLike::where('user_id', auth()->id())->where('post_id', $this->id)->where('is_liked', 0)->count();
        return $counter;
    }
}
