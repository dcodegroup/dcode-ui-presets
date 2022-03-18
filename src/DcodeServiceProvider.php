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
            $command->comment('Please run "npm i && npm run dev" to compile your new assets.');
        });
    }
}
