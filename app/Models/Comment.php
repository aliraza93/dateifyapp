<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'body', 'post_id', 'user_id', 'parent_comment_id',
    ];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }
    
    public function childrenComments()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }
}
