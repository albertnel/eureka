<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question_code',
        'question',
        'marks',
        'marks_negative',
        'difficulty',
        'case_sensitive',
        'randomize_options',
        'num_options_to_display',
        'active'
    ];

    public function create($params, $library)
    {
        $question = $library->questions()->create($params);
        return $question;
    }

    public function libraries()
    {
    	return $this->belongsTo('App\Library');
    }

    public function setQuestion($question)
    {
    	$this->question = $question;
    }
}
