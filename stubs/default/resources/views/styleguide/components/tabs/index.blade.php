@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Tabs",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Tab Menus</h3>
        <p>All <code>ul</code> element contained by a <code>nav</code> element will have the generic menu styles applied to it.</p>
        <p>A <code>nav</code> element with a <code>.tabs</code> css class, will set up the tab navigation.</p>
        <p>Including a <code>section</code> element with <code>div</code>'s will create the tab panels.</p>
        <p>Javascript is being applied to the <code>.tabs</code> men to demonstration the functionality.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <nav class="tabs">
                <ul>
                    <li class="active"><button aria-selected="true" data-target="panel-1">tab 1</button></li>  
                    <li><button data-target="panel-2">tab 2</button></li>  
                    <li><button data-target="panel-3">tab 3</button></li>  
                    <li><button data-target="panel-4">tab 4</button></li>  
                </ul>
                <section>
                    <div class="active" data-panel="panel-1">This is the active panel.</div>
                    <div data-panel="panel-2">This is panel 2 content.</div>
                    <div data-panel="panel-3">This is panel 3 content.</div>
                    <div data-panel="panel-4">This is panel 4 content.</div>
                </section>
            </nav>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
          <pre>
            <code>
               {{ 
                "<nav class=\"tabs\">
                <ul>
                    <li class=\"active\">
                        <button aria-selected=\"true\" data-target=\"panel-1\">tab 1</button>
                    </li>  
                    <li><button data-target=\"panel-2\">tab 2</button></li>  
                    <li><button data-target=\"panel-3\">tab 3</button></li>  
                    <li><button data-target=\"panel-4\">tab 4</button></li>  
                </ul>
                <section>
                    <div class=\"active\" data-panel=\"panel-1\">This is the active panel.</div>
                    <div data-panel=\"panel-2\">This is panel 2 content.</div>
                    <div data-panel=\"panel-3\">This is panel 3 content.</div>
                    <div data-panel=\"panel-4\">This is panel 4 content.</div>
                </section>
            </nav>"
                }}
            </code>
          </pre>
        </div>
    </div>
@endsection

{{-- For more potential features for tabs, check out this link: https://get.foundation/sites/docs/tabs.html --}}