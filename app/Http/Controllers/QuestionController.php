<?php

namespace App\Http\Controllers;

use App\Article;use App\Http\Requests\QuestionForm;
use App\Mail\Test;
use App\Mail\TestAdmin;
use App\Question;
use Illuminate\Http\Request;
use Mail;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $article = Article::where('alias', $request->path())->first();

        $questions = Question::all();
        return view('courses.test', compact('questions', 'article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionForm $request)
    {

        Mail::to(config('mail.from.address'), config('mail.from.name'))
            ->cc(config('mail.cc.address'), config('mail.cc.name'))
            ->send(new Test($request));

        Mail::to(config('mail.from.address'), config('mail.from.name'))
            ->cc(config('mail.cc.address'), config('mail.cc.name'))
            ->send(new TestAdmin($request));

        $request->session()->put('message', 'The Academic Department of the Instituto Superior de Español thanks you for filling our test online. We will check your answers and will send you a personal feedback about them and about your level of Spanish in the next 72 hours.');

        return redirect('/online-evaluation')->with('thanks', 'The Academic Department of the Instituto Superior de Español thanks you for filling our test online. We will check your answers and will send you a personal feedback about them and about your level of Spanish in the next 72 hours.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
