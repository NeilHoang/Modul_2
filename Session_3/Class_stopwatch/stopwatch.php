<!doctype html>
<html lang="en">
<head>
    <title>STOPWATCH</title>
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">

</head>
<body>
<form action="" method="post">
<div class="container">
    <h1 class="title">StopWatch</h1>
    <h1 id="timerLabel">00:00:00</h1>
    <input type="button" class="myButton" onclick="start()" value="START" name="startBtn">
    <input type="button" class="myButton" onclick="stop()" value="STOP">
    <input type="button" class="myButton" onclick="reset()" value="RESET">
</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $status = 0;
    $time = 0;
    $startBtn = $_POST["startBtn"];
    $timerLabel = $_POST['timerLabel'];
}
?>
</body>
</html>