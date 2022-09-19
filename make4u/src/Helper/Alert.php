<?php

namespace Make4U\Core\Helper;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class Alert
{
    static function info(string $message)
    {
        return self::notify($message, 'primary');
    }

    static function success(string $message)
    {
        return self::notify($message, __FUNCTION__);
    }

    static function warning(string $message)
    {
        return self::notify($message, __FUNCTION__);
    }

    static function danger(string $message)
    {
        return self::notify($message, __FUNCTION__);
    }

    private static function notify(string $message, string $type)
    {
        return <<<EOF
        <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="alert" class="toast align-items-center text-bg-$type border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
        <div class="toast-body">$message</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        </div>
        </div>
        EOF;
    }
}
