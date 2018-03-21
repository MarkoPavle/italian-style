@extends('themes.'.$theme->slug.'.index')


@section('title')
    Promotions - CIM Italian Style
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
            <img class="img-fluid desktop-image" src="{{ url('uploads/hero/hero-pic-PROMOTIONS.jpg') }}" alt="contact">
            <img class=mobile-image src="{{ url('uploads/collections/day-collections-mobile.jpg') }}" alt="contact">
            <div class=collections-header>
                <h5>Promotions</h5>
            </div>
        </div>
    </section>
    <div class="section promotions">
        <div class=container>
            <div class="row">
                <div class="col-md-12">
                    <h1>Le ns. promozioni</h1>
                    <p>MODELLO PINKO DIVANO 2,5 CON BRACCIOLO DX O SX E PENISOLA IN PU COLORI A SCELTA PER CONTAINERS COMPLETI 40' HIGH CUBE EURO 399,00 NETTO FRANCO STABILIMENTO DI CASTAGNOLE TREVISO ITALIA.</p>
                    <p>MODELLO ECLYPSE DIVANO 2,5 CON BRACCIOLO DX O SX A SCAELTA E CHAISE LOUNGE IN PU COLORI A SCELTA PER CONTIANERS COMPLETI DA 40' , CIRCA 27 COMPOSIZIONI EURO 389,00 FRANCO FABBRICA CATAGNOLE TREVISO ITALIA.</p>
                </div>
            </div>
        </div>
    </div>

@endsection