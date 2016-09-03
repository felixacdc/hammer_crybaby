<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $table = 'news';

    protected $fillable = ["description","image","id_local"];

    public $relations = [
        'local'
    ];

    public function local()
    {
        $this->belongsTo(Local::class, 'id_local');
    }
}
