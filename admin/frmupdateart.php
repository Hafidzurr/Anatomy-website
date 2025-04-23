<?php
session_start();
require '../connect/connect.php';
$id = $_GET['id'];
if (!isset($_SESSION['s_login'])) {
    header("Location: index.php");
} else {
    $queryart = "SELECT * FROM `tb_artikel` WHERE `id` = $id";
    $resart = mysqli_query($con,$queryart);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Artikel</title>

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
        <?php 
            while($datasub = mysqli_fetch_array($resart)){
        ?>
        <section class="contact">
            <div class="container">
                <h1>Update Artikel</h1>
                <form action="./proses/updateartikel.php" method="POST" class="contact__form" enctype="multipart/form-data">
                    <input type="hidden" name="idart" id="idart" value="<?php echo $datasub['id']; ?>">
                    <input type="text" name="judul" id="judul" placeholder="Judul" value="<?php echo $datasub['judul']; ?>">
                    <textarea name="isi" rows="7" cols="9" placeholder="Isi Artikel" required><?php echo $datasub['isi']; ?></textarea>
                    <div class="right">
                    <div class="header__right-image">
                        <model-viewer src="../assets/<?php echo $datasub['aset']; ?>" camera-controls camera-orbit="75deg 85deg" shadow-intensity="1"></model-viewer>
                    </div>
                     </div>
                     <label><?php echo $datasub['aset']; ?></label>
                     <label for="aset">ASET</label>
                    <input type="file" name="aset[]" id="aset" multiple>
                    <label for="textures">Textures</label>
                    <input type="file" name="textures[]" id="textures" multiple>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </section>
        <?php } ?>
        <!--======================================================== END OF NAVBAR==============================================================-->
        <section class="footer">
            <div class="social">
                <a href="https://www.instagram.com "><i class="fab fa-instagram"></i></a>
                <a href="https://github.com "><i class="fab fa-github"></i></a>
                <a href="https://mobile.twitter.com "><i class="fab fa-twitter"></i></a>
            </div>

            <p class=""></p>
            <!--========================================================END OF FOOTER================================================================-->
        </section>
        </section>
    <script src="../script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script>
        var text = document.getElementById('text');
        var parallaxInstance = new Parallax(text);
    </script>
    <script type="module"
        src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    </body>

    </html>

<?php
}
?>