<?php
declare(strict_types=1);

namespace KnotLib\Service\Test;

use PHPUnit\Framework\TestCase;
use KnotLib\Service\FileSystemService;
use KnotLib\Kernel\FileSystem\FileSystemInterface;
use KnotLib\Kernel\FileSystem\AbstractFileSystem;
use KnotLib\Kernel\FileSystem\Dir;

final class FileSystemServiceTest extends TestCase
{
    public function testGetDirectory()
    {
        $svc = new FileSystemService(new class extends AbstractFileSystem implements FileSystemInterface {
            public function getDirectory(int $dir): string
            {
                $map = [
                    Dir::TMP => '/tmp',
                    Dir::CACHE => __DIR__ . '/cache',
                ];
                return $map[$dir] ?? '';
            }
        });

        $this->assertEquals('', $svc->getDirectory(Dir::TEMPLATE));
        $this->assertEquals('/tmp', $svc->getDirectory(Dir::TMP));
        $this->assertEquals(__DIR__ . '/cache', $svc->getDirectory(Dir::CACHE));
    }

    public function testGetFile()
    {
        $svc = new FileSystemService(new class extends AbstractFileSystem implements FileSystemInterface {
            public function getDirectory(int $dir): string
            {
                $map = [
                    Dir::TMP => '/tmp',
                    Dir::CACHE => __DIR__ . '/cache',
                    Dir::TEMPLATE => __DIR__ . '/template',
                ];
                return $map[$dir] ?? '';
            }

            public function getFile(int $dir, string $file) : string
            {
                $map = [
                    Dir::TMP => 'tmp',
                    Dir::CACHE => 'cache',
                    Dir::TEMPLATE => 'template',
                ];
                return '/home/foo/' . $map[$dir] . '/' . $file;
            }
        });

        $this->assertEquals('/home/foo/template/file.txt', $svc->getFile(Dir::TEMPLATE, 'file.txt'));
        $this->assertEquals('/home/foo/tmp/file.txt', $svc->getFile(Dir::TMP, 'file.txt'));
        $this->assertEquals('/home/foo/cache/file.txt', $svc->getFile(Dir::CACHE, 'file.txt'));
    }
}