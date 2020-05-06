<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            width: 450px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        h1{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$tanggal = $_POST['Tgl_lhr'];
$tempat = $_POST['Tmp_lhr'];
$umur = $_POST['Umur'];
$hobi = $_POST['Hobi'];
$keterangan = $_POST['Keterangan'];

echo "Nama : ", $nama;
echo "<br><br>"; 
echo "NIM : ", $nim;
echo "<br><br>"; 
echo "Tanggal Lahir : ", $tanggal;
echo "<br><br>"; 
echo "Tempat Lahir : ", $tempat;
echo "<br><br>"; 
echo "Umur : ", $umur, " ";

if ($umur <= 10){
    echo "(Anak-anak)";}
elseif ($umur <= 20){
    echo "(Remaja)";}
elseif ($umur <= 25){
    echo "(Dewasa)";}
else{
    echo "(Tua)";}

echo "<br><br>"; 
echo "Hobi : ", $hobi;
echo "<br><br>"; 
echo "Keterangan : ", $keterangan;
?>
</body>
</html>