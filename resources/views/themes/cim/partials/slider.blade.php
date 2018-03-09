@if(count($collections)>0)
    <div class=collections>
        <h5 class=nav-collections>Collection</h5>
        <ul id=double>
            @foreach($collections as $collection)
                <li>
                    <a href="{{ url('collections/'.$collection->slug) }}">{{ $collection->title }}</a>
                </li>
            @endforeach
        </ul>
    </div><!-- .collections -->
@endif

<div class=slider>
    <div>
        {!! HTML::Image($theme->slug . '/img/index-01.jpg', 'Slider 1', array('class' => 'desktop-image')) !!}
        {!! HTML::Image($theme->slug . '/img/index-mob-01.jpg', 'Slider 2', array('class' => 'mobile-image')) !!}
    </div>
    <div>
        {!! HTML::Image($theme->slug . '/img/index-02.jpg', 'Slider 1', array('class' => 'desktop-image')) !!}
        {!! HTML::Image($theme->slug . '/img/index-mob-02.jpg', 'Slider 2', array('class' => 'mobile-image')) !!}
    </div>
    <div>
        {!! HTML::Image($theme->slug . '/img/index-03.jpg', 'Slider 1', array('class' => 'desktop-image')) !!}
        {!! HTML::Image($theme->slug . '/img/index-mob-03.jpg', 'Slider 2', array('class' => 'mobile-image')) !!}
    </div>
</div>