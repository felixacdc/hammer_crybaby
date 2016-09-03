<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locals';


    protected $fillable = ['name', 'phone','description','products', 'facebook', 'image'];


    public function setPathAttribute($path){
        if(!empty($path)){
                $this->attributes['image']=Carbon::now()->second.$path->getClientOriginalName();
                $name=Carbon::now()->second.$path->getClientOriginalName();
                \Storage::disk('local')->put($name, \File::get($path));
            }
    }


    public $relations = [
        'news'
    ];

    public function news()
    {
        return $this->hasMany('App\Models\NewClass', 'id_local');
    }
}
