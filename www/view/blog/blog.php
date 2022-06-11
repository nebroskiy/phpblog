<?php

use TplHandler\TplHandler;

    $fillsBlog = ['title' => 'Blog', 'header' => 'Blog'];

    $tplHandler = new TplHandler();
    echo $tplHandler->creator('/var/www/view/html-head.html.tpl', $fillsBlog);

    $tplHandler = new TplHandler();
    echo $tplHandler->creator('/var/www/view/header.tpl', $fillsBlog);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
require "/var/www/view/blog/topic_display.html.php";
require "/var/www/view/html-footer.html";
