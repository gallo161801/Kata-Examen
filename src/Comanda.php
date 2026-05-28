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
        $actionCommand = $actionParts[0];
        if($actionCommand === "añadir"){
            $actionProduct = $actionParts[1];
            $actionAmount = 1;
            if(sizeof($actionParts) == 3){
                $actionAmount = $actionParts[2];
            }
            $this->comanda[$actionProduct] = $actionAmount;
            $count = 1;
            foreach ($this->comanda as $commandItem => $commandAmount) {
                {
                    $commandString .= $commandItem . " x" . $commandAmount;
                    if(sizeof($this->comanda) > 1 and $count !== sizeof($this->comanda)){
                        $commandString .= ", ";
                    }
                    $count +=1;
                }
            }
            return $commandString;
        }
        return "";
    }

}