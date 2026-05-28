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
    public function givenActionAnadirReturnsAnadir(): void{
        $comanda = new Comanda();
        $result = $comanda->executeAction("añadir");
        $this->assertEquals("añadir", $result);
    }

    /**
     * @test
     */
    public function givenActionAnadirMayuscReturnsAnadirMinus(): void{
        $comanda = new Comanda();
        $result = $comanda->executeAction("Añadir");
        $this->assertEquals("añadir", $result);
    }

}