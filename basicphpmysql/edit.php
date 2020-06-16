<?php 

include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = mysqli_query($mysqli, "Update users SET name='$name', email='$email', mobile='$mobile' where id='$id'");

    header("location: index.php");
}

?>

<?php 
$id = $_GET['id'];

$result = mysqli_query($mysqli,"select * from users where id='$id'");

while($user_data = mysqli_fetch_array($result)){
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
    ?>


<html>
<head>
    <title>Edit form</title>
    </head>


<body>
<form name="update_user" method="post" action="edit.php">
    <table border ="1">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?=$name?>"></td>
            </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" value="<?=$email?>"></td>
            </tr>
        <tr>
            <td>mobile</td>
            <td><input type="text" name="mobile" value="<?=$mobile?>"></td>
            </tr>
        <tr>
            <td><input type="text" name="id" value="<?=$id?>"></td>
            <td><input type="submit" value="submit" name="update"></td>
            </tr>

            </table>
            </form>
            </body>
            </html>