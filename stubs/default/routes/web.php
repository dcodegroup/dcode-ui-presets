<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');
Route::view('reference', 'demo-pages/styleguide-reference')->name('reference');

Route::group([
    'prefix' => 'layouts',
    'as' => 'layouts.'
    ], function(){
        Route::view('/list', 'demo-pages/list')->name('list');
}); 

Route::group([
    'as' => 'styleguide.'
], 
function(){
    Route::group([
        'prefix' => 'globals',
        'as' => 'globals.'
    ],
    function(){
        Route::view('/', 'styleguide/globals/index')->name('index');
        Route::view('/buttons', 'styleguide/globals/buttons')->name('buttons');
        Route::view('/colours', 'styleguide/globals/colours')->name('colours');
        Route::view('/typography', 'styleguide/globals/typography')->name('typo');
    });
    Route::group([
        'prefix' => 'components',
        'as' => 'components.'
    ],
    function(){
        Route::view('/alerts', 'styleguide/components/alerts/index')->name('alerts'); 
        Route::view('/badges', 'styleguide/components/badges/index')->name('badges');
        Route::view('/cards', 'styleguide/components/cards/index')->name('cards');

        Route::view('/forms', 'styleguide/components/forms/index')->name('forms');
        Route::group([
            'prefix' => 'forms',
            'as' => 'forms.'
        ], function(){
            Route::view('/checkboxes', 'styleguide/components/forms/checkboxes')->name('checkboxes');
            Route::view('/checkbox-buttons', 'styleguide/components/forms/checkbox-buttons')->name('checkbox-btns');
            Route::view('/checkbox-toggles', 'styleguide/components/forms/checkbox-toggles')->name('checkbox-toggles');
            Route::view('/checkbox-button-groups', 'styleguide/components/forms/checkbox-button-groups')->name('checkbox-btn-groups');
            Route::view('/date-pickers', 'styleguide/components/forms/date-pickers')->name('date-pickers');
            Route::view('/search-input', 'styleguide/components/forms/search-inputs')->name('search-inputs');
            Route::view('/select-filters', 'styleguide/components/forms/select-filters')->name('select-filters');
            Route::view('/multi-selects', 'styleguide/components/forms/multi-select')->name('multi-select');
        });
        Route::view('/navigation', 'styleguide/components/navigation/index')->name('navs');
        Route::view('/tabs', 'styleguide/components/tabs/index')->name('tabs'); 
        Route::view('/tags', 'styleguide/components/tags/index')->name('tags');
        Route::view('/tables', 'styleguide/components/tables/index')->name('tables');
        Route::view('/tiles', 'styleguide/components/tiles/index')->name('tiles');
        Route::view('/modals', 'styleguide/components/modals/index')->name('modals');
        Route::view('/side-panels', 'styleguide/components/side-panels/index')->name('side-panels');
    });

    Route::group([
        'prefix' => 'layouts',
        'as' => 'layouts.'
        ], function(){
            Route::view('/grids', 'styleguide/layouts/grids')->name('grids');
            Route::view('/flex', 'styleguide/layouts/flex')->name('flex');
            Route::view('/breakpoints', 'styleguide/layouts/breakpoints')->name('breakpoints');
    });
    Route::get('api/table-demo', function(){
        return (object) [
            "data" => [
                (object) [
                    "job_number" => "123",
                    "title"=> "This is the first",
                    "client"=> "Joe Bloggs",
                    "location"=> "Somewhere 123 Street",
                    "amount"=> "N/A",
                    "status"=> "Approved",
                    "links"=> (object)[
                        "show"=> (object)[
                        "link"=> "#",
                        "label"=> "View Job"
                        ]
                    ],
                    "actions"=> (object)[
                        "edit"=> (object)[
                            "link"=> "#",
                            "label"=> "Edit"
                        ],
                        "delete"=> (object)[
                            "link"=> "#",
                            "label"=> "Delete"
                        ]
                    ]
                ],
                (object) [
                    "job_number" => "234",
                    "title"=> "This is the Second",
                    "client"=> "Joe Doe",
                    "location"=> "Something 321 Street",
                    "amount"=> "33",
                    "status"=> "In Progress",
                    "links"=> (object)[
                        "show"=> (object)[
                        "link"=> "#",
                        "label"=> "View Job"
                        ]
                    ],
                    "actions"=> (object)[
                        "edit"=> (object)[
                            "link"=> "#",
                            "label"=> "Edit"
                        ],
                        "delete"=> (object)[
                            "link"=> "#",
                            "label"=> "Delete"
                        ]
                    ]
                ]
            ]
        ];
    })->name('api.table-demo');
});