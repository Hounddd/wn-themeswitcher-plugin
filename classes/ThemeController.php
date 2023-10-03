<?php

namespace Hounddd\ThemeSwitcher\Classes;

use Backend\Facades\BackendAuth;
use Cms\Classes\Theme;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Winter\Storm\Support\Facades\Config;

class ThemeController extends BaseController
{
    /**
     * Cookie name used to store active theme
     */
    protected static string $cookie_name = 'cmsActiveTheme';

    /**
     * Set active cookie theme and redirect
     *
     * @param string $theme Theme directory name
     */
    public function use(string $theme): RedirectResponse
    {
        if (Config::get('hounddd.themeswitcher::onlyBackendUsers', true) && !BackendAuth::check()) {
            return  Redirect::to('/');
        }

        if (Theme::exists($theme)) {
            $cookie = Cookie::forever(self::$cookie_name, $theme);
        } else {
            $cookie = Cookie::forget(self::$cookie_name);
        }

        return Redirect::to('/')->withCookie($cookie);
    }

    /**
     * Unset active theme cookie and redirect
     */
    public function restore(): RedirectResponse
    {
        $cookie = Cookie::forget(self::$cookie_name);

        return Redirect::to('/')->withCookie($cookie);
    }
}
