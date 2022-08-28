<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table='permissions';
    protected $fillable=[
        'name',
        'slug'
    ];

    public function roles(){ // each role has many permission
        return $this->belongsToMany(Role::class);
    }

    public function users(){ // each role has many permission
        return $this->belongsToMany(User::class);
    }

}
