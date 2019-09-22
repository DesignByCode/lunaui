<?php

namespace DesignByCode\LunaUi\Presets;

use Illuminate\Support\Arr;
use Illuminate\Filesystem\Filesystem;

class Vue extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::removeSassFiles();
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updateBootstrapping();
        static::updateComponent();
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'resolve-url-loader' => '2.3.1',
            'sass' => '^1.20.1',
            'sass-loader' => '7.*',
            'vue' => '^2.5.17',
            'vue-template-compiler' => '^2.6.10',
            'jquery' => '^3.2',
            "path" =>  "^0.12.7",
            "copy-webpack-plugin" => "^4.x",
            "cross-env" => "^5.2.1",
            "imagemin-mozjpeg" => "^7.x",
            "imagemin-webpack-plugin" => "^2.x",
        ] + Arr::except($packages, [
            '@babel/preset-react',
            'react',
            'react-dom',
        ]);
    }



    /**
     * Update the example component.
     *
     * @return void
     */
    protected static function updateComponent()
    {
        (new Filesystem)->delete(
            resource_path('js/components/Example.js')
        );

        copy(
            __DIR__.'/vue-stubs/ExampleComponent.vue',
            resource_path('js/components/ExampleComponent.vue')
        );
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/vue-stubs/app.js', resource_path('js/app.js'));
    }

}
