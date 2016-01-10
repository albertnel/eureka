<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function library()
    {
    	return $this->belongsTo('App\Library');
    }

    public function setQuestion($question)
    {
    	$this->question = $question;
    }
}
