@if(count($topMenu))
    @foreach($topMenu as $link)
        <div class=nav-item>
            <a class="nav-link @if($link->id == 6 && $home) nav-collections @endif" href="{{ url($link->link) }}@if($link->id == 6 && !$home)#collections @endif">{{ $link->title }}</a>
            <div class=box></div>
        </div>
    @endforeach
    <div class="nav-item lang">
        @if(app()->getLocale() == 'it')
            <a class=nav-link href="{{ $translate }}">
                <span class=active>eng</span>
            </a>
        @else
            <a class=nav-link href="{{ $translate }}">
                <span class=active>ita</span>
            </a>
        @endif
    </div>
@endif