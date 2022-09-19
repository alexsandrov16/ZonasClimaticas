<?php

namespace Make4U;

use Make4U\Core\Helper\Theme;

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
}
