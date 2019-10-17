<?php
include "Colorable.php";
include "Square.php";

$squares = new Square(5,4,"red");
echo "Diện tích là: " .$squares->Area() . "<br>";
echo $squares->howToColor() . "<br>";
