<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    use HasFactory;
    protected $guarded  = [];
    
    
    public function groups()
    {
        return $this->belongsTo(Group::class);
    }

    public function group_users()
    {
        return $this->belongsTo(User::class);
    }

}
