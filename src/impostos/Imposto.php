<?php

namespace Lucas\DesignPattern\Impostos;

use Lucas\DesignPattern\Orcamento;

interface Imposto
{

    public function calculaImposto(Orcamento $orcamento): float;
}
