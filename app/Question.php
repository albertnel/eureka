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
        'active',
        'answer_id',
        'answer_type'
    ];

    public function createQuestion($params, $library)
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

    public function answer()
    {
        return $this->morphTo();
    }
}
