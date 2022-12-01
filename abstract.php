<?php
abstract class class1{
    abstract function test();
    // {
    //     echo "hello";
    // }
}
class class2 extends class1
{
    function test()
    {
        echo 'text';
    }
}



?>