@if(count($collections)>0)
    <div class=collections>
        @if(app()->getLocale() == 'en')
            <h5 class=nav-collections>Collections</h5>
        @else
            <h5 class=nav-collections>COLLEZIONI</h5>
        @endif
        <ul id=double>
            @foreach($collections as $collection)
                <li>
                    <a href="{{ url('collections/'.$collection->slug) }}">{{ $collection->title }}</a>
                </li>
            @endforeach
        </ul>
    </div><!-- .collections -->
@endif

@if(count($sliders)>0)
<div class=slider>
    @foreach($sliders as $slider)
        <div>
            {!! HTML::Image($slider->file_path, 'Slider image', array('class' => 'desktop-image')) !!}
            {!! HTML::Image($slider->file_path_mobile, 'Slider image', array('class' => 'mobile-image')) !!}
        </div>
    @endforeach
</div>
@endif