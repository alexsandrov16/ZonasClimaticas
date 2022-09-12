<?php
namespace Make4U\Core\File;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class Json
{
    private const EXT = '.json';
    static function get(string $file)
    {
        return json_decode(file_get_contents($file.self::EXT), true);
    }

    static function set(string $name, array $data)
    {
        if (file_exists($file = $name . self::EXT)) {

            $config_file = json_decode(file_get_contents($file), true);

            foreach ($data as $key => $value) {
                if (array_key_exists($key, $config_file)) {
                    $config_file[$key] = $value;
                }
            }
            return file_put_contents($file, json_encode($config_file, JSON_PRETTY_PRINT), LOCK_EX);
        }

        return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
    }
}
