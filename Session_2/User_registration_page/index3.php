<!doctype html>
<html lang="en">
<head>
    <style>
        .error {
            color: #24ffb5;
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
</head>
<body>
<h2>Registration Form</h2>
<form method="post">
    <fieldset>
        <legend>Details</legend>
        Name: <input type="text" name="name" value="">
        <span class="error">* Tên đăng nhập không được để trống!</span>
        <br><br>
        E-mail: <input type="text" name="email" value="">
        <span class="error">* Email không được để trống!</span>
        <br><br>
        Phone: <input type="text" name="phone" value="">
        <span class="error">* Số điện thoại không được để trống!</span>
        <br><br>
        <input type="submit" name="submit" value="Register">
        <p><span class="error">* required field.</span></p>
    </fieldset>
</form>

<h2>Registration list</h2>
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
        <td>vvv@vvv.vvv.ccc</td>
        <td>vvv</td>
    </tr>
    <tr>
        <td>cccccc</td>
        <td>ccc@ccc.ccc.cc</td>
        <td>ccccc</td>
    </tr>
</table>
</body>
</html>