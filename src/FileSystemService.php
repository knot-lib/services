<?php
declare(strict_types=1);

namespace knotlib\services;

use knotlib\kernel\filesystem\FileSystemInterface;

class FileSystemService
{
    /** @var FileSystemInterface */
    private $fs;

    /**
     * FileSystemService constructor.
     *
     * @param FileSystemInterface $fs
     */
    public function __construct(FileSystemInterface $fs)
    {
        $this->fs = $fs;
    }

    /**
     * Get system directory
     *
     * @param string $dir
     *
     * @return string
     */
    public function getDirectory(string $dir) : string
    {
        return $this->fs->getDirectory($dir);
    }

    /**
     * Get system file
     *
     * @param string $dir
     * @param string $filename
     *
     * @return string
     */
    public function getFile(string $dir, string $filename) : string
    {
        return $this->fs->getFile($dir, $filename);
    }
}