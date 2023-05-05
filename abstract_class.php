<?php

/*
abstract class can cantian one abstract function
and must decrial its body into the extends class
can create contructor inside abstract class
can crete variable also
*/
abstract class class1
{
    public function __construct()
    {
        echo "hello contructor";
    }
    public $x = 10;
    // abstract function test1();
    // abstract function test2();
    // abstract function test3();
    public function fun1()
    {
        echo "fun1" . $this->x;
    }
}

// $abstract_class = new class1();
// $abstract_class->fun1();
class children extends class1
{

    public function test1()
    {
        echo "test";
    }
    public function test2()
    {
        echo "test";
    }
    public function test3()
    {
        echo "test";
    }
    public function run()
    {
        echo "run";
    }
}
$object = new children();
$object->run();
$object->fun1();
echo "start";