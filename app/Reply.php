<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\User;
use App\Like;

class Reply extends Model
{
    //get data relasi reply ke question yang mana dari table reply
    public function question(){
    	return $this->belongsTo(Question);
    }

    //get data siapa yang buat reply nya dari table reply
    public function user(){
    	return $this->belongsTo(User);
    }

    //get data daftar like berdasarkan reply nya dari table reply
    public function like(){
    	return $this->hasMany(Like);
    }
} 