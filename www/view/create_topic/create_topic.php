<?php

use TplHandler\TplHandler;

    $fillsCreateTopic = ['title' => "Create Topic", 'header' => "Create Topic"];

    $tplHandler = new TplHandler();
    echo $tplHandler->creator('/var/www/view/html-head.html.tpl', $fillsCreateTopic);

//    $tplHandler->setContents('/var/www/view/header.tpl');
    echo $tplHandler->creator('/var/www/view/header.tpl', $fillsCreateTopic);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
require "/var/www/view/create_topic/create_topic_form.html";
require "/var/www/view/html-footer.html";
