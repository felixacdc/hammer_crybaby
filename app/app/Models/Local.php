<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locals';

    protected $fillable = ['name', 'phone', 'facebook', 'image'];

    public $relations = [
        'news'
    ];

    public function news()
    {
        return $this->hasMany('App\Models\New', 'id_local');
    }
}
