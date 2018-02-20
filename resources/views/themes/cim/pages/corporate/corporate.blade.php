@extends('themes.'.$theme->slug.'.index')

@section('title')
    Corporate - CIM Italian Style
@endsection

@section('description')
    {{ $settings->desc }}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container"> <img class=img-fluid src="{{ url('uploads/collections/day-collections.jpg') }}" alt=hero-image> </div>
    </section>
    <div class="container corporate">
        <div class=row>
            <div class=col-md-8>
                <div class=container>
                    <div class=row>
                        <div class=col-sm-12>
                            <h1>The cim project</h1>
                            <h3>We develop quality. Everything is put down in black and white.</h3>
                            <p> Cim offers services. It works out the sector of furniture for the house, offices and communities, it assists its customers step by step and offers them a series of complementary and horizontal actions to meet any need, both in terms of supplies and projects. And everything is put down in black and white.<br> We will show how: </p>
                        </div>
                    </div>
                </div>
                <div class="container boxes no-padding">
                    <div class=row>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-survey.png') }}" alt="The research of the product"> </p>
                            <h3>The research <span>of the product</span> </h3>
                            <p>Study and feasibility in the local market. Selection of brands and product lines to deal in. Outline of the financial project.</p>
                        </div>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-sewing-tape.png') }}" alt=Supplies> </p>
                            <h3>Supplies</h3>
                            <p>Supply of original Made in Italy products with the possibility to purchase at competitive prices in the market.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-multichanel.png') }}" alt="The visual design of the point of sale"> </p>
                            <h3>The visual design of <span>the point of sale</span> </h3>
                            <p>Study of the communication of the point of sale in the territory.</p>
                        </div>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-trust.png') }}" alt=Supplies> </p>
                            <h3>Why believing <span>in it</span> </h3>
                            <p>We are thinking of the World’s market. We know it since a lot of years. That is why we are presenting ourselves as your Italian partner in the trade, administrative and logistics fields.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-sm-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-handshake.png') }}" alt="The visual design of the point of sale"> </p>
                            <h3>A clear <span>deal</span> </h3>
                            <p>When proposing all this, we are aware of all the following advantages:</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-sm-6>
                            <ul>
                                <li>the MADE IN ITALY product</li>
                                <li>the purchase at competitive prices</li>
                                <li>the product high quality</li>
                            </ul>
                        </div>
                        <div class=col-sm-6>
                            <ul class=second>
                                <li>the turnkey service</li>
                                <li>the remarkable experience and skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 corporate-images">
                <img src="{{ url($theme->slug.'/img/corporate-1.jpg') }}" alt="corporate 1">
                <img src="{{ url($theme->slug.'/img/corporate-2.jpg') }}" alt="corporate 2">
                <img src="{{ url($theme->slug.'/img/corporate-3.jpg') }}" alt="corporate 3">
            </div>
        </div>
    </div>

@endsection