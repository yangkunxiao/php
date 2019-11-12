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
        echo $this->getAge()." : ".$this->getMoney();
    }

    //set get只针对protected private
    public function __set($key,$value){
        echo $key.">>>>".$value;
        if($key == 'name' && $value == 'dh'){
            $this->name = 'ph'; 
        }
    }

    public function __get($key){
        echo $key.">>>>";
        if($key == 'age'){
            return '1000'; 
        }
    }
}

$xh = new Person();
// $xh -> name = 'dh';
echo $xh->getAge().'<br />';
// echo $xh->getMoney().'<br />';
echo $xh->userCard().'<br />';

// echo $xh->age.'<br />';
// echo $xh->name.'<br />';
// echo $xh->money.'<br />';
// echo $xh->getAge().'<br />';
// echo $xh->getName().'<br />';
// echo $xh->getMoney().'<br />';

?> 