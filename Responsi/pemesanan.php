<!DOCTYPE html>
<html>
<head>
	<title>Intel Kost</title>
	<link rel="stylesheet" type="text/css" href="design3.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">


	<div class="back">
	<div class="container gray topBotomBordersIn">
   		<a href="index.php">HOME</a>
 		<a href="kamarkos.php">KAMAR KOS</a>
 		<a href="pemesanan.php">PEMESANAN</a>
  		<a href="about.php">ABOUT</a>
  		<a href="contact.php">CONTACT</a>
	</div>
	</div>
</head>
<body>
	<div class="bg-img">
		<form class="pertama" name="formpendaftaran" action="path.php" method="post">
			<div class="form-group">
    			<label for="exampleInputEmail1">Masukkan nama anda</label><br>
    			<input type="text" class="form-control" name="nama" id="inputnama" aria-describedby="emailHelp" placeholder="Masukkan nama anda">
  			</div>
  			<div class="form-group">
    			<label for="exampleFormControlSelect1">Pilih Kamar yang diinginkan</label><br>
    				<select class="form-control" name="kamar" id="inputkamar">
    					<option>-</option>	
      					<option>Kamar Mevvah</option>
      					<option>Kamar Estetik</option>
      					<option>Kamar Murah</option>
    				</select>
  			</div>
  			<div class="form-group">
              <label for="exampleInputPassword1">Nomor Telefon</label><br>
              <input type="number" class="form-control text-warning" name="nomor" id="inputnomor" placeholder="Masukkan Nomor Telefon">
            </div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
		</form>
	</div>
</body>
</html>