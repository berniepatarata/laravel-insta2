<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    #To get the info of the ownwer of the comment
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}