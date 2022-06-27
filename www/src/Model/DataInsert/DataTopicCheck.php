<?php

namespace DataInsert;

use Exceptions\DataInsert\DescriptionTopicException;
use Exceptions\DataInsert\TitleTopicException;
use Exceptions\DataInsert\TopicExceptions;
use Exceptions\DataInsert\TopicTopicException;

class DataTopicCheck
{
    public function checkForLen (array $dataPostArray): bool
    {
        try {
            if (strlen($dataPostArray['title']) <= 5 || trim($dataPostArray['title']) == "") {
                throw new TitleTopicException();
            } elseif (strlen($dataPostArray['description'] <= 5 || trim($dataPostArray['description']) == "")) {
                throw new DescriptionTopicException();
            } elseif (strlen($dataPostArray['topic']) < 10 || trim($dataPostArray['topic']) == "") {
                throw new TopicTopicException();
            } else {
                return True;
            }
        } catch (TopicExceptions $e){
            die($e->getMessage());
        }
    }
}


