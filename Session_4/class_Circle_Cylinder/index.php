<?php
include "Circle.php";
include "Cylinder.php";

$circle = new Circle(30,"yellow");
$circle->toString();
$cylinder = new Cylinder(30,"black",50);
echo "<br>";
$cylinder->toString();