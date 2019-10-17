
<?php

include "Fan.php";

$fan1 = new Fan();
$fan2 = new Fan();

$fan1->setOn(true);

$fan2->setColor("red");
$fan2->setSpeed(2);
echo "Fan1 : ".$fan1->toString()."</br>";
echo "Fan2 : ".$fan2->toString();