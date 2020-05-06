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
<title>PHP exercise 1</title>
</head>

<body>
<h1>Input Data Mahasiswa</h1> 
<br>
<form action="process.php" method="POST">
<div class="form-group">
<label for="Nama_lengkap" class="col-2 col-form-label">Nama Lengkap</label>
<div class="col-10">
<input type="text" class="form-control" id="Nama" name="Nama"></div>
</div>

<div class="form-group">
<label for="NIM" class="col-2 col-form-label">NIM</label>
<div class="col-10">
<input type="text" class="form-control" id="NIM" name="NIM"></div>
</div>

<div class="form-group">
<label for="Tgl_lhr" class="col-2 col-form-label">Tanggal lahir</label>
<div class="col-10">
<input type="date" class="form-control" id="Tgl_lhr" name="Tgl_lhr"></div>
</div>

<div class="form-group">
<label for="Tmp_lhr" class="col-2 col-form-label">Tempat lahir</label>
<div class="col-10">
<input type="text" class="form-control" id="Tmp_lhr" name="Tmp_lhr"></div>
</div>

<div class="form-group">
<label for="Umur" class="col-2 col-form-label">Umur</label>
<div class="col-10">
<input type="number" class="form-control" id="Umur" name="Umur"></div>
</div>

<div class="form-group">
<label for="Hobi" class="col-2 col-form-label">Hobi</label>
<div class="col-10">
<input type="text" class="form-control" id="Hobi" name="Hobi"></div>
</div>

<div class="form-group">
<label for="Nama_lengkap" class="col-2 col-form-label">Keterangan</label>
<div class="col-10">
<input type="text" class="form-control" id="Keterangan" name="Keterangan"></div>
</div>
<br>
<button type="submit" class="btn btn-primary mb-3">Submit</button>
</form>
</div>
</body>
</html>