<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    #a post belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    #To get the categories under a post
    public function categoryPost()
    {
        return $this->hasMany(CategoryPost::class);
    }

    #To get all the comments of a post
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    #To get the likes of a post
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    #Returns True if the auth user already liked the post.
    public function isLiked(){
        return $this->likes()->where('user_id', Auth::user()->id)->exists();
    }
}