<?php

namespace Core;

/**
 * Configurações básicas do site.
 */

abstract class Config
{
    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do administrador.
     * 
     * @return void
     */
    protected function config(): void
    {
        define('URL', 'http://localhost/crm/');

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        define('EMAILADM', 'cwrsiqueira@msn.com');
    }
}
