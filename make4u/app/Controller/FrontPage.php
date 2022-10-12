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

    public function pages($page)
    {
        return view(__FUNCTION__, [
            'theme' => $this->theme(),
            'title' => $this->data($page)['title'],
            'description' => $this->data($page)['description'],
            'page' => $this->data($page)['content'],
        ]);
    }
}
