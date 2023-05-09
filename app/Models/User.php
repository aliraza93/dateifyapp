<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'media',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be appended.
     *
     * @var array<string, string>
     */
    protected $appends = [
        'firstImage',
        'avatar',
        'large',
        'blurred_avatar'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('avatar')
            ->width(400)
            ->height(400)
            ->nonOptimized()
            ->performOnCollections('profile_images');

        $this->addMediaConversion('large')
            ->width(400)
            ->height(400)
            ->nonOptimized()
            ->performOnCollections('profile_images');

        $this->addMediaConversion('blurred_avatar')
            ->width(400)
            ->height(400)
            ->blur(80)
            ->nonOptimized()
            ->performOnCollections('profile_images');
    }

    public function getAvatarAttribute()
    {
        $conversionGenerated = $this->getFirstMedia('profile_images') ? $this->getFirstMedia('profile_images')->hasGeneratedConversion('avatar') : false; // returns true or false
        if ($conversionGenerated) {
            return $this->getFirstMediaUrl('profile_images', 'avatar');
        } else {
            return null;
        }
    }

    public function getLargeAttribute()
    {
        $conversionGenerated = $this->getFirstMedia('profile_images') ? $this->getFirstMedia('profile_images')->hasGeneratedConversion('large') : false; // returns true or false
        if ($conversionGenerated) {
            return $this->getFirstMediaUrl('profile_images', 'large');
        } else {
            return null;
        }
    }

    public function getBlurredAvatarAttribute()
    {
        $conversionGenerated = $this->getFirstMedia('profile_images') ? $this->getFirstMedia('profile_images')->hasGeneratedConversion('blurred_avatar') : false; // returns true or false
        if ($conversionGenerated) {
            return $this->getFirstMediaUrl('profile_images', 'blurred_avatar');
        } else {
            return null;
        }
    }

    // Append First Image Url of User
    public function getFirstImageAttribute()
    {
        $media = $this->getFirstMediaUrl('profile_images');
        return $media;
    }

    // Get id and link of images
    public function getImagesAttribute()
    {
        $images = [];
        if ($this->getMedia('profile_images')) {
            foreach ($this->getMedia('profile_images') as $key => $media) {
                $images[$key] = ['id' => $media->id, 'url' => $media->getUrl(), 'order' => $media->order_column];
            }
        }
        return $images;
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_users');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function postLikes()
    {
        return $this->hasMany(PostLike::class);
    }

    /**
     * The users blocked by the user.
     */
    public function blocked_users()
    {
        return $this->belongsToMany(BlockUser::class, 'block_users');
    }

    public function commentLikes()
    {
        return $this->hasMany(CommentLike::class);
    }

    /**
     * Contact us form 
     */
    public function contactus()
    {
        return $this->hasMany(ContactUs::class);
    }
}
