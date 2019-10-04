<!doctype html>
<html lang="en">
<head>
    <title>Count Number In Array</title>
</head>
<body>
<center>
    <h1>
<?php
$String = "Hi Bui Thi Minh Nguyet, have a nice day";
$char = "i";
$count = 0;
for ($i = 0;$i < strlen($String);$i++) {
    if (substr($String,$i,1) == $char) {
        $count = $count + 1;
    }
}
echo "Có " .$count. " kí tự " ."<span style='color: deeppink'><u>$char</u></span>".
    " trong chuỗi : '" ."<span style='color: orangered'>$String</span>". "'";
?>
    </h1>
</center>
</body>
</html>
