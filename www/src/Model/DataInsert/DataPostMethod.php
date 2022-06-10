<?php

namespace DataInsert;

class DataPostMethod
{
    private array $dataPost;

    // Into this method we have to insert $_POST array as an attribute//
    public function getPostMethodData(array $globalPostArray): array
    {
        $this->dataPost = $globalPostArray;
        $dataPostArray = ["title" => $this->dataPost["title"],
            "description" => $this->dataPost["description"], "topic" => $this->dataPost["topic"]];
        return $dataPostArray;
    }
}