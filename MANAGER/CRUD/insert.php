<?php
include_once "../CLASS/DBConnect.php";
include_once "../CLASS/studentManager.php";
include_once "../CLASS/student.php";

$student = new student($_GET['name'],$_GET['phone']);
$manager = new studentManager();;
$manager->addStudent($student);

header("Location:../index.php");