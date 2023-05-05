<?php
/*
two method can use one is 
insteadof 
on second one is as to create alise 
*/

trait class1
{
    public function fun1()
    {
        echo "fun1 class 1";
    }
}

trait class2
{
    public function fun1()
    {
        echo "fun1 class 2";
    }
}

class children
{
    use class1, class2 {
        class1::fun1 insteadof class2;
        class2::fun1 as class2fun1;
    }

    public function run()
    {
        echo "hello";
    }
}

$object = new children();
$object->class2fun1(); // Note: you need to call the function with parentheses
echo "start";