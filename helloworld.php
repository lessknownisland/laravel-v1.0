<?php
$num1=10;

function myTest()
{
    global $num1;
    $num2=20;
    echo "1 num1: $num1".PHP_EOL;
    echo "1 num2: $num2".PHP_EOL;
}

myTest();

echo "2 num1: $num1".PHP_EOL;
echo "2 num2: $num2".PHP_EOL.PHP_EOL;

echo <<<EOF
this is $num1
test
EOF.PHP_EOL
?>