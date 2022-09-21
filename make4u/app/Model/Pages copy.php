<?php

namespace Mint\Model;

use DirectoryIterator;
use Mint\File\Json;
use Mint\Helper\Alert;

defined('MINT') || die;

/**
 * undocumented class
 */
class Pages
{
    static function add(array $post)
    {
        $it = new DirectoryIterator(_PAGES);

        foreach ($it as $dir) {
            if (!$dir->isDot() && $dir->isDir()) {

                if ($dir->getFilename() == $post['folder']) {
                    return Alert::danger("Ya existe una página nombrada /$post[folder]");
                }
            }
        }

        mkdir(_PAGES . $post['folder']);

        file_put_contents(_PAGES . $post['folder'] . '/index.txt', "title:$post[name]\n", LOCK_EX);
        redirect("admin/pages/$post[folder]");
    }

    static function update(array $post)
    {
        # code...
    }

    public function read()
    {
        # code...
    }

    static function delete(array $post)
    {
        # code...
    }
}
