<?php
include "point2D.php";
include "point3D.php";
$point2d = new Point2D(5,6.6);
$point2d->setXY(20,30);
$point2d->toString();
echo "<br>";
$point3d = new Point3D(6.2,5.1,8.8);
$point3d->toString();
echo "<br>";
//var_dump($point2d ->getXY());