<?php

require "/var/www/Interfaces/Connection_Interface.php";

class Connection_PDO implements Connection_Interface
{
    public string $driver = "mysql";
    public string $host = "db";
    public string $dbname = "dbtest";
    public string $charset = "utf8";
    public string $username = "root";
    public string $password = "qwerty";

    public function connection (): PDO
    {
        $connection = new PDO("$this->driver:host=$this->host;dbname=$this->dbname;charset=$this->charset",
            "$this->username", "$this->password");
        return $connection;
    }
}