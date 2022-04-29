<?php

class DataPostMethod
{
    public array $data_post;
    // In this method we have to insert $_POST array as an attribute//
    public function receive_post_method_data(array $new_post_array): array
    {
        $this->data_post = $new_post_array;
        $data_post_array = ["title" => $this->data_post["title"], "description" => $this->data_post["description"], "topic" => $this->data_post["topic"]];
        return $data_post_array;
    }
}