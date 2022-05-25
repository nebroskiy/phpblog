<?php
//$article = $title;
$article = 'CHANGE IT';
require "/var/www/view/html-head.php";
?>
<header>
    <h1>Topic</h1>
</header>
<?php
require "/var/www/view/nav/nav_main.html";
require "/var/www/view/nav/nav_blog.html";
//require "/var/www/view/detail_topic/detail_topic_fill.php";
require "/var/www/template_handler/TplHandler.php";
$detailTopicView = new TplHandler('/var/www/template/detail_topic_fill.tpl');
$show = $detailTopicView->creator($tplFills);
echo $show;
require "/var/www/view/html-footer.html";
