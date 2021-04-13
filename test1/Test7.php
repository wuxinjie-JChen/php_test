<?php
$txt1="hello";
$txt2="world";
echo $txt1.''.$txt2;
echo strlen($txt1.''.$txt2);
echo "================================================";
echo "<hr/>";
echo "PHP strpos() 函数";
echo "strpos() 函数用于在字符串内查找一个字符或一段指定的文本。

如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。";
echo "<br>";
echo strpos("helloworld","world");