<div id="accordion">
    @if(count($mobileMenu))
        @foreach($mobileMenu as $link)
            @if($link->id != 14)
            <div class="card">
                <div class="card-header" id="heading1">
                    <h5 class="mb-0">
                        <a href="{{ url($link->link) }}">{{ $link->title }}</a>
                    </h5>
                </div>
            </div>
            @else
                <div class="card">
                    <div class="card-header" id="heading5">
                        <h5 class="mb-0">
                            <a href="#">{{ $link->title }}</a>
                            <div class="plusic collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded=false aria-controls="collapse2">
                                <i class="fas fa-plus"></i>
                            </div>
                        </h5>
                    </div>
                    <div id=collapse2 class=collapse aria-labelledby=heading2 data-parent=#accordion>
                        <div class=card-body>
                            @if(count($collections))
                                @foreach($collections as $collection)
                                    <p>
                                        <a href="{{ url($collection->slug) }}">{{ $collection->title }}</a>
                                    </p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
</div>