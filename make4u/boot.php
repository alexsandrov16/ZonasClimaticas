<?php
defined('MAKE4U') || die;

/**
 * Botstrap app
 * 
 * Este proceso configura las constantes de ruta, carga nuestro
 * cargador automático, junto con el de Composer, carga nuestras funciones 
 * y activa un arranque específico del entorno.
 * 
 * @package
 */

//Constants
define('START_MEMORY', memory_get_usage());
define('START_TIME', microtime(true));

//Directory
define('DS', DIRECTORY_SEPARATOR);
define('ABS_PATH', dirname(__DIR__) . DS);
//
define('_BIN', ABS_PATH . 'bin');
define('_BCKP', ABS_PATH . 'content' . DS . 'backup' . DS);
define('_CFG', ABS_PATH . 'content' . DS . 'config' . DS);
define('_DAT', ABS_PATH . 'content' . DS . 'data' . DS);
define('_LOGS', ABS_PATH . 'content' . DS . 'logs' . DS);
define('_MEDIA', ABS_PATH . 'content' . DS . 'media' . DS);
define('_PAGES', ABS_PATH . 'content' . DS . 'pages' . DS);
define('_PLUGINS', ABS_PATH . 'content' . DS . 'plugins' . DS);
define('_THEMES', ABS_PATH . 'content' . DS . 'themes' . DS);
define('_USRS', ABS_PATH . 'content' . DS . 'users' . DS);
//
define('_APP', ABS_PATH . 'make4u' . DS . 'app' . DS);

//Autoloader PSR4
require_once 'autoload.php';

//Functions 
require_once 'common.php';

return new Make4U\Make4U();
