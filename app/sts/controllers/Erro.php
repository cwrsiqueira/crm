<?php

namespace Sts\Controllers;

use Core\ConfigView;

/**
 * Carrega a página de erro
 */
class Erro
{
    private array|string|null $data;

    public function index()
    {
        $this->data = [];
        $loadView = new ConfigView('sts/Views/erro', $this->data);
        $loadView->loadView();
    }
}
