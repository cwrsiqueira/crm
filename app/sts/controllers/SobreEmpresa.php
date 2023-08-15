<?php

namespace Sts\Controllers;


/**
 * Controller da página SobreEmpresa
 */
class SobreEmpresa
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
        $this->data = [];
        $loadView = new \Core\ConfigView("sts/Views/sobre-empresa", $this->data);
        $loadView->loadView();
    }
}
