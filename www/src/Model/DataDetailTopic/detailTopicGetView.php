<?php

use TplHandler\TplHandler;

    $fillsDetailTopic = ['title' =>  $tplFills['title'], 'header' => 'Topic'];

    $tplHandler = new TplHandler();
    echo $tplHandler->creator('/var/www/view/html-head.html.tpl', $fillsDetailTopic);
    echo $tplHandler->creator('/var/www/view/header.tpl', $fillsDetailTopic);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";

    echo $tplHandler->creator('/var/www/view/detail_topic/detail_topic_fill.tpl', $tplFills);

require "/var/www/view/html-footer.html";
