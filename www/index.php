<?php
    $article = "PHP Blog";
    require "./html/html-head.php";
?>
<header>
    <h1>The content of the document......</h1>
    <h5><?php echo 'Today is <b>' . date('l') . '</b>, '. date('d/m/Y') . ' and now its ' . '<b>' . date('H:i') . '</b>'; ?></h5>
</header>
<?php
    require "./html/nav_main.php";
?>
<?php
    require "./html/html-footer.php";
?>