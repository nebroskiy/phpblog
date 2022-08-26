<?php

use TplHandler\TplHandler;

$tplHandler = new TplHandler();
$tplHandler->inherit('/var/www/view/testview/main.tpl.php', '/var/www/view/testview/test_child.tpl.php');



echo "<content>";
    function func ()
    {

    }
echo "</content>";





