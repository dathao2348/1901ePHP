<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/23/2019
 * Time: 07:54 PM
 */
class Test{
    /*
     * Những thuộc tính được khai báo giới hạn truy cập là public
     * Thì có thể truy cập mọi nơi
     * @var int
     * */
    public $a=5;

    protected $b=7;

    private $c=8;

}
$t= new Test();
echo "<br>". $t->a;
//truy cập vào thuộc tính có giới hạn truy cập là private
//Cannot access private property
echo "<br>" . $t->b;