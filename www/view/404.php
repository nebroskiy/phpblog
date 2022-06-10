<?php
require "/var/www/template_handler/TplHandler.php";

    $fills404 = ['title' => "404 Page not found :(", 'header' => "404 Page not found :("];

    $tplHandler = new TplHandler("/var/www/view/html-head.html.tpl");
    echo $tplHandler->creator($fills404);

    $tplHandler->setContents('/var/www/view/header.tpl');
    echo $tplHandler->creator($fills404);

require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
require "/var/www/view/html-footer.html";
