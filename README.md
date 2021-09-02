
## Installing DPres  
In order to run the Dcode preset we need to include the Laravel Ui package:
```composer require laravel/ui```
ToDo: Lets look for other options instead of laravel/ui. This is a not a recommended package.

Include a namespace reference to the Dcode Preset from the root composer.json 
```
"autoload-dev": {
    "psr-4": {
        "Dcode\\UiPresets\\": "ui-presets/dcode/src/"
    }
},
```
Include a reference to the DcodeServiceProvider in the app Service Provider class.
``` Dcode\UiPresets\DcodeServiceProvider::class, ```

## Running Preset
Refresh the composer autoloaded classes:
```composer dump-autoload```

To build the preset boilerplate, run the following command:
```php artisan ui dpres```

 