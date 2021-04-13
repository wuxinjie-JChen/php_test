<?php
$cars=array("play","a","b");
echo "i like".$cars[0].",".$cars[1].",".$cars[2]."!";
echo "<hr>";
echo "cars数组的长度为：".count($cars);
echo "<hr>";
echo "遍历数组";
for($x=0;$x<count($cars);$x++){
    echo $cars[$x];
    echo PHP_EOL;
}
echo "<hr>";
echo "关联数组";
$age=array("a"=>"32","b"=>"15","f"=>"11");
$age['c']="30";
$age['d']="39";
$age['e']="42";
echo "a is ".$age['a']." years old";

echo "<hr>";
echo "遍历关联数组";
foreach ($age as $x=>$x_value){
    echo "key=".$x." value=".$x_value;
    echo "<br>";
}
