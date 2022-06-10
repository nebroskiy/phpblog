<?php

namespace DataInsert;

use DataConnection\DataConnection;
use PDO;

interface DataInsertInDbInterface
{
    public function dataSave (PDO $connection, string $title, string $description, string $topic);
}