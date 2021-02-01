<?php

namespace App\Http\Controllers;

use App\Article;
use App\Commentary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentaryController extends Controller
{
    private $article;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);

        $this->article = Article::where('alias', 'learn-spanish-what-students-say.html')->first();
    }

    /**
     *
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $comentario = new Commentary();

        $comentario->name        = trim($request->name);
        $comentario->nationality = $request->nacionality;

        $comentario->start_date  = date("Y-m-d", strtotime($request->from));
        $comentario->finish_date = date("Y-m-d", strtotime($request->to));

        $programs = '';

        if (isset($request->program1) && $request->program1 == '1') {
            $programs = $programs . 'Quito ';
        }

        if (isset($request->program2) && $request->program2 == '1') {
            $programs = $programs . '| Otavalo ';
        }

        if (isset($request->program3) && $request->program3 == '1') {
            $programs = $programs . '| Amazon Jungle ';
        }

        if (isset($request->program4) && $request->program4 == '1') {
            $programs = $programs . '| Indigenous Community ';
        }

        if (isset($request->program5) && $request->program5 == '1') {
            $programs = $programs . '| Galapagos Islands ';
        }

        if (isset($request->program6) && $request->program6 == '1') {
            $programs = $programs . '| Travelling Classroom';
        }

        $comentario->program = trim(trim($programs), '|');

        if ($request->photo) {

            $path = $request->file('photo')->store('images/about-us/students');

            $comentario->image = 'storage/' . $path;

        }

        $comentario->commentary = trim($request->comment);

        $comentario->save();

        return redirect()->route('commentaries.create');

    }

    public function show(Commentary $commentary)
    {
        $article = $this->article;
        return view('commentaries.show')->with(compact('commentary', 'article'));
    }

    public function index()
    {
        $comments = Commentary::orderBy('start_date', 'desc')->paginate();
        $article  = $this->article;
        return view('commentaries.index', compact('article', 'comments'));
    }

    public function create()
    {
        $article = $this->article;
        return view('commentaries.create')->with(compact('article'));
    }

    public function edit(Commentary $commentary)
    {
        $article = $this->article;
        return view('commentaries.edit')->with(compact('article', 'commentary'));
    }

    public function update(Request $request, Commentary $commentary)
    {
        //dd($request->all());
        $commentary->name        = trim($request->name);
        $commentary->nationality = $request->nacionality;

        if (!is_null($request->from)) {

            $commentary->start_date = date("Y-m-d", strtotime($request->from));
        }
        if (!is_null($request->to)) {

            $commentary->finish_date = date("Y-m-d", strtotime($request->to));
        }

        if (isset($request->program1) || isset($request->program2) || isset($request->program3) || isset($request->program4) || isset($request->program5)) {
            $programs = '';

            if (isset($request->program1) && $request->program1 == '1') {
                $programs = $programs . 'Quito ';
            }

            if (isset($request->program2) && $request->program2 == '1') {
                $programs = $programs . '| Otavalo ';
            }

            if (isset($request->program3) && $request->program3 == '1') {
                $programs = $programs . '| Amazon Jungle ';
            }

            if (isset($request->program4) && $request->program4 == '1') {
                $programs = $programs . '| Indigenous Community ';
            }

            if (isset($request->program5) && $request->program5 == '1') {
                $programs = $programs . '| Galapagos Islands ';
            }

            if (isset($request->program6) && $request->program6 == '1') {
                $programs = $programs . '| Travelling Classroom';
            }
            $commentary->program = trim(trim($programs), '|');
        }

        if (isset($request->photo) && !is_null($request->photo)) {

            Storage::delete(str_replace('storage/', '', $commentary->image));

            $path = $request->file('photo')->store('images/about-us/students');

            $commentary->image = 'storage/' . $path;

        }

        $commentary->commentary = trim($request->comment);

        $commentary->save();

        return redirect()->route('commentaries.show', $commentary);
    }
}
