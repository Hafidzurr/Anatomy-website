<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    
    <!--ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- GOOLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/alphacentauri" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="contact.css">
    
</head>

<body>

    <?php include 'layouts/navbar.php'; ?>

    
   
    <!--======================================================== END OF NAVBAR==============================================================-->
     <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="./assets/img2/skull-3543615.png">
                </div>
                <h2>Contact Us</h2>
                <p>Our help center is fresh and always open for business. If you can't find the answer you're looking for, we're here to lend a hand.</p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>082345789015</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>2KA04SI@Gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Depok, Indonesia</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li><a href="https://www.facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                    <li><a href="https://twitter.com"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="https://linkeldin.com"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </aside>



            <form action="https://formspree.io/f/myyvdaan" method="POST" class="contact__form">
                <div class="form__name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Your Email Address" required>
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-primary">Send Massage</button>
            </form>
        </div>
     </section>
<!--======================================================== END OF NAVBAR==============================================================-->
<section class="footer">
    <div class="social">
      <a href="https://www.instagram.com "><i class="fab fa-instagram"></i></a>
      <a href="https://github.com "><i class="fab fa-github"></i></a>
      <a href="https://mobile.twitter.com"><i class="fab fa-twitter"></i></a>
    </div>

    <p class=""></p>
<!--========================================================END OF FOOTER================================================================-->

</body>
</html>
