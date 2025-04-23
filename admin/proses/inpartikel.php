<?php
session_start();
require '../../connect/connect.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$pembuat = $_SESSION['s_id'];

$uploadDirectory = "../../assets/";
$uploadDirectoryT = "../../assets/textures/";
$countfiles = count($_FILES['aset']['name']);
$countfilesT = count($_FILES['textures']['name']);
for($i=0;$i<$countfiles;$i++){
    $names = '';
    $filename = $_FILES['aset']['name'][$i];
    $exp = explode('.',$filename);
    //print_r($exp);
    if($exp[1] == "gltf"){
        $names = $exp[0].'.'.$exp[1];
    }else{

    }
    move_uploaded_file($_FILES['aset']['tmp_name'][$i], $uploadDirectory.$filename);  
}

for($j=0;$j<$countfilesT;$j++){
    $filenameT = $_FILES['textures']['name'][$j];
    move_uploaded_file($_FILES['textures']['tmp_name'][$j], $uploadDirectoryT.$filenameT); 
}

$query = "INSERT INTO `tb_artikel` (`id`,`judul`, `isi`, `aset`, `tgl_dibuat`, `tgl_modif`, `pembuat` ) VALUES (NULL, '$judul', '$isi', '$names', '', '', '$pembuat')";
$ins = mysqli_query($con, $query);
if($ins){
    header("location: ../listartikel.php");
}else{
    echo "salah";
}
