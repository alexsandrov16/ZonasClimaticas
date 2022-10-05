<?php
defined('MAKE4U') || die;

use Make4U\Controller\Dashboard;
use Make4U\Controller\FrontPage;
use Make4U\Core\Http\Request;
use Make4U\Core\Router\Rute;

$path = explode('/', str_replace(base(), '', (new Request)->getUri()));

$rute = new Rute;

if ($path[0] == env('site.dashboard')) {
    $rute->group('/' . env('site.dashboard'), function ($rute) {
        $rute->map(['get', 'post'], '/', [Dashboard::class]);
        $rute->post('/add', [Dashboard::class, 'add']);
        $rute->post('/edit', [Dashboard::class, 'edit']);
        $rute->get('/delete/(:any)', [Dashboard::class, 'delete']);
        $rute->get('/logout', [Dashboard::class, 'logout']);
        $rute->get('/(:any)', [Dashboard::class, 'index']);
    });
} else {
    $rute->get('/', [FrontPage::class]);
    $rute->get('/(:any)', function ($page) {
        echo "Other Page </br> Visited $page*" . env('site.dashboard');
    });
   /* $rute->get('/storage', function () {
        $bytes = disk_free_space(ABS_PATH);
        $base = 1024;
        //$cantidad = (($bytes/$base) / $base) / $base; // en MegaBYtes
        $cantidad = (($bytes / $base) / $base) / $base; // en GigaBYtes
        echo round($cantidad, 2) . ' GB disponibles de ...<br>'; // Imprime por ejemplo: 26295.1289062 MB


        disk_total_space(ABS_PATH);
        // echo 'user edit';
    });*/
}

//return var_dump($rute->getAll());
return $rute->routing();