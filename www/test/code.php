<?php
    $article = "Test Doc";
    require "/var/www/html/html-head.php";
?>
<header>
    <h1>Test Doc</h1>
</header>
<nav>
    <a href="/">Home</a> |
    <a href="/blog.php">Blog</a> |
    <a href="/css/">Log in</a> |
    <a href="/js/">Account</a> |
    <a href="/python/">About</a> |
    <a href="/code.php">Test File</a>
</nav><br>
<div><h4>
<?php

$var_for_globe = 50;
$num1 = 17.1;
$num2 = -13;
$rnd = rand(1, 70);
$str = "Hello";
$array = array(1, "two", 3, 4);
$f = false;
$ar = [1, 2, 4, 7, 2, "five"];
$ar2 = [[2,6,1,],[6,1,2],[3,5,1],[1,5,2]];
$ar3 = ["Name" => "Drone", "Lastname" => "Tarantul", "Age" => 23];



    /*                                              // if, else, else if
     * if ($num2 == -13) {
        foreach ($array as $n)
            echo "$n, ";
    }
    elseif ($str == "Hello" && $num1 == 17.1){
        echo $rnd;
    }
    else {
        echo "kk";
    }*/

    /*                                                 // switch case
    switch($num2){
        case 10:
            echo "num2 = 10";
            break;
        case -8:
            echo "num2 = -8";
            break;
        case -13:
            echo "num2 = -13";
            break;
        default:
            echo "false";
            break;
    }*/

    /*                                          // foreach, for, while, do while

    foreach ($ar3 as $key => $value){
    echo "$key: $value<br>";
    }

    if ($num2 == -13) {
        foreach ($array as $n)
            echo "$n, ";

    for ($i=0; $i<=10; $i++) {
        echo "$i, ";
    }

    echo "<br>";

    $p = 11;
    while ($p <= 21) {
        echo "$p, ";
        $p++;
        if ($p == 22){
            $p--;
            break;
        }
    }
    echo "<br>$p<br>";

    $p = 20;
    do {
        echo $p;
        $p--;
        if ($p == 0){
            echo $p;
            break;
        }
    } while ($p <10);
    */

    function prine(){
        echo "prine";
    }

    function ryme($a){
        echo "ryme function says: $a";
    }

    function ryme_ret($a){
        return "ryme_ret says:$a";
    }

    $ryme_ret_var = ryme_ret(14);

    function ryme_globe(){
        global $var_for_globe;
        $res = $var_for_globe - 17;
        echo "var_for_globe - 17 = $res";
    }

    function ryme_static(){
        static $count;
        $count++;
        echo "You have been use this function for $count time(s);";
    }

    echo prine()."<br>";
    echo ryme(7)."<br>";
    echo $ryme_ret_var."<br>";
    echo ryme_globe()."<br>";
    echo ryme_static()."<br>";
    echo ryme_static()."<br>";
    echo ryme_static()."<br>";

?>
</h4></div>
<?php
    require "/var/www/html/html-footer.php";
?>