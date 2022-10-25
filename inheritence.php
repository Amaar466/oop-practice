<?php
class class1 
{
    public function __construct()
    {
        $this->num=1;
        //echo "conts";
    }
    
    public function fun1()
    {
        echo "fun1";
    }
}

class class2 extends class1 
{
    public function __construct()
    {
        parent::__construct();
        // $this->num=3;
        echo "<br />";
        echo "conts2";
      
       
    }
}
$obj=new class2();
echo "<br />";
//  $obj->fun1();
echo $obj->num;

?>