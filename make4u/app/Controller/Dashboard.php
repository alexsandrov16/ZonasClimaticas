<?php

namespace Make4U\Controller;

use Make4U\BaseController;
use Make4U\Core\Cookies\Session;
use Make4U\Make4U;
use Make4U\Model\Login;
use Make4U\Model\Pages;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class Dashboard extends BaseController
{
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function __construct()
    {
        $session = new Session(['name' => env('session.name')]);
        $session->start();

        if (!$session::has('active')) {
            $this->login();
            die;
        }
    }

    public function index()
    {
        return view(__FUNCTION__,[
            'title'=> Make4U::_name.' | Dashboard',
            'theme' => $this->theme(),
        ],true);
    }

    public function add()
    {
        if ($_POST) {
            echo (new Pages)->add($_POST,$_FILES);
        }
    }

    public function login()
    {
        $alert = null;
        if ($_POST) {
            $alert = (new Login)->logOn($_POST);
        }
        return view(__FUNCTION__, [
            'title'=> Make4U::_name,
            'theme' => $this->theme(),
            'alert'=> $alert
        ], true);
    }
    public function logout()
    {
        Login::logOff();
        redirect(env('site.dashboard'));
    }
}
