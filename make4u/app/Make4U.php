<?php

namespace Make4U;

defined('MAKE4U') || die;

use Make4U\Core\Config\Config;
use Make4U\Core\Debug\ErrorHandler;

/**
 * undocumented class
 */
class Make4U
{
    const _name = 'Make4U';
    const _version = '0.1 alpha';
    const php_version = 7.4;
    static $modules = ['mbstring', 'json'];

    public function __construct()
    {
        $this->requirements();

        //iniciando configuracion
        Config::init();

        //Manejador de excepciones
        (new ErrorHandler(env('site.debug')))->start();

        return $this->run();
    }

    private function requirements()
    {
        if (version_compare(PHP_VERSION, self::php_version, '<')) die(sprintf('<b>%s</b> no es compatible con PHP %s, actualice PHP a una versión superior a la <u>%s</u>', self::_name, PHP_VERSION, self::php_version));

        foreach (self::$modules as $mod) {
            if (!extension_loaded($mod)) die(sprintf('<b>%s</b> necesita tener activa la extención <u>%s</u>.', self::_name, $mod));
        }
    }

    private function install()
    {
        require_once ABS_PATH . 'install.php';
    }

    private function run()
    {
        if (!file_exists(_CFG.'site.json')) return $this->install();
        return require ABS_PATH.'make4u/router.php';
    }
}
