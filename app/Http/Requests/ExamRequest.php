<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ExamRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|min:3|required',
            'start_date' => 'date|date_format:"Y-m-d"|required',
            'end_date' => 'date|date_format:"Y-m-d"|required',
            'time_limit' => 'integer',
            'is_survey' => 'boolean',
            'password' => 'string',
            'info' => 'string',
            'default_allowed_attempts' => 'integer',
            'feedback' => 'boolean',
            'feedback_time_limit' => 'integer',
            'feedback_comments' => 'boolean',
            'randomize_questions' => 'boolean',
            'force_complete' => 'boolean',
            'allow_navigation' => 'boolean',
            'allow_answer_editing' => 'boolean',
            'allow_logout' => 'boolean',
            'display_results' => 'boolean',
            'display_student_name' => 'boolean',
            'display_exam_name' => 'boolean',
            'display_exam_date' => 'boolean',
            'display_exam_time' => 'boolean',
            'display_marks_total' => 'boolean',
            'display_marks_per_library' => 'boolean',
            'display_marks_percentage' => 'boolean'
        ];
    }
}
