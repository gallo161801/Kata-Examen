<?php

namespace gallo161801\KataExamen;

class Comanda
{
    public function __construct(){}

    public function executeAction($action): String
    {
        if($action === "añadir"){
            return "añadir";
        }
        return "";
    }

}