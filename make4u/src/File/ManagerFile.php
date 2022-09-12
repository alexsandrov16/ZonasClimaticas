<?php
namespace Mint\File;

defined('MINT') || die;
use DirectoryIterator;


/**
 * undocumented class
 */
class ManagerFile extends DirectoryIterator
{
    /** @var object $dir instancia de DirectoryIterator */
    protected $dir;
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function __construct(string $path)
    {
        $this->dir = parent::__construct($path);
    }

    private function interator()
    {
        foreach ($this->dir as $file) {
            # code...
        }
    }

    public function fileExt(string $file)
    {
        # code...
    }

    public function filePerms()
    {
        # code...
    }
}
