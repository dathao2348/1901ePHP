<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

if(isset($_POST)&& !empty($_POST)){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<h1>Form HTML</h1>
<pre>
    isset()được sử dụng để kiểm tra xem có sự tồm tại của biến trong hàm isset hay không
    nếu có tồn tại hàm trả về true không tồn tại trả về false
    && và thỏa các điều kiện
    || hoặc tức là chỉ cần thỏa mãn 1 trong các điều kiện
    $_POST khi gửi form đi và method="post" trong form
    thì $_POST khi gửi đi sẽ là 1 mảng dữ liệu
    với key là tên các ô input trong form
    và value là giá trị bên trong các ô inut đó
</pre>
<div>
    <form name="register" action="" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username" value="" placeholder="nhập username">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" value="" placeholder="nhập pasword">
        </div>

        <div>
            <input type="submit" name="submit" value="Đăng ký">
        </div>


    </form>
</div>
</body>
</html>