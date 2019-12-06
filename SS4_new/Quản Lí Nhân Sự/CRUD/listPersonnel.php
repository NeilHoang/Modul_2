<?php
$listPersonnel = file_get_contents('../data.json');
$array = json_decode($listPersonnel, true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>
<a href="../index.php" style="color: red">Back</a>
<div class="container">
    <div class="col-12">
        <table class="table table-hover table-danger">
            <?php
            for ($i = 0; $i < count($array); $i++) {
                ?>
                <tr>
                    <td><?php echo $array[$i]["they"] ?></td>
                    <td><?php echo $array[$i]["name"] ?></td>
                    <td><?php echo $array[$i]["birthday"] ?></td>
                    <td><?php echo $array[$i]["address"] ?></td>
                    <td><?php echo $array[$i]["job"] ?></td>
                    <td><a href="deletePersonnel.php?id=<?php echo $i ?>"
                           onclick="return confirm('You want to delete')"><p style="color: whitesmoke">Del</p></a></td>
                    <td><a href="editPersonnel.php?id=<?php echo $i ?>"
                           ><p style="color: #24ffb5">Edit</p></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
</body>
</html>
