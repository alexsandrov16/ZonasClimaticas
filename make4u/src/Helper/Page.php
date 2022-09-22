<?php

namespace Make4U\Core\Helper;

use Make4U\Core\File\Json;
use Make4U\Core\Traits\Singleton;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class Page
{
    use Singleton;

    private function __construct($page)
    {
        $this->page = $page;
        if (!empty($page)) {
            $this->decode = Json::get(_PAGES . $this->page . DS . 'index');
        } else {
            $this->decode = '';
        }
    }

    public function title()
    {
        if (is_array($this->decode)) {
            return $this->decode[__FUNCTION__];
        }
        return $this->decode;
    }

    public function description()
    {
        if (is_array($this->decode)) {
            return $this->decode[__FUNCTION__];
        }
        return $this->decode;
    }

    public function image()
    {
        if (is_array($this->decode)) {
            return $this->decode[__FUNCTION__];
        }
        return base('make4u/assets/img/default.png');
    }

    public function slug()
    {
        if (is_array($this->decode)) {
            return $this->decode[__FUNCTION__];
        }
        return $this->decode;
    }

    public function content()
    {
        if (is_array($this->decode)) {
            return json_encode($this->decode[__FUNCTION__]);
        }
        return '{}';
    }
}
