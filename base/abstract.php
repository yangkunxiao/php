<?php

abstract class Person {
    const Name = "测试name";

    public function eat(){
        echo 'eat';
    }

    abstract public function drink();

}

class Boy extends Person 
{
    /**
     * abstract类：
     * 类中有抽象方法的一定是抽象类
     * 抽象类中不一定有抽象方法
     * 抽象类中可以有普通方法和变量 常量的访问是通过 抽象类名::常量名 进行访问的
     * 抽象类中的抽象方法一定要在它的子类中实现
    */
    public function drink(){
        echo "drink";
    }
}

$boy = new Boy();
$boy -> drink();
echo '<br />';
$boy -> eat();
echo '<br />';
echo Person::Name


?>