@extends('themes.'.$theme->slug.'.index')

@section('title')
    @if(app()->getLocale() == 'en') Promotions @else Promozioni @endif - CIM Italian Style
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
                <img class="img-fluid" src="{{ url('uploads/collections/day-collections.jpg') }}" alt="{{ $collection->title }}">
            @else
                <img class="img-fluid" src="{{ url($collection->heroImage) }}" alt="{{ $collection->title }}">
            @endif
            <div class=collections-header>
                <h5>{{ $collection->title }}</h5>
            </div>
        </div>
    </section>
    <section class=container>

        <div class="row products-list">
            @foreach($products as $product)
            <div class="col-md-4 col-sm-6 products-list__item">
                <a href="{{ \App\Product::getProductLink($product) }}">
                    <div class=media-wrap>
                        {!! HTML::Image($product->image, $product->title) !!}
                    </div>
                    <div class=text-wrap>
                        <h4 class=product__name>{{ $product->title }}</h4>
                        <h5 class=product__short-description>{{ $collection->title }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                {{ $products->render("pagination::bootstrap-4") }}
            </div>
        </div>

    </section>

@endsection