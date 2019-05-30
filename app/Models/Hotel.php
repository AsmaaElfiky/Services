<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name','type','plural','singular','trip_id','user_id'];


    public function trips()
    {
        return $this->belongsToMany(Trip::class);
    }
}
