<?php
namespace Giorgiosironi\KataPhp2025;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class HelloWorldTest extends TestCase
{
    #[Test]
    public function sayHello_returns_greeting()
    {
        $helloWorld = new HelloWorld();
        $this->assertEquals('Hello, World!', $helloWorld->sayHello());
    }
}
