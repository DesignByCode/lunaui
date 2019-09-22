<?php

namespace DesignByCode\LunaUi\Presets;

class LunaSass extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
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
            "luna-sass" => "1.x",
        ] + $packages;
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
        copy(__DIR__.'/luna-stubs/defaults.js', resource_path('js/defaults.js'));
    }

}
