# Theme Switcher

![ThemeSwitcher Plugin](https://github.com/hounddd/wn-themeswitcher-plugin/blob/main/.github/ThemeSwitcher-plugin.png?raw=true)

Demo any theme installed in Winter CMS by visiting a defined URL.


## Installation
*Let assume you're in the root of your wintercms installation*

### Using composer
Just run this command
```bash
composer require hounddd/wn-themswitcher-plugin
```

### Clone
Clone this repo into your winter plugins folder.


```bash
cd plugins
mkdir hounddd && cd hounddd
git clone https://github.com/Hounddd/wn-themeswitcher-plugin themeswitcher
```
> **Note**:
> In both cases, run `php artisan winter:up` command to run plugin's migrations or logout and login backend.


## Usage

Visit the followinf urls
 - **To demo** a theme : `/theme-switcher/use/theme-name`, where `theme-name` is one of your website themes.
 - **To restore** default theme : `/theme-switcher/restore`

## Config

By default, switching theme is limited to authenticated administrators.  
To authorise all visitors to switch to another theme, create a config file `/config/hounddd/themeswitcher.php` and set `onlyBackendUsers` to false: 
```php
<?php

return [
    'onlyBackendUsers' => false,
];

```
For more help see [Winter documentation](https://wintercms.com/docs/plugin/settings#file-based-configuration) related to file-based configuration.

## 🏆 Credits

Inspired by [Flynsarmy.ThemeSelecter](https://github.com/Flynsarmy/oc-themeselecter-plugin)

***
Make awesome sites with ❄ [WinterCMS](https://wintercms.com)!