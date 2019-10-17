<?php
include_once "../Class/DBConnect.php";
include_once "../Class/Student.php";
include_once "../Class/StudentManager.php";

$student = new Student($_GET['name'],$_GET['age']);
$addStudent = new StudentManager();
$addStudent->addStudent($student);

header("Location:../index.php");