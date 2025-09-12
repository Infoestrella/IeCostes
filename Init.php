<?php

namespace FacturaScripts\Plugins\IeCostes;

use FacturaScripts\Core\Template\InitClass;

final class Init extends InitClass
{
    public function init(): void
    {
        $this->loadExtension(new Extension\Model\Variante());
    }

    public function update(): void
    {
    }

    public function uninstall(): void
    {
    }
}


