@extends('themes.'.$theme->slug.'.index')

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="img-fluid desktop-image" src="{{ url('uploads/collections/day-collections.jpg') }}" alt="contact">
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