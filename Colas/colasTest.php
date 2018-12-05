<?php
require "Colas.php";
use PHPUnit\Framework\TestCase;

class colaTest extends TestCase{

    public function testNuevaColaVacia()
    {
        $cola = new Colas;
        $this->assertEmpty($cola->getCount());
        $this->assertEquals(0,$cola->getCount());
    }

    public function testItemAgregado()
    {
        $cola = new Colas;
        $cola->push(1);
        $this->assertNotEmpty($cola->getCount());
        $this->assertNotEquals(0,$cola->getCount());
    }

    public function testItemEliminado()
    {
        $cola = new Colas;
        $cola->push(1);
        $this->assertNotEmpty($cola->getCount());
        $cola->pop();
        $this->assertEmpty($cola->getCount());
    }
}