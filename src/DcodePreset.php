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
        'axios' =>  '^0.21',
        'vue-loader' => '^15.9.6',
        'vue-template-compiler' => '^2.6',
        'vue'=> '^2.6',
    ];

    const NPM_PACKAGES_TO_REMOVE = [
        'lodash',
    ];

    public static function install()
    {
        static::updatePackages();

        $filesystem = new Filesystem();
        $filesystem->deleteDirectory(resource_path('sass'));
        $filesystem->deleteDirectory(resource_path('js'));

        $filesystem->copyDirectory(__DIR__ . '/../stubs/default', base_path());

        static::updateFile(base_path('app/Providers/RouteServiceProvider.php'), function ($file) {
            return str_replace("public const HOME = '/home';", "public const HOME = '/';", $file);
        });

        static::updateFile(base_path('app/Http/Middleware/RedirectIfAuthenticated.php'), function ($file) {
            return str_replace("RouteServiceProvider::HOME", "route('home')", $file);
        });
    }
    
    public static function updateSass()
    {
        $filesystem = new Filesystem();
        $filesystem->deleteDirectory(resource_path('sass/base'));
        $filesystem->copyDirectory(__DIR__ . '/../stubs/default/resources/sass/base/', resource_path('sass/base'));
        $filesystem->deleteDirectory(resource_path('sass/components'));
        $filesystem->copyDirectory(__DIR__ . '/../stubs/default/resources/sass/components/', resource_path('sass/components'));
    }
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
