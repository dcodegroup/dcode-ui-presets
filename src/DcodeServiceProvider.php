<?php

namespace Dcode\UiPresets;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class DcodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('dcode-preset-ui', function ($command) {
            DcodePreset::install();
            $command->info('Dcode preset scaffolding installed successfully.');

            // if ($command->option('auth')) {
            //     DcodePreset::installAuth();
            //     $command->info('Auth scaffolding installed successfully.');
            // }
            $command->comment('Please run "npm install && npm run dev" to compile your new assets.');
        });

        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');

        UiCommand::macro('dcode-preset-sass', function ($command) {
            DcodePreset::updateSass();
            $command->info('Dcode preset Sass base and components directories have been updated.');
            $command->comment('Run "npm run dev" to compile your updated Sass assets.');
        });
    }
}
