<?php
declare(strict_types = 1);

namespace knotlib\services\test\classes;

use knotlib\kernel\filesystem\AbstractFileSystem;
use knotlib\kernel\filesystem\FileSystemInterface;

final class TestFileSystem extends AbstractFileSystem implements FileSystemInterface
{
    public function directoryExists(string $dir): bool
    {
        return isset($this->dir_map[$dir]);
    }

    public function getDirectory(string $dir): string
    {
        return parent::getDirectory($dir);
    }
}