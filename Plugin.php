<?php

namespace Hounddd\ThemeSwitcher;

use Illuminate\Support\Facades\Cookie;
use System\Classes\PluginBase;
use Winter\Storm\Support\Facades\Config;
use Winter\Storm\Support\Facades\Event;

/**
 * ThemeSelector Plugin Information File.
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'hounddd.themeswitcher::lang.plugin.name',
            'description' => 'hounddd.themeswitcher::lang.plugin.description',
            'author'      => 'Hounddd',
            'icon'        => 'icon-shuffle',
            'homepage'    => 'https://github.com/Hounddd/wn-themeswitcher-plugin',
        ];
    }

    public function boot()
    {
        Event::listen('cms.theme.getActiveTheme', function () {
            return Cookie::get('cmsActiveTheme', Config::get('cms.activeTheme'));
        });
    }
}
