<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table="roles";

    protected $fillable=[
        'name',
        'slug'
    ];

    public function permissions(){ // each role has many permission
        return $this->belongsToMany(Permission::class);
    }

    public function users(){ // each role has many permission
        return $this->belongsToMany(User::class);
    }

}
