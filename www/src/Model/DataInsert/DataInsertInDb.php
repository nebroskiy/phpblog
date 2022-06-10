<?php

namespace DataInsert;

use DataConnection\DataConnection;
use PDO;

class DataInsertInDb
{
    public function savingData (DataInsertInDbInterface $interface, PDO $connection, string $title, string $description, string $topic): void
    {
        $interface->dataSave($connection, $title, $description, $topic);
    }
}