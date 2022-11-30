<?php
class class1{
    //in protected case we can not access and can not retrive the value
    protected $num;
    function __construct()
    {
       $this->num=1;
    }
    //getter(Use for retrive the value)
    //setter(use to set the value)
    function getnum()
    {
        return $this->num;
    }
}
$obj= new class1();

//$obj->num=2;
  echo $obj->getnum();
?>