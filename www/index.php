<?php

require realpath('vendor/autoload.php');

use DataConnection\DataConnectionPdo;

use TplHandler\TplHandler;

use DataTopicDisplay\DataDisplayTopics;
use DataTopicDisplay\DataTopicFetchIdDesc;
use DataTopicDisplay\TopicDisplayControllerNew;

use DataDetailTopic\DataDetail;
use DataDetailTopic\GetTopicId;
use DataDetailTopic\DetailTopicControllerNew;

use CreateTopic\CreateTopicController;

use DataInsert\DataPostMethod;
use DataInsert\DataTopicCheck;
use DataInsert\DataInsertInDb;
use DataInsert\DataInsertMariaDb;
use DataInsert\DataInsert;
use DataInsert\InsertControllerNew;

use Test\TestController;

use ControllerManager\ControllerManager;

use Routing\Routes;
use Routing\IndexRouting;

$connection = new DataConnectionPdo();

$tplHandler = new TplHandler();

$dataTopicFetchIdDesc = new DataTopicFetchIdDesc($connection);
$dataDisplayTopics = new DataDisplayTopics($tplHandler, $dataTopicFetchIdDesc);
$topicDisplayControllerNew = new TopicDisplayControllerNew($dataDisplayTopics, $tplHandler);

$getTopicId = new GetTopicId();
$dataDetail = new DataDetail($connection, $getTopicId);
$detailTopicControllerNew = new DetailTopicControllerNew($dataDetail, $tplHandler);

$createTopicController = new CreateTopicController($tplHandler);

$dataPostMethod = new DataPostMethod($_POST);
$dataTopicCheck = new DataTopicCheck();
$dataInsertMariaDb = new DataInsertMariaDb();
$dataInsertInDb = new DataInsertInDb();
$dataInsert = new DataInsert($connection, $dataPostMethod, $dataTopicCheck, $dataInsertInDb, $dataInsertMariaDb);
$insertControllerNew = new InsertControllerNew($dataInsert);

$testController = new TestController();

$controllerManager = new ControllerManager();

$routes = new Routes($topicDisplayControllerNew, $detailTopicControllerNew,
                     $createTopicController, $insertControllerNew, $testController);
$router = new IndexRouting($controllerManager, $routes);

$router->pageDisplay();

//    $routes = [['regular_pattern' => '/^\/$/', 'controller' => '/var/www/view/blog/blog.php'],
//        ['regular_pattern' => '/^\/blog$/', 'controller' => '/var/www/view/blog/blog.php'],
//        ['regular_pattern' => '/^\/blog\/id=\d+$/', 'controller' => '/var/www/src/Model/DataDetailTopic/detailTopicCall.php'],
//        ['regular_pattern' => '/^\/mytopics$/', 'controller' => '/var/www/view/my_topics/my_topics.php'],
//        ['regular_pattern' => '/^\/createtopic$/', 'controller' => '/var/www/view/create_topic/create_topic.tpl.php'],
//        ['regular_pattern' => '/^\/DataInsertController$/', 'controller' => '/var/www/src/Model/DataInsert/DataInsertController.php']];
