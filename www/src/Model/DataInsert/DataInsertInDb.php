<?php

namespace DataInsert;

use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;
use PDO;

class DataInsertInDb
{
    public function savingData (DataInsertInDbInterface $interface, DataConnectionPdo $connection, array $dataPostArray): void
    {
        $interface->dataSave($connection, $dataPostArray);
    }
}