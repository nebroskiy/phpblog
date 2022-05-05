<?php

require "/var/www/model/data_connection/DataConnection.php";


abstract class AccessDb
{
    public object $getConnect;
    public string $table;
    protected object $connectionClass;

    // insert PDO like class in $connectionClass
    public function __construct(DataConnectionPdo $connectionClass)
    {
        $this->connectionClass = $connectionClass;
        $this->connection();
        echo "Accessed db by " . get_class($this->connectionClass);
    }

    protected function connection () :void
    {
//        require "/var/www/model/data_connection/DataConnection.php";
        $connectionTo = new DataConnection();
        $this->getConnect = $connectionTo->getConnection($this->connectionClass);
    }

    // insert table name to iterate with table in $table
    public function setTable (string $table) :void
    {
        $this->table = $table;
    }
}

class Insert extends AccessDb
{
    public array $keys;
    public array $values;
    public array $valuesPrepare;
    public string $keysImplode;
    public string $valuesPrepareImplode;

    // insert array with data in $insertData
    public function dataInsert (array $insertData) :void
    {

        foreach ($insertData as $key => $value)
        {
            $this->keys[] = $key;
            $this->valuesPrepare[] = ":$key";
            $this->values[] = $value;
        }

        $this->keysImplode = implode(',', $this->keys);
        $this->valuesPrepareImplode = implode(',', $this->valuesPrepare);

        $query = "INSERT {$this->table} ({$this->keysImplode}) VALUES ({$this->valuesPrepareImplode})";
        $insert = $this->getConnect->prepare($query);

        foreach ($this->valuesPrepare as $key)
        {
            $i = array_search($key, $this->valuesPrepare);
            $insert->bindParam($key, $this->values[$i]);
        }

        $insert->execute();
    }
}

$testArr = ['title' => 'Insert test title',
    'description' => 'Insert test description',
    'topic' => 'Insert test topic'];

$table = "test_table";
$obj = new Insert(new DataConnectionPdo);
$obj->setTable($table);
$obj->dataInsert($testArr);

