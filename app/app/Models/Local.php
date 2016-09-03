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
        $this->hasMany(New::class, 'id_local');
    }
}
