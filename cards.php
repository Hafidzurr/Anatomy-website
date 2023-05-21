<!-- code by tedy xsvs-->
<?php
    include 'connect/connect.php';
    $id = $_GET['idart'];
    $queryart = "SELECT * FROM `tb_artikel_card` WHERE id_art = $id";
    $resart = mysqli_query($con,$queryart);
    //$dataart = mysqli_fetch_array($resart);

    // print_r($dataart);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img2/faviconn.png">
  <title>ANATOMY</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link rel="stylesheet" href="cards.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="http://fonts.cdnfonts.com/css/alphacentauri" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> 
</head>

<body>

<?php include 'layouts/navbar.php'; ?>
  
<div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">

<?php 
  while($datasub = mysqli_fetch_array($resart)){
?>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="./assets/img2/<?php echo $datasub['aset']; ?>" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code"></span>
        <div class="blog-slider__title"><?php echo $datasub['judul']; ?></div>
        <div class="blog-slider__text"><?php echo $datasub['isi']; ?> </div>
        <a href="artikel.php" class="blog-slider__button"><i class="fas fa-arrow-left" style="margin-right: 10px;"></i> KEMBALI </a>
      </div>
    </div>
<?php
}
?>
  </div>
  <div class="blog-slider__pagination"></div>
</div>

<br><br><br><br><br>
<section class="footer">
    <div class="social">
      <a href="https://www.instagram.com/tedhyy__/"><i class="fab fa-instagram"></i></a>
      <a href="https://github.com/XsvsMoc"><i class="fab fa-github"></i></a>
      <a href="https://mobile.twitter.com/Tedyzyy"><i class="fab fa-twitter"></i></a>
    </div>

    <p class=""></p>

  

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script type="text/javascript" src="cards.js"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</body>
</html>