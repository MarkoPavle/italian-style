@extends('themes.'.$theme->slug.'.index')

@section('title')
    Contact - CIM Italian Style
@endsection

@section('description')
    {!! $settings->desc !!}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('seo_social_stuff')
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="CIM Italian Style">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ url($theme->slug.'/img/fb.jpg') }}">
    @if(app()->getLocale() == 'en')
        <meta property="og:title" content="Cim offers services. It works out the sector of furniture for the house, offices and communities, it assists its customers step by step..." />
    @else
        <meta property="og:title" content="Il CIM offre servizi. Opera nel settore del mobile per la casa, per ufficio e per la comunità, è in grado di seguire il cliente passo per passo..." />
    @endif
    <meta property="og:description" content="{{ \App\Helper::removePTag($settings->footer) }}" />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="img-fluid desktop-image" src="{{ url('uploads/hero/hero-pic-contactus.jpg') }}" alt="contact">
            <div class=collections-header>
                <h5>contact</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid map">
            <div class=row>
                <div class="col-md-12 map-location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.8050203541766!2d11.966812715984824!3d45.895212579108396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47791ff2c5f4b819%3A0xf9680551efccc8aa!2zVmlhIFNvdHRvIGlsIE11ciBkaSBCcm9sbywgMjQsIDMxMDQ5IFZhbGRvYmJpYWRlbmUgVFYsINCY0YLQsNC70LjRmNCw!5e0!3m2!1ssr!2srs!4v1518185851564" width=100% height=480 frameborder=0 style=border:0 allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    {!! Form::open(['action' => ['PagesController@sendForm'], 'method' => 'POST', 'id' => 'forma']) !!}
        <div class=section>
            <div class=container>
                <div class="row contact-grid">
                    <div class=contact-us>
                        <div class=contact-us-heading>
                            <h5>contact us</h5>
                        </div>
                        <div class=form-group>
                            <label for=exampleInputEmail1>name <span>*</span></label>
                            <input type="text" name="name" class=form-control id=exampleInputName1>
                            <label for=exampleInputEmail1>email <span>*</span></label>
                            <input type=email name="email" class=form-control id=exampleInputEmail1>
                            <label for=exampleInputEmail1>phone <span>*</span></label>
                            <input type=phone name="phone" class=form-control id=exampleInputPhone1> </div>
                        <div class=contact-us-btn>
                            <a href=# class="btn submit">submit form <div class=strelica> </div> </a>
                        </div>
                    </div>
                    <div class=message-us>
                        <label for=exampleTextarea>message <span>*</span></label>
                        <textarea class=form-control name="message" id=exampleTextarea rows=3></textarea>
                    </div>
                    <div class=contact-us-btn-2> <a href=# class=btn>submit form <div class=strelica> </div> </a> </div>
                    <div class=how-to-find>
                        <div class=how-to-find-heading>
                            <h5>how to find us</h5>
                            <h4>C.I.M. ITALIAN STYLE S.R.L</h4> </div>
                        <div class=how-to-find-details>
                            <p>Via Sotto il Mur del Brolo 24, 31049
                                <br> Valdobbiadene Treviso, Italy</p>
                            <p><span>tel.</span> <a href="tel:+390423973283">+ 39 0423 973283 / 972659</a></p>
                            <p><span>fax</span> +39 0423 1990665</p>
                            <p>P.I. e C.F. 04549940262 - REA 359106</p>
                            <p><span>e-mail</span> <a href="mailto:info@cim-italianstyle.com">info@cim-italianstyle.com</a></p>
                            <p><span>open</span> Monday – Friday 08:30 – 17:30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}

@endsection

@section('footer_scripts')
    <script>
        $(function(){
            $('.submit').click(function(e){
                e.preventDefault();
                $('#forma').submit();
            });
        });
    </script>
@endsection