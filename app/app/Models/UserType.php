<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_types';

    protected $fillable = ['type'];

    public $relations = ['users'];

    public function users()
    {
        return $this->hasMany('App\User', 'id_user_type');
    }

}
