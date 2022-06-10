<?php

use DataDetailTopic\GetTopicId;
use DataDetailTopic\DetailTopicController;

    $getTopicId = new GetTopicId($router);

    $showTopic = new DetailTopicController($getTopicId);
