<?php
// public variable example
class class1
{
    public $x = 10;
    public function fun1()
    {
        echo "fun1" . $this->x;
    }
}
// $object = new class1();
// echo $object->x;
// $object->fun1();
// echo "start";


// protected variable example 
class class2
{
    protected $x = 10;
    public function fun1()
    {
        echo "fun1" . $this->x;
    }
    public function getVariableValue()
    {
        return $this->x;
    }
}

// $object = new class2();
// // echo $object->x; // not use direct 
// echo $object->fun1();

// protected variable example 
class class3
{
    private $x = 10;
    public function fun1()
    {
        echo "fun1" . $this->x;
    }
    public function getVariableValue()
    {
        return $this->x;
    }
}

$object = new class3();
// echo $object->x; // not use direct 
// echo $object->fun1();
// echo $object->getVariableValue();