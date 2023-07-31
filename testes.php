<?php

use Lucas\DesignPattern\CalculadoraDeImpostos;
use Lucas\DesignPattern\Impostos\Icms;
use Lucas\DesignPattern\Impostos\Iss;
use Lucas\DesignPattern\Orcamento;

require './vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());
