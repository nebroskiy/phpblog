<?php

namespace DataInsert;

use DataConnection\DataConnection;

interface DataInsertInDbInterface
{
    public function dataSave (DataConnection $connection, string $title, string $description, string $topic);
}