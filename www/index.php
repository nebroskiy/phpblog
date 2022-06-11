<?php

require realpath('vendor/autoload.php');

use Routing\IndexRouting;

    $routes = [['regular_pattern' => '/^\/$/', 'controller' => '/var/www/view/blog/blog.php'],
        ['regular_pattern' => '/^\/blog$/', 'controller' => '/var/www/view/blog/blog.php'],
        ['regular_pattern' => '/^\/blog\/id=\d+$/', 'controller' => '/var/www/src/Model/DataDetailTopic/detailTopicCall.php'],
        ['regular_pattern' => '/^\/mytopics$/', 'controller' => '/var/www/view/my_topics/my_topics.php'],
        ['regular_pattern' => '/^\/createtopic$/', 'controller' => '/var/www/view/create_topic/create_topic.php'],
        ['regular_pattern' => '/^\/DataInsertController$/', 'controller' => '/var/www/src/Model/DataInsert/DataInsertController.php']];

    $router = new IndexRouting($routes);

require $router->pageDisplay();
