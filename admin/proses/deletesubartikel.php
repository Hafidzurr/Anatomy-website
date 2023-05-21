<?php
session_start();
require '../../connect/connect.php';
$id = $_GET['iddel'];
$idart = $_GET['id'];
$query = "DELETE FROM `tb_artikel_card` WHERE `tb_artikel_card`.`id` = $id";
$del = mysqli_query($con, $query);
if($del){
    header("location: ../listsubartikel.php?id=$idart");
}else{
    echo "salah";
}
?>