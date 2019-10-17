<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .title{
            margin-bottom: 10px;
            text-align:center;
            width: 210px;
            color:black;
            border: solid black 2px;
        }

        input[type="button"]
        {
            background-color: deeppink;
            color: black;
            border: solid black 2px;
            width:100%
        }

        input[type="text"]
        {
            background-color:white;
            border: solid black 2px;
            width:100%
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div class="login">
        <table border="2">
            <tr>
                <td colspan="3"><input type="text" name="result"/></td>
                <td><input type="button" value="c" onclick="clr()"/> </td>
            </tr>
            <tr>
                <td><input type="button" value="1" onclick="dis('1')"/> </td>
                <td><input type="button" value="2" onclick="dis('2')"/> </td>
                <td><input type="button" value="3" onclick="dis('3')"/> </td>
                <td><input type="button" value="/" onclick="dis('/')"/> </td>
            </tr>
            <tr>
                <td><input type="button" value="4" onclick="dis('4')"/> </td>
                <td><input type="button" value="5" onclick="dis('5')"/> </td>
                <td><input type="button" value="6" onclick="dis('6')"/> </td>
                <td><input type="button" value="-" onclick="dis('-')"/> </td>
            </tr>
            <tr>
                <td><input type="button" value="7" onclick="dis('7')"/> </td>
                <td><input type="button" value="8" onclick="dis('8')"/> </td>
                <td><input type="button" value="9" onclick="dis('9')"/> </td>
                <td><input type="button" value="+" onclick="dis('+')"/> </td>
            </tr>
            <tr>
                <td><input type="button" value="." onclick="dis('.')"/> </td>
                <td><input type="button" value="0" onclick="dis('0')"/> </td>
                <td><input type="button" value="=" onclick="solve()"/> </td>
                <td><input type="button" value="*" onclick="dis('*')"/> </td>
            </tr>
        </table>
    </div>
</form>
<?php



?>
</body>
</html>