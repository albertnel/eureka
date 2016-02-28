<?php

namespace App;

use App\Question;
use Illuminate\Database\Eloquent\Model;

class QuestionMcqAnswer extends Model
{
    public function create($params, $question)
    {
    }

    public function getQuestionData()
    {
    	return json_decode($this->question_data, true);
    }
}
