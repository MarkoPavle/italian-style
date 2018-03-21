@extends('themes.'.$theme->slug.'.index')

@section('title')
    {{ $post->title }} - CIM Italian Style
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
    <meta property="og:url" content="{{ url(\App\Post::getPostLink($post)) }}">
    <meta property="og:image" content="{{ url($post->image) }}">
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->short }}" />
    <link rel="canonical" href="{{ url(\App\Post::getPostLink($post)) }}" />
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="desktop-image" src="{{ url('uploads/hero/hero-pic-news.jpg') }}" alt="post">
        </div>
    </section>
    <section>
        <div class=container>
            <div class="row news-open-row">
                <div class=news-open>
                    <div class="news-open-heading col-md-12">
                        <h5>{{ $post->title }} <span>/ {{ \Carbon\Carbon::parse($post->publish_at)->format('d. M Y.') }}</span></h5>
                    </div>
                    <div class="news-open-image-wrapper col-md-12">
                        {!! HTML::Image($post->image, $post->title, array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=news-open-paragraph>
                        {!! $post->body !!}
                    </div>
                </div>
                <div class=news-open-social>
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
    @if(count($related)>0)
    <section>
        <div class=container>
            <div class="row related">
                @foreach($related as $p)
                    @php $link = \App\Post::getPostLink($p); @endphp
                    <div class="item col-md-4 col-sm-6">
                        <div class=img-wrapper>
                            <a href="{{ $link }}">
                                {!! HTML::Image($p->image, $p->title, array('class' => 'img-fluid')) !!}
                            </a>
                        </div>
                        <div class=text-holder>
                            <h5> <a href="{{ $link }}">{{ $p->title }}</a> </h5>
                            <p class=date> <span>{{ \Carbon\Carbon::parse($p->publish_at)->format('d M Y') }}</span> </p>
                            <p>{{ $p->short }}</p>
                        </div>
                    </div>
                @endforeach

                <div class=col-md-12>
                    @if(false)
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class=page-item> <a class=page-link href=# aria-label=Previous> <span aria-hidden=true>❮</span> <span class=sr-only>Previous</span> </a> </li>
                            <li class=page-item><a class=page-link href=#>1</a></li>
                            <li class=page-item><a class=page-link href=#>2</a></li>
                            <li class=page-item><a class=page-link href=#>3</a></li>
                            <li class=page-item> <a class=page-link href=# aria-label=Next> <span aria-hidden=true>❯</span> <span class=sr-only>Next</span> </a> </li>
                        </ul>
                    </nav>
                    @else
                        {{ $related->render("pagination::bootstrap-4") }}
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection