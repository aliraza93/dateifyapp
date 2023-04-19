<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded  = [];

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
