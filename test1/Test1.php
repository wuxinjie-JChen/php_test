<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "hello world";
$x=3;
$y=10;
function myTest(){
    $GLOBALS['y']+=$GLOBALS['x'];
    global $x,$y;
    $y+=$x;
}
myTest();
echo "<br>";
echo  $y
?>
</body>
</html>