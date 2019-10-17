<?php
include_once ('Linklist.php');

$linkedList = new Linklist();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(33);
$linkedList->insertFirst(44);
$linkedList->insertFirst(43);
$linkedList->insertFirst(21);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo  implode('-',$linkData);