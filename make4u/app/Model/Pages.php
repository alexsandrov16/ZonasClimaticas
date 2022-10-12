<?php

namespace Make4U\Model;

use Make4U\BaseModel;
use Make4U\Core\File\Json;
use Make4U\Core\Helper\Alert;

defined('MAKE4U') || die;

/**
 * undocumented class
 */
class Pages extends BaseModel
{
    static function add(array $post, $file)
    {
        $folder = self::Slug($post['name']);
        $it = new \DirectoryIterator(_PAGES);

        foreach ($it as $dir) {
            if (!$dir->isDot() && $dir->isDir()) {

                if ($dir->getFilename() == $folder) {
                    return Alert::danger("Ya existe una página nombrada /$folder");
                }
            }
        }

        mkdir(_PAGES . $folder);


        //image
        $img = null;
        foreach ($file['img'] as $key => $value) {
            $$key = $value;
        }

        $name = 'IMG_'.md5(microtime()).'.'.pathinfo($name,PATHINFO_EXTENSION);

        if (move_uploaded_file($tmp_name, _MEDIA . $name)) $img = base('content/media/') . $name;
        /* {

            echo json_encode([
                'success' => 1,
                'file' => [
                    'url' => env('base_url') . "/contents/upload/$name",
                ]
            ]);
        }*/


        /*$data = <<<TXT
        title:$post[name]\n
        description:$post[description]\n
        image:$img\n
        content:$post[page]\n
        TXT;*/

        $data = [
            'title' => $post['name'],
            'description' => $post['description'],
            'image' => $img,
            'slug' => $folder,
            //'content' => json_decode($post['page']),
            'content' => $post['page']
        ];

        Json::set(_PAGES . $folder . DS . 'index', $data);
        //file_put_contents(_PAGES . $post['folder'] . '/index.json', , LOCK_EX);
        return Alert::info("Página creada con exito");
    }

    static function update(array $post, $file)
    {

        //image
        $img = Json::get(_PAGES . $post['folder'] . DS . 'index')['image'];

        foreach ($file['img'] as $key => $value) {
            $$key = $value;
        }

        $name = 'IMG_'.md5(microtime()).'.'.pathinfo($name,PATHINFO_EXTENSION);

        if (move_uploaded_file($tmp_name, _MEDIA . $name)) $img = base('content/media/') . $name;



        $data = [
            'title' => $post['name'],
            'description' => $post['description'],
            'image' => $img,
            //'slug' => $post['folder'],
            //'content' => json_decode($post['page']),
            'content' => $post['page']
        ];

        Json::set(_PAGES . $post['folder'] . DS . 'index', $data);
        return Alert::info("Página actualizada con exito");
    }

    public function read()
    {
        # code...
    }

    static function delete(string $page)
    {
        $dir = _PAGES . $page . DS;

        if (is_dir($dir)) {
            unlink($dir . 'index.json');
            rmdir($dir);
            redirect(env('site.dashboard'));
        }
    }

    private static function Slug($string){
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }
}
