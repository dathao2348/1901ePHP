<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
/*
 * Nạp kết nối CSDL vào file này
 * */

include_once "config.php";

$ten='';
$giatien='';
$tonkho='';
$nhacungcap='';


if(isset($_GET['id'])){

    $product_id=(int) $_GET['id'];

    $sqlSelect="SElECT* FROM product WHERE id=" .$product_id;

    $result=mysqli_query($connection,$sqlSelect);

    $row=mysqli_fetch_assoc($result);

    //Cú pháp rút gọn của if elsse (condition ? câu lệnh chạy khi đk là true: câu lệnh chạy khi điều kiện =false

    $ten=isset($row['ten']) ? $row['ten']:'';
    $ten=isset($row['giatien']) ? $row['giatien']:'';
    $ten=isset($row['tonkho']) ? $row['tonkho']:'';
    $ten=isset($row['nhacungcap']) ? $row['nhacungcap']:'';

}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa thông tin </h1>

            <div>
                <form name="edit" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo (int) $_GET['id'] ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="ten" value="<?php echo $ten ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input type="text" class="form-control" name="giatien" value="<?php echo $giatien ?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="tonkho" value="<?php echo $tonkho ?>">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="nhacungcap" value="<?php echo $nhacungcap ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>