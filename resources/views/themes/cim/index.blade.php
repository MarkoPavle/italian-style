<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CIM Italian Style</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    {!! HTML::style($theme->slug.'/css/style.css') !!}
</head>

<body>
<nav id="side-menu">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="heading1">
                <h5 class="mb-0">
                    <a href="#">Corporate</a>
                </h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <a href="#">Promotions</a>
                </h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading3">
                <h5 class="mb-0">
                    <a href="#">News</a>
                </h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading4">
                <h5 class="mb-0">
                    <a href="#">Partnership</a>
                </h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading5">
                <h5 class="mb-0">
                    <a href="#">Collections</a>
                    <div class="plusic collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded=false aria-controls="collapse2">
                        <i class="fas fa-plus"></i>
                    </div>
                </h5>
            </div>
            <div id=collapse2 class=collapse aria-labelledby=heading2 data-parent=#accordion>
                <div class=card-body>
                    <p>
                        <a href=#>Kitchens</a>
                    </p>
                    <p>
                        <a href=#>Night Collection</a>
                    </p>
                    <p>
                        <a href=#>Day Collection</a>
                    </p>
                    <p>
                        <a href=#>Lux Life</a>
                    </p>
                    <p>
                        <a href=#>Brand Names</a>
                    </p>
                    <p>
                        <a href=#>Contract</a>
                    </p>
                    <p>
                        <a href=#>Gift, Decorative objects</a>
                    </p>
                    <p>
                        <a href=#>Carpets</a>
                    </p>
                    <p>
                        <a href=#>Lighting</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id=site-content>
    <div class="container-fluid fluid-nav">
        <div class=container>
            <i class="fas fa-bars" id=trigger></i>
            <nav class="navbar justify-content-end">
                <div id=logo>
                    <a href="{{ url('/') }}">{!! HTML::Image($theme->slug . '/img/logo.png', 'CIM Italian style') !!}</a>
                </div>
                <div class=nav-item>
                    <a class=nav-link href=#>Corporate</a>
                    <div class=box></div>
                </div>
                <div class=nav-item>
                    <a class=nav-link href=#>Promotions</a>
                    <div class=box></div>
                </div>
                <div class=nav-item>
                    <a class=nav-link href=#>News</a>
                    <div class=box></div>
                </div>
                <div class=nav-item>
                    <a class=nav-link href=#>Partnership</a>
                    <div class=box></div>
                </div>
                <div class=nav-item>
                    <a class=nav-link href=# id=collections>Collections</a>
                </div>
                <div class="nav-item lang">
                    <a class=nav-link href=#>
                        <span class=active>eng</span>
                        <span>ita</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class=container-fluid>
        <div class=row>
            <div class=collections>
                <div class=js-hover> Collections
                    <ul id=double>
                        <li>
                            <a href=#>Kitchens</a>
                        </li>
                        <li>
                            <a href=#>Night Collection</a>
                        </li>
                        <li>
                            <a href=#>Day Collection</a>
                        </li>
                        <li>
                            <a href=#>Lux Life</a>
                        </li>
                        <li>
                            <a href=#>Brand Names</a>
                        </li>
                        <li>
                            <a href=#>Contract</a>
                        </li>
                        <li>
                            <a href=#>Gifts, Decorative objects</a>
                        </li>
                        <li>
                            <a href=#>Carpets</a>
                        </li>
                        <li>
                            <a href=#>Lightning</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=slider>
                <div>
                    {!! HTML::Image($theme->slug . '/img/slider1.jpg', 'Slider 1', array('class' => 'desktop-image')) !!}
                    {!! HTML::Image($theme->slug . '/img/slider2.jpg', 'Slider 2', array('class' => 'mobile-image')) !!}
                </div>
                <div>
                    {!! HTML::Image($theme->slug . '/img/slider1.jpg', 'Slider 1', array('class' => 'desktop-image')) !!}
                    {!! HTML::Image($theme->slug . '/img/slider2.jpg', 'Slider 2', array('class' => 'mobile-image')) !!}
                </div>
            </div>
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
    <section id=grid1>
        <div class="container-fluid gridni1">
            <div class="row grid-1">
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Kitchens</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/night-collection.jpg', 'night collection', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Night collection</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/day-collection.jpg', 'day-collection', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>day collection</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Lux Life</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Brand Names</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Contract</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Gift, Decorative objects</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Carpets</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen', array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href=#>Lighting</a>
                        </h5>
                        <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                        <a href=# class=btn>View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid parent-flex-container">
        <div class=flex-container>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/day-collection.jpg', 'day collection') !!}
                <h5>
                    <a href=#>Day collection</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/kitchen.jpg', 'kitchen') !!}
                <h5>
                    <a href=#>Kitchen</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/night-collection.jpg', 'night collection') !!}
                <h5>
                    <a href=#>Night collection</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/contract.jpg', 'contract') !!}
                <h5>
                    <a href=#>Contract</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid parent-flex-container">
        <div class=flex-container>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/lux-life.jpg', 'lux life') !!}
                <h5>
                    <a href=#>Lux life</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/gifts.jpg', 'gifts') !!}
                <h5>
                    <a href=#>Gifts</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/carperts.jpg', 'carperts') !!}
                <h5>
                    <a href=#>Carperts</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/lighting.jpg', 'lighting') !!}
                <h5>
                    <a href=#>Lighting</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <div class=col>
                {!! HTML::Image($theme->slug . '/img/brand-names.jpg', 'brand names') !!}
                <h5>
                    <a href=#>Brand names</a>
                </h5>
                <p>Accusamus, adipisci cum eligendi facere iusto laborum.</p>
                <a href=# class=btn>View more
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container carousel">
        <div class=row>
            <div class="col-md-12 news">
                <h5>News</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi cum cumque dignissimos ipsa iusto obcaecati?</p>
            </div>
        </div>
        <div class=row>
            <div class="owl-carousel owl-theme">
                <div class="item col-md-12">
                    <a href=#>
                        {!! HTML::Image($theme->slug . '/img/first-carousel.jpg', 'first carousel', array('class' => 'img-fluid')) !!}
                    </a>
                    <div class=text-holder>
                        <h5>
                            <a href=#>Lorem ipusum dolor</a>
                        </h5>
                        <p class=date>
                            <span>23 jan 2018</span>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid commodi delectus ducimus eius explicabo ipsa iste obcaecati possimus.</p>
                    </div>
                </div>
                <div class="item col-md-12">
                    <a href=#>
                        {!! HTML::Image($theme->slug . '/img/second-carousel.jpg', 'second carousel', array('class' => 'img-fluid')) !!}
                    </a>
                    <div class=text-holder>
                        <h5>
                            <a href=#>Lorem ipusum dolor</a>
                        </h5>
                        <p class=date>
                            <span>23 jan 2018</span>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid commodi delectus ducimus eius explicabo ipsa iste obcaecati possimus.</p>
                    </div>
                </div>
                <div class="item col-md-12">
                    <a href=#>
                        {!! HTML::Image($theme->slug . '/img/third-carousel.jpg', 'third carousel', array('class' => 'img-fluid')) !!}
                    </a>
                    <div class=text-holder>
                        <h5>
                            <a href=#>Lorem ipusum dolor</a>
                        </h5>
                        <p class=date>
                            <span>23 jan 2018</span>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid commodi delectus ducimus eius explicabo ipsa iste obcaecati possimus.</p>
                    </div>
                </div>
                <div class="item col-md-12">
                    {!! HTML::Image($theme->slug . '/img/first-carousel.jpg', 'first carousel', array('class' => 'img-fluid')) !!}
                    <div class=text-holder>
                        <h5>
                            <a href=#>Lorem ipusum dolor</a>
                        </h5>
                        <p class=date>
                            <span>23 jan 2018</span>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid commodi delectus ducimus eius explicabo ipsa iste obcaecati possimus.</p>
                    </div>
                </div>
                <div class="item col-md-12">
                    <a href=#>
                        {!! HTML::Image($theme->slug . '/img/second-carousel.jpg', 'second carousel', array('class' => 'img-fluid')) !!}
                    </a>
                    <div class=text-holder>
                        <h5>
                            <a href=#>Lorem ipusum dolor</a>
                        </h5>
                        <p class=date>
                            <span>23 jan 2018</span>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid commodi delectus ducimus eius explicabo ipsa iste obcaecati possimus.</p>
                    </div>
                </div>
                <div class="item col-md-12">
                    <a href=#>
                        {!! HTML::Image($theme->slug . '/img/third-carousel.jpg', 'third carousel', array('class' => 'img-fluid')) !!}
                    </a>
                    <div class=text-holder>
                        <h5>
                            <a href=#>Lorem ipusum dolor</a>
                        </h5>
                        <p class=date>
                            <span>23 jan 2018</span>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid commodi delectus ducimus eius explicabo ipsa iste obcaecati possimus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid large-border"></div>
    <div class="container-fluid footer-back">
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <footer>
                        <div class=container>
                            <div class=row>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 logo-social">
                                    <a href="{{ url('/') }}">{!! HTML::Image($theme->slug . '/img/footer-logo.png', 'cim italian style') !!}</a>
                                    <p class=social>
                                        <a href=#>
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href=#>
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="col-lg-2 kolekcije2">
                                    <p>
                                        <a href=#>Collections</a>
                                    </p>
                                    <ul>
                                        <li>
                                            <a href=#>Day Collection</a>
                                        </li>
                                        <li>
                                            <a href=#>Kitchens</a>
                                        </li>
                                        <li>
                                            <a href=#>Night Collection</a>
                                        </li>
                                        <li>
                                            <a href=#>Contract</a>
                                        </li>
                                        <li>
                                            <a href=#>Lux Life</a>
                                        </li>
                                        <li>
                                            <a href=#>Gift</a>
                                        </li>
                                        <li>
                                            <a href=#>Carpets</a>
                                        </li>
                                        <li>
                                            <a href=#>Lighting</a>
                                        </li>
                                        <li>
                                            <a href=#>Brand Names</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 terms">
                                    <p>
                                        <a href=#>Our company</a>
                                    </p>
                                    <ul>
                                        <li>
                                            <a href=#>Terms and conditions </a>
                                        </li>
                                        <li>
                                            <a href=#>About us</a>
                                        </li>
                                        <li>
                                            <a href=#>Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 kontakt">
                                    <p>
                                        <a href=#>C.I.M. ITALIAN STYLE SRL</a>
                                    </p>
                                    <ul class=address>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            <a href=#>Brolo Santa Caterina 27, 31049 Valdobbiadene Treviso, Italy</a>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone"></i>
                                            <a href=#>Tel.+ 39 0423 973283 / 972659 -</a>
                                        </li>
                                        <li>
                                            <a href=#>Fax +39 0423 1990665</a>
                                        </li>
                                        <li>
                                            <a href=#>P.I. & C.F. 04549940262 - REA 359106</a>
                                        </li>
                                        <li>
                                            <i class="far fa-envelope"></i>
                                            <a href=#>e-mail info@cim-italianstyle.com </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js></script>
<script>
    $(document).ready(function() {
        $(".slider").bxSlider({
            auto: !0
        }), $(".slider2").bxSlider({
            auto: !0
        }), $(".owl-carousel").owlCarousel({
            nav: !0,
            navText: ["", ""],
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
        })
    })
</script>
{!! HTML::script($theme->slug.'/js/app.bundle.js') !!}
</body>

</html>