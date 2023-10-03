<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Hounddd\ThemeSwitcher\Classes')
    ->middleware('web')
    ->prefix('theme-switcher')
    ->group(function () {
        Route::get('/use/{theme}', 'ThemeController@use')->name('themeswitcher::use');
        Route::get('/restore', 'ThemeController@restore')->name('themeswitcher::restore');
    });
