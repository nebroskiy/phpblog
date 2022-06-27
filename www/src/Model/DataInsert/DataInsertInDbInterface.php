<?php

namespace DataInsert;

use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;
use PDO;

interface DataInsertInDbInterface
{
    public function dataSave (DataConnectionPdo $connection, array $dataPostArray);
}