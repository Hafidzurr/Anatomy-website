<?php
session_start();
require '../../connect/connect.php';
$id = $_POST['idart'];
$idartikel = $_POST['artikel'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$fname = $_POST['asetname'];

$uploadDirectory = "../../assets/img2/";
$filename = $_FILES['aset']['name'];
if(empty($filename)){
    $filename = $fname;
}else{
    move_uploaded_file($_FILES['aset']['tmp_name'], $uploadDirectory.$filename);
}
$query = "UPDATE `tb_artikel_card` SET `judul` = '$judul', `isi` = '$isi', `aset` = '$filename' WHERE `tb_artikel_card`.`id` = '$id';";
$update = mysqli_query($con, $query);
if($update){
    header("location: ../listsubartikel.php?id=$idartikel");
}else{
    echo "salah";
}
