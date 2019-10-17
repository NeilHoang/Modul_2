<?php
include_once "../CLASS/DBConnect.php";
include_once "../CLASS/studentManager.php";
include_once "../CLASS/student.php";

 $id = $_GET['id'];
 $delete = new studentManager();
 $delete->deleteStudent($id);

header("Location:../index.php");