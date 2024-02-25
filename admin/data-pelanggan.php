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
                <li><a href="data-menu.php"> <span class="glyphicon glyphicon-cutlery list-group-item-info"></span> Menu</a></li>
                  <li class="active"><a href="data-pelanggan.php"><span class="glyphicon glyphicon-user list-group-item-danger"></span> Pelanggan </a></li>
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


<br><div class="col-md-12">
<div class="col-md-10">
	</div><center><h1> Data Pelanggan</h1></center><br><br>
<div class="col-md-8 list-group-item-warning">

<?php

if(@$_GET['pesan']=="inputPelangganBerhasil"){
?>

<div class="alert alert-success">
  penyimpanan 1 Data Pelanggan berhasil
</div>

<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusPelangganBerhasil"){
?>

<div class="alert alert-success">
  1 Data Pelanggan berhasil dihapus!
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="editPelangganBerhasil"){
?>

<div class="alert alert-success">
  1 perubahan berhasil di Edit!
</div>

<?php

}

?>

    <table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
    
    <thead>
    <tr><center>
      <td><center><b>Kode Pelanggan</b></center>
      </td><td><center><b>Nama Pelanggan</b></center></td>
      <td><center><b>Email </b></center></td>
      <td><center><b>No HP</b></center></td>
      <td><center><b>Alamat</b></td>
      <th>
                <a href="input-pelanggan.php">
                    <button class="btn btn-info glyphicon glyphicon-plus">
                     </button>

                </a>
      </th>
    </tr>
    </thead>
    <tbody>
    <?php

    include"koneksi.php";
$sql=$koneksi->query("select * from dt_pelanggan order by id_pelanggan ASC");

while($row= $sql->fetch_assoc()){
  ?>

  <tr>
      <td><?php echo $row['id_pelanggan']?></td>
      <td><?php echo $row['nama']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['no_hp']?></td>
      <td><?php echo $row['alamat']?></td>
      <td>

             <a href="edit-pelanggan.php?id=<?php echo $row['id_pelanggan']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"> </button>

                </a>

                 <a href="hapus-pelanggan.php?id=<?php echo $row['id_pelanggan']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>

                </a>

      </td>
    </tr>


</td>
<?php
  }
  ?>
  </tbody>

  </table></div><div class="col-md-1"></div><div class="col-md-3"><img src="../img/po2.png" class="img-circle" width="310px" 
  height="300px"></div>
  























 
  
</center></td></center></tr></thead></table></div></li></ul></div></div></nav>








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