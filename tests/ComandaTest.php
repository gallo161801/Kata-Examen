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
    public function givenActionAnadirSomethingWithoutAmountReturnsThatSomethingWithAmountOne(): void
    {
        $comanda = new Comanda();
        $result = $comanda->executeAction("añadir pizza");
        $this->assertEquals("pizza x1", $result);
    }

}