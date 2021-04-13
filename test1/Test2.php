<?php
function test(){
    static $x=1;
    echo $x;
    $x++;
    echo PHP_EOL;
}
test();
test();
test();