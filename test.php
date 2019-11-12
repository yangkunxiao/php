<?php

class Test 
{
    //构造函数
    public function __construct($age){
        $this -> age = $age;
    }

    public function say(){
        echo $this -> age;
        echo '<br />';
    }
    //析构函数 释放资源  对象被销毁的时候执行
    public function __destruct(){
        echo "over";
    }
}

$test = new Test('19');

$test->say();

?>