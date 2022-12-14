<?php
defined('MAKE4U') || die;

use Make4U\Core\Config\Config;
use Make4U\Core\Http\Response;

/**
 * Environment
 *
 * Devuelve valores de las variables de entorno
 *
 * @param string $name Nombre de la variable de entorno
 * @return mixed 
 **/
function env(string $name)
{
    $array = explode('.',$name);
    /*$name = strtoupper($name);
    return Config::hasDisableFunc('putenv') ? $_ENV[$name] : getenv($name);*/
    return $_ENV[strtoupper($array[0])][$array[1]];
}

/**
 * undocumented function summary
 *
 * Undocumented function long description
 *
 * @param Type $var Description
 * @return type
 * @throws conditon
 **/
function source($file, $line, $limit_line = 15)
{

    ini_set('highlight.default', '"class="default');
    ini_set('highlight.keyword', '"class="keyword');
    ini_set('highlight.string',  '"class="string');
    ini_set('highlight.html',    '"class="html');
    ini_set('highlight.comment', '"class="comment');

    $source = highlight_file($file, true);
    $source = str_replace(["\r\n", "\r", "\n", '<code>', '</code>'], '', $source);
    $source = str_replace('style="color: "', '', $source);

    //linea a comensar y terminar
    $start = max($line - ($limit_line - 1) / 2, 1);
    $end = $line + ($limit_line - 1) / 2;

    $out = "";

    foreach (explode("<br />", $source) as $n => $value) {
        $n++;

        if ($n == $line) {
            $out .= "<p class='line-error'><span class='number'>$n </span> $value\n</p>";
        }

        if ($n >= $start && $n != $line && $n <= $end) {
            $out .= "<span class='number'>$n </span> $value\n";
        }
    }

    return "<pre><code>$out</code></pre>";
}

/**
 * undocumented function summary
 *
 * Undocumented function long description
 *
 * @param Type $var Description
 * @return mixed
 * @throws conditon
 **/
function view(string $filename, array $data, bool $adm = false)
{
    $file = ($adm) ? _APP . "View/panel/$filename.php" : _THEMES . env('site.theme') . DS . "$filename.php";

    foreach ($data as $key => $value) {
        $$key = $value;
    }

    if (file_exists($file)) {
        ob_start();
        include $file;
        return ob_flush();
    }
    noFound();
}

/**
 * undocumented function summary
 *
 * Undocumented function long description
 *
 * @param Type $var Description
 * @return mixed
 * @throws conditon
 **/
function redirect(string $path = null)
{
    return preg_match('#http://#', $path) ? header("Location:$path") : header('Location:' . base($path));
}

/**
 * undocumented function summary
 *
 * Devuelve la ruta base de la aplicacion
 *
 * @param string $path path de la ruta a devolver
 * @return string
 **/
function base(string $path = null)
{
    return env('site.url') . "/$path";
}

/**
 * undocumented function summary
 *
 * Devuelve error 404
 *
 * @return 
 **/
function noFound()
{

    new Response(404, []);
    if (ob_get_length()) ob_end_clean();

    /*require _THEMES . "errors/404.php";
    ob_flush();
    return ob_end_clean();*/echo 404;
}