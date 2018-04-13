@extends('themes.'.$theme->slug.'.index')

@section('title')
    Brand names - CIM Italian Style
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
        <link rel="canonical" href="{{ url('products/brand-names/projecthospitality/519') }}" />
    @else
        <meta property="og:title" content="Il CIM offre servizi. Opera nel settore del mobile per la casa, per ufficio e per la comunità, è in grado di seguire il cliente passo per passo..." />
        <link rel="canonical" href="{{ url('it/products/brand-names/progettoospitalita/519') }}" />
    @endif
    <meta property="og:description" content="{{ \App\Helper::removePTag($settings->footer) }}" />
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="img-fluid" src="{{ url($theme->slug.'/img/1369046709_BRAND-NAMES-CIM-ITALIAN-STYLE-01.jpg') }}" alt="partnership">
            <div class=collections-header>
                <h5>Brand names</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="container partners">
            <div class=row>
                <div class="col-md-12 list-of-partners">
                    @if(app()->getLocale() == 'en')
                        <p>We can supply the most important Italian Brand Names Collections in the classic and modern furniture field, at very competitive sales conditions and prices in the market.</p>
                    @else
                        <p>Siamo in grado di fornire le collezioni italiane dei più importanti brands nel settore dell’arredamento classico e moderno, a condizioni di vendita molto vantaggiose.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection