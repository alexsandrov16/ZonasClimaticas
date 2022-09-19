<?php
defined('MAKE4U') || die;

use Make4U\Controller\Dashboard;
use Make4U\Core\Http\Request;
use Make4U\Core\Router\Rute;

$path = explode('/', str_replace(base(), '', (new Request)->getUri()));

$rute = new Rute;

$e = 'Make4U\Controller\Dashboard';

if ($path[0] == env('site.dashboard')) {
    $rute->group('/' . env('site.dashboard'), function ($rute) {
        $rute->map(['get', 'post'], '/', [Dashboard::class]);

        //Pages
        $rute->group('/pages', function ($rute) {
            $rute->map(['get', 'post'], '/add', [Dashboard::class, 'add']);
            $rute->map(['get', 'post'], '/(:alphanum)', [Dashboard::class, 'edit']);
        });
    });
} else {
    $rute->get('/', function () {
        echo 'Hello Men';
    });
    $rute->get('/(:any)', function ($page) {
        echo "Other Page </br> Visited $page*" . env('site.dashboard');
    });
    $rute->get('/storage', function () {
        $bytes = disk_free_space(ABS_PATH);
        $base = 1024;
        //$cantidad = (($bytes/$base) / $base) / $base; // en MegaBYtes
        $cantidad = (($bytes / $base) / $base) / $base; // en GigaBYtes
        echo round($cantidad, 2) . ' GB disponibles de ...<br>'; // Imprime por ejemplo: 26295.1289062 MB


        disk_total_space(ABS_PATH);
        // echo 'user edit';
    });
}

//return var_dump($rute->getAll());
return $rute->routing();

/*
$rute->get('/', ['Mint\Controller\FrontPage']);

//Dashboard
$rute->map(['get', 'post'], '/admin', ['Mint\Controller\Dashboard']);

//Pages
//page
$rute->map(['get', 'post'], '/admin/pages', ['Mint\Controller\Dashboard', 'pages']);
//edit
$rute->get('/admin/pages/(:alphanum)', ['Mint\Controller\Dashboard', 'edtPage']);


//setting
$rute->get('/admin/settings', ['Mint\Controller\Dashboard', 'setting']);

//login and logout
$rute->post('/admin/login', ['Mint\Controller\Dashboard', 'login']);
$rute->get('/admin/off', ['Mint\Controller\Dashboard', 'logoff']);

//Actions
//add 
$rute->post('/admin/add/(:alpha)', ['Mint\Controller\Dashboard', 'add']);
//update 
$rute->post('/admin/update/(:alpha)', ['Mint\Controller\Dashboard', 'update']);
//del 
$rute->post('/admin/delete/(:alpha)', ['Mint\Controller\Dashboard', 'delete']);
*/