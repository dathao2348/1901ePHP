<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/2/2019
 * Time: 12:31 AM
 */
/**
 * Tạo ra 4 hằng số để kết nối CSDL
 */
//Cách khai báo hằng số
define("SERVERNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","appcrud");

$connection=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
/**
 *  Kiểm tra kết nối đến csdl có thành công hay không
 *  Nếu không thành công sẽ ngắt chương trình
 */
if(!$connection){
    die("Kết nối lỗi:" . mysqli_connect_error());
}