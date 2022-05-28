<?php
require "/var/www/template_handler/TplHandler.php";

    $fillsBlog = ['title' => 'Blog', 'header' => 'Blog'];

    $tplHandler = new TplHandler('/var/www/view/html-head.html.tpl');
    echo $tplHandler->creator($fillsBlog);

    $tplHandler->setContents('/var/www/view/header.tpl');
    echo $tplHandler->creator($fillsBlog);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
require "/var/www/view/blog/topic_display.html.php";
require "/var/www/view/html-footer.html";
