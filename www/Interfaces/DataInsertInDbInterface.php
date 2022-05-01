<?php

interface DataInsertInDbInterface
{
    public function dataSave (object $connection, string $title, string $description, string $topic);
}