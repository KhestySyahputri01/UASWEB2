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
			<li><a href="index.php">Beranda <span class="sr-only">(current)</span></a></li>
			<li><a href="menu.php">Menu</a></li>
			
			
				<li class="active"><a href="saran.php">Kritik & saran</a></li>
<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-large"></span>Data Penjualan<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li class="active"><a href="data-menu.php"> <span class="glyphicon glyphicon-cutlery list-group-item-info"></span> Menu</a></li>
                  <li><a href="data-pelanggan.php"><span class="glyphicon glyphicon-user list-group-item-danger"></span> Pelanggan </a></li>
                <li><a href="data-order.php"><span class="glyphicon glyphicon-credit-card list-group-item-warning"></span> Order/Pembelian</a></li>
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


<div class="col-md-12">
<center><h1> Data Kritik/Saran</h1></center>
<div class="col-md-4"><img src="../img/c3.jpg" class="img-circle" width="310px" 
  height="300px"></div>
<div class="col-md-8 list-group-item-warning">
<?php

if(@$_GET['pesan']=="KritikBerhasil"){
?>

<div class="alert alert-success">
  penyimpanan 1 Data Kritik & Saran berhasil
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="hapusKritikBerhasil"){
?>

<div class="alert alert-success">
  1 Data Kritik & Saran berhasil dihapus!
</div>

<?php

}

?>
    <table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
    
    <thead>
    <tr>
      <td><b>Kode Saran </b></td>
      <td><b>Nama </b></td>
      <td><b>Email </b></td>
      <td><b>Kritik & Saran</b></td>
      <td><b>Ket</b></td>
      
     
    </tr>
    </thead>
    <tbody>
    <?php

    include"koneksi.php";
$sql=$koneksi->query("select * from dt_saran order by id_saran ASC");

while($row= $sql->fetch_assoc()){
  ?>

  <tr>
   <td><?php echo $row['id_saran']?></td>
      <td><?php echo $row['nama']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['kritik']?></td>
      <td><a href="hapus-saran.php?id=<?php echo $row['id_saran']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>Hapus

                </a>

      </td>
</tr>
<?php
  }
  ?>
  </tbody>

  </table></div></div>







	 <br><br><br><br><br>
<br><br><br><br><br><br>

	 <center>
	 <br><br><br><br><br><font face="serif"><h3>
	 <br><br><br><br><br>
	 <br><br><br><br><br><b>|||B A K S O - S O L O|||</b></h4></center></font><div class="row"></div>
	 <div class="copyright text-center text-white bg-primary p-2">
  		<p><b>@2023 Bakso Solo Sumatera Utara - </b>Privacy Policy.</p></div></div>
  		<img src="../img/fo2.png" >
  		
    </div>
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