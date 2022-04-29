<?php

require '/var/www/Classes/DataInsertMariaDb.php';

class DataInsertInDb
{
    public function saving_data (DataInsertInDbInterface $interface, object $connection, string $title, string $description, string $topic): void
    {
        $interface->data_insert($connection, $title, $description, $topic);
    }
}