<?php

require 'DataInsertMariaDb.php';

class DataInsertInDb
{
    public function savingData (DataInsertInDbInterface $interface, object $connection, string $title, string $description, string $topic): void
    {
        $interface->dataSave($connection, $title, $description, $topic);
    }
}