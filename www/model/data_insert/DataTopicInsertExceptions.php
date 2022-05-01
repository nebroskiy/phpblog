<?php

class TopicExceptions extends Exception
{

}

class TitleTopicException extends TopicExceptions
{
    protected $message = "Title is too short.";
}

class DescriptionTopicException extends TopicExceptions
{
    protected $message = "Description is too short.";
}

class TopicTopicException extends TopicExceptions
{
    protected $message = "Topic is too short.";
}
