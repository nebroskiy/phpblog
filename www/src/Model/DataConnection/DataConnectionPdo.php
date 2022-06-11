<?php

namespace DataConnection;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use PDO;

class DataConnectionPdo extends PDO
{

    public function __construct(string $driver = "mysql", string $host = "db", string $dbname = 'dbtest',
                                string $charset = "utf8", string $username = "root",
                                string $password = "qwerty", array|null $options = null)
    {
        $dsn = "$driver:host=$host;dbname=$dbname;charset=$charset";
        parent::__construct($dsn, $username, $password, $options);
    }
}

