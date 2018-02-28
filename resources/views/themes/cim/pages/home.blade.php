@extends('themes.'.$theme->slug.'.index')

@section('title')
    CIM Italian Style
@endsection

@section('description')
    {{ $settings->desc }}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('content')
    <div class=container-fluid>
        <div class=row>
            @include('themes.'.$theme->slug.'.partials.slider')
        </div>
    </div>

    <div class="container-fluid two-parts">
        <div class=container>
            <div class=row>
                <div class="col-md-12 right-side text-center">
                    <div class=text-holder>
                        @if(app()->getLocale() == 'en')
                            <h2>THE CIM PROJECT</h2>
                            <h1>We develop quality. Everything is put down in black and white.</h1>
                            <p> Cim offers services. It works out the sector of furniture for the house, offices and communities, it assists its customers step by step and offers them a series of complementary and horizontal actions to meet any need, both
                                in terms of supplies and projects. And everything is put down in black and white. </p>
                            <button class="btn btn-primary">We will show now</button>
                        @else
                            <h2>IL PROGETTO CIM</h2>
                            <h1>Progettiamo qualità. Nero su bianco.</h1>
                            <p> Il CIM offre servizi.
                                Opera nel settore del mobile per la casa, per ufficio e per la comunità, è in grado di seguire il cliente passo per passo proponendo una serie di
                                azioni complementari e trasversali. Queste azioni vanno a costituire un servizio a 360 gradi per soddisfare ogni esigenza, sia essa di fornitura o di progettazione. E tutto nero su bianco.
                                </p>
                            <button class="btn btn-primary">Vediamo come</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid large-border"></div>

    @include('themes.'.$theme->slug.'.partials.home-grid')

    <div class="container carousel">
        <div class=row>
            <div class="col-md-12 news">
                <h5>News</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi cum cumque dignissimos ipsa iusto obcaecati?</p>
            </div>
        </div>
        <div class=row>
            @include('themes.'.$theme->slug.'.partials.owl-carousel')
        </div>
    </div>
@endsection

@section('footer_scripts')
    <script>
        $(document).ready(function() {
            $(".slider").bxSlider({
                auto: !0,
                nextText: '<img src="{{ $theme->slug }}/img/arrow-right.png" />',
                prevText: '<img src="{{ $theme->slug }}/img/arrow-left.png" />'
            });
            $(".slider2").bxSlider({
                auto: !0
            });
            $(".owl-carousel").owlCarousel({
                nav: !0,
                navText: ["<img src='{{ $theme->slug }}/img/left-arrow.png'>", "<img src='{{ $theme->slug }}/img/right-arrow.png'>"],
                margin: 30,
                loop: !0,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endsection