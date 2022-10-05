<?php

namespace Make4U\Core\Helper;

defined('MAKE4U') || die;

use Make4U\Core\Http\Request;

/**
 * undocumented class
 */
class Theme
{
    /**
     * Meta Etiquetas
     *
     * Devuelve las meta-etiquetas a utilizar en la plantilla
     *
     * @return object
     **/
    public function metaTag(string $title, string $description = null)
    {
        $site = env('site.name');
        $site_desc = env('site.description');
        $charset = env('site.charset');
        return <<<HTML
            <meta charset="$charset">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="generator" content="Mint">
            <title>$title</title>
            <meta name="description" content="$description">
            <meta name="keyworks" content="">
            <!--Social-->
            {$this->social($site,$site_desc)}
            <!--Favicon-->
            {$this->favicon()}
            HTML;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return string
     **/
    private function social(string $title, string $description = null)
    {
        $url = base();
        $img = $url . _MEDIA . 'logo.png';
        return <<<HTML
        <meta property="og:title" content="$title">
        <meta property="og:description" content="$description">
        <meta property="og:type" content="website">
        <meta property="og:url" content="$url">
        <meta property="og:image" content="$img">
        HTML;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @return string
     * @throws conditon
     **/
    public function favicon()
    {
        $iterator = new \DirectoryIterator(ABS_PATH);
        foreach ($iterator as $finfo) {
            if ($finfo->isFile()) {
                foreach (['jpeg', 'jpg', 'png', 'ico'] as $value) {
                    if ($finfo->getExtension() == $value && $finfo->getBasename($value) == 'favicon.') {
                        $favicon = base("favicon.$value");
                    }
                }
            }
        }

        $request = new Request;
        if (preg_match("/".env('site.dashboard')."/i", $request->getRequestTarget())) {
            $favicon = base('make4u/assets/img/logo.png');
        }

        $favicon = isset($favicon) ? $favicon : base('make4u/assets/img/logo.png');

        return "<link rel='icon' href='$favicon' type='image/x-icon'>";
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return object
     **/
    public function css(string $style, bool $adm = false)
    {

        $tpl = ($adm) ? "make4u/assets/css/$style" : 'content/themes/'.env('site.theme')."/css/$style" ;


        $style = (preg_match("/http/i", $style)) ? $style : base($tpl);
        return "<link rel='stylesheet' href='$style'>";

        //return $this;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return object
     **/
    public function js(string $script, bool $adm = false)
    {/*
        $script = (preg_match("/http/i", $script)) ? $script : base("content/themes/$this->tpl/js/$script");
        return "<script src='$script'></script>";*/

        $tpl = ($adm) ? "make4u/assets/js/$script" : 'content/themes/'.env('site.theme')."/js/$script" ;


        $script = (preg_match("/http/i", $script)) ? $script : base($tpl);
        return "<script src='$script'></script>";
    }
}
