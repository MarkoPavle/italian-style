@if(count($collections)>0)
<section id=grid1>
    <div class="container-fluid gridni1">
        <div class="row grid-1">
            @foreach($collections as $collection)
                <div class=grid-item>
                    <a href="{{ url('collections/'.$collection->slug) }}">
                        <div class=grid-image-wrapper1>
                            {!! HTML::Image($collection->image, $collection->title, array('class' => 'img-fluid')) !!}
                        </div>
                        <div class=grid-text-wrapper>
                            <h2>{{ $collection->title }}</h2>
                            {!! $collection->desc !!}
                            <a href="{{ url('collections/'.$collection->slug) }}" class="btn">View more
                                <div class=strelica> </div>
                            </a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif