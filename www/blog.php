<?php
    $article = "Blog";
    require "./html/html-head.php";
?>
<header>
    <h1>Here will be blog</h1>
</header>
<?php
    require "./html/nav_main.php";
    require "./html/nav_blog.php";
?>
<div class="container mt-4">
<?php
    require "./pdo/db_select_fetch.php";
    require "./php/display_topics.php";
    display_topics($res);
?>
<div>
<?php
    require "./html/html-footer.php";
?>