<?php

namespace gallo161801\KataExamen\Test;

use gallo161801\KataExamen\Comanda;
use PHPUnit\Framework\TestCase;

class ComandaTest extends TestCase
{
    /**
     * @test
     */
    public function givenEmptyActionReturnsEmptyString(): void{
        $comanda = new Comanda();
        $result = $comanda->executeAction("");
        $this->assertEquals("", $result);
    }

    /**
     * @test
     */
    public function givenActionAnadirSomethingReturnsProductsAndPrice(): void
    {
        $comandaMock = $this -> getMockBuilder ( \Menu :: class );
        $comanda = new Comanda();
        $result = $comanda->executeAction("Añadir pizza 2");
        $this->assertEquals("pizza x2 | Precio: 150", $result);
    }

}