<?php

namespace Sts\Models;

use Sts\Models\helpers\StsConn;

/**
 * Model Home
 */
class StsHome
{
    /** @var array $data */
    private array $data;

    /** @var object $connection */
    private object $connection;

    /**
     * retorna os dados
     *
     * @return array
     */
    public function index(): array
    {
        $this->data = [
            "title" => "Topo da Página",
            "description" => "Descrição do Serviço"
        ];

        $connection = new StsConn();
        $this->connection = $connection->connectDb();
        var_dump($this->connection);

        return $this->data;
    }
}
