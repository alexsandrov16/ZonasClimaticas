<?php

namespace Make4U\Controller;

use Make4U\BaseController;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class FrontPage extends BaseController
{
    public function index()
    {
        return view(__FUNCTION__, [
            'title' => env('site.name'),
            'description' => env('site.description'),
            'theme' => $this->theme(),
        ]);
    }

    public function pages()
    {
        $this->data();
        /* return view(__FUNCTION__, [
            ''=>,
        ]);*/
    }
}
