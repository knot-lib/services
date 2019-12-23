<?php
declare(strict_types=1);

namespace KnotLib\Service;

use KNotLib\Kernel\FileSystem\FileSystemInterface;

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
     * @param int $dir
     *
     * @return string
     */
    public function getDirectory(int $dir) : string
    {
        return $this->fs->getDirectory($dir);
    }

    /**
     * Get system file
     *
     * @param int $dir
     * @param string $filename
     *
     * @return string
     */
    public function getFile(int $dir, string $filename) : string
    {
        return $this->fs->getFile($dir, $filename);
    }
}