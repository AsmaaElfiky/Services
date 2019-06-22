<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'image', 'order','category_id',
    ];

    public function ServiceCategories()
    {
       return $this->belongsTo('App\Models\ServiceCategory', 'category_id', 'id');
    }
}
