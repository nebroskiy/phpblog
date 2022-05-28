<?php
require "/var/www/template_handler/TplHandler.php";

    $fillsMyTopics = ['title' => "My Topics", 'header' => "My Topics"];
    $tplHandler = new TplHandler("/var/www/view/html-head.html.tpl");
    echo $tplHandler->creator($fillsMyTopics);

    $tplHandler->setContents('/var/www/view/header.tpl');
    echo $tplHandler->creator($fillsMyTopics);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
require "/var/www/view/html-footer.html";