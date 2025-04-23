<?php
include '../connect/connect.php';
session_start();
$usr = $_POST['user'];
$pwd = $_POST['pass'];

$query1 = "SELECT * FROM `tb_user` WHERE `username` = '$usr'";
$result = mysqli_query($con,$query1);

$res = mysqli_fetch_array($result);
$passenc = md5($pwd);

if($res['passwd'] == $passenc){
    $_SESSION['s_id'] = $res['id'];
    $_SESSION['s_username'] = $res['username'];
    $_SESSION['s_password'] = $res['passwd'];
    $_SESSION['s_nama'] = $res['nama'];
    $_SESSION['s_login'] = true;
    header('Location:listartikel.php');
}else{
    header('Location:index.php');
} 
// echo $usr.'<br>'.$pwd;
?>