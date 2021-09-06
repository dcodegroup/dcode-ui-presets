@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Select Filters",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Select Filters</h3>
        <p>A select filter, unlike its name suggests, does not use a select input, but rather a hidden input with a button to trigger a menu drop down. Users can select a menu item to change the value of the hidden input field.</p>
        <p>A simple Javascript example is used to demonstrate this functionality.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <div class="form">
                <div class="select-filter-input">
                    <div>
                        <label for="search_by">Sort:</label>
                        <span>N/A</span>
                        <input type="hidden" name="search_by" id="sort_by" value="Date">
                        <button type="button">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </button>
                    </div>
                    <ul>
                        <li>
                            <button>Date</button>
                        </li>
                        <li>
                            <button>Title</button>
                        </li>
                        <li>
                            <button>Location</button>
                        </li>
                    </ul>
                </div>
                <div class="select-filter-input">
                    <div>
                        <label for="search_by">Filter:</label>
                        <span>N/A</span>
                        <input type="hidden" name="search_by" id="sort_by" value="Date">
                        <button type="button">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </button>
                    </div>
                    <ul>
                        <li>
                            <button>Active</button>
                        </li>
                        <li>
                            <button>Disabled</button>
                        </li>
                        <li>
                            <button>Draft</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
             <pre>
                 <code>
                     {{ "<div class=\"select-filter-input\">
                        <p>
                            <label for=\"search_by\">Filter:</label>
                            <span>N/A</span>
                            <input type=\"hidden\" name=\"search_by\" id=\"sort_by\" value=\"Date\">
                            <button type=\"button\">
                                <svg role=\"img\"  viewBox=\"0 0 448 512\">
                                    <path fill=\"currentColor\" d=\"M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 
                                    0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 
                                    24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569
                                    9.372-33.942 0z\">
                                    </path>
                                </svg>
                            </button>
                        </p>
                        <ul>
                            <li>
                                <button>Active</button>
                            </li>
                            <li>
                                <button>Disabled</button>
                            </li>
                            <li>
                                <button>Draft</button>
                            </li>
                        </ul>
                    </div>" }}
                 </code>
             </pre>
         </div>
    </div>
@endsection