<?php

namespace App\Http\Controllers;

use App\Alias;
use App\Article;
use App\Commentary;
use App\Gallery;
use App\Http\Requests\InformationFormRequest;
use App\Http\Requests\VolunteerForm;
use App\InformationForm;
use App\Mail\Information;
use App\Mail\InformationAdmin;
use File;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Session;

class ArticleController extends Controller
{
    public function viewArticle(Request $request)
    {
        $article = Article::where('alias', $request->path())->first();
        if ($request->path() == '/') {
            $commentaries = Commentary::latest()->take(3)->get();
            return view('index', ['article' => $article, 'commentaries' => $commentaries]);
        }
        return view($article->view, ['article' => $article]);
    }

    public function hrflag(Request $request)
    {

        $alias             = new Alias();
        $alias->alias      = $request->alias;
        $alias->flag       = $request->flag;
        $alias->article_id = $request->article;
        $alias->save();

        //dd($alias);
        return back()->withInput();

    }

    public function imagesGallery(Request $request)
    {
        $id = $request->gallery;

        $galery = Gallery::find($id);

        $carousel = '<div id="galery-modal-img" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">';
        $images = '<div class="carousel-inner" role="listbox">';
        $count  = 0;

        foreach ($galery->images() as $img) {
            if ($count == 0) {
                $carousel .= '<li data-target="#galery-modal-img" data-slide-to="' . $count . '" class="active"></li>';
                $images .= '<div class="carousel-item active">
                    <img src="' . asset($galery->ruta . '/' . $img) . '" alt="' . $galery->name . '" class="d-block w-100">
                </div>';
            } else {
                $carousel .= '<li data-target="#galery-modal-img" data-slide-to="' . $count . '" ></li>';
                $images .= '<div class="carousel-item">
                    <img src="' . asset($galery->ruta . '/' . $img) . '" alt="' . $galery->name . '" class="d-block w-100">
                </div>';
            }
            $count++;
        }
        $carousel .= '</ol>';
        $images .= '</div>
                    <a class="carousel-control-prev" href="#galery-modal-img" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#galery-modal-img" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>';
        $carousel .= $images;

        return json_encode(array("images" => $carousel));

    }

    public function volunteer(VolunteerForm $request)
    {
        Mail::send('emails.volunteer', $request->all(), function ($msj) use ($request) {
            $msj->subject('volunteer');
            $msj->to(config('mail.from.address'));
            $msj->replyTo($request->email, $name = $request->firtsName);
        });
        Mail::send('emails.custom', ['tom' => 'Instituto Superior de Español thanks you for your interest in our volunteer / internship programs. We will send you our answers in the next 48 hours.'], function ($msj) use ($request) {
            $msj->subject('Thank You for contacting the Instituto Superior de Español ISE');
            $msj->to($request->input('email'));
        });

        $request->session()->put('message', 'Instituto Superior de Español thanks you for your interest in our volunteer / internship programs. We will send you our answers in the next 48 hours.');

        return redirect('/thanks-volunteer')->with('thanks', 'Instituto Superior de Español thanks you for your interest in our volunteer / internship programs. We will send you our answers in the next 48 hours.');
    }

    public function information(InformationFormRequest $request)
    {
        $information = new InformationForm;

        $information->name    = $request->name . ' ' . $request->name;
        $information->subject = $request->subject;
        $information->email   = $request->email;
        $information->message = $request->message;

        $information->save();

        Mail::to($request->email)->send(new Information());

        Mail::to(config('mail.from.address'), config('mail.from.name'))
            ->cc(config('mail.cc.address'), config('mail.cc.name'))->send(new InformationAdmin($request));

        $message = 'We thank you very much for contacting the Instituto Superior de Español. We are glad to answer your e-mail and you will be receiving a response in the next 48 hours.';

        Session::flash('message', $message);

        return Redirect::to('/thanks-information')->with('thanks', $message);

    }

    /**
     * Obtiene todos los comentarios que se encuentran
     * en la base de datos
     */
    public function getPageComments(Request $request)
    {
        $article  = Article::where('alias', 'learn-spanish-what-students-say.html')->first();
        $comments = Commentary::orderBy('start_date', 'desc')->paginate();
        return view($article->view, compact('article', 'comments'));
    }

}
