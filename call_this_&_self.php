<?php

class class1
{
    public $x = 10;
    public function fun1()
    {
        echo "fun1" . "  as " . $this->x;
    }
}

class class2
{
    // public $x = 10;// not work
    public static $x = 10;

    static public function fun2()
    {
        echo "fun2" . " as " . self::$x;
        // Static methods cannot access non-static properties using $this keyword
        // So we need to use self::$x instead of $this->x to access static property
    }
}
$objec1 = new class1();
$objec1->fun1();
$objec2 = new class2();
$objec2->fun2();
echo "start";