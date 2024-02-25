<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bakso</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
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
                <li ><a href="data-menu.php"> <span class="glyphicon glyphicon-cutlery list-group-item-info"></span> Menu</a></li>
                  <li><a href="data-pelanggan.php"><span class="glyphicon glyphicon-user list-group-item-danger"></span> Pelanggan </a></li>
                <liclass="active"><a href="data-order.php"><span class="glyphicon glyphicon-credit-card list-group-item-warning"></span> Order/Pembelian</a></li>
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
<br><center><h2><b>  Silahkan input semua data order dengan Benar!</b></h2><br></center><br>
      
      <div class="col-md-4">
 <img src="../img/bakso1.jpg" class="img-circle" width="350px" height="300px"></div>
      
        
    
  
      
      <div class="col-md-8">
        <form action="proses-inputorder.php" method="POST">
          <div class="form-group">
            <label for="id_order">Kode Order</label>
            <input type="number" name="id_order" class="form-control">
          </div>
          <div class="form-group">
    <label for="nama">nama menu</label>
    <select name="nama" class="form-control">
                  <option value="Bakso Kuah Biasa">Bakso Kuah Biasa</option>
                  <option value="Bakso Rusuk Jos">Bakso Rusuk Jos</option>
                   <option value="Bakso Kecil Biasa<">Bakso Kecil Biasa</option>
                    <option value="Bakso Mie Pangsit">Bakso Mie Pangsit</option>
                     <option value="Bakso Tulang Iga">Bakso Tulang Iga</option>
                      <option value="Bakso Beranak">Bakso Beranak</option>
                       <option value="Nasi Goreng Bakso">Nasi Goreng Bakso</option>
                        <option value="BakMie Kuah">BakMie Kuah</option>
                         <option value="Bakso Beranak + Telur Puyuh">Bakso Beranak + Telur Puyuh</option>
                          <option value="Es Warna Warni">Es Warna Warni</option>
                           <option value="Markisa Juice">Markisa Juice</option>
                            <option value="coffe Ice Milk">coffe Ice Milk</option>
                             <option value="Boba Coffe Ice Milk">Boba Coffe Ice Milk</option>
                              <option value="Lemon Ice Tea">Lemon Ice Tea</option>
                 
                </select>

 
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="number" name="jumlah" class="form-control" placeholder="Isikan Jumlah makanan  anda!">
  </div>

   <div class="form-group">
    <label for="total">total</label>
    <input type="text" name="total" class="form-control">
  </div>






<input type="submit" name="kirim" value="simpan" class="btn btn-success">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
<a href="data-menu.php" class="btn btn-warning">Back</a>

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


























