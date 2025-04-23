<?php
session_start();
require '../../connect/connect.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$idart = $_POST['artikel'];
$filename = $_FILES['aset']['name'];
$uploadDirectory = "../../assets/img2/";
//echo $judul.'<br>'.$isi;
move_uploaded_file($_FILES['aset']['tmp_name'], $uploadDirectory.$filename);
//print_r($_SESSION);
$query = "INSERT INTO `tb_artikel_card` (`id`,`judul`, `isi`, `aset`, `id_art` ) VALUES (NULL, '$judul', '$isi', '$filename', '$idart')";
$ins = mysqli_query($con, $query);
if($ins){
    header("location: ../listsubartikel.php?id=$idart");
}else{
    echo "salah";
}

?>