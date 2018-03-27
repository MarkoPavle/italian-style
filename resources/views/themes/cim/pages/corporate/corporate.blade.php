@extends('themes.'.$theme->slug.'.index')

@section('title')
    Corporate - CIM Italian Style
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
            <img class="img-fluid desktop-image" src="{{ url('uploads/hero/hero-CORPORATE.jpg') }}" alt=hero-image>
            <div class=collections-header>
                <h5>Corporate</h5>
            </div>
        </div>
    </section>
    <div class="container corporate">
        <div class=row>
            <div class=col-md-8>
                <div class=container>
                    <div class=row>
                        <div class=col-sm-12>
                            <h1>The cim project</h1>
                            <h3>We develop quality. Everything is put down in black and white.</h3>
                            <p> C.I.M. ITALIAN STYLE S.R.L. offers services. It works out the sector of furniture for the house, offices and communities, it assists its customers step by step and offers them a series of complementary and horizontal actions to meet any need, both in terms of supplies and projects. And everything is put down in black and white.<br> We will show how: </p>
                        </div>
                    </div>
                </div>
                <div class="container boxes no-padding">
                    <div class=row>
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-survey.png') }}" alt="The research of the product"> </p>
                            <h3>The research <span>of the product</span> </h3>
                            <p>Study and feasibility in the local market. Selection of brands and product lines to deal in. Outline of the financial project.</p>
                        </div>
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-sewing-tape.png') }}" alt=Supplies> </p>
                            <h3>Supplies</h3>
                            <p>Supply of original Made in Italy products with the possibility to purchase at competitive prices in the market.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-multichanel.png') }}" alt="The visual design of the point of sale"> </p>
                            <h3>The visual design of <span>the point of sale</span> </h3>
                            <p>Study of the communication of the point of sale in the territory.</p>
                        </div>
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-trust.png') }}" alt=Supplies> </p>
                            <h3>Why believing <span>in it</span> </h3>
                            <p>We are thinking of the World’s market. We know it since a lot of years. That is why we are presenting ourselves as your Italian partner in the trade, administrative and logistics fields.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-12>
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
                <!-- new stuff -->
                <div class="container the-cim-project mt-4">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1>BRIEF PROFILE ON OUR COMPANY ACTIVITY</h1>
                      <p>
                        Our Company, C.I.M. ITALIAN STYLE S.R.L., was born on 19th January 2005 and it is located in the North East of Italy, one hour north of the city of Venice and to its related Marco Polo International Airport.
                      </p>
                    </div>
                      <!-- .col-xs-12 -->
                  </div>
                </div>
              <!-- .container -->
                <div class="container boxes no-padding">
                  <div class="row">
                    <div class="col-12">
                      <p class="icon">
                        <img src="img/corporate/RESEARCH.png" alt="The research of the product">
                      </p>
                      <h3>Products</h3>
                      <p>C.I.M. ITALIAN STYLE S.R.L. works in the furniture field , for the house for more than 30 years. Our know-how is made in exporting Made in Italy household, office, and residential contract furniture, to the majors and most important World Wide Countries, where the Italian design and the quality of the finishing of product together with an experienced service, are very much appreciated.</p>
                    </div>
                    <div class="col-12">
                      <p class="icon">
                        <img src="img/corporate/SUPPLIES.png" alt="Supplies">
                      </p>
                      <h3>Brand <span>names</span></h3>
                      <p>We can supply the most important Italian Brand Names Collections
                        in the classic and modern furniture field, at very competitive  sales conditions and prices in the market.
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <p class="icon">
                          <img src="img/corporate/RESEARCH.png" alt="The research of the product">
                      </p>
                      <h3>Logistic</h3>
                      <p>We do provide an Inbound/Outbound logistic service to our valued
                        Partners/customers with a Warehouse of more than 1800 s.m. , located in Villorba Tv , 3 kms far from exit Treviso Nord of highway A 27-Treviso
                        North.<br/>
                        Our service is to load the goods collected from the different suppliers and to deliver them to our Warehouse and we stock them there. Moreover we grant a Consolidation service, through the unloading and loading of the trucks/containers, with only one invoice for the exportation the different orders, around Italy.
                        <br />
                        Therefore customer may have an only partner for its purchases from Italy, minimizing export and import costs for custom operations, bank costs, and others more.
                      </p>
                    </div>
                    <div class="col-12">
                      <p class="icon">
                          <img src="img/corporate/SUPPLIES.png" alt="Supplies">
                      </p>
                      <h3>CUSTOMS <span>OPERATIONS</span></h3>
                      <p>We have the possibility  make  the Customs procedures domiciled in our Warehouse, thus further reducing costs and giving
                        your drivers/forwarding Agent the possibility to get out from Italian
                        border, without losing time. <br/>
                        Please feel free to contact us for more details and precise information, you will be welcome at any time!
                      </p>
                    </div>
                  </div>
                </div>
            <!-- /new stuff -->
            </div>
            <div class="col-md-4 corporate-images">
                <img src="{{ url($theme->slug.'/img/corporate-1.jpg') }}" alt="corporate 1">
                <img src="{{ url($theme->slug.'/img/corporate-2.jpg') }}" alt="corporate 2">
                <img src="{{ url($theme->slug.'/img/corporate-3.jpg') }}" alt="corporate 3">
            </div>
        </div>
    </div>

@endsection