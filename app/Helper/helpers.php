<?php

use Outl1ne\NovaSettings\NovaSettings;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_set')) {
    function get_set($settingKey, $default = null)
    {

        if (!app()->isProduction()) {

            return NovaSettings::getSetting($settingKey, $default);

        }

        return Cache::rememberForever('setting_' . $settingKey, function () use ($settingKey, $default) {
            return NovaSettings::getSetting($settingKey, $default);
        });
    }
}
