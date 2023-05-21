<?php
session_start();
require '../connect/connect.php';
if(!isset($_SESSION['s_login'])){
    header("Location: index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Sub Artikel</title>
    
    <!--ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- GOOLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/alphacentauri" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="./admlayouts/contact.css">
    
</head>

<body>

    <?php include './admlayouts/navbar.php'; 
    ?>
   <!--======================================================== END OF NAVBAR==============================================================-->
     <section class="contact">
        
        <div class="container">
        <h1>Input Sub Artikel</h1>
            <form action="./proses/insubartikel.php" method="POST" class="contact__form" enctype="multipart/form-data">
                <select name="artikel" id="artikel">
                    <?php
                        $queryart = "SELECT * FROM `tb_artikel`";
                        $resart = mysqli_query($con,$queryart);
                        while($dataart = mysqli_fetch_array($resart)){
                    ?>
                        <option value="<?php echo $dataart['id']; ?>"><?php echo $dataart['judul'];?></option>
                    <?php
                        }
                    ?>
                </select>
                <input type="text" name="judul" id="judul" placeholder="Judul Sub">
                <textarea name="isi" rows="7" cols="9" placeholder="Isi Sub Artikel" required></textarea>
                <input type="file" name="aset" id="aset">
                <button type="submit" class="btn btn-primary">kirim</button>
            </form>
        </div>
     </section>
<!--======================================================== END OF NAVBAR==============================================================-->
<section class="footer">
    <div class="social">
      <a href="https://www.instagram.com/ "><i class="fab fa-instagram"></i></a>
      <a href="https://github.com/ "><i class="fab fa-github"></i></a>
      <a href="https://mobile.twitter.com/ "><i class="fab fa-twitter"></i></a>
    </div>

    <p class=""></p>
<!--========================================================END OF FOOTER================================================================-->

</body>
</html>

<?php
}
?>