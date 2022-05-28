<?php

require "DataConnectionPdo.php";

class DataConnection
{
    public function getConnection (DataConnectionInterface $connectionType): PDO
    {
        return $connectionType->connectionToDb();
    }
}