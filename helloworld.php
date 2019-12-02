<?php
// session_start();
$num1=10;
$num3=8E-5;
$name="Arno De";
$_SESSION["name"] = $name;

function myTest()
{
    global $num1;
    $num2=20;
    echo "1 num1: $num1</br>";
    echo "1 num2: $num2";
}

myTest();

echo "2 num1: $num1";
// echo "2 num2: $num2";

echo <<<EOF
this is $num1
test
EOF;

var_dump($num1);
var_dump($num3);
var_dump($name);

?>