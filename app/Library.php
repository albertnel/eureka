<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = ['name', 'description'];

    public function questions()
    {
    	return $this->hasMany('App\Question');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'library_categories', 'library_id', 'category_id');
    }
}
