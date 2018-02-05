@if(count($collections)>0)
    <div class=collections>
        <div class=js-hover> Collections
            <ul id=double>
                @foreach($collections as $collection)
                    <li>
                        <a href="{{ url($collection->slug) }}">{{ $collection->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div><!-- .collections -->
@endif

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