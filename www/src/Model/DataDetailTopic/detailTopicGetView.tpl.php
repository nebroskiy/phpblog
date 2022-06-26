<?php

extract($fills);

    $fillsDetailTopic = ['title' =>  $tplFills['title'], 'header' => 'Topic'];

    echo $tplHandler->creator('/var/www/view/html-head.html.tpl', $fillsDetailTopic);
    echo $tplHandler->creator('/var/www/view/header.tpl', $fillsDetailTopic);


$tplHandler->require('/var/www/view/nav/nav_main.html');
$tplHandler->require('/var/www/view/nav/nav_blog.html');


    echo $tplHandler->creator('/var/www/view/detail_topic/detail_topic_fill.tpl', $tplFills);

$tplHandler->require('/var/www/view/html-footer.html');
