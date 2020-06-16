<?php 

include_once('config.php');

if(isset($_POST['add'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name', '$email, '$mobile')");

    header("location: index.php");
}

?>


<html>
<head>
    <title>form Tambah Data</title>
    </head>


<body>
<form name="add_user" method="post" action="add.php">
    <table border ="1">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
            </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email"></td>
            </tr>
        <tr>
            <td>mobile</td>
            <td><input type="text" name="mobile"></td>
            </tr>
        <tr>
            <td><input type="submit" value="submit" name="add"></td>
            </tr>

            </table>
            </form>
            </body>
            </html>