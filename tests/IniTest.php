<?php

namespace PHLAK\Config\Tests;

use PHLAK\Config\Tests\Traits\Initializable;
use PHPUnit\Framework\TestCase;

/** @covers \PHLAK\Config\Loaders\Ini */
class IniTest extends TestCase
{
    use Initializable;

    protected function setUp(): void
    {
        $this->validConfig = __DIR__ . '/files/ini/config.ini';
        $this->invalidConfig = __DIR__ . '/files/ini/invalid.ini';
    }
}
