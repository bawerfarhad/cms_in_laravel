<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{



    use HasFactory;

    protected $table="posts";
    protected $fillable=[
        'title',
        'user_id',
        'post_image',
        'body'
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }

        public function getPostImageAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }

        return asset('storage/'.$value);
    }
}
