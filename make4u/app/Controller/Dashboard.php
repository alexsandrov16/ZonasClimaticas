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

    public function index($page = null,$alert = null)
    {
        return view(__FUNCTION__, [
            'title' => Make4U::_name . ' | Dashboard',
            'theme' => $this->theme(),
            'page' => $this->page($page),
            'alert'=>$alert
        ], true);
    }

    public function add()
    {
        if ($_POST) {
            $alert = (new Pages)->add($_POST, $_FILES);
            return $this->index(null, $alert);
        }
    }

    public function edit()
    {
        if ($_POST) {
            $alert =  (new Pages)->update($_POST, $_FILES);
            return $this->index(null, $alert);
        }
    }

    public function delete($page=null)
    {
        if (!empty($page)) {
            return Pages::delete($page);
        }
    }

    public function login()
    {
        $alert = null;
        if ($_POST) {
            $alert = (new Login)->logOn($_POST);
        }
        return view(__FUNCTION__, [
            'title' => Make4U::_name,
            'theme' => $this->theme(),
            'alert' => $alert
        ], true);
    }
    public function logout()
    {
        Login::logOff();
        redirect(env('site.dashboard'));
    }
}
