<?php

//public 公共的  protected 受保护的  private  私有的

class Person
{
    public $name = 'walter';
    private $age = 10;
    protected $money = '$1000';

    public function getAge(){
        //虽然age是私有的 但是可以通过内部的方法得到
        return $this->age;
    }


    private function getName(){
        return $this->name;
    }

    protected function getMoney(){
        return $this->money;
    }

    public function userCard (){
        echo $this->name." : ".$this->getAge()." : ".$this->getMoney();
    }

    //set get isset unset只针对protected private
    public function __set($key,$value){
        if($key == 'name' && $value == 'dh'){
            $this->name = 'ph'; 
        }
    }

    public function __get($key){
        if($key == 'age'){
            return '不能说的年纪'; 
        }
    }

    // public function __isset($key){
    //     if($key == 'name'){
    //         return false;
    //     }
    // }
}

$xh = new Person();
// $xh->name = 'dh';
// echo $xh->age.'<br />';
// echo $xh->getAge().'<br />';
/**
 * PHP的isset()函数 一般用来检测变量是否设置
 * 格式：bool isset ( mixed var [, mixed var [, ...]] )
 * 功能：检测变量是否设置
 * 返回值：
 * 若变量不存在则返回 FALSE
 * 若变量存在且其值为NULL，也返回 FALSE
 * 若变量存在且值不为NULL，则返回 TURE
 * 同时检查多个变量时，每个单项都符合上一条要求时才返回 TRUE，否则结果为 FALSE
 * 
 * empty()函数 判断值为否为空
 * bool empty ( mixed var )
 * 返回值:
 * 若变量不存在则返回 TRUE
 * 若变量存在且其值为""、0、"0"、NULL、、FALSE、array()、var $var; 以及没有任何属性的对象，则返回 TURE
 * 若变量存在且值不为""、0、"0"、NULL、、FALSE、array()、var $var; 以及没有任何属性的对象，则返回 FALSE
 * 
*/
//注销属性
// unset($xh->name);

//默认只能判断public
var_dump(isset($xh->name));
echo'<br />';
// echo $xh->getMoney().'<br />';
echo $xh->userCard().'<br />';

// echo $xh->age.'<br />';
// echo $xh->name.'<br />';
// echo $xh->money.'<br />';
// echo $xh->getAge().'<br />';
// echo $xh->getName().'<br />';
// echo $xh->getMoney().'<br />';

?> 