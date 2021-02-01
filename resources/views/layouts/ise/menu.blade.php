<section class="menuResponsive container">
    <div class="row">
        <div class="col-6">
            <a href="{{ route('home') }}">
                <img alt="Instituto Superior de Español" src="{{ asset('images/logo.jpg') }}"/>
            </a>
        </div>
        <div class="col-6 text-right navbar-default navbar-light ">
            <div class="info">
                <ul class="text-right">
                    <li>
                        <a href="tel:+593994991790" target="_blank" title="Phone">
                            <span aria-hidden="true" class="glyphicon glyphicon-earphone">
                            </span>
                        </a>
                        <a href="https://wa.me/593994991790" target="_blank" title="WhatsApp">
                            <div class="icon icon-whatsapp">
                            </div>
                            <span>
                                +593 99 499 1790
                            </span>
                        </a>
                        <li>
                            <span aria-hidden="true" class="glyphicon glyphicon-user">
                            </span>
                            <a href="{{ route('contact') }}" id="contactUs">
                                <span>
                                    Contact Us
                                </span>
                            </a>
                        </li>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" id="menuPhone" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
        </div>
    </div>
</section>
<section class="top" id="top-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="logo col-md-2">
                <a href="{{ route('home') }}" title="{{ env('APP_NAME') }}">
                    <img alt="Instituto Superior de Español" src="{{ asset('images/logo.jpg') }}"/>
                </a>
            </div>
            <nav class="menu col-md-8" id="menuLP">
                <div class="menu-global">
                    <ul>
                        <li>
                            <a class="menuTitulo" href="{{ route('home') }}">
                                <span aria-hidden="true" class="glyphicon glyphicon-home font-size-16">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('item-2') }}">
                                <span>
                                    {{ __('breadcrumb.item-2') }}
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('item-2') }}">
                                                    <strong>
                                                        {{ __('breadcrumb.item-2') }}
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="divider" role="separator">
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-1') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-1') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-2') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-2') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-3') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-3') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-4') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-4') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-5') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-5') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-6') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-6') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-7') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-7') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-8') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-8') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-9') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-9') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-10') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-10') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-11') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-11') }}
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('item-2-111') }}">
                                                    <span>
                                                        {{ __('breadcrumb.item-2-111') }}
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('destinations') }}">
                                <span>
                                    Destinations
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('destinations') }}">
                                                    <strong>
                                                        Destinatios
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="divider" role="separator">
                                            </li>
                                            <li>
                                                <a href="{{ route('learn-quito') }}">
                                                    <span>
                                                        Learn Spanish with us in Quito
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('learn-otavalo') }}">
                                                    <span>
                                                        Learn Spanish with us in Otavalo
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('learn-amazon') }}">
                                                    <span>
                                                        Learn Spanish with us in the Amazon
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('learn-galapagos') }}">
                                                    <span>
                                                        Learn Spanish with us in the Galapagos Islands
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('learn-shuar-community') }}">
                                                    <span>
                                                        Learn Spanish with us in Indigenous Communities
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('learn-south-america') }}">
                                                    <span>
                                                        Packages - Spanish Combined Destinations
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('traveling-classroom') }}">
                                <span>
                                    Travelling Classroom
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('traveling-classroom') }}">
                                                    <strong>
                                                        Travelling Classroom
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="divider" role="separator">
                                            </li>
                                            <li>
                                                <a href="{{ route('andes-amazon-7') }}">
                                                    <span>
                                                        Andes / Amazon Jungle – 7 Days
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('andes-amazon-12') }}">
                                                    <span>
                                                        Andes / Amazon Jungle – 12 Days
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('walking-andes-12') }}">
                                                    <span>
                                                        Walking through the Andes – 12 Days
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('experience-ecuador-16') }}">
                                                    <span>
                                                        Experience Ecuador – 16 Days
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('travelling-explore') }}">
                                                    <span>
                                                        Exploring Ecuador – 19 Days
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('secret-evolution') }}">
                                                    <span>
                                                        The Secret of Evolution – 15 Days
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('volunteering') }}">
                                <span>
                                    Volunteering
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('volunteering') }}">
                                                    <strong>
                                                        Volunteering
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="divider" role="separator">
                                            </li>
                                            <li>
                                                <a href="{{ route('aplication-volunteer') }}">
                                                    <span>
                                                        Application
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('about-us') }}">
                                <span>
                                    About Us
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('about-us') }}">
                                                    <strong>
                                                        About Us
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="divider" role="separator">
                                            </li>
                                            <li>
                                                <a href="{{ route('welcome-ise') }}">
                                                    <span>
                                                        ISE The Instituto Superior de Español
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ourteam') }}">
                                                    <span>
                                                        Our Team
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ourfacilities') }}">
                                                    <span>
                                                        Our Facilities
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('work-ise') }}">
                                                    <span>
                                                        Work with ISE
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('students-reviews') }}">
                                                    <span>
                                                        Student Reviews
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('faqs') }}">
                                <span>
                                    FAQS
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('faqs') }}">
                                                    <strong>
                                                        FAQS
                                                    </strong>
                                                </a>
                                                <li class="divider" role="separator">
                                                </li>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('prices') }}">
                                <span>
                                    Prices
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('prices') }}">
                                                    <strong>
                                                        Prices
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="divider" role="separator">
                                            </li>
                                            <li>
                                                <a href="{{ route('price-quito-otavalo') }}">
                                                    <span>
                                                        Prices Quito & Otavalo Spanish schools
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('price-amazon') }}">
                                                    <span>
                                                        Prices Amazon Jungle Spanish programs
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('price-galapagos') }}">
                                                    <span>
                                                        Prices Galapagos Spanish programs
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('price-communities') }}">
                                                    <span>
                                                        Prices Indigenous Communities Spanish programs
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('price-travelling') }}">
                                                    <span>
                                                        Prices Travelling Classroom Spanish programs
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('price-packages') }}">
                                                    <span>
                                                        Prices Packages Combined Destinations
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('price-volunteer') }}">
                                                    <span>
                                                        Prices Volunteer Programs
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menuTitulo" href="{{ route('booking') }}">
                                <span>
                                    Booking
                                </span>
                            </a>
                            <ul class="subMenu">
                                <li>
                                    <div>
                                        <ul>
                                            <li>
                                                <a class="dq-submenu" href="{{ route('booking') }}">
                                                    <strong>
                                                        Booking
                                                    </strong>
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
            <div class="col-md-2 infoMenuConte">
                <div class="info">
                    <ul class="menuInfo">
                        <li>
                            <a href="tel:+593994991790" target="_blank" title="Phone">
                                <span aria-hidden="true" class="glyphicon glyphicon-earphone">
                                </span>
                            </a>
                            <a href="https://wa.me/593994991790" target="_blank" title="WhatsApp">
                                <div class="icon icon-whatsapp">
                                </div>
                                <span>
                                    +593 99 499 1790
                                </span>
                            </a>
                            <br/>
                            <br/>
                            <span aria-hidden="true" class="glyphicon glyphicon-user">
                            </span>
                            <a href="{{ route('contact') }}" id="contactUs">
                                <span>
                                    Contact Us
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
