<?php

require_once('Veiculo.php');
require_once('Carro.php');
require_once('Moto.php');

$carro1 = new Carro('Toyota', 'Corolla', 2020, 4);
$moto1 = new Moto('Yamaha', 'MT-07', 2018);

$carro1->acelerar(50);
$carro1->abrirPorta(1);

$moto1->acelerar(30);
$moto1->empinar();

$carro1->frear(20);
$moto1->frear(10);