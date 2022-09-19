<?php
namespace Mint\Controller;

defined('MINT') || die;

use Mint\App;
use Mint\Cookies\Session;
use Mint\Helper\Theme;
use Mint\Model\Login;
use Mint\Model\Pages;

/**
 * undocumented class
 */
class Dashboard
{
    public function __construct()
    {
        $this->theme = new Theme(env('adm_theme'));

        $session = new Session([
            'name' => env('session_name'),
            'gc_maxlifetime' => env('session_timeout'),
            'cookie_lifetime' => env('session_timeout')
        ]);

        $session->start();

        if (!$session::has('active')) {
            $this->login();
            die;
        }
    }

    public function index()
    {
        return view(__FUNCTION__, [
            'page_title' => 'Dashboard | ' . App::_name,
            'page' => $this->theme,
        ], true);
    }

    public function pages()
    {
        if ($_POST) {
            echo Pages::add($_POST);
        }

        return view(__FUNCTION__, [
            'page_title' => 'Pages | ' . App::_name,
            'page' => $this->theme
        ], true);
    }

    public function edtPage($page)
    {
        return view('edit', [
            'page_title' => 'Edit Page | ' . App::_name,
            'page' => $this->theme,
        ], true);
    }

    public function setting()
    {
        return view(__FUNCTION__, [
            'page_title' => 'Ajustes| ' . App::_name,
            'page' => $this->theme
        ], true);
    }

    public function login()
    {
        if ($_POST) {
            echo (new Login)->logOn($_POST);
        }
        return view('login', [
            'page_title' => 'Iniciar Sesión | ' . App::_name,
            'page' => $this->theme,
        ], true);
    }

    public function logoff()
    {
        Login::logOff();
        redirect('admin');
    }


    /**
     * Actions
     */
    public function add($action)
    {
        switch ($action) {
            case 'page':
                return Pages::add($_POST);
                break;
            
            default:
                # code...
                break;
        }
    }

    public function update($action)
    {
        switch ($action) {
            case 'page':
                return Pages::update($_POST);
                break;
            
            default:
                # code...
                break;
        }
    }

    public function delete($action)
    {
        switch ($action) {
            case 'page':
                return Pages::delete($_POST);
                break;
            
            default:
                # code...
                break;
        }
    }
}
