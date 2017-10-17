<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dimsav\Translatable\Translatable;

class Post extends Model
{
    //

    use Translatable;

    use SoftDeletes;

    public $translatedAttributes = ['title','content','category_id','featuredImage','language','slug','blog'];


    protected $fillable = [

        'title','content','category_id','featuredImage','language','slug','blog','user_id'
    ];

    protected $dates = ['deleted_at'];


    public function getFeaturedImageAttribute($featuredImage){

        return asset($featuredImage);
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function tags (){
        return $this->belongsToMany('App\Tag');
    }

    public function user (){
        return $this->belongsTo('App\User');
    }


}
