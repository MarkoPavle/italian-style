@extends('themes.'.$theme->slug.'.index')

@section('title')
    {{ $product->title }} - CIM Italian Style
@endsection

@section('description')
    {!! $settings->desc !!}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('seo_social_stuff')
    <meta property="og:type" content="article"/>
    <meta property="og:site_name" content="CIM Italian Style">
    <meta property="og:url" content="{{ \App\Product::getProductLink($product) }}">
    <meta property="og:image" content="{{ url($product->image) }}">
    <meta property="og:title" content="{{ $product->title }}" />
    <meta property="og:description" content="{{ $product->short }}" />
    <link rel="canonical" href="{{ \App\Product::getProductLink($product) }}" />
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            @if(empty($collection->heroImage))
                <img class="desktop-image" src="{{ url('uploads/collections/day-collections.jpg') }}" alt="{{ $collection->title }}">
            @else
                <img class="desktop-image" src="{{ url($collection->heroImage) }}" alt="{{ $collection->title }}">
            @endif
        </div>
    </section>

    <section>
        <div class=container>
            <div class=product>
                <div class=news-open>
                    <div class=product__heading>
                        <div class="row align-items-end">
                            <div class="col-md-4 naslov">
                                <h5>{{ $collection->title }}</h5> </div>
                            <div class="col-md-8 p-0">
                                @if(count($products)>0)
                                    <div class="owl-carousel owl-theme sliding-navigation" id=jsSlidingNavigation>
                                        @foreach($products as $p)
                                            <div class=item2> <a href="{{ \App\Product::getProductLink($p) }}">{{ $p->title }}</a> </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if(count($photos)>0)
                        <div class=product__card>
                            <div class="product__item row">
                                <div class="position-relative col-md-9">
                                    <div class="owl-carousel owl-theme product__slider" id=jsMainProductSlider>
                                        @foreach($photos as $photo)
                                            {!! HTML::Image($photo->file_path, $product->title, array('class' => 'img-fluid')) !!}
                                        @endforeach
                                    </div>
                                </div>
                                <div class="text-holder col-md-3">
                                    <h5 class=product__name>{{ $product->title }}</h5>
                                    @if(isset($parent))
                                        <div class=product__short-description>{{ $parent->title }} / {{ $collection->title }}</div>
                                    @else
                                        <div class=product__short-description>{{ $collection->title }}</div>
                                    @endif
                                    @if($product->body2 != null)
                                        <div class=product__details>
                                            {!! $product->body2 !!}
                                            @if($product->price_small != null) <p>Price: <span>{{ $product->price_small }} &euro;</span></p>  @endif
                                        </div>
                                    @else
                                        <div class=product__details>
                                            {!! $product->body !!}
                                            @if($product->price_small != null) <p>Price: <span>{{ $product->price_small }} &euro;</span></p>  @endif
                                        </div>
                                    @endif
                                </div>
                                @if($product->body2 != null)
                                <div class="col-md-12 product__folow-up-text">
                                    {!! $product->body !!}
                                </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
                <div class=product-social>
                    @if(false)
                    <div class=news-open-social-icons>
                        <ul>
                            <li>
                                <a href=""> <i class="fab fa-facebook-f"></i> </a>
                            </li>
                            <li>
                                <a href=""> <i class="fab fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href=""> <i class="fab fa-google-plus-g"></i> </a>
                            </li>
                            <li>
                                <a href=""> <i class="fab fa-instagram"></i> </a>
                            </li>
                        </ul>
                    </div>
                    @else
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer_scripts')
    <script>
        $(function() {

            $("#jsMainProductSlider").owlCarousel({
                nav: !0,
                navText: ['<img src="{{ url($theme->slug . '/img/arrow-white-left.png') }}" class="arrow arrow-left">', '<img src="{{ url($theme->slug . '/img/arrow-white-right.png') }}" class="arrow arrow-right">'],
                margin: 15,
                loop: !0,
                autoplay: !0,
                items: 1,
                smartSpeed: 700
            }), $("#jsSlidingNavigation").owlCarousel({
                nav: !0,
                navText: ['<img src="{{ url($theme->slug . '/img/arrow-white-left.png') }}" class="arrow arrow-left">', '<img src="{{ url($theme->slug . '/img/arrow-white-right.png') }}" class="arrow arrow-right">'],
                margin: 30,
                loop: !0,
                autoplay: !0,
                items: 4,
                smartSpeed: 700
            })
        });
    </script>
@endsection