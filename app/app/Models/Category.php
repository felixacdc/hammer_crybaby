<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['description'];

    public $relations = [
        'locals'
    ];

    public function locals()
    {
        return $this->hasMany('App\Models\Local', 'id_category');
    }
}
