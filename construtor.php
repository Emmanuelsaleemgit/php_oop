<?php

// sample contruct

class class1
{
    public function __construct()
    {
        echo "contructor";
    }
    public function fun1()
    {
        echo "fun1";
    }
}

// $object = new class1();

// $object->fun1();

// echo "start";


// data pass into contruct

class class2
{
    public function __construct($y)
    {
        $this->x = $y;
    }
    public function fun1()
    {
        echo "fun2" . $this->x;
    }
}

$object = new class2(123);

$object->fun1();

echo "start";