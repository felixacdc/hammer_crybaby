<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['description','image'];

        public function setImageAttribute($path){
        if(!empty($path)){
                $this->attributes['image']=Carbon::now()->second.$path->getClientOriginalName();
                $name=Carbon::now()->second.$path->getClientOriginalName();
                \Storage::disk('local')->put($name, \File::get($path));
            }
    }

    
}
