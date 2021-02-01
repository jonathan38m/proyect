<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    @section('alternate')
        <link rel="canonical" href="{{ config('app.url') }}">
        <link rel="alternate" href="https://www.superiorspanishschool.com" hreflang="en">
        <link rel="alternate" href="https://www.spanischschule-ecuador.de" hreflang="de">
        <link rel="alternate" href="https://www.zuchatispanski.ru" hreflang="ru">
    @show

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title') Learn to Speak Spanish in Ecuador @show</title>
    <meta name="description" content="@section('description') @show">
    <meta name="keywords" content="@section('keywords') @show">

    <META NAME="rating" CONTENT="General">
    <META NAME="copyright" content="Instituto Superior de Español"/>
    <META NAME="language" CONTENT="english, EN">
    <META NAME="distribution" content="global"/>
    <META NAME="resource-type" content="document"/>
    <META NAME="robots" CONTENT="INDEX,FOLLOW">
    <META NAME="revisit-after" CONTENT="7 Days">
    <META NAME="email" CONTENT="info@superiorspanishschool.com">
    <META NAME="copyright" CONTENT="ISE">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <style type="text/css">
        .clearfix:before,
        .clearfix:after{
          display: table;
          content: " ";
        }
        .clearfix:after{
          clear: both;
        }
        #kushkiPaymentBox .row{
            margin-right: -15px;
            margin-left: -15px;
        }
        #kushkiPaymentBox .col-xs-12,
        #kushkiPaymentBox .col-xs-6,
        #kushkiPaymentBox .col-xs-4,
        #kushkiPaymentBox .col-xs-3{
          float: left;
          display: block;
        }
        #kushkiPaymentBox .input-group-addon{
            background: #fcfcfc;
            color: #888;
        }
        #kushkiPaymentBox
        {
            padding: 15px 5px;
            /* border: 1px solid #eee; */
            background: #f5f5f5;
            border-radius: 5px;
            box-shadow: 1px 1px 2px rgba(0,0,0,.2);
            display: none !important;
        }
        #bookingForm{
            position: relative;
            display: block;
        }
        #kushkiPaymentBoxAreaControllerWrapper{
            position: relative;
            display: block;
            width: 100%;
            min-height: 200px;
        }
        #kushkiPaymentBoxAreaControllerWrapper .paymentMask{
            position: absolute;
            top:0; left:0; right: 0; bottom: 0;
            z-index: 10;
            padding-top: 80px;
            background: rgba(0,0,0,.05);
            border-radius: 6px;
        }
        #kushkiPaymentBoxAreaControllerWrapper.initialized .paymentMask{
            display: none;
        }
        #kushkiPaymentBoxAreaController{
            position: relative;
            display: block;
            width: 100%;
        }

    </style>

    @section('scriptBefore')

    @show



    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-56QB23B');</script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js" async>
    </script>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56QB23B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <section class="menuResponsive container">
        <div class="row"><div class="col-6">
                <a href="/">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Instituto Superior de Español" />
                </a>
            </div>
            <div class="col-6 text-right navbar-default navbar-light ">
                <div class="info">
                    <ul class="text-right">
                        <li>
                            <a title="Phone" href="tel:+593994991790" target="_blank">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            </a>
                            <a title="WhatsApp" href="https://wa.me/593994991790" target="_blank">
                                <div class="icon icon-whatsapp" ></div>
                                <span>+593 99 499 1790</span>
                            </a
                        </li>
                        <li>
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <a href="{{ route('contact') }}" id="contactUs" ><span>Contact Us</span></a>
                        </li>
                    </ul>
                </div>




                <button class="navbar-toggler" type="button" id="menuPhone">
                  <span class="navbar-toggler-icon"></span>
                </button>






            </div>
        </div>
    </section>
    <section class="top" id="top-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="logo col-md-2">
                    <a href="{{ route("home") }}" title="{{ config('app.name') }}">
                        <img src="{{ asset('images/logo.jpg') }}"  alt="Instituto Superior de Español" />
                    </a>
                </div>
                <nav class="menu col-md-8" id="menuLP">
                    <div class="menu-global">
                        <ul>
                            <li @section('index-1') class="" @show >
                                <a href="{{ route("home") }}" class="menuTitulo">
                                    <span class="glyphicon glyphicon-home font-size-16" aria-hidden="true"></span>
                                </a>
                            </li><li @section('index-2') class="" @show>
                                <a class="menuTitulo" href="{{ route("item-2") }}">
                                    <span>{{ __('breadcrumb.item-2') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul >
                                                <li>
                                                    <a href="{{ route("item-2") }}" class="dq-submenu">
                                                        <strong>{{ __('breadcrumb.item-2') }}</strong>
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"> </li>
                                                <li>

                                                    <a href="{{ route("item-2-1") }}">
                                                        <span>{{ __('breadcrumb.item-2-1') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-2") }}" >
                                                        <span>{{ __('breadcrumb.item-2-2') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-3") }}">
                                                        <span>{{ __('breadcrumb.item-2-3') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-4") }}">
                                                        <span>{{ __('breadcrumb.item-2-4') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-5") }}">
                                                        <span>{{ __('breadcrumb.item-2-5') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-6") }}">
                                                        <span>{{ __('breadcrumb.item-2-6') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-7") }}">
                                                        <span>{{ __('breadcrumb.item-2-7') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-8") }}">
                                                        <span>{{ __('breadcrumb.item-2-8') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-9") }}">
                                                        <span>{{ __('breadcrumb.item-2-9') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-10") }}">
                                                        <span>{{ __('breadcrumb.item-2-10') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("item-2-11") }}">
                                                        <span>{{ __('breadcrumb.item-2-11') }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        <div>
                                    </li>
                                </ul>
                            </li><li @section('index-3') class="" @show>
                                <a href="{{ route("destinations") }}" class="menuTitulo">
                                    <span>Destinations</span>
                                </a>

                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul>
                                                <li>
                                                    <a href="{{ route("destinations") }}" class="dq-submenu" >
                                                        <strong>Destinatios</strong>
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"> </li>
                                                <li>
                                                    <a href="{{ route("learn-quito") }}">
                                                        <span>Learn Spanish with us in Quito</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("learn-otavalo") }}">
                                                        <span>Learn Spanish with us in Otavalo</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("learn-amazon") }}">
                                                        <span>Learn Spanish with us in the Amazon</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("learn-galapagos") }}">
                                                        <span>Learn Spanish with us in the Galapagos Islands</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("learn-shuar-community") }}">
                                                        <span>Learn Spanish with us in Indigenous Communities</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("learn-south-america") }}">
                                                        <span>Packages - Spanish Combined Destinations</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        <div>
                                    </li>
                                </ul>
                            </li><li @section('index-4') class="" @show>
                                <a href="{{ route("traveling-classroom") }}" class="menuTitulo">
                                    <span>Travelling Classroom</span>
                                </a>
                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul>
                                                <li>
                                                    <a href="{{ route("traveling-classroom") }}" class="dq-submenu">
                                                        <strong>Travelling Classroom</strong>
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"> </li>
                                                <li>
                                                    <a href="{{ route("andes-amazon-7") }}">
                                                        <span>Andes / Amazon Jungle – 7 Days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("andes-amazon-12") }}">
                                                        <span>Andes / Amazon Jungle – 12 Days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("walking-andes-12") }}">
                                                        <span>Walking through the Andes – 12 Days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("experience-ecuador-16") }}">
                                                        <span>Experience Ecuador – 16 Days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("travelling-explore") }}">
                                                        <span>Exploring Ecuador – 19 Days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("secret-evolution") }}">
                                                        <span>The Secret of Evolution – 15 Days</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        <div>
                                    </li>
                                </ul>
                            </li><li @section('index-5') class="" @show>
                                <a class="menuTitulo" href="{{ route("volunteering") }}" >
                                    <span>Volunteering</span>
                                </a>
                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul>
                                                <li>
                                                        <a href="{{ route("volunteering") }}" class="dq-submenu">
                                                        <strong>Volunteering</strong>
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"> </li>
                                                <li>
	                                                    <a href="{{ route("aplication-volunteer") }}">
                                                        <span>Application</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        <div>
                                    </li>
                                </ul>
                            </li><li @section('index-6') class="" @show>
                                <a href="{{ route("about-us") }}" class="menuTitulo">
                                    <span>About Us</span>
                                </a>
                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul>
                                                <li>
                                                    <a href="{{ route("about-us") }}" class="dq-submenu">
                                                        <strong>About Us</strong>
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"> </li>
                                                <li>
                                                    <a href="{{ route("welcome-ise") }}">
                                                        <span>ISE The Instituto Superior de Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("ourteam") }}">
                                                        <span>Our Team</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("ourfacilities") }}">
                                                        <span>Our Facilities</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("work-ise") }}">
                                                        <span>Work with ISE</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("students-reviews") }}">
                                                        <span>Student Reviews</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        <div>
                                    </li>
                                </ul>
                            </li><li @section('index-7') class="" @show>
                                <a href="{{ route("faqs") }}" class="menuTitulo">
                                    <span>FAQS</span>
                                </a>
                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul>
                                                <li>
                                                    <a href="{{ route("faqs") }}" class="dq-submenu">
                                                        <strong>FAQS</strong>
                                                    </a>
                                                    <li role="separator" class="divider"> </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </li><li @section('index-8') class="" @show>
                                <a class="menuTitulo" href="{{ route("prices") }}" >
                                    <span>Prices</span>
                                </a>
                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul>
                                                <li>
                                                    <a href="{{ route("prices") }}" class="dq-submenu">
                                                        <strong>Prices</strong>
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"> </li>
                                                <li>
                                                    <a href="{{ route("price-quito-otavalo") }}">
                                                        <span>Prices Quito & Otavalo Spanish schools</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("price-amazon") }}">
                                                        <span>Prices Amazon Jungle Spanish programs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("price-galapagos") }}">
                                                        <span>Prices Galapagos Spanish programs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("price-communities") }}">
                                                        <span>Prices Indigenous Communities Spanish programs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("price-travelling") }}">
                                                        <span>Prices Travelling Classroom Spanish programs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("price-packages") }}">
                                                        <span>Prices Packages Combined Destinations</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route("price-volunteer") }}">
                                                        <span>Prices Volunteer Programs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        <div>
                                    </li>
                                </ul>
                            </li><li @section('index-9') class="" @show>
                                <a class="menuTitulo" href="{{ route("booking") }}" >
                                    <span>Booking</span>
                                </a>
                                <ul class="subMenu">
                                    <li>
                                        <div>
                                            <ul>
                                                <li>
                                                    <a href="{{ route("booking") }}" class="dq-submenu">
                                                        <strong>Booking</strong>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
                <div class="col-md-2 infoMenuConte" >
                    <div class="info">
                        <ul class="menuInfo">
                            <li>
                                <a title="Phone" href="tel:+593994991790" target="_blank">
                                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                </a>
                                <a title="WhatsApp" href="https://wa.me/593994991790" target="_blank">
                                    <div class="icon icon-whatsapp" ></div>
                                    <span>+593 99 499 1790</span>
                                </a>
                                </br></br>
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <a href="{{ route('contact') }}" id="contactUs" ><span>Contact Us</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>






    <div id="app">
        @section('content')


        <div class="container">
            <h1 class="text-center">Pagina en contruccion</h1>
        </div>



        @show
    </div>











