<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'user_id', 'create_at' 
    ];

    // U have to define the forign key
    // public function myUserRelation()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }


    //U dont have to define the forign key as framwork will take the function name and uppend '_id' to generate the forgin key
    public function user()
    {
        return $this->belongsTo(User::class);
    }



}


