<?php

require realpath('vendor/autoload.php');

use DataConnection\DataConnectionPdo;

use TplHandler\TplHandler;

use ControllerManager\ControllerManager;

use Routing\Routes;
use Routing\IndexRouting;

use DataTopicDisplay\DataDisplayTopics;
use DataTopicDisplay\DataTopicFetchIdDesc;
use DataTopicDisplay\TopicDisplayControllerNew;

$connection = new DataConnectionPdo();

$tplHandler = new TplHandler();

$dataTopicFetchIdDesc = new DataTopicFetchIdDesc($connection);
$dataDisplayTopics = new DataDisplayTopics($tplHandler, $dataTopicFetchIdDesc);
$topicDisplayControllerNew = new TopicDisplayControllerNew($dataDisplayTopics, $tplHandler);

$controllerManager = new ControllerManager();

$routes = new Routes($topicDisplayControllerNew);
$router = new IndexRouting($controllerManager, $routes);

$router->pageDisplay();

//    $routes = [['regular_pattern' => '/^\/$/', 'controller' => '/var/www/view/blog/blog.php'],
//        ['regular_pattern' => '/^\/blog$/', 'controller' => '/var/www/view/blog/blog.php'],
//        ['regular_pattern' => '/^\/blog\/id=\d+$/', 'controller' => '/var/www/src/Model/DataDetailTopic/detailTopicCall.php'],
//        ['regular_pattern' => '/^\/mytopics$/', 'controller' => '/var/www/view/my_topics/my_topics.php'],
//        ['regular_pattern' => '/^\/createtopic$/', 'controller' => '/var/www/view/create_topic/create_topic.php'],
//        ['regular_pattern' => '/^\/DataInsertController$/', 'controller' => '/var/www/src/Model/DataInsert/DataInsertController.php']];
