<?php
$ar_prodi = ['Sistem Informasi','Teknik Informatika','Bisnis Digital'];
$ar_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];
$domisilis = ['jakarta','depok','bogor','tangerang','bekasi','lainnya'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  <br><br>
    <div class="container">
        <h2>Form Registrasi</h2>
        <hr>

    <form method="POST" action="proses.php">
      <div class="form-group row">
        <label for="nama" class="col-2 col-form-label">NIM</label> 
          <div class="col-6">
            <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control">
          </div>
      </div>

      <div class="form-group row">
        <label for="nama" class="col-2 col-form-label">Nama</label> 
        <div class="col-4">
          <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
      <label class="col-2">Jenis Kelamin</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="gender_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
      <div class="form-group row">
      <label for="matkul" class="col-2 col-form-label">Program Studi</label> 
    <div class="col-4">
      <select id="matkul" name="matkul" class="custom-select">
        <?php  foreach($ar_prodi as $prodi) :?>
            <option value="<?php echo $prodi?>"><?php echo $prodi?></option>
        <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
    <label class="col-2">Skill Programing</label> 
    <div class="col-4">
        <?php foreach($ar_skills as  $skil => $value): ?>
      <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skill[]" id="<?php echo $skil ?>" type="checkbox"  class="custom-control-input" value="<?php echo $skil ?>"> 
            <label for="<?php echo $skil ?>" class="custom-control-label"> <?php echo $skil ?></label>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="form-group row">
  <label for="email" class="col-2 col-form-label">Email</label> 
    <div class="col-4">
      <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>


?>