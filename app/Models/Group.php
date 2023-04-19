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

    public function group_users()
    {
        return $this->hasMany(GroupUser::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('group_avatar')
            ->width(400)
            ->height(400)
            ->nonOptimized()
            ->performOnCollections('group_images');
    }
}


