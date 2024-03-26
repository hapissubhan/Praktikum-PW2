<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
$ar_skill = ["HTML"=>10, "CSS"=>10, "JavaScript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "Python"=>30, "Java"=>50];
$ar_domisili = ["Jakarta", "Bogor" , "Depok", "Tanggerang", "Bekasi", "Lainnya"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  h1 {
    color: darkslategrey;
  }
  body{
    background-color: greenyellow;
  }
</style>
 
</head>
<body>
  <h1>From Registrasi IT Club Data Science</h1>
<form method="post" action="registrasi .php">
  <div class="form-group row">
    <label for="NIM" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="NIM" name="NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jeniskelamin" id="_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jeniskelamin" id="_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="select" name="prodi" class="custom-select">
        <?php foreach($ar_prodi as $k => $v) : ?>
        <option value="<?= $k ?>"><?= $v?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill web & Programming</label> 
    <div class="col-8">
      <?php foreach($ar_skill as $k => $v) : ?>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="checkbox_0" class="custom-control-label">HTML</label>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="Domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="Domisili" name="Domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Depok">Depok</option>
        <option value="Bogor">Bogor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="Email" name="Email" type="email" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    <?php
    if(!empty($_POST['proses'])) {
      $nim = $_POST['NIM'];
      $nama = $_POST['Nama'];
      $jk = $_POST['Jenis Kelamin'];
      $prodi = $_POST['prodi'];
      $domisili = $_POST['domisili'];
      $email = $_POST['email'];
  
      echo 'proses : '.$proses;
      echo '<br/>NIM: '.$Nim;
      echo '<br/>Nama: '.$Nama;
      echo '<br/>jenis kelamin:'.$jeniskelamin;
      echo '<br/>prodi: '.$ar_prodi;
    }

   ?>
  </div>
</form>
  
</body>
</html>