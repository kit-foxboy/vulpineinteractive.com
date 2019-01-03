<?php
declare(strict_types=1);

//import classes
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
    public function testSaysHello() {
        $this->assertEquals("Hello World!", Greetings::sayHello(("Hello World!")));
    }
}

?>