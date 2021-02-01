@extends('layouts.ise')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection

@section('alternate')
    <link href="{{ config('app.url') }}/{{ $article->alias }}" rel="canonical"/>

    @foreach($article->aliases as $alias)

        @if($alias->flag == 'en')
            <link href="https://www.superiorspanishschool.com{{ $alias->alias }}" hreflang="{{ $alias->flag }}"
                  rel="alternate"/>
        @elseif($alias->flag == 'de')
            <link href="https://www.spanischschule-ecuador.de{{ $alias->alias }}" hreflang="{{ $alias->flag }}"
                  rel="alternate"/>
        @elseif($alias->flag == 'ru')
            <link href="https://www.izuchatispanski.ru{{ $alias->alias }}" hreflang="{{ $alias->flag }}" rel="alternate/>
        @endif

            @endforeach

            @endsection


            @section('content')
                    <div class=" clearfix"></div>
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <main class="intro">
                                @section('content-interna')
                                    <h1>
                                        Pagina en construcion
                                    </h1>
                                @show
                            </main>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <div class="scrollspy-example dq-ise-scroll" data-offset="0" data-spy="scroll"
                                     data-target="#link-travel-different">
                                    <div id="travel-different">
                                        <h3>
                                            Inquire for more Information
                                        </h3>
                                        <form action="{{ route('informationform') }}" id="formInformation"
                                              method="POST">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                @include('form.title.radio')
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="name">
                                                    Name
                                                </label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="name">
                                                                <span class="input-group-addon glyphicon-user glyphicon"
                                                                      id="basic-addon1">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <input class="form-control" id="name" name="name" maxlength="30"
                                                           placeholder="* Your Name" required="" type="text"
                                                           value="{{ old('name') }}"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="email">
                                                    Email
                                                </label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="email">
                                                                <span class="input-group-addon glyphicon glyphicon-envelope"
                                                                      id="basic-addon2">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <input class="form-control" id="email" name="email" maxlength="100"
                                                           placeholder="* Email" required="" type="email"
                                                           value="{{ old('email') }}">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="subject">
                                                    Subject
                                                </label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="subject">
                                                                <span class="input-group-addon glyphicon glyphicon-paperclip"
                                                                      id="basic-addon3">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <input class="form-control" id="subject" maxlength="200"
                                                           name="subject" placeholder="* Subject" required=""
                                                           type="text" value="{{ old('subject') }}">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="message">
                                                    Subject
                                                </label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="message">
                                                                <span class="input-group-addon glyphicon glyphicon-comment"
                                                                      id="basic-addon4">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <textarea class="form-control max-width-textarea" maxlength="255"
                                                              id="message" name="message"
                                                              placeholder="* I'm interested in"
                                                              required="">{{ old('message') }}</textarea>
                                                </div>
                                            </div>
                                            <button class="g-recaptcha btn btn-primary w-100"
                                                    data-sitekey="{{ config('app.recaptcha.public_key') }}"
                                                    data-callback='onSubmit'
                                                    data-action='submit'>
                                                Send
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div>
                                <h3>
                                    Our Spanish Programs in Ecuador
                                </h3>
                                <ul>
                                    <li>
                                        <a href="/learn-spanish-quito.html">
                                                <span aria-hidden="true" class="glyphicon glyphicon-menu-right">
                                                </span>
                                            Quito
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/learn-spanish-otavalo.html">
                                                <span aria-hidden="true" class="glyphicon glyphicon-menu-right">
                                                </span>
                                            Otavalo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/learn-spanish-amazon-jungle.html">
                                                <span aria-hidden="true" class="glyphicon glyphicon-menu-right">
                                                </span>
                                            Amazon Jungle
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('learn-shuar-community') }}">
                                                <span aria-hidden="true" class="glyphicon glyphicon-menu-right">
                                                </span>
                                            Indigenous Communities
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/learn-spanish-galapagos-islands.html">
                                                <span aria-hidden="true" class="glyphicon glyphicon-menu-right">
                                                </span>
                                            Galapagos Islands
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/learn-spanish-travelling.html">
                                                <span aria-hidden="true" class="glyphicon glyphicon-menu-right">
                                                </span>
                                            Travelling Classroom
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @section('bookLessons')
                                <hr/>
                                <div>
                                    <h3>
                                        Book Spanish Lessons in Quito
                                    </h3>
                                    <p class="text-center" style="font-size: 17px;">
                                        ONE WEEK FROM US$139
                                    </p>
                                    <a class="btn btn-primary w-100" href="{{ route('booking') }}" role="button"
                                       title="Book now">
                                        <span aria-hidden="true" class="glyphicon glyphicon-shopping-cart">
                                        </span>
                                        BOOK NOW
                                    </a>
                                </div>
                            @show
                            <p>
                                <br/>
                                <strong>
                                    We Accept:
                                </strong>
                            </p>
                            <div class="row">
                                <div class="col">
                                    <div class="visa">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mastercard">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="westerunion">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="bancktransfer">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cash">
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="info-addres">
                                <h3>
                                    Address ISE
                                </h3>
                                <p>
                                    Guayaquil N9-77 y Oriente.
                                    <br/>
                                    Quito - Ecuador
                                    <br/>
                                    <strong>
                                        Mobile, WhatsApp, Viber, FaceTime:
                                    </strong>
                                    <span>
                                            +593 99 499 1790
                                        </span>
                                    <br/>
                                    <strong>
                                        International Phone:
                                    </strong>
                                    <span>
                                            +1 954 773 7300
                                        </span>
                                    <br/>
                                    <strong>
                                        Skype:
                                    </strong>
                                    <a href="skype:on-line.i.s.e.?call">
                                            <span>
                                                on-line.i.s.e.
                                            </span>
                                    </a>
                                    <br/>
                                    <strong>
                                        Email:
                                    </strong>
                                    <a href="mailto:info@superiorspanishschool.com">
                                            <span>
                                                info@superiorspanishschool.com
                                            </span>
                                    </a>
                                </p>
                            </div>
                            <hr/>
                            <div>
                                <h3>
                                    Follow Us
                                </h3>
                                <div class="row text-center" style="font-size: 55px;">
                                    <div class="col-6">
                                        <a href="https://www.facebook.com/institutosuperiordeespanol1/" target="_blank">
                                            <i class="demo-icon icon-facebook-official">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://www.tripadvisor.com/Attraction_Review-g294308-d10085877-Reviews-ISE_Instituto_Superior_de_Espanol-Quito_Pichincha_Province.html"
                                           target="_blank">
                                            <i class="demo-icon icon-tripadvisor">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center" style="font-size: 55px;">
                                    <div class="col-6 text-center">
                                        <a href="https://www.instagram.com/institutosuperiordeespanol/" target="_blank">
                                            <i class="demo-icon icon-instagram">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0;"/>
                            <div style="text-align: center;">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="modal fade" id="validateFomoMessage" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="alert" id="statusAlert" role="alert" style="margin-bottom: 0;">
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                    <span aria-hidden="true">
                                        ×
                                    </span>
                            </button>
                            <p id="statusAlertMessage">
                                ...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div aria-labelledby="gallery-label" class="modal fade bd-example-modal-lg" id="x-gallery-modal-img"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="gallery-label">
                            </h5>
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                    <span aria-hidden="true">
                                        ×
                                    </span>
                            </button>
                        </div>
                        <div class="modal-body text-center" id="modal-carousel-gallery">
                            <div class="spinner-border" role="status">
                                    <span class="sr-only">
                                        Loading...
                                    </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            @include('gallerySocial')
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('script')

    @if (config('app.recaptcha.public_key'))
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("formInformation").submit();
            }
        </script>
    @endif

    @if ($errors->any())
        <script defer="" src="{{ URL::asset('js/ancla.js') }}" type="text/javascript">
        </script>
    @endif


@endpush
