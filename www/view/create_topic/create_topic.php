<?php

use TplHandler\TplHandler;

    $fillsCreateTopic = ['title' => "Create Topic", 'header' => "Create Topic"];
    $tplHandler = new TplHandler("/var/www/view/html-head.html.tpl");
    echo $tplHandler->creator($fillsCreateTopic);

    $tplHandler->setContents('/var/www/view/header.tpl');
    echo $tplHandler->creator($fillsCreateTopic);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
require "/var/www/view/create_topic/create_topic_form.html";
require "/var/www/view/html-footer.html";
