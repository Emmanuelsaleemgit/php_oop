<?php
/*
interface only public and abstract function
interface has not contructor 
interface has no variable 
can not create object of interface
why we use interface ?
ans for multi inheritence for restication must use this function which decrial in interface
*/

interface class1
{
    // public $x = 10; not work
    // public function __contruct(); // not work
    // private function fun1(); //not working 
    // protected function fun1(); //also not working 
    public function fun1(); //this one work
}
interface class3
{
    // public $x = 10; not work
    // public function __contruct(); // not work
    // private function fun1(); //not working 
    // protected function fun1(); //also not working 
    public function fun2(); //this one work
}
// $object = new class1(); not work

class class2 implements class1, class3
{
    public function fun1()
    {
        echo "fun1";
    }
    public function fun2()
    {
        echo "fun2";
    }
    public function run()
    {
        echo "class 2";
    }
}
$object = new class2();

$object->fun1();

echo "start";