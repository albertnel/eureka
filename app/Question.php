<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function libraries()
    {
    	return $this->belongsTo('App\Library');
    }

    public function returnAllAries()
    {
        return false;
    }

    public function setQuestion($question)
    {
    	$this->question = $question;
    }
}
