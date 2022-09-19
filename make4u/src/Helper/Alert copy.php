<?php

namespace Mint\Helper;

defined('MINT') || die;

/**
 * undocumented class
 */
class Alert
{
    static function info(string $message)
    {
        return self::notify($message, __FUNCTION__);
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
        <script>
        window.addEventListener('load', function() {
            var a = document.createElement("div");
            document.body.appendChild(a);
            a.className = 'alert $type';
            a.innerText = '$message';
            setTimeout(()=>{ a.classList.toggle('active') },500);
        });
        </script>
        EOF;
    }
}
