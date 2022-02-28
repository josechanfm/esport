<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>中國電競比賽</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/template1/img/favicon.png" rel="icon">
  <link href="assets/template1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/template1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/template1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/template1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ComingSoon - v4.6.0
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>報名表</h1>
      <h2>名額有限，想要組隊報名的玩家請千萬不要錯過機會！</h2>
      <div class="countdown d-flex justify-content-center" data-count="2023/12/5">
        <div>
          <h3>%d</h3>
          <h4>天</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>小時</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>分鐘</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>秒</h4>
        </div>
      </div>

      <div class="subscribe">
        <h4>Subscribe now to get the latest updates!</h4>
        <form action="forms/notify.php" method="post" role="form" class="php-email-form">
          <div class="subscribe-form">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </div>
          <div class="mt-2">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your notification request was sent. Thank you!</div>
          </div>
        </form>
      </div>

      <div class="social-links text-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Eum ipsam laborum deleniti velitena</h2>
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Application Form</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <?php echo $form->messages(); ?>
            <form action="https://localhost/esport/home" method="post" role="form" class="php-email-form" style="padding-top:20px">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="姓名" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="電郵" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="team_name" id="team_name" placeholder="隊名" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="remark" rows="5" placeholder="備註" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Apply</button></div>
            <form>

          </div>

        </div>

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>比賽場地:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>電郵:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>聯繫電話:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div>


      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Hubis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://hubis.ltd/">Hubis</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/template1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/template1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/template1/js/main.js"></script>

</body>

</html>