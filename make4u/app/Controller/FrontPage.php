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

    public function pages(string $page)
    {
        $page = $this->data($page);
        return view(__FUNCTION__, [
            'title'=> $page['title'],
            'description' => $page['description'],
            'theme' => $this->theme(),
            'page' => $page['content']['blocks']
        ]);
    }
}
