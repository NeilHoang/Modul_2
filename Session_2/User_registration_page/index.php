<!doctype html>
<html lang="en">
<head>
   <style>
       .error {
           color: #ffa064;
       }
       table{
           border-collapse: collapse;
           width: 100%;
       }
       td, th{
           border: solid 1px #ccc;
       }
       form{
           width: 450px;
       }
   </style>
    <title>User registration page</title>
</head>
<body>
<h2>Registration Form</h2>
<form action="index2.php" method="post">
    <fieldset>
        <legend>Details</legend>
        Name: <input type="text" name="name" value=" ">
        <span class="error"> * </span>
        <br><br>
        E-mail: <input type="text" name="email" value=" ">
        <span class="error"> * </span>
        <br><br>
        Phone: <input type="text" name="phone" value=" ">
        <span class="error"> * </span>
        <br><br>
        <input type="submit" name="submit" value="Register">
        <p><span class="error"> * Required Field.</span></p>
    </fieldset>
</form>

    <h2>Rregistration list</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <tr>
        <td>xxx</td>
        <td>xxx</td>
        <td>xx</td>
    </tr>
    <tr>
        <td>vvvv</td>
        <td>vvv@vvv.ccc</td>
        <td>vvv</td>
    </tr>
    <tr>
        <td>ccccc</td>
        <td>ccc@ccc.cc</td>
        <td>cccc</td>
    </tr>
</table>
</body>
</html>