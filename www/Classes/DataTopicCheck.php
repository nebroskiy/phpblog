<?php

require "DataTopicInsertExceptions.php";

class DataTopicCheck
{
    public function data_topic_check (string $title, string $description, string $topic): bool
    {
        try {
            if (strlen($title) <= 5 || trim($title) == "") {
                #    echo "This title is too short.";
                throw new TitleTopicException();
                #} elseif (trim($title) == "" || $title == "") {
                #    echo "Enter title";
            } elseif (strlen($description <= 5 || trim($description) == "")) {
                #    echo "Description is too short.";
                throw new DescriptionTopicException();
                #} elseif (trim($description) == "" || $description == "") {
                #    echo "Enter description";
            } elseif (strlen($topic) < 10 || trim($topic) == "") {
                #    echo "Your topic is too short.";
                throw new TopicTopicException();
                #} elseif (trim($topic) == "" || $topic == "") {
                #    echo "Enter topic";
            } else {
                return True;
            }
        } catch (TopicExceptions $e){
            die($e->getMessage());
        }
    }
}


//try {
//    $check_topic_for_exceptions = new DataTopicCheck();
//    $check_topic_for_exceptions->data_topic_check($title, $description, $topic);
//} catch (TopicExceptions $e){
//    die($e->getMessage());
//}