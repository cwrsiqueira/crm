<?php

namespace Sts\Controllers;

use Core\ConfigView;

/**
 * Carrega a página Home
 */
class Home
{
    private array|string|null $data;

    public function index()
    {
        $this->data = [];
        $loadView = new ConfigView('sts/Views/home', $this->data);
        $loadView->loadView();
    }
}
