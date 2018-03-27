<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="CIM Italian Style" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url($theme->slug.'/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url($theme->slug.'/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url($theme->slug.'/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url($theme->slug.'/img/favicon/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @yield('seo_social_stuff')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    {!! HTML::style($theme->slug.'/css/style.css') !!}
</head>

<body>
<nav id="side-menu">
    @include('themes.'.$theme->slug.'.partials.mobile-menu')
</nav>
<div id=site-content>

    <div class=fixed-nav>
        <div class=location>
            <div class=location-p>
                <a href="{{ url('contact') }}">
                    <p>where we are</p>
                </a>
            </div>
            @if(app()->getLocale() == 'en')
                <div class=location-icon> <a href="{{ url('contact') }}"> <i class="fas fa-map-marker-alt"></i> </a> </div>
            @else
                <div class=location-icon> <a href="{{ url('it/contatto') }}"> <i class="fas fa-map-marker-alt"></i> </a> </div>
            @endif
        </div>
        <div class=phone>
            <div class=phone-p>
                <a href="{{ url('contact') }}">
                    <p>contact</p>
                </a>
            </div>
            @if(app()->getLocale() == 'en')
                <div class=phone-icon> <a href="{{ url('contact') }}"> <i class="fas fa-phone"></i> </a> </div>
            @else
                <div class=phone-icon> <a href="{{ url('it/contatto') }}"> <i class="fas fa-phone"></i> </a> </div>
            @endif
        </div>
    </div>

    <div class="container-fluid fluid-nav">
        <div class=container>
            <i class="fas fa-bars" id=trigger></i>
            <nav class="navbar justify-content-end">
                <div id=logo>
                    <a href="{{ url('/') }}">{!! HTML::Image($theme->slug . '/img/CIM-logo.png', 'CIM Italian style') !!}</a>
                </div>
                @include('themes.'.$theme->slug.'.partials.nav')
            </nav>
        </div>
    </div>

    @yield('content')

    <div class="container-fluid large-border"></div>
    <div class="container-fluid footer-back">
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <footer>
                        <div class=container>
                            <div class=row>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 logo-social">
                                    <a href="{{ url('/') }}">{!! HTML::Image($theme->slug . '/img/footer-logo.png', 'cim italian style') !!}</a>
                                    <p class=social>
                                        <a href="https://www.facebook.com/CimItalianStyle/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/fabio-guerra-61933697/" target="_blank">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        {{--<a href=#>--}}
                                            {{--<i class="fab fa-instagram"></i>--}}
                                        {{--</a>--}}
                                        {{--<a href="">--}}
                                            {{--<i class="fab fa-pinterest-square"></i>--}}
                                        {{--</a>--}}
                                    </p>
                                </div>
                                <div class="col-lg-2 kolekcije2">
                                    <p>
                                        <a href=#>Collections</a>
                                    </p>
                                    @if(count($collections))
                                    <ul>
                                        @foreach($collections as $collection)
                                            <li>
                                                @if(app()->getLocale() == 'en')
                                                    <a href="{{ url('collections/'.$collection->slug) }}">{{ $collection->title }}</a>
                                                @else
                                                    <a href="{{ url('collezioni/'.$collection->slug) }}">{{ $collection->title }}</a>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 terms">
                                    <p>
                                        <a href=#>Our company</a>
                                    </p>
                                    <ul>
                                        @if(app()->getLocale() == 'en')
                                            {{--<li>--}}
                                                {{--<a href=#>Terms and conditions </a>--}}
                                            {{--</li>--}}
                                            <li>
                                                <a href="{{ url('en/corporate') }}">About us</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('en/contact') }}">Contact us</a>
                                            </li>
                                        @else
                                            {{--<li>--}}
                                                {{--<a href=#>Terms and conditions </a>--}}
                                            {{--</li>--}}
                                            <li>
                                                <a href="{{ url('it/azienda') }}">About us</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('it/contatto') }}">Contact us</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 kontakt">
                                    <p>
                                        <a href=#>C.I.M. ITALIAN STYLE S.R.L</a>
                                    </p>
                                    <ul class=address>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            @if(app()->getLocale() == 'en')
                                                <a href="{{ url('contact') }}" target="_blank">Via Sotto il Mur del Brolo 24, 31049 Valdobbiadene Treviso, Italy</a>
                                            @else
                                                <a href="{{ url('it/contatto') }}" target="_blank">Via Sotto il Mur del Brolo 24, 31049 Valdobbiadene Treviso, Italy</a>
                                            @endif
                                        </li>
                                        <li>
                                            <i class="fas fa-phone"></i>
                                            <a href="tel:+390423973283">tel. + 39 0423 973283 / 972659 -</a>
                                        </li>
                                        <li>
                                            <a href="tel:+3904231990665">fax +39 0423 1990665</a>
                                        </li>
                                        <li>
                                            <a href=#>P.I. e C.F. 04549940262 - REA 359106</a>
                                        </li>
                                        <li>
                                            <i class="far fa-envelope"></i>
                                            <a href="mailto:info@cim-italianstyle.com">e-mail info@cim-italianstyle.com </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js></script>
@yield('footer_scripts')
{!! HTML::script($theme->slug.'/js/app.bundle.js') !!}
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab10ca8f0f08e4b"></script>
</body>
</html>