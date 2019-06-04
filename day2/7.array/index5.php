<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>mảng đa chiều chính là mảng lồng mảng</h1>
<h1>mảng 2 chiều</h1>
<?php
$class9a= array("an","hương","sơn","linh");
$class9b= array("an1","hương1","sơn1","linh1");
$class9c= array("an2","hương2","sơn2","linh2");
$class9d= array("an3","hương3","sơn3","linh3");

$dinhtienhoang=array($class9a,$class9b,$class9b,$class9d);

echo"<pre>";
print_r($dinhtienhoang);
echo"</pre>";
?>
</body>
</html>