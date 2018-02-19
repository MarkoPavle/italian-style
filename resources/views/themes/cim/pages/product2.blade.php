@extends('themes.'.$theme->slug.'.index')

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            @if($parent->heroImage == null || $parent->heroImageMobile == null)
                <img class="img-fluid desktop-image" src="{{ url('uploads/collections/day-collections.jpg') }}" alt="{{ $parent->title }}">
                <img class=mobile-image src="{{ url('uploads/collections/day-collections-mobile.jpg') }}" alt="{{ url($parent->title) }}">
            @else
                <img class="img-fluid desktop-image" src="{{ url($parent->heroImage) }}" alt="{{ $parent->title }}">
                <img class=mobile-image src="{{ url($parent->heroImageMobile) }}" alt="{{ url($parent->title) }}">
            @endif
            @if(false)
            <div class=collections-header>
                <h5>{{ $parent->title }}</h5>
            </div>
            @endif
        </div>
    </section>
    <section>
        <div class=container>
            <div class="row product">
                <div class=news-open>
                    <div class="product-heading col-md-12">
                        <div class=row>
                            <div class=col-md-4>
                                <h5>Day collection</h5>
                            </div>
                            <div class="col-md-8 sakrij">
                                <div class="owl-carousel owl-theme">
                                    <div class=owl-carousel2>
                                        <div class=item2> <a href=#>STEVEN1</a> </div>
                                        <div class=item2> <a href=#>STEVEN2</a> </div>
                                        <div class=item2> <a href=#>STEVEN3</a> </div>
                                        <div class=item2> <a href=#>STEVEN4</a> </div>
                                        <div class=item2> <a href=#>STEVEN5</a> </div>
                                        <div class=item2> <a href=#>STEVEN6</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(count($products)>0)
                    <div class="product-image-wrapper col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach($products as $product)
                                @if(false)
                                <div class="item col-md-12">
                                    <div class=img-wrapper>
                                        <a href="">
                                            <img class=img-fluid src="{{ url($product->image) }}" alt="{{ $product->title }}">
                                        </a>
                                    </div>
                                    <div class=text-holder>
                                        <h5>
                                            <a href="">{{ $product->title }}</a>
                                        </h5>
                                        <p class=subtitle2>{{ $product->collection->title }}</p>
                                        <p>{{ $product->short }}</p>
                                    </div>
                                </div>
                                @else

                                <div class="item col-md-12">
                                    <div class=img-wrapper>
                                        <div class=img-wrapper-inner>
                                            <a href=#>
                                                <div class=kvadrat-levo></div>
                                                <div class=kvadrat-desno></div>
                                                <img class=img-fluid src="{{ url($product->image) }}" alt="{{ $product->title }}">
                                            </a>
                                        </div>
                                        @if($product->body2 != null)
                                        <div class=img-wrapper-text>
                                            {!! $product->body !!}
                                        </div>
                                        @endif
                                    </div>
                                    <div class=text-holder>
                                        @if($product->body2 != null)
                                            <h5>
                                                <a href=#>robert</a>
                                            </h5>
                                            <p class=subtitle2>Day collection / Modern style</p>
                                            <div class=version2>
                                                {!! $product->body2 !!}
                                            </div>
                                        @else
                                            {!! $product->body !!}
                                        @endif

                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <div class=product-social>
                    <div class=news-open-social-heading>
                        <a href="">
                            <h5>share</h5>
                        </a>
                    </div>
                    <div class=news-open-social-icons>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer_scripts')
    <script>
        $(function() {

            $(".owl-carousel").owlCarousel({
                nav: !0,
                navText: ["<img src='{{ url($theme->slug . "/img/arrow-white-left.png") }}'>", "<img src='{{ url($theme->slug . "/img/arrow-white-right.png") }}'>"],
                margin: 30,
                loop: !0,
                autoplay: !0,
                items: 1,
                smartSpeed: 700
            }), $(".owl-carousel2").owlCarousel({
                nav: !0,
                navText: ["<img src='{{ url($theme->slug . "/img/arrow-white-left.png") }}' class='na-levo'>", "<img src='{{ url($theme->slug."/img/arrow-white-right.png") }}' class='na-desno'>"],
                margin: 30,
                loop: !0,
                autoplay: !0,
                items: 4,
                smartSpeed: 700
            }), owl = $(".owl-carousel").owlCarousel(), $(".kvadrat-levo").click(function() {
                console.log(owl.trigger("prev.owl.carousel"));
                owl.trigger("prev.owl.carousel")
            }), $(".kvadrat-desno").click(function() {
                owl.trigger("next.owl.carousel")
            })
        });
    </script>
@endsection