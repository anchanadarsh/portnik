<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nikhil Saini</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../cdn-cgi/apps/head/pfH2gVrLuxujNBruafWukkTnZPE.js"></script>
    <?php include'_partial/head.php'?>
</head>

<body>

    <?php include'_partial/header.php'?>
        <section class="mastwrap signature-adler">

            <section class="first-fold signature-adler fullheight contact-bg parallax" data-stellar-background-ratio="0.5">
                <section class="main-heading fixed-bottom">
                    <h1 class="white font3bold">Say Hello</h1>
                    <h6 class="white font3light">Get in touch with me</h6>
                    <div class="liner color-bg"></div>
                </section>
            </section>

            <div class="inner-wrap">

                <section class="hero-text signature-adler">
                    <div class="row">
                        <article class="col-md-6">
                            <h5 class="black font3bold">+91 98671 36561 | Mumbai, India</h5>
                            <div class="liner-small color-bg"></div>
                            <a href="mailto:nikimation@gmail.com"><h6 class="grey font3bold">nikimation@gmail.com</h6></a>

                            <ul class="team-social add-top-quarter">
                                <li>
                                    <a href="https://www.facebook.com/nikhilsaini" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/nikimation/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://in.pinterest.com/nikimation" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.behance.net/nikhilsaini" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </article>
                        <article class="col-md-6">

                            <div class="contact-item">
                                <div class="alert alert-error error color-bg" id="fname">
                                    <p class="black">Name must not be empty</p>
                                </div>
                                <div class="alert alert-error  error color-bg" id="fmail">
                                    <p class="black">Please provide a valid email</p>
                                </div>
                                <div class="alert alert-error  error color-bg" id="fmsg">
                                    <p class="black">Message should not be empty</p>
                                </div>
                                <form name="myform" id="contactForm" action="http://www.designova.net/collections/signature/adler/sendcontact.php" enctype="multipart/form-data" method="post">
                                    <article>
                                        <input type="text" placeholder="Your Name" id="name" name="name" size="100" class="border-form white font4light">
                                    </article>
                                    <article>
                                        <input type="text" placeholder="Valid email ID" name="email" id="email" size="30" class="border-form white font4light">
                                    </article>
                                    <article>
                                        <textarea placeholder="Your Message" name="message" cols="40" rows="5" id="msg" class="border-form white font4light"></textarea>
                                        <div class="btn-wrap  text-left">
                                            <button class="btn btn-signature btn-signature-adler btn-signature-color" id="submit" name="submit" type="submit">Send Message</button>
                                        </div>
                                    </article>
                                </form>
                            </div>




                        </article>
                    </div>
                </section>



            </div>
            <!-- end : inner-wrap -->

            <?php include '_partial/footer.php'?>
        </section>

        <?php include '_partial/footer-scripts.php'?>
</body>

</html>