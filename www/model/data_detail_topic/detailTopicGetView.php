<?php
require "/var/www/template_handler/TplHandler.php";

    $fillsDetailTopic = ['title' =>  $tplFills['title'], 'header' => 'Topic'];

    $tplHandler = new TplHandler('/var/www/view/html-head.html.tpl');
    echo $tplHandler->creator($fillsDetailTopic);

    $tplHandler->setContents('/var/www/view/header.tpl');
    echo $tplHandler->creator($fillsDetailTopic);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";

    $tplHandler->setContents('/var/www/template/detail_topic_fill.tpl');
    echo $tplHandler->creator($tplFills);

require "/var/www/view/html-footer.html";
