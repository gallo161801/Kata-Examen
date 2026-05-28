<?php

namespace gallo161801\KataExamen;

class Comanda
{
    public function __construct(){}

    public function executeAction($action): String
    {
        $actionComand = strtolower($action);
        if($actionComand === "añadir"){
            return "añadir";
        }
        return "";
    }

}