<?php
session_start();
require '../connect/connect.php';
$id = $_GET['id'];
if (!isset($_SESSION['s_login'])) {
    header("Location: index.php");
} else {

    $queryart = "SELECT * FROM `tb_artikel_card` WHERE `id_art` = $id";
    $resart = mysqli_query($con, $queryart);
?>
<!doctype html>
<html lang="en">
  <head>
	<title>List Sub Artikel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="./css/style.css">
        <!--ICONSCOUT CDN-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- GOOLE FONTS (MONTSERRAT) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
        <link href="http://fonts.cdnfonts.com/css/alphacentauri" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	</head>
	<body style="background-color: #d6ceb9;">

		<div class="navbar" id="myTopnav">
			<ul>
				 <a href="logout.php" >Logout</a> 
				 <a href="listartikel.php" >List Artikel</a> 
				<!-- <li><a href="inputsub.php">Input Sub-Artikel</a></li>
				<li><a href="landing.php">Input Artikel</a></li> -->
			</ul>
			<img class="gmbr" src="../assets/img2/pala.png">
			<h3 class="logo" style="font-family: 'AlphaCentauri', sans-serif;"><?php echo "Selamat Datang " . $_SESSION['s_nama']; ?></h3>
		</div>
	<section class="ftco-section" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<!-- <h2 class="heading-section">Table #08</h2> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- <h3 class="h5 mb-4 text-center">Collapsible Table</h3> -->
					<div class="table-wrap">
                    <a href="inputsub.php">
                    <button class="btn">
                    <i class="fas fa-plus"></i>Tambah Sub Artikel</button></a>
						<table class="table myaccordion table-hover" id="accordion">
						  <thead>
						    <tr>
								<th>id</th>
								<th>Judul</th>
								<th>aset</th>
								<th>opsi</th>
								<th>&nbsp;</th>
						        <th>&nbsp;</th>
                                <!-- <th><a href="inputartikel.php"><i class="fas fa-plus">Tambah Artikel</i></th> -->
						    </tr>
							<?php 
							while($datasub = mysqli_fetch_array($resart)){
						?>
						  </thead>
						  <tbody>
						    <tr data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
							<td><?php echo $datasub['id']; ?></td>
							<td><?php echo $datasub['judul']; ?></td>
							<td><a href="../assets/img2/<?php echo $datasub['aset']; ?>"><?php echo $datasub['aset']; ?></a></td>
							<td><a href="frmupdatesubart.php?id=<?php echo $datasub['id']; ?>"><i class="fas fa-edit"></i> Update</a> | <a href="proses/deletesubartikel.php?id=<?php echo $datasub['id_art']; ?>&iddel=<?php echo $datasub['id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a></td>
							<td>&nbsp;</td>
						    <td>
						      	<i class="fa" aria-hidden="true"></i>
				        	</td>
						    </tr>
						    <tr>
								<td colspan="6" id="collapseTwo" class="collapse acc" data-parent="#accordion"><?php echo $datasub['isi']; ?> </td>
						    </tr>
							<?php } ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <!-- <script src="js/popper.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<?php
}
?>
