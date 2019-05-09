<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Comment trong php</h1>
<pre>
    Comment thì chạy mà chỉ được dùng để giải thích code cho các lập trình viên
    Phân biệt sự khác biệt khi echo giá trị 1 biến
    bằng nháy kép"" hoặc nháy đơn
    Nếu trong nháy kép có $a thì php sẽ in ra giá trị của biến đó
    nếu trong php nháy đơn có $a thì sẽ hiểu đó như 1 chuỗi bình thường
</pre>
<?php
/*
* comment nhiều dòng
*/
//comment 1 dòng
$a=5;
echo 'nháy đơn: giá trị biến $a bằng: ' .$a;
echo "<br>";
echo "nháy kép: giá trị biến $a bằng:" .$a;
?>


</body>
</html>