<?php

namespace FacturaScripts\Plugins\IeCostes\Extension\Model;

use FacturaScripts\Core\Tools;
use Closure;

class Variante
{
    public $margencalculado;

    public function clear(): Closure
    {
        return function() {
            $this->realcost = 0;
        };
    }

    public function test(): Closure
    {
        return function() {
            $realCostParam = Tools::settings('costcoefficient', 'coefficient');
            $this->realcost = $this->coste * $realCostParam;
        };
    }
}