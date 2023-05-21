<?php
    include 'connect/connect.php';

    $queryart = "SELECT * FROM `tb_artikel`";
    $resart = mysqli_query($con,$queryart);
    $dataart = mysqli_fetch_array($resart);

    // print_r($dataart);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'layouts/header.php';?>
<title>ANATOMY</title>
</head>


<body>
 <!-- Navbar -->
     <?php include 'layouts/navbar.php'; ?>
 
    <!--Loader-->
    <div class="loader">SiKA04</div>

    <!-- Landing -->
    <section class="landing">
        <div class="hero">
            <img src="./assets/bg/otak.png" alt="" class="img-batu">
            <img src="./assets/bg/skull.png" class="img-bumi">
            <img src="./assets/bg/mid.png" alt="" class="img-mid">
            <img src="./assets/bg/ground-baru.png" alt="" class="img-foreground">
            <img src="./assets/bg/kaca-pembesar.png" alt="" class="img-roket" style="z-index: 4;">
        </div>
        <h1 id="text">
            <span data-depth="1">Head</span>
        </h1>
    </section>
    <section class="content">
        <div class="container header__container">
            <div class="header__left">
                <!-- <h1><?php echo $dataart['judul']; ?></h1> -->
                <h1>ANATOMY</h1>
                <!-- <p>
                    <?php echo $dataart['isi']; ?>
                </p> -->
                <p>
                Anatomi (dari bahasa Yunani Kuno anatomḗ 'pembedahan' dan anatémnō 'memotong') adalah cabang dari biologi yang mempelajari susunan tubuh makhluk hidup.
                </p>
                <a href="artikel.php"><button>Selengkapnya <i class="fas fa-arrow-right" style="position: relative; top: 1px;"></i> </button></a>
            </div>

            <div class="right">
                <div class="header__right-image">
                    <model-viewer src="./assets/<?php echo $dataart['aset']; ?>" camera-controls camera-orbit="0deg 95deg" shadow-intensity="1" ></model-viewer>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <br><br><br><br><br>
    <section class="footer">
        <div class="social">
          <a href="https://www.instagram.com "><i class="fab fa-instagram"></i></a>
          <a href="https://github.com "><i class="fab fa-github"></i></a>
          <a href="https://mobile.twitter.com "><i class="fab fa-twitter"></i></a>
        </div>
  
        <p class=""></p>
    </section>

    <?php include 'layouts/footer.php';?>
</body>
</html>