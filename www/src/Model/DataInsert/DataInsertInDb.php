<?php

namespace DataInsert;

use DataConnection\DataConnection;

class DataInsertInDb
{
    public function savingData (DataInsertInDbInterface $interface, DataConnection $connection, string $title, string $description, string $topic): void
    {
        $interface->dataSave($connection, $title, $description, $topic);
    }
}