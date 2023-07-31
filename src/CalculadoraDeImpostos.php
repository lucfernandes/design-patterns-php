<?php

namespace Lucas\DesignPattern;

use Lucas\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{

    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
