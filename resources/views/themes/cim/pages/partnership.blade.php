@extends('themes.'.$theme->slug.'.index')

@section('title')
    @if(app()->getLocale() == 'en') Work with us @else Lavora con noi @endif - CIM Italian Style
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
            <img class="img-fluid" src="{{ url('uploads/hero/hero-pic-WorkWithUs.jpg') }}" alt="partnership">
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
                        <h4>Thanks to our Partners, that are co-operating with us, to achieve new objectives at mutual satisfaction and interest.</h4>
                    @else
                        <h4>Grazie ai partners che collaborano con noi per raggiungere sempre obiettivi migliori , con reciproche soddisfazioni.</h4>
                    @endif
                    <ul id=triple>
                        <li><a href="">OLGUN & Co. LTD.</a></li>
                        <li><a href="">ITALMOBILI</a></li>
                        <li><a href="">INGROSSO</a></li>
                        <li><a href="">HARVEY NORMAN</a></li>
                        <li><a href="">LIVERPOOL GROUP</a></li>
                        <li><a href="">ITALIA INTERIOR DESIGN S.R.O.</a></li>
                        <li><a href="">LUXLIFE</a></li>
                        <li><a href="">DOM ITALIA</a></li>
                        <li><a href="">DOCLEA S.O.O.</a></li>
                        <li><a href="">CASA DOLCE CASA SH.PK.</a></li>
                        <li><a href="">SPAZIO HOME CONCEPT</a></li>
                        <li><a href="">MEBLO DESIGN</a></li>
                        <li><a href="">THE KITCHENS</a></li>
                        <li><a href="">TAFAJ 3HA</a></li>
                        <li><a href="">MUREBEST</a></li>
                        <li><a href="">IBCI MOBILYA</a></li>
                        <li><a href="">BRAVURA INTERIORS</a></li>
                        <li><a href="">ULFERTS OF SWEEDEN LTD.</a></li>
                        <li><a href="">WORLD STYLE FURNITURE</a></li>
                        <li><a href="">MARN GROUP</a></li>
                        <li><a href="">VILLANOVA ECE TUNA</a></li>
                        <li><a href="">TECNOMOBILE</a></li>
                        <li><a href="">MODERN FURNITURE</a></li>
                        <li><a href="">FREEDOM</a></li>
                        <li><a href="">RENAISSANCE DESIGN</a></li>
                        <li><a href="">MARS</a></li>
                        <li><a href="">SLO-NAMOS</a></li>
                        <li><a href="">EUROSALON</a></li>
                        <li><a href="">SPACE PHILOSOPHY</a></li>
                        <li><a href="">MY HOME</a></li>
                        <li><a href="">PRISMA & CO.</a></li>
                        <li><a href="">MONTENEGRO 94</a></li>
                        <li><a href="">MALTEPE MOBILYA</a></li>
                        <li><a href="">HOME DECOR</a></li>
                        <li><a href="">MOBEXPERT</a></li>
                        <li><a href="">KAMANI</a></li>
                        <li><a href="">NEW ITALMOBILI</a></li>
                        <li><a href="">BKSL SARL</a></li>
                        <li><a href="">TOP LINE</a></li>
                        <li><a href="">JAIDAH MOTORS</a></li>
                        <li><a href="">MALIA FURNITURE</a></li>
                        <li><a href="">AL BALAD AL AMIN</a></li>
                        <li><a href="">JUGOEXPORT STILL</a></li>
                        <li><a href="">ARCHIDEA</a></li>
                        <li><a href="">BEST SALE</a></li>
                        <li><a href="">MAFCO GROUP</a></li>
                        <li><a href="">COMMERCIAL ECSA</a></li>
                        <li><a href="">ZANNIER</a></li>
                        <li><a href="">EUROLUCE</a></li>
                        <li><a href="">ZECKANKA HOME STORE</a></li>
                        <li><a href="">SABA & CO.</a></li>
                        <li><a href="">MEBEL LACKA</a></li>
                        <li><a href="">INTERNI</a></li>
                        <li><a href="">PRESTIJ MEBEL</a></li>
                        <li><a href="">RAITA LTD</a></li>
                        <li><a href="">LIFESTYLE LTD</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection