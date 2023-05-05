<?php
//  when class static function contructor not call becase object not create that why contructor not call
class class1
{
    public function __construct()
    {
        echo "contructor";
    }
    static public function fun1()
    {
        echo 'hello';
    }
}

echo class1::fun1();