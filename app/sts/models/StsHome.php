<?php

namespace Sts\Models;

use PDO;
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
        $connection = new StsConn();
        $this->connection = $connection->connectDb();

        $sql = $this->connection->query("SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_tops LIMIT 1");
        if ($sql->rowCount() > 0) {
            $this->data = $sql->fetch(PDO::FETCH_ASSOC);
        }

        return $this->data;
    }
}
