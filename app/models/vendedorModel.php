<?php

namespace App\Models;

use Libs\Connection;

class VendedorModel
{
    private $pdo;

    public function getAll()
    {
        $this->pdo = Connection::getInstance()->getConnection();
        $sql = "SELECT nombres, apellidos FROM Vendedor";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}
