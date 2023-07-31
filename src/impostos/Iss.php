<?php

namespace Lucas\DesignPattern\Impostos;

use Lucas\DesignPattern\Orcamento;

class Iss implements Imposto
{

    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
