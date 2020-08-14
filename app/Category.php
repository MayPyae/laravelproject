<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];
     public function questions(){
        return $this->belongsToMany(Question::class,'questionscategories','categories_id','question-id');
    }
}
