<?php

namespace App;

use App\Library;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'name',
    	'parent_id'
    ];

    /**
    * Relationships
    */
    public function libraries()
    {
    	return $this->belongsToMany('App\Library');
    }

    /**
    * Scope queries
    */
    public function scopeGetChildren()
    {

    }

    /**
    * Set attributes
    */

}
