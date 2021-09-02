@extends('layouts.app', [
    'bodyId' => "demo-pages",
])

@section('header')
    @include('sections.logo-menu')
@endsection

@section('content')
    <div>
        @include('sections.refines')
        <table class="bg-rows">
            <thead>
              <tr>
                <th>Job Title</th>
                <th>Client</th>
                <th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Account</th>
                <th>Amount</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 14; $i++)
              <tr>
                <td data-header="Job Title">123abc</td>
                <td data-header="Client">John Doe</td>
                <td data-header="Location">2/112 Rokeby Street Collingwood VIC</td>
                <td data-header="Start Date">29.07.2021</td>
                <td data-header="End Date">15.08.2021</td>
                <td data-header="Account">Premium</td>
                <td data-header="Amount">$110.00</td>
                <td data-header="Status">
                    <span class="tag bg-success">Job Status</span>
                </td>
                <td class="actions"> 
                    <nav>
                        <ul>
                            <li>
                                <button>...</button>
                                <ul class="right">
                                    <li>
                                        <a href="#">menu 1a</a>
                                    </li>
                                    <li>
                                        <a href="#">menu 1b</a>
                                    </li>
                                    <li>
                                        <a href="#">menu 1c</a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>
                    </nav>   
                </td>
              </tr>
              @endfor
            </tbody>
        </table>
    </div>
@endsection