<?php

namespace Tale\Test\DevTool;

use Tale\DevTool\Application;

class WindowsApplicationTest extends Application
{
    public function isWindows(): bool
    {
        return true;
    }

    public function getPhpcsPath()
    {
        return $this->getShellCommandPath('vendor/bin/phpcs');
    }
}