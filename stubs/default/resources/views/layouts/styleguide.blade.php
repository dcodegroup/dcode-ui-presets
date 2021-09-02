@extends('layouts.base')

@section('body')
<main id="styleguide-layout">
    <aside>
        <header>
            <img src="{{ asset('/imgs/logos/dcode.svg') }}" alt="Dcode logo" width="50"/>
            <h1>Dcode Styleguide</h1>
        </header>
        <nav>
            <ul class="vertical">
                {{-- <li><a href="">Getting Started</a><li> --}}
                {{-- <li><a href="">Design Guidelines</a><li> --}}
                <li>
                    <a href="{{ route('styleguide.globals.index') }}">Globals</a>
                    <ul>
                        <li>
                            <a href="{{ route('styleguide.globals.buttons') }}">Buttons</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.globals.colours') }}">Colours</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.globals.typo') }}">Typography</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button>Components</button>
                    <ul>
                        <li>
                            <a href="{{ route('styleguide.components.alerts') }}">Alerts</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.badges') }}">Badges</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.cards') }}">Cards</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.forms') }}">Forms</a>
                            <ul>
                                <li>
                                    <a href="{{ route('styleguide.components.forms.checkboxes') }}">Checkboxes</a>
                                </li>
                                <li>
                                    <a href="{{ route('styleguide.components.forms.checkbox-btns') }}">Checkbox Buttons</a>
                                </li>
                                <li>
                                    <a href="{{ route('styleguide.components.forms.checkbox-toggles') }}">Checkbox Toggles</a>
                                </li>
                                <li>
                                    <a href="{{ route('styleguide.components.forms.checkbox-btn-groups') }}">Checkbox Button Groups</a>
                                </li>
                                <li>
                                    <a href="{{ route('styleguide.components.forms.search-inputs') }}">Search Inputs</a>
                                </li>
                                <li>
                                    <a href="{{ route('styleguide.components.forms.select-filters') }}">Select Filters</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('styleguide.components.forms.date-pickers') }}">Date Pickers</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.navs') }}">Navigation</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.tables') }}">Tables</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.tabs') }}">Tabs</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.tags') }}">Tags</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.components.tiles') }}">Tiles</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button>Layouts</button>
                    <ul>
                        <li>
                            <a href="{{ route('styleguide.layouts.breakpoints') }}">Breakpoints</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.layouts.flex') }}">Flex Columns</a>
                        </li>
                        <li>
                            <a href="{{ route('styleguide.layouts.grids') }}">CSS Grids</a>
                        </li>
                 
                    </ul>
                </li>  
                {{-- <li><a href="">Accessibility</a></li> --}}
            </ul>
        </nav>
    </aside>
    <section>
        @yield('content')
        @isset($slot)
        {{ $slot }}
        @endisset
    </section>
</main>
@endsection
