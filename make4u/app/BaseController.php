<?php

namespace Make4U;

use Make4U\Core\Helper\Theme;
use Make4U\Core\Helper\Page;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class BaseController
{
    public function __construct()
    {
        
    }

    public function theme()
    {
        return new Theme;
    }

    public function Page()
    {
        return new Page;
    }
}
