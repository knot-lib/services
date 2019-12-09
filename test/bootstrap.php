<?php
$base_dir = dirname(__DIR__);
require_once $base_dir . '/vendor/autoload.php';

spl_autoload_register(function ($class)
{
    if (strpos($class, 'KnotLib\\Service\\Test\\') === 0) {
        $name = substr($class, strlen('KnotLib\\ServiceTest\\'));
        $name = array_filter(explode('\\',$name));
        $file = __DIR__ . '/include/' . implode('/',$name) . '.php';
        /** @noinspection PhpIncludeInspection */
        require_once $file;
    }
});