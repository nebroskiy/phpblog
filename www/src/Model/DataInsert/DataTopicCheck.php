<?php

namespace DataInsert;

use Exceptions\DataInsert\DescriptionTopicException;
use Exceptions\DataInsert\TitleTopicException;
use Exceptions\DataInsert\TopicExceptions;
use Exceptions\DataInsert\TopicTopicException;

class DataTopicCheck
{
    public function checkForLen (string $title, string $description, string $topic): bool
    {
        try {
            if (strlen($title) <= 5 || trim($title) == "") {
                throw new TitleTopicException();
            } elseif (strlen($description <= 5 || trim($description) == "")) {
                throw new DescriptionTopicException();
            } elseif (strlen($topic) < 10 || trim($topic) == "") {
                throw new TopicTopicException();
            } else {
                return True;
            }
        } catch (TopicExceptions $e){
            die($e->getMessage());
        }
    }
}


