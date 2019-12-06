<?php
include_once "../Employee/Employess.php";
include_once "../Employee/Personnel.php";
include_once "addPersonnel.php";
include_once "../EmployeeManager/EmployeeManager.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $they = $_GET["they"];
    $name = $_GET["name"];
    $birthday = $_GET["birthday"];
    $address = $_GET["address"];
    $job = $_GET["job"];
}
$newBei = new Personnel($they,$name,$birthday,$address,$job);

$manager->addPersonnel($newBei);
header("Location:listPersonnel.php");