<?php

require '/var/www/model/data_detail_topic/GetTopicId.php';

    $getTopicId = new GetTopicId($router);

require "/var/www/model/data_detail_topic/DetailTopicController.php";

    $showTopic = new DetailTopicController($getTopicId);
