<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>  
<div class="m-4">
    <div class="col-4 float-right">
      <ul class="list-group;">
        <li class="list-group-item bg-primary">Daftar Harga</li>
        <li class="list-group-item">TV : 4.200.000</li>
        <li class="list-group-item">Kulkas : 3.100.000</li>
        <li class="list-group-item">Mesin cuci : 3.800.000</li>
        <li class="list-group-item bg-primary">Harga Dapat Berubah Setiap Saat</li>
      </ul>
      </div>
    <form method="POST" action="">
    <h2>Belanja Online</h2>
    <hr>
  <div class="form-group row">
    <label for="Muhammad Salman Alfarisy" class="col-1 col-form-label">Customer</label> 
    <div class="col-4">
      <input id="customer" name="customer" placeholder="Nama customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-1">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih produk" id="pilih produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="pilih produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih produk" id="pilih produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
        <label for="pilih produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih produk" id="pilih produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
        <label for="pilih produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah" class="col-1 col-form-label">Jumlah</label> 
    <div class="col-4">
      <input id="Jumlah" name="Jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-1 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

 
</form>
</body>
</html>

<!--BAGIAN PHP NYA-->
<?php
if (isset($_POST['submit'])) {
  $Customer = $_POST['customer'];
  $Jumlah = $_POST['Jumlah'];
  $produk = $_POST['pilih produk'];

  echo "Nama customer: $Customer <br>";
  echo "Produk yang dipilih: $produk <br>";
  echo "Jumlah beli: $Jumlah <br>";
}
if ($produk == "Kulkas") {
  echo "Total Belanja: " . ($Jumlah * 3800000);
} else if ($produk == "Mesin Cuci") {
  echo "Total Belanja: " . ($Jumlah * 4200000);
} else if ($produk == "TV") {
  echo "Total Belanja: " . ($Jumlah * 3200000);
  }
?>