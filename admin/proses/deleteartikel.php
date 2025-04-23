<?php
session_start();
require '../../connect/connect.php';
$id = $_GET['iddel'];
$query = "DELETE FROM `tb_artikel` WHERE `tb_artikel`.`id` = $id";
$del = mysqli_query($con, $query);
if($del){
    header("location: ../listartikel.php");
}else{
    echo "salah";
}
?>