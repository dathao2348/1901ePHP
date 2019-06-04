<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/23/2019
 * Time: 08:09 PM
 */
class Test{
    /*
     * Những thuộc tính được khai báo giowishanj truy cập là public
     * thì có thể truy cập mọi nơi
     * @var int
     * */
    public $a=5;

    protected $b=7;

    private $c=8;
}
class Test1 extends Test
{
    public function truycapthuoctinhpubliccha()
    {
        echo "<br>" . __METHOD__ . " " . $this->a;
    }

    public function truycapthuoctinhprotectedcha()
    {
        //Chỉ có thể truy cập vào thuộc tính hoặc phương thức có giới hạn là protected
        //từ các class kế thừa class cha
        //không thể truy cập từ bên ngoài class cha hoặc class kế thừa từ class cha
        echo "<br>" . __METHOD__ . " " . $this->b;
    }
    /*public function truycapthuoctinhprivatecha() {
        echo "<br>" . __METHOD__ . " " . $this->c;
    }*/
}
$t1 = new Test1();
$t1->truycapthuoctinhpubliccha();
$t1->truycapthuoctinhprotectedcha();
/*$t1->truycapthuoctinhprivatecha();*/
