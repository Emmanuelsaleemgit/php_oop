<?php
trait class1
{
    public function fun1()
    {
        echo "fun1";
    }
}
trait class2
{
    public function fun2()
    {
        echo "fun2";
    }
}
trait class3
{
    public function fun3()
    {
        echo "fun3";
    }
}

class childrenClass
{
    use class1, class3;
    public function childrenFunction()
    {
        echo "children class";
    }
}

$object = new childrenClass();
$object->fun3();
echo "start";