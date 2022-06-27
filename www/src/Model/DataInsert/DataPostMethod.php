<?php

namespace DataInsert;

class DataPostMethod
{
    private array $globalPostArray;
    private array $dataPostArray;

    // Into this method we have to insert $_POST array as an attribute//
    public function __construct(array $globalPostArray)
    {
        $this->globalPostArray = $globalPostArray;
    }

    public function setDataPostArray(): void
    {
        $this->dataPostArray = ["title" => $this->globalPostArray["title"],
            "description" => $this->globalPostArray["description"], "topic" => $this->globalPostArray["topic"]];
    }

    public function getDataPostArray(): array
    {
        return $this->dataPostArray;
    }
}