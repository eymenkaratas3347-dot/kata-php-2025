<?php
namespace Giorgiosironi\KataPhp2025;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class HelloWorldTest extends TestCase
{
    #[Test]
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
