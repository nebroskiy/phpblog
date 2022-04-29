<?php

require "DataConnectionPdo.php";

class DataConnection
{
    public function connection_interface_implements (DataConnectionInterface $connection_type): object
    {
        return $connection_type->connection_to_db();
    }
}