<?php
class person
{
function __construct()
{
    $this->num=1;
    //echo 'construct1';
}
  
}
class child extends person
{
    function __construct()
    {
        parent::__construct();
         $this->num=2;
        echo 'construct2';
    }
}
$obj = new child();
echo $obj->num;

?>