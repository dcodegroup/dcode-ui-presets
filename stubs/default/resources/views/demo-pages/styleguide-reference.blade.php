@extends('layouts.app', [
'bodyId' => "demo-pages",
])

@section('header')
@include('sections.logo-menu')
@endsection

@section('content')
<div class="styleguide-reference">
    <aside>
        <menu>
            <ul class="vertical">
                <li><a href="#buttons">Buttons</a></li>
                <li><a href="#colors">Colors</a></li>
                <li><a href="#typography">Typography</a></li>
                <li><a href="#badges">Badges</a></li>
                <li><a href="#cards">Cards</a></li>
                <li><a href="#checkbox-buttons">Checkbox Buttons</a></li>
                <li><a href="#checkbox-groups">Checkbox Groups</a></li>
                <li><a href="#checkbox-toggles">Checkbox Toggles</a></li>
                <!-- <li><a href="#select-filters">Select Filters</a></li> -->
                <li><a href="#menus">Menus</a></li>
                <li><a href="#tables">Tables</a></li>
                <li><a href="#tabs">Tabs</a></li>
                <li><a href="#tags">Tags</a></li>
                <li><a href="#tiles">Tiles</a></li>
                <li><a href="#modals">Modals</a></li>
                <li><a href="#side-panels">Side Panels</a></li>
                <li><a href="#date-pickers">Date Pickers</a></li>
            </ul>
        </menu>
    </aside>
    <section>
        <h2>Styleguide Reference</h2>
        <hr>
        <h3><a name="buttons">Buttons</a></h3>
        <div class="bg-whitest" style="padding: 1rem;">
            <p>Generic Buttons</p>
            <a href="#" class="button">Generic button</a>
            <a href="#" class="button primary">Button Primary</a>
            <a href="#" class="button secondary">Button Secondary</a>
            <a href="#" class="button success">Button Success</a>
        </div>
        <div>
            <p>Hollow Buttons</p>
            <a href="#" class="button -hollow">Button Hollow</a>
            <a href="#" class="button -hollow -success">Button Hollow Success</a>
        </div>
        <div class="bg-whitest" style="padding: 1rem;">
            <p>Small Buttons</p>
            <a href="#" class="button sml">Small Button </a>
        </div>
        <div class="bg-whitest" style="padding: 1rem;">
            <p>Buttons with Icons</p>
            <a href="#" class="button icon-left">Add List
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
                </svg>
            </a>
            <a href="#" class="button -hollow -success icon-right">View Tasks
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
                </svg>
            </a>
        </div>
        <hr>
        <h3><a name="colors">Colors</a></h3>
        <div class="cols-of-150">
            <div class="colour-block">
                <div class="bg-primary"></div>
                <p class="text-primary">Primary</p>
            </div>
            <div class="colour-block">
                <div class="bg-secondary"></div>
                <p class="text-secondary">Secondary</p>
            </div>
            <div class="colour-block">
                <div class="bg-success"></div>
                <p class="text-success">Success</p>
            </div>
            <div class="colour-block">
                <div class="bg-warning"></div>
                <p class="text-warning">Warning</p>
            </div>
            <div class="colour-block">
                <div class="bg-danger"></div>
                <p class="text-danger">Danger</p>
            </div>
        </div>
        <div class="cols-of-150">
            <div class="colour-block">
                <div class="bg-medium-gray"></div>
                <p class="text-medium-gray">Medium Gray</p>
            </div>
            <div class="colour-block">
                <div class="bg-dark-gray"></div>
                <p class="text-dark-gray">Dark Gray</p>
            </div>
            <div class="colour-block">
                <div class="bg-blackest"></div>
                <p class="text-blackest">Black</p>
            </div>
            <div class="colour-block bg-dark-gray">
                <div class="bg-light-gray"></div>
                <p class="text-light-gray">Light Gray</p>
            </div>
            <div class="colour-block bg-dark-gray">
                <div class="bg-off-white"></div>
                <p class="text-off-white">Off White</p>
            </div>
            <div class="colour-block bg-blackest">
                <div class="bg-whitest"></div>
                <p class="text-whitest">White</p>
            </div>
        </div>
        <hr>
        <div>
            <h3><a name="typography">Typography</a></h3>
            <h1>h1. This is a very large header.</h1>
            <h2>h2. This is a large header.</h2>
            <h3>h3. This is a medium header.</h3>
            <h4>h4. This is a moderate header.</h4>
            <h5>h5. This is a small header.</h5>
            <h6>h6. This is a tiny header.</h6>
            <p>p. This is paragraph text.</p>
            <small>small. This is tiny text.</small>
        </div>
        <hr>
        <div>
            <h3><a name="alerts">Alerts</a></h3>
            <header class="alert primary">
                <div>
                    <span>&#8505;</span>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert secondary">
                <div>
                    <span>&#9872;</span>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eveniet?</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert success">
                <div>
                    <span>&#10003;</span>
                    <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, explicabo?</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert warning">
                <div>
                    <span>&#10029;</span>
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, iusto!</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert danger">
                <div>
                    <span>&#9888;</span>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quisquam.</small>
                </div>
                <button>&#9747;</button>
            </header>
        </div>
        <hr>
        <div>
            <h3><a name="badges">Badges</a></h3>
            <div class="cols-of-50">
                <div>
                    <div class="badge bg-primary"></div>
                    <p class="text-primary">badge bg-primary</p>
                </div>
                <div>
                    <div class="badge bg-secondary"></div>
                    <p class="text-secondary">badge bg-secondary</p>
                </div>
                <div>
                    <div class="badge bg-success"></div>
                    <p class="text-success">badge bg-success</p>
                </div>
                <div>
                    <div class="badge bg-warning"></div>
                    <p class="text-warning">badge bg-warning</p>
                </div>
                <div>
                    <div class="badge bg-danger"></div>
                    <p class="text-danger">badge bg-danger</p>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <h3><a name="cards">Cards</a></h3>
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
        <div>
            <h3><a name="checkbox-buttons">Checkbox Buttons test123</a></h3>
            <form action="#" method="post">
                <label for="option-one" class="checkbox-btn">
                    <input type="checkbox" id="option-one" />
                    <span>Option 1</span>
                </label>
                <label for="option-two" class="checkbox-btn btn-warning">
                    <input type="checkbox" id="option-two" />
                    <span>Option 2</span>
                </label>
            </form>
        </div>

        <hr>
        <div>
            <h3><a name="checkbox-groups">Checkbox Button Groups</a></h3>
            <form action="#" method="post">
                <div class="btn-group">
                    <label for="option-one-a" class="checkbox-btn">
                        <input type="checkbox" id="option-one-a" />
                        <span>Option 1</span>
                    </label>
                    <label for="option-two-a" class="checkbox-btn">
                        <input type="checkbox" id="option-two-a" />
                        <span>Option 2</span>
                    </label>
                    <label for="option-three-a" class="checkbox-btn">
                        <input type="checkbox" id="option-three-a" />
                        <span>Option 3</span>
                    </label>
                </div>
            </form>
        </div>
        <hr>
        <div>
            <h3><a name="checkbox-toggles">Checkbox Toggles</a></h3>
            <form action="#" method="post">
                <label for="option_one" class="checkbox-toggle">
                    <span class="label-text">Option 1</span>
                    <input id="option_one" type="checkbox">
                    <span class="checkbox"></span>
                </label>
                <label for="option_two" class="checkbox-toggle">
                    <span class="label-text">Option 2</span>
                    <input id="option_two" type="checkbox">
                    <span class="checkbox"></span>
                </label>
                <label for="option_three" class="checkbox-toggle">
                    <span class="label-text">Option 3</span>
                    <input id="option_three" type="checkbox">
                    <span class="checkbox"></span>
                </label>
            </form>
        </div>
        <hr>
        <!-- <div>
            <h3><a name="select-filters">Select Filters</a></h3>
            <div class="form">
                <div class="select-filter-input">
                    <div>
                        <label for="search_by">Sort:</label>
                        <span>N/A</span>
                        <input type="hidden" name="search_by" id="sort_by" value="Date">
                        <button type="button">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                                class="svg-inline--fa fa-chevron-down fa-w-14" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                </path>
                            </svg>
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
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                                class="svg-inline--fa fa-chevron-down fa-w-14" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                </path>
                            </svg>
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
        <hr> -->
        <div>
            <h3><a name="menus">Menus</a></h3>
            <nav>
                <ul>
                    <li><a href="">menu 1</a></li>
                    <li><a href="">menu 2</a></li>
                    <li>
                        <button>menu 3</button>
                        <ul>
                            <li>
                                <a href="#">menu 3a</a>
                            </li>
                            <li>
                                <a href="#">menu 3b</a>
                            </li>
                            <li>
                                <a href="#">menu 3c</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">menu 4</a></li>
                    <li>
                        <a href="#">menu 5</a>
                        <ul class="right">
                            <li>
                                <a href="#">menu 5a</a>
                            </li>
                            <li>
                                <a href="#">menu 5b</a>
                            </li>
                            <li>
                                <a href="#">menu 5c</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <hr>
        <div>
            <h3><a name="tables">Tables</a></h3>
            <br>
            <div class="bg-whitest" style="padding: 1rem;">
                <p>Standard</p>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>User</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Last Record</th>
                            <th>Active</th>
                            <th>Last Modified By</th>
                            <th>Created At</th>
                            <th>Notes</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-header="Name">123abc</td>
                            <td data-header="User">John Doe</td>
                            <td data-header="Latitude"> -37.123309</td>
                            <td data-header="Longitude"> 140.354676</td>
                            <td data-header="Last Record">26/08/2021 11:39</td>
                            <td data-header="Active">Y</td>
                            <td data-header="Last Modified By">Jane Doe</td>
                            <td data-header="Created At">02/03/2020 20:30</td>
                            <td data-header="Notes">Notes</a></td>
                            <td class="actions"> ... </td>
                        </tr>
                        <tr>
                            <td data-header="Name">abc123</td>
                            <td data-header="User">Jane Doe</td>
                            <td data-header="Latitude"> -37.123309</td>
                            <td data-header="Longitude"> 140.354676</td>
                            <td data-header="Last Record">26/08/2021 11:39</td>
                            <td data-header="Active">Y</td>
                            <td data-header="Last Modified By">John Doe</td>
                            <td data-header="Created At">02/03/2020 20:30</td>
                            <td data-header="Notes">Notes</a></td>
                            <td class="actions"> ... </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p>Background rows</p>
                <table class="bg-rows">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>User</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Last Record</th>
                            <th>Active</th>
                            <th>Last Modified By</th>
                            <th>Created At</th>
                            <th>Notes</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-success">
                            <td data-header="Name">123abc</td>
                            <td data-header="User">John Doe</td>
                            <td data-header="Latitude"> -37.123309</td>
                            <td data-header="Longitude"> 140.354676</td>
                            <td data-header="Last Record">26/08/2021 11:39</td>
                            <td data-header="Active">Y</td>
                            <td data-header="Last Modified By">Jane Doe</td>
                            <td data-header="Created At">02/03/2020 20:30</td>
                            <td data-header="Notes">Notes</a></td>
                            <td class="actions"> ... </td>
                        </tr>
                        <tr class="bg-secondary text-whitest">
                            <td data-header="Name">abc123</td>
                            <td data-header="User">Jane Doe</td>
                            <td data-header="Latitude"> -37.123309</td>
                            <td data-header="Longitude"> 140.354676</td>
                            <td data-header="Last Record">26/08/2021 11:39</td>
                            <td data-header="Active">Y</td>
                            <td data-header="Last Modified By">John Doe</td>
                            <td data-header="Created At">02/03/2020 20:30</td>
                            <td data-header="Notes">Notes</a></td>
                            <td class="actions"> ... </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p>Striped</p>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>User</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Last Record</th>
                            <th>Active</th>
                            <th>Last Modified By</th>
                            <th>Created At</th>
                            <th>Notes</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-header="Name">123abc</td>
                            <td data-header="User">John Doe</td>
                            <td data-header="Latitude"> -37.123309</td>
                            <td data-header="Longitude"> 140.354676</td>
                            <td data-header="Last Record">26/08/2021 11:39</td>
                            <td data-header="Active">Y</td>
                            <td data-header="Last Modified By">Jane Doe</td>
                            <td data-header="Created At">02/03/2020 20:30</td>
                            <td data-header="Notes">Notes</a></td>
                            <td class="actions"> ... </td>
                        </tr>
                        <tr>
                            <td data-header="Name">abc123</td>
                            <td data-header="User">Jane Doe</td>
                            <td data-header="Latitude"> -37.123309</td>
                            <td data-header="Longitude"> 140.354676</td>
                            <td data-header="Last Record">26/08/2021 11:39</td>
                            <td data-header="Active">Y</td>
                            <td data-header="Last Modified By">John Doe</td>
                            <td data-header="Created At">02/03/2020 20:30</td>
                            <td data-header="Notes">Notes</a></td>
                            <td class="actions"> ... </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div>
            <h3><a name="tabs">Tabs</a></h3>
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
        <div>
            <h3><a name="tags">Tags</a></h3>
            <div class="bg-whitest cols-of-50" style="padding: 1rem;">
                <div>
                    <div class="tag" id="genericTag">Generic tag</div>
                </div>
                <div>
                    <div class="tag bg-primary">tag bg-primary</div>
                </div>
                <div>
                    <div class="tag bg-secondary">tag bg-secondary</div>
                </div>
                <div>
                    <div class="tag bg-success">tag bg-success</div>
                </div>
                <div>
                    <div class="tag bg-warning">tag bg-warning</div>
                </div>
                <div>
                    <div class="tag bg-danger">tag bg-danger</div>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <h3><a name="tiles">Tiles</a></h3>
            <div class="tile">
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
            </div>
            <div class="tile bg-primary">
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
            </div>
            <div class="tile bg-secondary">
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eveniet?</small>
            </div>
            <div class="tile bg-success">
                <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, explicabo?</small>
            </div>
            <div class="tile bg-warning">
                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, iusto!</small>
            </div>
            <div class="tile bg-danger">
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quisquam.</small>
            </div>
        </div>
        <hr>
        <div>
            <h3><a name="modals">Vue Modals</a></h3>
            <delete-modal-trigger></delete-modal-trigger>
        </div>
        <hr>
        <div>
            <h3><a name="side-panels">Vue Side Panels</a></h3>
            <job-panel-trigger></job-panel-trigger>
         </div>
         <hr>
         <div>
            <h3><a name="date-pickers">Vue Date Pickers</a></h3>
            <v-date-picker name="due_date" value="{{ Carbon\Carbon::now() }}"></v-date-picker>
        </div>
    </section>
</div>
 @endsection
