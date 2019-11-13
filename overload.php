<?php

class Person
{
    public function test($name,$age){
        echo $name.'年龄是:'.$age.'=======>Person';
    }

    private function eat($name,$food){
        echo $name.'正在吃: '.$food.'=======>Person';
    }

    protected function drink($name,$something){
        echo $name.'正在喝: '.$something.'=======>Person';
    }
}

class Boy extends Person
{
    public function test($name,$age){
        // parent::test($name,$age);//重载
        echo $name.'年龄是:'.$age.'=======>Boy';//重写
    }
    // public function test($name,$age,$sex){
    //     echo $name2.'年龄是:'.$age.',性别是：'.$sex.'=======>Boy';//重写
    // }
    private function eat($name,$food){
        echo $name.'正在吃: '.$food.'=======>Boy';
    }

    protected function drink($name,$something){
        echo $name.'正在喝: '.$something.'=======>Boy';
    }
}

$xh = new Boy();

$xh->test('小红',20);



?>