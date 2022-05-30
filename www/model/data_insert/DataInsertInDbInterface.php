<?php

interface DataInsertInDbInterface
{
    public function dataSave (PDO $connection, string $title, string $description, string $topic);
}