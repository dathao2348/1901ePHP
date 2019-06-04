<?php

$i=100;
for($i=1;$i<=10;$i++){
    echo "<br>" .$i;
}

$i=100;
while($i<=10){
    echo "<br>" .$i;
    $i++;
}
/**
 * do... while sẽ chậy ít nhất 1 lần ngay cả ki điều kiện vòng lặp là false
 * tư lần 2 trở đi do.... while mới check điều kiện là true thì chạy
 *
 * for và while chỉ chạy khi điều kiện là true
 *
 */
$i = 100;
do {
    echo "<br>" . $i;
    $i++;
}while($i <= 10);