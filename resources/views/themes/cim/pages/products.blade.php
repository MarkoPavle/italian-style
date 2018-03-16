@extends('themes.'.$theme->slug.'.index')

@section('title')
    @if(app()->getLocale() == 'en') Partnership @else Partner @endif - CIM Italian Style
@endsection

@section('description')
    {{ $settings->desc }}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            @if(empty($collection->heroImage))
                <img class="desktop-image" src="{{ url('uploads/collections/day-collections.jpg') }}" alt="{{ $collection->title }}">
            @else
                <img class="desktop-image" src="{{ url($collection->heroImage) }}" alt="{{ $collection->title }}">
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
                <a href="{{ url(\App\Product::getProductLink($product)) }}">
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