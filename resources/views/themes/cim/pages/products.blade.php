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
        <div class="container-fluid hero-img-container"> {!! HTML::Image($theme->slug.'/img/collection-hero-image.jpg', 'collection hero image', array('class' => 'img-fluid')) !!}
            <div class=collections-header>
                <h5>colection name</h5> </div>
        </div>
    </section>
    <section class=container>

        <div class="row products-list">
            @for($i=0;$i<12;$i++)
            <div class="col-md-4 col-sm-6 products-list__item">
                <a href=#>
                    <div class=media-wrap> {!! HTML::Image($theme->slug.'/img/second-carousel.jpg', 'collection hero image') !!} </div>
                    <div class=text-wrap>
                        <h4 class=product__name>Product name</h4>
                        <h5 class=product__short-description>Collection</h5> </div>
                </a>
            </div>
            @endfor
        </div>

        <ul class="pagination justify-content-end">
            <li class=page-item>
                <a class=page-link href=# aria-label=Previous> <span aria-hidden=true>❮</span> <span class=sr-only>Previous</span> </a>
            </li>
            <li class=page-item> <a class=page-link href=#>1</a> </li>
            <li class=page-item> <a class=page-link href=#>2</a> </li>
            <li class=page-item> <a class=page-link href=#>3</a> </li>
            <li class=page-item>
                <a class=page-link href=# aria-label=Next> <span aria-hidden=true>❯</span> <span class=sr-only>Next</span> </a>
            </li>
        </ul>

    </section>

@endsection