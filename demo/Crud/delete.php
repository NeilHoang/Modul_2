<?php
include "../class/DBConnect.php";
include "../class/Student.php";
include "../class/StudentDB.php";

$id = $_GET['id'];
$delete = new StudentDB();
$delete->deleteStudent($id);

header("Location:../list.php");
