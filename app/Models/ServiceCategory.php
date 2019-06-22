<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'category_name',
    ];

    public $timestamps = true;

    public function Services()
    {
       return $this->hasMany('App\Models\Service', 'category_id', 'id');
    }

}
