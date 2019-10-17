<?php
$index = $_GET['id'];
//var_dump($index);
$listStudent = file_get_contents('data.json');
$listStudent = json_decode($listStudent, true);

$listStudent[$index] = [
    "name" => $_GET["name"],
    "phone" => $_GET["phone"],
    "address" => $_GET["address"],
    "class" => $_GET["class"],
    "role" => $_GET["role"]
];
$newListStudent = json_encode($listStudent);
file_put_contents('data.json', $newListStudent);

header("Location:list.php");
?>