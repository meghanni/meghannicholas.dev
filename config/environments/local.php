<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG') ?? true);
