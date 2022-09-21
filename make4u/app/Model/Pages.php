<?php

namespace Make4U\Model;

use Make4U\BaseModel;
use Make4U\Core\Helper\Alert;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class Pages extends BaseModel
{
    static function add(array $post, $file)
    {
        $it = new \DirectoryIterator(_PAGES);

        foreach ($it as $dir) {
            if (!$dir->isDot() && $dir->isDir()) {

                if ($dir->getFilename() == $post['folder']) {
                    return Alert::danger("Ya existe una página nombrada /$post[folder]");
                }
            }
        }

        mkdir(_PAGES . $post['folder']);


        //image
        $img = null;
        foreach ($file['img'] as $key => $value) {
            $$key = $value;
        }

        if (move_uploaded_file($tmp_name, _MEDIA . $name)) $img = base('content/media/').$name;
       /* {

            echo json_encode([
                'success' => 1,
                'file' => [
                    'url' => env('base_url') . "/contents/upload/$name",
                ]
            ]);
        }*/


        $data = <<<TXT
        title:$post[name]\n
        description:$post[description]\n
        image:$img\n
        content:$post[page]\n
        TXT;

        file_put_contents(_PAGES . $post['folder'] . '/index.txt', $data, LOCK_EX);
        return Alert::info("Página creada con exito");
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
