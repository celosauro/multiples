<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Multiples\{Factory, AbstractMultiple, MultipleInterface, NotMultiple};

class MultiplesTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $this->assertInstanceOf(AbstractMultiple::class, Factory::create(rand()));
        $this->assertInstanceOf(MultipleInterface::class, Factory::create(rand()));
    }

    public function testIsValidOutput(): void
    {
        $this->expectException(\ArgumentCountError::class);
        new NotMultiple();
    }
}

