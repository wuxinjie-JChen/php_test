<?php
echo <<<EOF
sort() - 对数组进行升序排列
<br>
rsort() - 对数组进行降序排列
<br>
asort() - 根据关联数组的值，对数组进行升序排列
<br>
ksort() - 根据关联数组的键，对数组进行升序排列
<br>
arsort() - 根据关联数组的值，对数组进行降序排列
<br>
krsort() - 根据关联数组的键，对数组进行降序排列
<br>
EOF;
function printCars($cars){
    for ($x=0;$x<count($cars);$x++){
        echo $cars[$x];
        echo PHP_EOL;
    }
    echo "<hr>";
}

$cars=array("2","3","1");
printCars($cars);
sort($cars);
printCars($cars);
rsort($cars);
printCars($cars);


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
