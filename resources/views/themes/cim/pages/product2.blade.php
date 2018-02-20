@extends('themes.'.$theme->slug.'.index')

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            @if($collection->heroImage == null || $collection->heroImageMobile == null)
                <img class="img-fluid desktop-image" src="{{ url('uploads/collections/day-collections.jpg') }}" alt="{{ $collection->title }}">
                <img class=mobile-image src="{{ url('uploads/collections/day-collections-mobile.jpg') }}" alt="{{ url($collection->title) }}">
            @else
                <img class="img-fluid desktop-image" src="{{ url($collection->heroImage) }}" alt="{{ $collection->title }}">
                <img class=mobile-image src="{{ url($collection->heroImageMobile) }}" alt="{{ url($collection->title) }}">
            @endif
            @if(false)
            <div class=collections-header>
                <h5>{{ $collection->title }}</h5>
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
                                @if(count($products)>0)
                                <div class="owl-carousel owl-theme">
                                    <div class=owl-carousel2>
                                        @foreach($products as $p)
                                            <div class=item2> <a href="{{ \App\Product::getProductLink($p) }}">{{ $p->title }}</a> </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if(count($photos)>0)
                    <div class="product-image-wrapper col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach($photos as $photo)

                                <div class="item col-md-12">
                                    <div class=img-wrapper>
                                        <div class=img-wrapper-inner>
                                            <a href=#>
                                                <div class=kvadrat-levo></div>
                                                <div class=kvadrat-desno></div>
                                                <img class=img-fluid src="{{ url($photo->file_path) }}" alt="{{ $product->title }}">
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
                                                <a href="">{{ $product->title }}</a>
                                            </h5>
                                            <p class=subtitle2>
                                                @if(isset($parent))
                                                    {{ $parent->title }} / {{ $collection->title }}
                                                @else
                                                    {{ $collection->title }}
                                                @endif
                                            </p>
                                            <div class=version2>
                                                {!! $product->body2 !!}
                                            </div>
                                        @else
                                            <h5>
                                                <a href="">{{ $product->title }}</a>
                                            </h5>
                                            <p class=subtitle2>
                                                @if(isset($parent))
                                                    {{ $parent->title }} / {{ $collection->title }}
                                                @else
                                                    {{ $collection->title }}
                                                @endif
                                            </p>
                                            <div class=version2>
                                                {!! $product->body !!}
                                            </div>
                                        @endif

                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <div class=product-social>
                    @if(false)
                    <div class=news-open-social-heading>
                        <a href="">
                            <h5>share</h5>
                        </a>
                    </div>
                    @endif
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