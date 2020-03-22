<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name','slug'];
    //protected $guarded = [];

    //buat ngubah url akses http://127.0.0.1:8000/api/question/10
    //jadi http://127.0.0.1:8000/api/question/10
    public function getRouteKeyName(){
        return 'slug';
    }
}
