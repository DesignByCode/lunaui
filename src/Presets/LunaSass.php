<?php

namespace DesignByCode\LunaUi\Presets;


use Illuminate\Support\Arr;

class LunaSass extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::removeSassFiles();
        static::updatePackages();
        static::updateSass();
        static::updateWebpackConfiguration();
        static::updateBootstrapping();
        static::removeNodeModules();
        static::ensureImagesDirectoryExists();
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
            "luna-sass" => "^2.4",
            'resolve-url-loader' => '^2.3.1',
            'sass' => '^1.20.1',
            'sass-loader' => '^7.*',
            'jquery' => '^3.2',
            "path" =>  "^0.12.7",
            "copy-webpack-plugin" => "^4.x",
            "cross-env" => "^5.2.1",
            "imagemin-mozjpeg" => "^7.x",
            "imagemin-webpack-plugin" => "^2.x",
        ] + Arr::except($packages, [
            "vue",
            "vue-template-compiler",
            '@babel/preset-react',
            'react',
            'react-dom'
        ]);
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__.'/luna-stubs/_settings.sass', resource_path('sass/_settings.sass'));
        copy(__DIR__.'/luna-stubs/style.sass', resource_path('sass/style.sass'));
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/luna-stubs/bootstrap.js', resource_path('js/bootstrap.js'));
        copy(__DIR__.'/luna-stubs/app.js', resource_path('js/app.js'));
        copy(__DIR__.'/luna-stubs/defaults.js', resource_path('js/defaults.js'));
    }

}
