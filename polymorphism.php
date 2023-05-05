<?php

abstract class class1
{
    abstract public function shap($x, $y);
    public function fun1()
    {
        echo "hello";
    }
}

interface class2
{
    public function calculator($x, $y);
}

class rectangle extends class1
{
    public function shap($length, $width)
    {
        $area = $length * $width;

        echo "The area of the rectangle is " . $area;
    }
}
class triangle  extends class1
{
    public function shap($length, $width)
    {
        $area = ($length * $width) / 2;

        echo "The area of the triangle is " . $area;
    }
}

$obj = new rectangle();
$obj->shap(3, 3);
$obj2 = new triangle();
$obj2->shap(3, 3);