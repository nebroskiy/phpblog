<?php

require "DataConnectionPdo.php";

class DataConnection
{
    public function getConnection (DataConnectionInterface $connectionType): object
    {
        return $connectionType->connectionToDb();
    }
}