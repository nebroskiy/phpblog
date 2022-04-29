<?php

interface DataInsertInDbInterface
{
    public function data_insert (object $connection, string $title, string $description, string $topic);
}