@extends('themes.'.$theme->slug.'.index')

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="img-fluid desktop-image" src="{{ url($parent->heroImage) }}" alt="{{ $parent->title }}">
            <img class=mobile-image src="{{ url($parent->heroImageMobile) }}" alt="{{ url($parent->title) }}">
            <div class=collections-header>
                <h5>{{ $parent->title }}</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid subtitle">
            <div class=row>
                <div class="col-md-12 collections-subtitle">
                    {!! $parent->desc !!}
                </div>
            </div>
        </div>
    </section>
    @if(count($collections))
        <section id=grid2>
            <div class="container-fluid gridni2">
                <div class="row grid-2">
                    @foreach($collections as $collection)
                        <div class=collections-grid-item-{{ count($collections) }}>
                            <div class=collections-grid-image-wrapper1>
                                <a href="">
                                    <img class="img-fluid" src="{{ url($collection->image) }}" alt="{{ $collection->title }}">
                                </a>
                            </div>
                            <div class=collections-grid-text-wrapper>
                                <h2>
                                    <a href=#>{{ $collection->title }}</a>
                                </h2>
                                <a href=# class=btn>View more <div class=strelica> </div> </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection