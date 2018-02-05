@extends('themes.'.$theme->slug.'.index')

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
                        <h2>THE CIM PROJECT</h2>
                        <h1>We develop quality. Everything is put down in black and white.</h1>
                        <p> Cim offers services. It works out the sector of furniture for the house, offices and communities, it assists its customers step by step and offers them a series of complementary and horizontal actions to meet any need, both
                            in terms of supplies and projects. And everything is put down in black and white. </p>
                        <button class="btn btn-primary">We will show now</button>
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