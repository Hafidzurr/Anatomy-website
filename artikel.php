<?php
include 'connect/connect.php';

$queryart = "SELECT * FROM `tb_artikel`";
$resart = mysqli_query($con, $queryart);
//$dataart = mysqli_fetch_array($resart);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="artikel.css">

    <link href="http://fonts.cdnfonts.com/css/alphacentauri" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>ARTIKEL</title>
</head>


<body>
    <!-- Navbar -->
    <div class="navbar">
         <ul>
             <li><a href="contact.php"  >Contact</a></li>
             <li><a href="artikel.php"  >Artikel</a></li>
             <li><a href="index.php"  >Home</a></li>
         </ul>
         <img class="gmbr" src="./assets/img2/pala.png">
         <h3 class="logo"  >ANATOMY</h3>
     </div> 
    <!-- <section class="landing">
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
    </section> -->
    <?php
    while ($dataart = mysqli_fetch_array($resart)) {
    ?>
        <section class="content">
            <div class="container header__container">
                <div class="header__left">
                    <h1><?php echo $dataart['judul']; ?></h1>
                    <p>
                        <?php echo $dataart['isi']; ?>
                    </p>
                    <a href="cards.php?idart=<?php echo $dataart['id']; ?>"><button>Details Anatomy <i class="fas fa-arrow-right" style="position: relative; top: 1px;"></i> </button></a>
                </div>

                <div class="right">
                    <div class="header__right-image">
                        <model-viewer src="./assets/<?php echo $dataart['aset']; ?>" camera-controls  shadow-intensity="1"></model-viewer>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <br><br><br><br><br>
    <section class="footer">
        <div class="social">
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com"><i class="fab fa-github"></i></a>
            <a href="https://mobile.twitter.com"><i class="fab fa-twitter"></i></a>
        </div>

        <p class=""></p>
    </section>

    <?php include 'layouts/footer.php'; ?>
</body>

</html>