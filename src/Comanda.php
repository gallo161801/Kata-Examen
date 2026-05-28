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
            $commandString = "";
            //$price = 150; metido para prueba
            foreach ($this->comanda as $commandItem => $commandAmount) {
                {
                    #$price += getPrice($commandItem) * $commandAmount;
                    $commandString .= $commandItem . " x" . $commandAmount;
                    if(sizeof($this->comanda) > 1 and $count !== sizeof($this->comanda)){
                        $commandString .= ", ";
                    }
                    $count +=1;
                }
            }
            #$commandString .= " | Total: " . $price;
            return $commandString;
        }

        if($actionCommand === "vaciar"){
            $this->comanda = [];
            return "La comanda ha sido vaciada";
        }

        if($actionCommand === "eliminar"){
            $actionProduct = $actionParts[1];
            if(array_key_exists($actionProduct, $this->comanda)) {
                unset($this->comanda[$actionProduct]);
                $commandString = "";
                foreach ($this->comanda as $commandItem => $commandAmount) {
                    {
                        $commandString .= $commandItem . " x" . $commandAmount;
                        if (sizeof($this->comanda) > 1 and $count !== sizeof($this->comanda)) {
                            $commandString .= ", ";
                        }
                        $count += 1;
                    }
                }
            }
            return $commandString;
        }
        return "";
    }

}