<?php

include "dbconfig.php";
include "functions.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Gallery Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

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
  include_once "functions.php";
  custom_header("Gallery");
  ?>

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Gallery Single</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a
              odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum
              dolorem.</p>

            <a class="cta-btn" href="contact.html">Upload a project</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single" id="gallerySingle-<?php echo $row['project_id']; ?>">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">


              <?php
              include_once "functions.php";
              if (isset ($_GET)) {

                $project_id = $_GET['project_id'];
                echo $project_id;

              }
              $sql = "SELECT * FROM projects WHERE project_id=$project_id";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                  $sql2 = "SELECT * FROM photos WHERE project_id=$row[project_id]";
                  $result2 = $conn->query($sql2);
                  if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                      foreach ($row2 as $key => $photo_path) {
                        ?>
                        <div class="swiper-slide">
                          <img src="<?php echo $row2["photo_path"] ?>" alt="images">
                        </div>

                      <?php }
                    }
                  }
                  //write to display other content here
              
                }
              } else {
                echo "none";
              }
              ?>

              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-8.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-9.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-10.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-11.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-12.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-13.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2 class="project-title">This is an example of project title </h2>
              <p class="description">
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia.
                Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia
                accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt
                eius.

                Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et.
                Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt
                molestiae laboriosam.
              </p>

              <div class="testimonial-item">
                <!--comments-->
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>



            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> <span>Nature Photography</span></li>
                <li><strong>Owner</strong> <span>ASU Company</span></li>
                <li><strong>Project date</strong> <span>01 March, 2022</span></li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>