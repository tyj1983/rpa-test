<?php

namespace MyTest;

use \MyGreeter\Client as MyGreeterClient;
use \PHPUnit\Framework\TestCase;

class MyGreeterClientTest extends TestCase
{
    /**
     * "Typed properties in classes", a new feature of PHP 7.4 :)
     */
    private MyGreeterClient $greeter;


    public function setUp(): void
    {
        $this->greeter = MyGreeterClient::getSingleton();
    }

    public function testInstance() : void
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function testGetGreeting() : void
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}
