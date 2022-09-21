<?php

namespace Make4U\Model;

defined('MAKE4U') || die;

use Make4U\Core\Cookies\Session;
use Make4U\Core\File\Json;
use Make4U\Core\Helper\Alert;


/**
 * undocumented class
 */
class Login
{
    public function logOn(array $post)
    {
        if ($this->checkUser($post['user'])) {
            
            $data = Json::get(_USRS . $post['user']);
            if ($this->checkPass($post['pass'], $data['hash'])) {
                #Session
                Session::set('active', true);
                //Session::set('username', $data['name']);

                return redirect(env('site.dashboard'));
            }
            return Alert::danger('Contraseña incorrecta');
        }

        return Alert::danger('Usuario incorrecto');
        //return 'Usuario incorrecto';
    }

    static function logOff()
    {
        Session::destroy();
    }

    private function checkUser(string $user)
    {
        return file_exists(_USRS . "$user.json") ? true : false;
    }

    private function checkPass(string $pass, string $hash)
    {
        return password_verify($pass, $hash) ? true : false;
    }
}
