@extends('themes.'.$theme->slug.'.index')

@section('title')
    @if(app()->getLocale() == 'en') Partnership @else Partner @endif - CIM Italian Style
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
            <img class="img-fluid desktop-image" src="{{ url('uploads/hero/hero-pic-WorkWithUs.jpg') }}" alt="partnership">
            <img class=mobile-image src="{{ url('uploads/collections/day-collections-mobile.jpg') }}" alt="partnership">
            <div class=collections-header>
                <h5>work with us</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="container partners">
            <div class=row>
                <div class="col-md-12 list-of-partners">
                    @if(app()->getLocale() == 'en')
                        <h3>
                            Join us and create your home, office or any other kind of place from your dreams!
                            Turn your fantasies into reality with our help and enjoy in all the luxuries high-quality Made in Italy furniture can offer.
                        </h3>
                        <p>We guarantee you will be more than just satisfied! </p>
                    @else
                        <h3>
                            Unisciti a noi e crea la tua casa, ufficio o qualsiasi altro tipo di luogo dai tuoi sogni!
                            Trasforma le tue fantasie in realtà con il nostro aiuto e goditi tutti i lussi di alta qualità che i mobili Made in Italy possono offrire.
                        </h3>
                        <p>Ti garantiamo che sarai più che soddisfatto!</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection