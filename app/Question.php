<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable =['title','description','user_id'];
    public function user(){
        return $this->belongsTo(user::class);
    }
      public function answers(){
        return $this->hasMany(Answer::class);
    }
     public function categories(){
        return $this->belongsToMany(Category::class,'questionscategories','question-id','categories_id')->withTimestamps();
    }
}
