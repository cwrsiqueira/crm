<?php

namespace Core;

/**
 * configura as constantes do projeto
 */
abstract class Config
{
    /**
     * Constantes de Configuração
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
