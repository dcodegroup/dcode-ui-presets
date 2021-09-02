@extends('layouts.app', [
    'bodyId' => "demo-pages",
])

@section('header')
    @include('sections.logo-menu')
@endsection

@section('content')
    <div class="show-layout">
        <aside class="job-list">
            <h2>Job List</h2>
            <hr>
            <div class="form">
                <p class="search-input">
                    <label for="search">Search for jobs</label>
                    <input type="text" name="search" id="search" placeholder="Search Jobs">
                    <button type="submit">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
                    </button>
                </p>
            </div>

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
                    <p>Adipisicing elit ratione, delectus?</p>
                </div>
                <div class="tile ">
                    <span class="badge bg-success box">G</span>
                    <p>Sit, amet consectetur adipisicing elit ratione.</p>
                </div>
            </div>
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
                <div class="tile bg-success">
                    <span class="badge bg-primary box">S</span>
                    <p>Consectetur adipisicing elit.</p>
                </div>
                <div class="tile ">
                    <span class="badge bg-success box">G</span>
                    <p>Ipsum dolor sit, amet</p>
                </div>
            </div>
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
                <div class="tile bg-success">
                    <span class="badge bg-primary box">S</span>
                    <p>Ratione, delectus amet adipisicing elit.</p>
                </div>
                <div class="tile ">
                    <span class="badge bg-success box">G</span>
                    <p>Amet consectetur adipisicing elit</p>
                </div>
            </div>
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
                <div class="tile bg-success">
                    <span class="badge bg-primary box">S</span>
                    <p> Ratione, delectus?</p>
                </div>
                <div class="tile ">
                    <span class="badge bg-success box">G</span>
                    <p>Lorem ipsum dolor sit, delectus?</p>
                </div>
            </div>
        </aside>
        <section>
            <nav class="tabs">
                <ul>
                    <li class="active"><button aria-selected="true" data-target="panel-1">tab 1</button></li>  
                    <li><button data-target="panel-2">tab 2</button></li>  
                    <li><button data-target="panel-3">tab 3</button></li>  
                    <li><button data-target="panel-4">tab 4</button></li>  
                </ul>
                <section>
                    <div class="active" data-panel="panel-1">
                        <div class="show-details">
                            <article>
                                <div class="align-center">
                                    <h3>Overview (#GC123)</h3>
                                    <div class="tag bg-success">Job Status</div>
                                </div>
                                <div class="panel">
                                    <h3>Job Title</h3>
                                </div>
                                <div class="panel">
                                    <h3>Section Title</h3>
                                    <div class="flex f-flow">
                                        <div class="meta-line">
                                            <label>Job Title</label>
                                            <p>Lorem, ipsum dolor.</p>
                                        </div>
                                        <div class="meta-line">
                                            <label>Date Created</label>
                                            <p>8.6.2021</p>
                                        </div>
                                        <div class="meta-line">
                                            <label>Location</label>
                                            <div>
                                                <p>2/112 Rokeby Street</p>
                                                <p>Collingwood VIC, 3066</p>
                                                <p>Australia</p>
                                            </div>
                                        </div>
                                        <div class="meta-line m-t-0">
                                            <div class="full-width">
                                                <div class="meta-line full-width">
                                                    <label>Client</label>
                                                    <p>Private</p>
                                                </div>
                                                <div class="meta-line full-width no-border">
                                                    <label>Builder</label>
                                                    <p>Pitman Builds</p>
                                                </div>  
                                            </div>                                      
                                        </div>
                                        <div class="meta-line">
                                            <label>Job Detail</label>
                                            <p>Lorem, ipsum dolor.</p>
                                        </div>
                                        <div class="meta-line">
                                            <label>Architect</label>
                                            <p>Joe Bloggs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <h3>Section Heading</h3>
                                    <div class="flex f-flow">
                                        <div class="meta-line">
                                            <label>Job Title</label>
                                            <p>Lorem, ipsum dolor.</p>
                                        </div>
                                        <div class="meta-line">
                                            <label>Heading title</label>
                                            <p>8.6.2021</p>
                                        </div>
                                        <div class="meta-line">
                                            <label>Contact</label>
                                            <p>Joe Bloggs</p>
                                        </div>
                                        <div class="meta-line">
                                            <label>Contact</label>
                                            <p>0400 000 000</p>
                                        </div>
                                        <div class="meta-line full-width">
                                            <label>Client</label>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quis, voluptates, consequatur architecto aperiam hic laudantium sit cupiditate error magnam, nihil nulla ea quibusdam sunt aut quia ullam ipsum?</p>
                                        </div>
                                     </div>
                                </div>
                            </article>
                            <aside>
                                <h3>Checklist</h3>
                                <div class="card">
                                    <header>
                                        <div>
                                            <p>Category title</p> 
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
                                        <div class="form">
                                            <label for="checklist-item-0" class="checkbox">
                                                <input type="checkbox" id="checklist-item-0" checked/>
                                                <span>Checklist Item Heading Title</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tile bg-success">
                                        <div class="form">
                                            <label for="checklist-item-1" class="checkbox">
                                                <input type="checkbox" id="checklist-item-1" checked/>
                                                <span>Checklist Item Heading Title</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div data-panel="panel-2">This is panel 2 content.</div>
                    <div data-panel="panel-3">This is panel 3 content.</div>
                    <div data-panel="panel-4">This is panel 4 content.</div>
                </section>
            </nav>
        </section>
    </div>
@endsection