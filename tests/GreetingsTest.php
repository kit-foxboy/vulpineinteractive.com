<?php
declare(strict_types=1);

//import classes
require __DIR__ . "/../src/greetings.php";
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
    public function testSaysHello() {
        $this->assertEquals("Hello World!", Greetings::sayHello(("Hello World!")));
    }
}

?>