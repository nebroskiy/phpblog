<?php

namespace DataInsert;

use ControllerManager\ControllerManagerInterface;
use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;
use PDO;

class InsertControllerNew implements ControllerManagerInterface
{
    private DataInsert $dataInsert;

    public function __construct(DataInsert $dataInsert)
    {
        $this->dataInsert = $dataInsert;
    }

    public function display(): void
    {
        $this->dataInsert->setDataPostArray();
        $this->dataInsert->dataInsert();
        header("Location:/");
    }
}