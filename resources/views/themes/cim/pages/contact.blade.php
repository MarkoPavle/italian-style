@extends('themes.'.$theme->slug.'.index')

@section('title')
    Contact - CIM Italian Style
@endsection

@section('description')
    {{ $settings->desc }}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="img-fluid desktop-image" src="{{ url('uploads/hero/hero-pic-contactus.jpg') }}" alt="contact">
            <img class=mobile-image src="{{ url('uploads/collections/day-collections-mobile.jpg') }}" alt="contact">
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
    <div class=section>
        <div class=container>
            <div class="row contact-grid">
                <div class=contact-us>
                    <div class=contact-us-heading>
                        <h5>contact us</h5> </div>
                    <div class=form-group>
                        <label for=exampleInputEmail1>name <span>*</span></label>
                        <input type=name class=form-control id=exampleInputName1>
                        <label for=exampleInputEmail1>email <span>*</span></label>
                        <input type=email class=form-control id=exampleInputEmail1>
                        <label for=exampleInputEmail1>phone <span>*</span></label>
                        <input type=phone class=form-control id=exampleInputPhone1> </div>
                    <div class=contact-us-btn> <a href=# class=btn>submit form <div class=strelica> </div> </a> </div>
                </div>
                <div class=message-us>
                    <label for=exampleTextarea>message <span>*</span></label>
                    <textarea class=form-control id=exampleTextarea rows=3></textarea>
                </div>
                <div class=contact-us-btn-2> <a href=# class=btn>submit form <div class=strelica> </div> </a> </div>
                <div class=how-to-find>
                    <div class=how-to-find-heading>
                        <h5>how to find the cim</h5>
                        <h4>C.I.M. Italian Styler</h4> </div>
                    <div class=how-to-find-details>
                        <p>Via Sotto il Mur del Brolo 24, 31049
                            <br> Valdobbiadene Treviso, Italy</p>
                        <p><span>tel.</span> + 39 0423 973283 / 972659</p>
                        <p><span>fax</span> +39 0423 1990665</p>
                        <p>P.I. e C.F. 04549940262 - REA 359106</p>
                        <p><span>e-mail</span> info@cim-italianstyle.com</p>
                        <p><span>open</span> Monday – Friday 09:00 – 18:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection