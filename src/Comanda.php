<?php

namespace gallo161801\KataExamen;

class Comanda
{
    private Array $comanda;
    public function __construct(){
        $this->comanda = [];
    }

    public function executeAction($action): String
    {
        $action = strtolower($action);
        $actionParts = explode(" ", $action);
        $actionComand = $actionParts[0];
        if($actionComand === "añadir"){
            $actionProduct = $actionParts[1];
            $this->comanda[] = $actionProduct;
            return join(" ", $this->comanda);
        }
        return "";
    }

}