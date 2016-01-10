<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionMcqAnswer extends Model
{
    public function getQuestionData()
    {
    	return json_decode($this->question_data, true);
    }
}
