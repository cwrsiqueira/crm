<?php

namespace Sts\Controllers;

/**
 * Controller da página Home
 */
class Home
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
        $home = new \Sts\Models\StsHome();
        $this->data = $home->index();
        $loadView = new \Core\ConfigView("sts/Views/home", $this->data);
        $loadView->loadView();
    }
}
