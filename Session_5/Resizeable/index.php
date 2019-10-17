<?php
//include_once "Resizeable.php";
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle(rand(1,100));
echo $circle->display();
$circle->resize();
echo "<br>";
echo $circle->display();
echo "<br>";
echo "<br>";
echo "<br>";


$rectangle = new Rectangle(rand(1,100),rand(1,100));
echo $rectangle->displays();
$rectangle->resize();
echo "<br>";
echo $rectangle->displays();
echo "<br>";
echo "<br>";
echo "<br>";

$square = new Square(rand(1,100));
echo $square->display();
$square->resize();
echo "<br>";
echo $square->display();