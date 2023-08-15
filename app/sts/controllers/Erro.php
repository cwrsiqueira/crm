<?php

namespace Sts\Controllers;

/**
 * Controller da página Erro
 */
class Erro
{
    /** @var array|string|null $dados Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data;

    /**
     * Instantiar a classe responsável em carregar a View
     *
     * @return void
     */
    public function index()
    {
        $this->data = null;
        $loadView = new \Core\ConfigView("sts/Views/erro", $this->data);
        $loadView->loadView();
    }
}
