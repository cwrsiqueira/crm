<?php

namespace Sts\Models\helpers;

use PDO;
use PDOException;

class StsConn
{
    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbname = DBNAME;
    private string|int $port = PORT;
    private object $connect;

    public function connectDb(): object
    {
        try {
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname, $this->user, $this->pass);
            return $this->connect;
        } catch (PDOException $e) {
            die("Erro: " . $e->getMessage() . " - Tente novamente. Caso o problema persista, entre em contato com o administrador: " . EMAILADM);
        }
    }
}
