<?php
include_once "../Class/DBConnect.php";
include_once "../Class/Student.php";
include_once "../Class/StudentManager.php";

$id = $_GET['id'];
$deleteSudent = new StudentManager();
$deleteSudent->deleteStudent($id);

header("Location:../index.php");