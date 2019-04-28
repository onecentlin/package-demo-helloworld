<?php

use PHPUnit\Framework\TestCase;
use Onecentlin\PackageDemo\HelloWorld;

/**
 * HelloWorldTest
 * @group demo
 */
class HelloWorldTest extends TestCase
{
    /** @test */
    public function sayHello()
    {
        $target = new HelloWorld();
        $this->assertEquals('Hello, Winnie!', $target->sayHello('Winnie'));
    }
}
