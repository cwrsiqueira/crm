<?php

namespace Core;

/**
 * Carrega as páginas da view
 */
class ConfigView
{
    /**
     * Recebe o endereço da view e os dados
     *
     * @param string $nameView
     * @param string|array|null $data
     */
    public function __construct(private string $nameView, private string|array|null $data)
    {
    }

    public function loadView(): void
    {
        if (file_exists('app/' . $this->nameView . '.php')) {
            include 'app/sts/views/includes/header.php';
            include 'app/' . $this->nameView . '.php';
            include 'app/sts/views/includes/footer.php';
        } else {
            die("Erro: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAILADM);
        }
    }
}
