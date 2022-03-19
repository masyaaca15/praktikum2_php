<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Request GET</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form Method="POST" action="From-post.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="WEB1">Pemrograman Web</option>
        <option value="BDI">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nila_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="Submit" value="Simpan" name="proses">
    </div>
  </div>
</form>
</body>

<?php

$proses = $_POST ['proses'];
$nama = $_POST ['nama'];
$matkul = $_POST ['matkul'];
$nilai_uts = $_POST ['nilai_uts'];
$nilai_uas = $_POST ['nilai_uas'];
$nilai_tugas = $_POST ['nilai_tugas'];

    echo 'proses :'.$proses;
    echo '<br/>Nama Lengkap : '.$nama;
    echo '<br/>Mata Kuliah : '.$matkul;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;

?>
</html>