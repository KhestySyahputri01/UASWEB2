<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bakso</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="../bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>
<body>
<!-- Navbar Start -->
	<nav class="navbar navbar-inverse">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<img src="../img/pic1.png" width="100px">
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Beranda <span class="sr-only">(current)</span></a></li>
			<li><a href="menu.php">Menu</a></li>
			
			
				<li><a href="saran.php">Kritik & saran</a></li>

                
<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-large"></span>Data Penjualan<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li class="active"><a href="data-menu.php"> <span class="glyphicon glyphicon-cutlery list-group-item-info"></span> Menu</a></li>
                  <li><a href="data-pelanggan.php"><span class="glyphicon glyphicon-user list-group-item-danger"></span> Pelanggan </a></li>
                <li><a href="data-minuman.php"><span class="glyphicon glyphicon-credit-card list-group-item-warning"></span> Order/Pembelian</a></li>
              </a></li></ul>
                
			
			</ul>
			<form class="navbar-form navbar-right">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Pencarian Produk">
			</div>
			<button type="submit" class="btn btn-info">Cari</button>
			<a href="logout.php" class="btn btn-primary">Logout <span class="glyphicon glyphicon-user"></span></a>
			</form>
	
	</nav>


	<div class="col-md-12"><center><h1>EDIT MENU DIBAWAH INI!</h1></center></div>
		<div class="row">
			</div></div>
			<div class="col-md-7">
				<form action="proses-editmenu.php" method="POST">
					<?php
					include "koneksi.php";
					$id=$_GET['id'];
					$sql=$koneksi->query("SELECT * from dt_menu where id_menu='$id'");
					while ($row=$sql->fetch_assoc()){
					?>
					
					<div class="form-group">
						<label for="nama">Nama Menu</label>
						<input type="hidden" name="id_menu" value="<?php echo $row['id_menu']?>" class="form-control">
						<input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
					</div>
	 <div class="form-group">
 <select name="jenis_menu" class="form-control">
                <option value="<?php echo $row['jenis_menu']?>" selected><?php echo $row['jenis_menu']?></option>
                  <option value="makanan">makanan</option>
                  <option value="minuman">minuman</option>
                 
                </select></div>

     <div class="form-group">
		<label for="jumlah">Jumlah</label>
		<input type="number" name="jumlah" class="form-control" value="<?php echo $row['jumlah']?>">
	</div>
	<div class="form-group">
		<label for="harga">Harga</label>
		<input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
	</div>
	
	<div class="form-group">
		<label for="menu">Menu</label>
		<textarea name="menu" class="form-control"><?php echo $row['menu']?></textarea>
	</div>
<input type="submit" name="kirim" value="ubah" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
 <a href="data-menu.php" class="btn btn-md btn-warning">Kembali</a>
<?php
						} 
					?>
</div>
		</div>
	</div></form>
</div></div>
<div class="col-md-1"></div>
<div class="col-md-4">
 <img src="../img/bakso1.jpg" class="img-circle" width="350px" height="300px"></div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
</form>    

<br><br><br><br><br><br><br><br><br><br><br><br>
</form>       
 </div>
    </div>
  </div>

 </div>

	 <br><br><br><br><br>
<br><br><br><br><br><br>

	 <center><font face="serif"><h3><b>|||B A K S O - S O L O|||</b></h4></center></font><div class="row"></div>
	 <div class="copyright text-center text-white bg-primary p-2">
  		<p><b>@2023 Bakso Solo Sumatera Utara - </b>Privacy Policy.</p></div></div>
  		<img src="../img/fo2.png" >
           
    
    </div>
  </div>
<script src="../assets/js/jquery.isotope.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../bootstrap/js/jQuery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

    <script src="../bootstrap/plugins/datatable/jquery.dataTables.js"></script>
    <script src="../bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#dataTables').DataTable();
    });
  </body>
  </html>
</body>
</html>





