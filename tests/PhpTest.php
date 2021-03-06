<?php

namespace PHLAK\Config\Tests;

use PHLAK\Config\Tests\Traits\Initializable;
use PHPUnit\Framework\TestCase;

/** @covers \PHLAK\Config\Loaders\Php */
class PhpTest extends TestCase
{
    use Initializable;

    protected function setUp(): void
    {
        $this->validConfig = __DIR__ . '/files/php/config.php';
        $this->invalidConfig = __DIR__ . '/files/php/invalid.php';
    }
}
