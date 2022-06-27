<?php

extract($fills);

$fillsCreateTopic = ['title' => "Create Topic", 'header' => "Create Topic"];

    echo $tplHandler->creator('/var/www/view/html-head.html.tpl', $fillsCreateTopic);

    echo $tplHandler->creator('/var/www/view/header.tpl', $fillsCreateTopic);

$tplHandler->require('/var/www/view/nav/nav_main.html');
$tplHandler->require('/var/www/view/nav/nav_blog.html');
$tplHandler->require('/var/www/view/create_topic/create_topic_form.html');
$tplHandler->require('/var/www/view/html-footer.html');
