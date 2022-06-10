<?php

use TplHandler\TplHandler;

    $fillsMyTopics = ['title' => "My Topics", 'header' => "My Topics"];

    $tplHandler = new TplHandler();
    echo $tplHandler->creator('/var/www/view/html-head.html.tpl', $fillsMyTopics);

//    $tplHandler->setContents('/var/www/view/header.tpl');
    echo $tplHandler->creator('/var/www/view/header.tpl', $fillsMyTopics);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
require "/var/www/view/html-footer.html";