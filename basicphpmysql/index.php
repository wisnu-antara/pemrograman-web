<?php 
include_once('config.php');

$result = mysqli_query($mysqli,"select * from users") ;


?>

<html>
<head>
    <title>
    PHP mysqli
    </title>
</head>
<body>

<a href="add.php">Tambah Data</a>
    <table width ="80%" border=1>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Update</th>
    <?php while($user_data = mysqli_fetch_array($result)){
        echo "<tr>" ;
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> || <a href='delete.php?id=$user_data[id]'>Delete</a>";
        echo "</tr>" ;
    } ?>
</body>
</html>