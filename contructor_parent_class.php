<?php

class class1
{
    public function __construct()
    {
        echo 'parent contructor';
    }
    public function fun1()
    {
        echo "class1 fun1";
    }
}

class class2 extends class1
{
    public function __construct()
    {
        echo 'children contructor';
    }
}

// $object = new class2();
// $object->fun1();
// echo "start";

// now call to parent contructor first
class class3
{
    public function __construct()
    {
        echo 'parent contructor';
    }
    public function fun1()
    {
        echo "class1 fun1";
    }
}

class class4 extends class3
{
    public function __construct()
    {
        parent::__construct();
        echo 'children contructor';
    }
}

$object = new class4();
$object->fun1();
echo "start";