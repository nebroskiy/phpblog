<?php

require "/var/www/Interfaces/DataConnectionInterface.php";

class DataConnectionPdo implements DataConnectionInterface
{
    public string $driver = "mysql";
    public string $host = "db";
    public string $dbname = "dbtest";
    public string $charset = "utf8";
    public string $username = "root";
    public string $password = "qwerty";

    public function connectionToDb (): PDO
    {
        $connectionPdo = new PDO("$this->driver:host=$this->host;dbname=$this->dbname;charset=$this->charset",
            "$this->username", "$this->password");
        return $connectionPdo;
    }
}