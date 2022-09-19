<?php

namespace Make4U\Controller;

use Make4U\BaseController;
use Make4U\Core\Cookies\Session;

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
        echo 'one';
    }

    public function login()
    {
        return view(__FUNCTION__, [
            'theme' => $this->theme(),
        ], true);
    }
}
