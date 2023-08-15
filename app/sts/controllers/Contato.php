<?php

namespace Sts\Controllers;

use Core\ConfigView;

/**
 * Carrega a página de contato
 */
class Contato
{
    private array|string|null $data;

    public function index()
    {
        $this->data = [];
        $loadView = new ConfigView('sts/Views/contato', $this->data);
        $loadView->loadView();
    }
}
