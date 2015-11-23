<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
    	'name',
    	'start_date',
    	'start_time',
    	'end_date',
    	'end_time',
    	'time_limit',
    	'is_survey',
    	'password',
    	'info',
    	'default_allowed_attempts',
    	'feedback',
    	'feedback_time_limit',
    	'feedback_comments',
    	'randomize_question',
    	'force_complete',
    	'allow_navigation',
    	'allow_answer_editing',
    	'allow_logout',
    	'display_results',
    	'display_student_name',
    	'display_exam_name',
    	'display_exam_date',
    	'display_exam_time',
    	'display_marks_total',
    	'display_marks_per_library',
    	'display_marks_percentage',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'exam_categories', 'exam_id', 'category_id');
    }

    public function libraries()
    {
    	return $this->belongsToMany('App\Library', 'exam_libraries', 'exam_id', 'library_id');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Question', 'exam_questions', 'exam_id', 'question_id');
    }
}
