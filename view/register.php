<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PhotoFolio Bootstrap Template - Contact</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?php
    include_once "../controllers/functions.php";
    include "../controllers/action.php";
    custom_header("Sign-in");
    ?>

    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Register to have an Account</h2>
                       

                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= register  Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row justify-content-center mt-4">

                    <div class="col-lg-9">
                        <form action="../controllers/action.php" method="POST" role="form"  >
                           

                            <div class="row  ">
                                <div class="col-md-6 form-group ">
                                <label for="fullname"><b>Full name:</b></label>
                                 <input type="text" placeholder="Fullnames here.." name="fullname" id="fullname"class="form-control" required>
                                </div>

                            </div>
                             <div class="row">
                                <div class="col-md-6 form-group">
                                <label for="email"><b>Email:</b></label>
                                 <input type="text" placeholder="Email here.." name="email" id="email"class="form-control" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                <label for="username"><b>Username:</b></label>
                                 <input type="text" placeholder="username here.." name="username" id="username"class="form-control" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="password-repeat">Repeate Password:</label>
                                    <input type="password" name="password-repeat" class="form-control" id="password-repeat" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">

                                    <input type="checkbox" name="rememberme" id="rememberme">
                                    <label for="rememberme">Remember me</label>
                                </div>

                            </div>
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                           
                            <div class="text-center"><button class="btn-get-started" type="submit" name="action" value="register">Register</button></div>
                        
                             <div class="text-center">
                            <p>Already have an account? <a href="sign-in.php">Sign in</a>.</p>
  </div>
                        </form>
                    </div><!-- End signin Form -->

                </div>

            </div>
        </section><!-- signin Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>PhotoExperts</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
                Designed by <a href="https://www.linkedin.com/in/ndifon-titiana-b5083720a/">Ndifon Titiana S.</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>