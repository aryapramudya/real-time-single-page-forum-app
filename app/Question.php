<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;
use App\Category;

class Question extends Model
{
    //buat ngubah url akses http://127.0.0.1:8000/api/question/10
    //jadi http://127.0.0.1:8000/api/question/10
    public function getRouteKeyName(){
        return 'slug';
    }

    //protected $fillable = ['title','slug','body','category_id','user_id'];
    protected $guarded = [];

    //get data siapa yang buat question nya dari table question
    public function user(){
    	return $this->belongsTo(User::class);
    }

    //get data replies yang di komentarin di setiap question dari table question
    public function replies(){
    	return $this->hasMany(Reply::class);
    }

    //get data jenis category di setiap question dari table question
    public function category(){
    	return $this->belongsTo(Category::class);
    }

    //get path ketika akses slug tertentu
    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }
}
