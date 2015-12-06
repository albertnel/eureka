<?php

namespace App\Http\Controllers;

use App\Category;
use App\Exam;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use Request;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::all();

        return view('admin/exams/index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin/exams/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamRequest $request)
    {
        // dd($request->all());
        $exam = Exam::create($request->all());

        foreach ($request->all()['categories-select'] as $key => $value) {
            $category = Category::findOrFail($value);
            $exam->categories()->attach($category);
        }

        session()->flash('flash_message', 'Exam "' . $exam->name . '" has been created.');

        return redirect('admin/exams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exam  = Exam::findOrFail($id);
        $categories = Category::all();
        $selected_categories = $exam->categories;

        return view('admin/exams/edit', compact('exam', 'categories', 'selected_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request -- Not applicable anymore
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExamRequest $request, $id)
    {
        $exam = Exam::findOrFail($id);
        $exam->update($request->all());

        foreach ($request->all()['categories-select'] as $key => $value) {
            $category = Category::findOrFail($value);

            $found = false;
            foreach ($exam->categories as $exam_category) {
                if ($exam_category->id == $category->id) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $exam->categories()->attach($category);
            }
        }

        return redirect('admin/exams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
