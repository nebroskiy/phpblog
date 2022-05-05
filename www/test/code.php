<?php
    $article = "Test Doc";
    require "/var/www/view/html-head.php";
?>
<header>
    <h1>Test Doc</h1>
</header>
<?php
    require "/var/www/view/nav/nav_main.php";
?>
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

                                                            //functions
//    function prine(){
//        echo "prine";
//    }
//
//    function ryme($a){
//        echo "ryme function says: $a";
//    }
//
//    function ryme_ret($a){
//        return "ryme_ret says:$a";
//    }
//
//    $ryme_ret_var = ryme_ret(14);
//
//    function ryme_globe(){
//        global $var_for_globe;
//        $res = $var_for_globe - 17;
//        echo "var_for_globe - 17 = $res";
//    }
//
//    function ryme_static(){
//        static $count;
//        $count++;
//        echo "You have been use this function for $count time(s);";
//    }
//
//    echo prine()."<br>";
//    echo ryme(7)."<br>";
//    echo $ryme_ret_var."<br>";
//    echo ryme_globe()."<br>";
//    echo ryme_static()."<br>";
//    echo ryme_static()."<br>";
//    echo ryme_static()."<br>";
//                                                                Ternar operator
//    $tern = 1;
//    echo $tern ? "Yeah" : "Nope";

                                                                //Fabric method
//class ProductOne implements ProductInterface
//{
//    public function operation()
//    {
//        return "This is ProductOne class";
//    }
//}
//
//class ProductTwo implements ProductInterface
//{
//    public function operation()
//    {
//        return "This is ProductTwo class";
//    }
//}
//
//interface ProductInterface
//{
//    public function operation();
//}
//
//abstract class FactoryClass {
//
//    abstract function factoryMethod();
//
//    public function someOperation(){
//        $product = $this->factoryMethod();
//        $result = $product->operation();
//        return $result;
//    }
//}
//
//class ItemOne extends FactoryClass {
//
//    public function factoryMethod()
//    {
//        return new ProductOne();
//    }
//
//}
//
//class ItemTwo extends FactoryClass {
//
//    public function factoryMethod()
//    {
//        return new ProductTwo();
//    }
//
//}
//
//function getItem(FactoryClass $item)
//{
//    echo $item->someOperation();
//}
//
//getItem(new ItemOne());
//getItem(new ItemTwo());
//
//echo "<br>";
                                                         // adapter
//class NotToChange
//{
//    public function cantChange () :string
//    {
//        return "NotToChangeClass, cantChange method";
//    }
//}
//
//interface UseThisInterface
//{
//    public function rightMethod();
//}
//
//class Adapter extends NotToChange implements UseThisInterface
//{
//    public function rightMethod() :string
//    {
//        return $this->cantChange();
//    }
//}
//
//class UseThisClass
//{
//    public function useThisMethod (Adapter $someClass)
//    {
//       return $someClass->rightMethod();
//    }
//}
//
//$objUTC = new UseThisClass();
//$var = $objUTC->useThisMethod(new Adapter());
//echo $var;

$arr = ['a', 'b', 'c'];
foreach ($arr as $a)
{
    $i = 0;
    $i ++;
    echo $i;
}

?>
</h4></div>
<?php
    require "/var/www/view/html-footer.php";
?>