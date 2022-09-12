<?php
defined('MAKE4U') || die;

/**
 * @package Autoload PSR4
 */

$namespace = [
    'Make4U'        => 'make4u/app',
    'Make4U\Core'        => 'make4u/src',
];

spl_autoload_register(function ($class) use ($namespace) {
    foreach ($namespace as $key => $value) {
        $len = strlen($key);
        $file = str_replace(['\\', '/'], DS, ABS_PATH . $value . substr($class, $len) . '.php');

        if (is_readable($file)) {
            return require_once $file;
        }
    }
    die("<pre>Error in class <b>{$class}</b>. Not found {$file}</pre>");
});