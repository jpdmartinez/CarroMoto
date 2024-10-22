<?php

require_once('Veiculo.php');

class Carro extends Veiculo {

    private int $portas;
    
    public function __construct(string $marca, string $modelo, int $ano, int $portas){
        parent::__construct($marca, $modelo, $ano);
        $this->setPortas($portas);
    }
    
    public function setPortas($portas): void{
        if($portas<2){
            $this->portas = 2;
        } else {
            $this->portas = $portas;
        }
    }

    public function getPortas(): int{
        return $this->portas;
    }

    public function abrirPorta(int $numeroDaPorta): void{
        if($numeroDaPorta <= $this->porta){
            echo "Porta número {$numeroDaPorta} aberta. <br>";
        } else {
            echo "O carro {$this->modelo} não possuí {$numeroDaPorta} portas.";
        }
    }

}