<script type="text/javascript">

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-98833859-1');


    function addLink() {
        var body_element = document.getElementsByTagName('body')[0];
        var selection;
        selection = window.getSelection();
        var pagelink = "<br /><br /><small>Copyright © Instituto Superior de Español. 2019. All rights reserved. This content has been published by the INSTITUTO SUPERIOR DE ESPAÑOL. It is strictly forbidden to copy, reproduce, distribute, publish or modify any material or text included in the websites of the Instituto Superior de Español or in any support derived from it without the prior express written consent of the Instituto Superior de Español. If you want to use any of the text or content please contact us first for permission to quote the source with the link. <a href='"+document.location.href+"'>www.superiorspanishschool.com</a></small>";
        var copytext = selection + pagelink;
        var newdiv = document.createElement('div');
        newdiv.style.position='absolute';
        newdiv.style.left='-99999px';
        body_element.appendChild(newdiv);
        newdiv.innerHTML = copytext;
        selection.selectAllChildren(newdiv);
        window.setTimeout(function() {
        body_element.removeChild(newdiv);
        },0);
    }
    document.oncopy = addLink;
                    
</script>

@section('script')

@show


@if ($errors->any())
    


    <div class="modal fade" tabindex="-1" role="dialog"  id="errors-popup">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Alerts
            </div>
            <div class="modal-body">
            
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
      </div>
    </div>



@endif



</body>
</html>
