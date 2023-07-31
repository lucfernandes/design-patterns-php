<?php

namespace Lucas\DesignPattern\Impostos;

use Lucas\DesignPattern\Orcamento;

class Icms implements Imposto
{

    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
