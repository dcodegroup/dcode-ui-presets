<header>
    <h2>{{ $heading }}</h2>
    <ul>
        <li>
            <span>HTML/CSS:</span>
            @if($devReady)
            <span>Dev Ready</span>
            @else 
            <span>WIP</span>
            @endif
        </li>
        @isset($responsive)
        <li>
            <span>Layout:</span>
            <span>Responsive</span>
        </li>
        @endisset

    </ul>
</header>