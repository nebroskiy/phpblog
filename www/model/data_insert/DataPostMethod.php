<?php

use JetBrains\PhpStorm\ArrayShape;

class DataPostMethod
{
    private array $dataPost;
    // Into this method we have to insert $_POST array as an attribute//
    #[ArrayShape(["title" => "string", "description" => "string", "topic" => "string"])]
    public function getPostMethodData(array $globalPostArray): array
    {
        $this->dataPost = $globalPostArray;
        $dataPostArray = ["title" => $this->dataPost["title"],
            "description" => $this->dataPost["description"], "topic" => $this->dataPost["topic"]];
        return $dataPostArray;
    }
}