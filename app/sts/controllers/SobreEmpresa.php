<?php

namespace Sts\Controllers;

use Core\ConfigView;

/**
 * Carrega a página sobre empresa
 */
class SobreEmpresa
{
    private array|string|null $data;

    public function index()
    {
        $this->data = [];
        $loadView = new ConfigView('sts/Views/sobre-empresa', $this->data);
        $loadView->loadView();
    }
}
