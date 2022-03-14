<?php

namespace Dcode\UiPresets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Laravel\Ui\Presets\Preset;

class DcodePreset extends Preset
{
    const NPM_PACKAGES_TO_ADD = [
        'resolve-url-loader' => '^3.1',
        'sass' => '^1.32',
        'sass-loader' => '^8.0',
        'postcss-import' => '^12.0',
        'axios' => '^0.21',
        'vue-loader' => '^15.9.6',
        'vue-template-compiler' => '^2.6',
        'vue' => '^2.6',
        "@dcodegroup-au/sass-lib" => "^0.0.7",
        "@dcodegroup-au/vue-datepicker" => "^0.0.4",
        "@dcodegroup-au/vue-multiselect" => "0.0.4",
        '@dcodegroup-au/vuetable-3' => '^4.0.2',
        'v-click-outside' => '^3.1.2',
    ];

    const NPM_PACKAGES_TO_REMOVE = [
        'lodash',
    ];

    public static function install()
    {
        static::updatePackages();

        $filesystem = new Filesystem();
        $filesystem->deleteDirectory(resource_path('css'));
        $filesystem->deleteDirectory(resource_path('sass'));
        $filesystem->deleteDirectory(resource_path('js'));
        $filesystem->copyDirectory(__DIR__ . '/../stubs/default', base_path());
    }
    
    // public static function updateSass()
    // {
    //     $filesystem = new Filesystem();
    //     $filesystem->deleteDirectory(resource_path('sass/preset'));
    //     $filesystem->copyDirectory(__DIR__ . '/../stubs/default/resources/sass/preset/', resource_path('sass/preset'));
    // }
    // public static function installAuth()
    // {
    //     $filesystem = new Filesystem();
    //     $filesystem->copyDirectory(__DIR__ . '/../stubs/auth', base_path());
    // }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::NPM_PACKAGES_TO_ADD,
            Arr::except($packages, static::NPM_PACKAGES_TO_REMOVE)
        );
    }

    /**
     * Update the contents of a file with the logic of a given callback.
     */
    protected static function updateFile(string $path, callable $callback)
    {
        $originalFileContents = file_get_contents($path);
        $newFileContents = $callback($originalFileContents);
        file_put_contents($path, $newFileContents);
    }
}
