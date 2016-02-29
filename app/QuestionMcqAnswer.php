<?php

namespace App;

// use App\Question;
use Illuminate\Database\Eloquent\Model;

class QuestionMcqAnswer extends Model
{
    public function createAnswer($params, $question)
    {
    }

    public function getQuestionData()
    {
    	return json_decode($this->question_data, true);
    }

    public function question()
    {
        return $this->morphMany('App\Question', 'answer');
    }
}
