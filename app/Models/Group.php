<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Group extends Model implements HasMedia
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
        'total_members'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_users');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('avatar')
            ->width(400)
            ->height(400)
            ->nonOptimized()
            ->performOnCollections('group_images');
    }

    // get group avatar
    public function getAvatarAttribute()
    {
        $conversionGenerated = $this->getFirstMedia('group_images') ? $this->getFirstMedia('group_images')->hasGeneratedConversion('avatar') : false; // returns true or false
        if ($conversionGenerated) {
            return $this->getFirstMediaUrl('group_images', 'avatar');
        } else {
            return null;
        }
    }

    // Get id and link of images
    public function getImagesAttribute()
    {
        $images = [];
        if ($this->getMedia('group_images')) {
            foreach ($this->getMedia('group_images') as $key => $media) {
                $images[$key] = ['id' => $media->id, 'url' => $media->getUrl(), 'order' => $media->order_column];
            }
        }
        return $images;
    }

    // Get total members count
    public function getTotalMembersAttribute()
    {
        return GroupUser::where('group_id', $this->id)->count();
    }
}


