<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionMtfAnswer extends Model
{
    public function getQuestionData()
    {
        return json_decode($this->question_data, true);
    }

    public function question()
    {
        return $this->morphMany('App\Question', 'answer');
    }
}
