<?php


class class1
{
    public function fun1()
    {
        echo "fun1";
    }
}
class class2 extends class1
{
    public function fun2()
    {
        echo "fun2";
    }
}

$object = new class2();
$object->fun2();


echo "start";