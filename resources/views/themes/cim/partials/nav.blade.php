@if(count($topMenu))
    @foreach($topMenu as $link)
        <div class=nav-item>
            <a class=nav-link href="{{ url($link->link) }}" @if($link->id == 6) id="collections" @endif>{{ $link->title }}</a>
            <div class=box></div>
        </div>
    @endforeach
    <div class="nav-item lang">
        <a class=nav-link href=#>
            <span class=active>eng</span>
            <span>ita</span>
        </a>
    </div>
@endif