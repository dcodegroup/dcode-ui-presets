@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
'heading' => "Cards",
'devReady' => false,
])
<div class="content">
    <h3>Cards</h3>
    <p>Cards can be included using the <code>.card</code> css class.</p>
    <p>Including a <code>&lt;header&gt;</code> element will produce a flex container with space-between and align-center flex settings.</p>
    <p>Adding a <code>&lt;div&gt;</code> inside the <code>&lt;header&gt;</code> element will provide another flex container with align center settings.</p>
    <hr>
    <h3>HTML Demo</h3>
    <div class="demo">
        <div class="card">
            <header>
                <div>
                    <span class="badge bg-primary"></span>
                    <p>Card title</p> 
                </div>
                <nav> 
                    <ul>
                        <li>
                            <button><span>...</span></button>
                            <ul class="right">
                                <li><a href="">menu 1</a></li>  
                                <li><a href="">menu 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="tile">
                <span class="badge bg-primary box">S</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, delectus?</p>
            </div>
            <div class="tile ">
                <span class="badge bg-success box">G</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, delectus?</p>
            </div>
        </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <div class="demo">
        <pre>
            <code>
                {{ "<div class=\"card\">
                    <header>
                        <div>
                            <span class=\"badge bg-primary\"></span>
                            <p>Card title</p> 
                        </div>
                        <nav> 
                            <ul>
                                <li>
                                    <button><span>...</span></button>
                                    <ul class=\"right\">
                                        <li><a href=\"#\">menu 1</a></li>  
                                        <li><a href=\"#\">menu 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    <div class=\"tile\">
                        <span class=\"badge bg-primary box\">S</span>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, delectus?</p>
                    </div>
                    <div class=\"tile\">
                        <span class=\"badge bg-success box\">G</span>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, delectus?</p>
                    </div>
                </div>" }}
            </code>
        </pre>
    </div>
    <hr>
    <h3>Selected Card</h3>
    <p>Cards can  have a <code>.selected</code> css class included to add a dark border and heading.</p>
    <hr>
    <h3>HTML Demo</h3>
    <div class="demo">
        <div class="card selected">
            <header>
                <div>
                    <span class="badge bg-primary"></span>
                    <p>Card title</p> 
                </div>
                <nav> 
                    <ul>
                        <li>
                            <button><span>...</span></button>
                            <ul class="right">
                                <li><a href="">menu 1</a></li>  
                                <li><a href="">menu 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="tile bg-success">
                <span class="badge bg-primary box">S</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, delectus?</p>
            </div>
            <div class="tile ">
                <span class="badge bg-success box">G</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, delectus?</p>
            </div>
        </div>
    </div>

</div>
@endsection


{{-- For extra features to include check this reference: https://www.lightningdesignsystem.com/components/cards/#site-main-content --}}