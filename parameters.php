<?php
// session_start();
include "./helloworld.php";

if(42 == "42") {
    echo "1 判断成功 42.".PHP_EOL;
}else {
    echo "1 判断失败 42.".PHP_EOL;
}
if(42 === "42") {
    echo "2 判断成功 42.".PHP_EOL;
}else {
    echo "2 判断失败 42.".PHP_EOL;
}

// 定义常量，引用常量前面不能加$
define("GREETING", "Hello, Arno De."); // 区分常量的大小写
echo GREETING.PHP_EOL;
// echo greeting.PHP_EOL; // 会报错
define("GREETING2", "Hello, Arno De!", true); // 不区分常量的大小写
echo GREETING2.PHP_EOL;
echo greeting2.PHP_EOL;

var_dump($name);
echo strlen($name) . PHP_EOL;

// 运算符
echo 10 + 10 . PHP_EOL;
echo "10dsf" + "10sss" . PHP_EOL; // 这个为什么会是 20 呢？
echo 10 . 10 . PHP_EOL;

?>