<?php

require "Connection_PDO.php";

class Data_Connection
{
    public function connection (Connection_Interface $connection)
    {
        $connection->connection();
    }
}