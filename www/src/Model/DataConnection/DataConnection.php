<?php

namespace DataConnection;

use PDO;

class DataConnection
{
    public function getConnection (DataConnectionInterface $connectionType): PDO
    {
        return $connectionType->connectionToDb();
    }
}