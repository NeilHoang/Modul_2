<?php
include_once "../Class/DBConnect.php";
include_once "../Class/Student.php";
include_once "../Class/StudentManager.php";

$student = new Student($_GET['name'],$_GET['age']);
$id = $_GET['id'];
$update = new StudentManager();
$update->updateStudent($id,$student);

header("location:../index.php");