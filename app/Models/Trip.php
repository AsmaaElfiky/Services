<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['name','desc','date','cat_id','user_id'];


    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }
}
