<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function setImageAttribute($path){
        if(!empty($path)){
            $this->attributes['image']=Carbon::now()->second.$path->getClientOriginalName();
            $name=Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }
}
