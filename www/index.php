<?php
    $article = "PHP Blog";
    require "html-head.php";
?>
<body>
<header>
    <h1>The content of the document......</h1>
    <h5><?php echo 'Today is <b>' . date('l') . '</b>, '. date('d/m/Y') . ' and now its ' . '<b>' . date('H:i') . '</b>'; ?></h5>
</header>
<?php
    require "nav_main.php";
?>
</body>
<?php
    require "html-footer.php";
?>