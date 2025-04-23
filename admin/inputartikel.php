<?php
session_start();
if (!isset($_SESSION['s_login'])) {
    header("Location: index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Artikel</title>

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
                <h1>Input Artikel</h1>
                <form action="./proses/inpartikel.php" method="POST" class="contact__form" enctype="multipart/form-data">
                    <input type="text" name="judul" id="judul" placeholder="Judul">
                    <textarea name="isi" rows="7" cols="9" placeholder="Isi Artikel" required></textarea>
                    <label for="aset">ASET</label>
                    <input type="file" name="aset[]" id="aset" multiple>
                    <label for="textures">Textures</label>
                    <input type="file" name="textures[]" id="textures" multiple>
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
        </section>
    </body>

    </html>

<?php
}
?>