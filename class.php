<?php

class person{
    public $x=1;

    function fun1()
    {
        echo $this->x;
        //echo "fun1";
    }
}
$obj= new person();
$obj->fun1();

?>