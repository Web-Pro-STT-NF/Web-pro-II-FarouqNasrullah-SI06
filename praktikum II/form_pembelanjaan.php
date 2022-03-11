<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="row" style="padding:10px">
  <div class="col-8">
      <h4>Belanja Online</h4>
      <hr>
    <form method="POST" action="form_belanja.php" >
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Pembeli</label> 
            <div class="col-4">
            <input id="customer" name="customer" placeholder="Nama Pembeli" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilihan Produk</label> 
            <div class="col-6">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                <label for="produk_0" class="custom-control-label">Sepeda Lipat</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                <label for="produk_1" class="custom-control-label">Hp limited</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">Laptop</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="Kuantitas" class="col-4 col-form-label">Kuantitas</label> 
            <div class="col-2">
            <input id="Kuantitas" name="Kuantitas" placeholder="Kuantitas" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-4">
            <button type="submit" name="proses" class="btn btn-success">Pesan</button>
            </div>
        </div>
    </form>
  </div>
  <div class="col-4">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Daftar Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sepeda Lipat : 3.120.000</th>
    </tr>
    <tr>
      <th scope="row">Hp limited : 4.700.000</th>
    </tr>
    <tr>
      <th scope="row">Laptop   : 6.300.000</th>
    </tr>
  </tbody>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Barang bisa kehabisan stok Setiap Saat</th>
    </tr>
  </thead>
</table>
  </div>
</div>
<hr>
<fieldset style="padding:50px; border: 0.1em solid black; margin-right:50%; margin-left: 20px;">
  <legend>Data Anda</legend>
  <div>
    <?php
    $proses = isset($_POST["proses"]) ? $_POST["proses"] : '';
    $customer = isset($_POST["pembeli"]) ? $_POST["pembeli"]: '';
    $produk = isset($_POST["produk"]) ? $_POST["produk"]: '';
    $jumlah = isset($_POST["kuantitas"]) ? $_POST["kuantitas"]: '';
    switch ($produk) {
      case 'Sepeda Lipat':
        $harga = 3120000;
        $harga = $harga * $jumlah;
        echo "Nama  : " .$pembeli;
        echo "<br> Pilihan produk : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;

      case 'Hp limited':
        $harga =  4700000;
        $harga = $harga * $jumlah;
        echo "Nama Pembeli : " .$pembeli;
        echo "<br> pilihan produk : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;
      
      case 'Laptop':
        $harga = 6300000;
        $harga = $harga * $jumlah;
        echo "Nama Pembeli : " .$pembeli;
        echo "<br> Pilihan produk : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') .",-";
        break;
      default:
        break;
    }
    ?>
  </div>
</fieldset>
</body>
</html>