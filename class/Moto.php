<?php

require_once('Veiculo.php');

class Moto extends Veiculo {

    public function __construct($marca, $modelo, $ano){
        parent::__construct($marca, $modelo, $ano);
    }

    public function empinar(): void {
        if($this->getVelocidadeAtual() > 20){
            echo "Você está empinando a moto";
        } else {
            echo "Você não tem velocidade suficiente para empinar a moto";
        }
    }
}