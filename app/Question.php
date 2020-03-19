<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;
use App\Category;

class Question extends Model
{
    //get data siapa yang buat question nya dari table question
    public function user(){
    	return $this->belongsTo(User);
    }

    //get data replies yang di komentarin di setiap question dari table question
    public function replies(){
    	return $this->hasMany(Reply);
    }

    //get data jenis category di setiap question dari table question
    public function category(){
    	return $this->belongsTo(Category);
    }
}
