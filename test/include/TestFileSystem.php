<?php
declare(strict_types = 1);

namespace KnotLib\Service\Test;

use KnotLib\Kernel\FileSystem\AbstractFileSystem;
use KnotLib\Kernel\FileSystem\FileSystemInterface;

final class TestFileSystem extends AbstractFileSystem implements FileSystemInterface
{
    public function directoryExists(int $dir): bool
    {
        return isset($this->dir_map[$dir]);
    }

    public function getDirectory(int $dir): string
    {
        return parent::getDirectory($dir);
    }
}