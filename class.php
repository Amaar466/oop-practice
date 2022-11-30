<?php

class person{
    function __construct($y)
    {
        //by parameter
        $this->x=$y;
        //$this->x=10;
        //echo 'construct start';
    }
    function fun1()
    {
        echo $this->x;
        //echo 'simple function';
    }

    function __destruct()
    {
        echo 'destruct end';
    }

    // public $x=1;

    // function fun1()
    // {
    //     echo $this->x;
    //     //echo "fun1";
    // }
}
//by parameter
 $obj= new person(30);
 //$obj= new person();
 echo '</br>';
 $obj->fun1();
 echo '</br>';

?>