<?php
include "point.php";
include "MoveablePoint.php";

$point = new Point(5,6);
$move = new MoveablePoint(10,9,5,7);
$move->toString();