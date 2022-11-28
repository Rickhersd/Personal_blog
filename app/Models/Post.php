<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //One to Many Inverse Relationship

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //One-To-Many Relationship

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //polymorphic one-to-many relationship

    public function image(){
        return $this->morphOne(image::class, 'imageable');
    }
}
