<?php

/**
 * 接口：
 * 接口中的方法都是抽象放法
 * 接口中可以有常量，常量的访问是通过 接口名::常量名 进行访问的
*/
interface Person {
    const Sex = "boy";
    public function getAge();
    public function getName();
}

class Boy implements Person
{
    const sex = "girl";
    public function getAge(){
        echo "xh's sex is ".self::sex;
        echo '<br />';
        echo 'age is 19';
    }
    public function getName(){
        echo 'name is walter';
    }
}

$boy = new Boy();
$boy->getName();
echo '<br />';
$boy->getAge();
echo '<br />';
echo Person::Sex

?>