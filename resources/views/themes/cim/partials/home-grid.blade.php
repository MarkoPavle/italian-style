@if(count($collections)>0)
<section id=grid1>
    <div class="container-fluid gridni1">
        <div class="row grid-1">
            @foreach($collections as $collection)
                <div class=grid-item>
                    <div class=grid-image-wrapper1>
                        {!! HTML::Image($collection->image, $collection->title, array('class' => 'img-fluid')) !!}
                    </div>
                    <div class=grid-text-wrapper>
                        <h5>
                            <a href="{{ $collection->slug }}">{{ $collection->title }}</a>
                        </h5>
                        {!! $collection->desc !!}
                        <a href="" class="btn">View more
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif