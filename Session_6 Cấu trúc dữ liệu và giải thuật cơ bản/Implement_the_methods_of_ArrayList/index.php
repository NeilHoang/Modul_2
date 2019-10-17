<?php
include_once "MyList.php";
include_once "MyListTest.php";


$mylist = new MyListTest(array());
$mylist->addLast(10);
$mylist->addLast(17);
echo $mylist->get(2);