<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewClass extends Model
{
    protected $table = 'news';

    protected $fillable = ["description", "image", "date", "id_local"];

    public $relations = [
        'local'
    ];

    public function local()
    {
        return $this->belongsTo('App\Models\Local', 'id_local');
    }
}
