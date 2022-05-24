<?php

trait Tables
{
    public string $table;

    public function showDbs() :string
    {
        $query = "SHOW DATABASES";
        $dbs = $this->getConnect->query($query);
        return $dbsFetch = print_r($dbs->fetch());
    }

    public function showTables($dataBase = '')
    {
        if ($dataBase == '') {
            $query = "SHOW TABLES";
            $tables = $this->getConnect->query($query);
            return $tablesFetch = print_r($tables->fetch());
        } else {
            $query = "SHOW TABLES IN {$dataBase}";
            $tables = $this->getConnect->query($query);
            return $tablesFetch = print_r($tables->fetch());
        }
    }

    // insert table name to iterate with table in $table
    public function setTable (string $table) :void
    {
        $this->table = $table;
    }
}