<?php
interface animal{
    public function makesound();
}

class cat implements animal{
 public function makesound()
 {
    echo 'Meow';
 }

}
class dog implements animal{
    public function makesound()
    {
       echo 'Bark';
    }
}
class mouse implements animal{
    public function makesound()
    {
       echo 'Squeak';
    }
}

$cat = new cat();
$dog = new dog();
$mouse = new mouse();

$animal =array($cat ,  $dog ,  $mouse);

foreach($animal as $animals)
{
    $animals->makesound();
}



?>