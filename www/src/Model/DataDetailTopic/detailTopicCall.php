<?php

use DataDetailTopic\GetTopicId;
use DataDetailTopic\DetailTopicController;
use DataConnection\DataConnectionPdo;
use DataDetailTopic\DataDetail;

//    $getTopicId = new GetTopicId($router);

    $showTopic = new DetailTopicController(new DataDetail(new DataConnectionPdo(), new GetTopicId($router)));
    $showTopic->setPdoFills();
    $showTopic->requireTopic();
