@if(count($topMenu))
    @foreach($topMenu as $link)
        <div class=nav-item>
            <a class="nav-link @if($link->id == 6 && $home) nav-collections @endif" href="{{ url($link->link) }}@if($link->id == 6 && !$home)#collections @endif">{{ $link->title }}</a>
            @if($topMenu->last() != $link)
                <div class=box></div>
            @endif
        </div>
    @endforeach
    <div class="nav-item lang">
        <span class="nav-link">
            <a href="{{ $translate['en'] }}" @if(app()->getLocale() == 'en') class=active @endif>eng</a>
            <a href="{{ $translate['it'] }}" @if(app()->getLocale() == 'it') class=active @endif>ita</a>
        </span>
    </div>
@endif