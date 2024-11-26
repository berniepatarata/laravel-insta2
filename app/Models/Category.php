<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     #To get the name of the category
     public function categoryPost()
     {
         return $this->hasMany(CategoryPost::class);
     }
}
