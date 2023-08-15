<?php

namespace Sts\Controllers;

/**
 * Controller da página Contato
 */
class Contato
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
        $this->data = "Mensagem enviada com sucesso!<br>";
        $loadView = new \Core\ConfigView("sts/Views/contato", $this->data);
        $loadView->loadView();
    }
}
