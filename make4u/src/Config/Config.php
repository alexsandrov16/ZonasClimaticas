<?php
namespace Make4U\Core\Config;

defined('MAKE4U') || die;

use Make4U\Core\File\Json;
use Make4U\Core\Traits\Singleton;

/**
 * undocumented class
 */
class Config
{
    use Singleton;

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    private function __construct()
    {
        $this->load();

        //Zona Horaria
        date_default_timezone_set(env('site.timezone'));

        //Set internal encoding.
        ini_set('default_charset', env('site.charset'));
        mb_internal_encoding(env('site.charset'));
    }

    /**
     * Cargar configuracion
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    private function load()
    {
        foreach (Json::get(_CFG . 'example') as $key => $value) {
            $key = strtoupper($key);

            //if (self::hasDisableFunc('putenv')) {
                $_ENV[$key] = $value;
            //} else {
            //    putenv("$key=$value");
            //}
        }
    }

    /**
     * Salvar configuracion
     *
     * Crea o edita fichero json con los valores pasado
     *
     * @param string $name nombre del fichero a crear o editar
     * @param array $data valores a escribir en el fichero
     * @return Json Devuelve fichero Json con los valores 
     **/
    static function save(String $name, array $data)
    {
        return Json::set(_CFG . $name, $data);
    }

    /**
     * Verificar funciones
     * 
     * Verifica que funciones PHP estan desactivadas
     * 
     * @param string $fun funcion PHP a verificar
     * @return bool
     */
    static function hasDisableFunc(String $fun)
    {
        if (in_array($fun, explode(', ', ini_get('disable_functions')))) {
            return true;
        }
        return false;
    }
}
