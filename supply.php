
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Masterpiece Energies Nigeria ltd - the best oil ang gas company in Nigeria </title>
  <link rel="icon" href="assets/images/logo.png">
  <link href="//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<style>
 /* @media (max-width:879px) {
  .image{
    width: auto;
    height: 100%;
  }
 } */
</style>
<body>

<?php
  include('inc/header.php');
?>
  
  <!--/inner-page-->

  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Services</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- services-page-->
  

  <section class="w3l-index3" id="services1">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row cwp23-content">
          <div class="col-lg-6  mt-lg-0 mt-5">
            <img src="assets/images/supply.jpg" alt="" class="radius-image img-fluid image" style="height: 450px;" >
          </div>
          <div class="col-lg-6 cwp23-text pr-lg-5">
            <div class="cwp23-title">
              <!-- <span class="title-subhny mb-2">Wildlive</span> -->
              <h3 class="title-w3l mb-2">Supply Chain Efficiency</h3>
            </div>
            <div class="">
              <p class="">We leverage advanced AI to increase efficiency in supply chain operations and inventory management. We also incorporate AI-driven recommendations in our processes across board. </p>
                <ul class="w3l-right-book mt-3">
                    <li><span class="fa fa-check" aria-hidden="true"></span>Increase inventory visibility across global supply chain </li>
                    <p class="mb-3">Enhance organizational efficiency with real-time supply chain digital twin, providing a synchronized view across business units,geographies, and systems. </p>
                    <li><span class="fa fa-check" aria-hidden="true"></span>Optimize inventory with AI-based recommendations</li>
                    <p>We act on AI-based safety stock and reorder parameter recommendations. We also run scenario analysis before changing critical parameters. </p>
                    <!-- <li><span class="fa fa-check" aria-hiddthe power of AIen="true"></span>Pellen tesque libero ut justo</li> -->
                  </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- //services-page-->
  <!-- stats -->
  
  <!-- //stats -->
  <!-- /w3l-content-4-->
  
  <!-- //w3l-content-4-->
  <!-- footer -->
  <?php
    include('inc/footer.php');
  ?>
  <!-- //copyright -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- <script src="assets/js/theme-change.js"></script> -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>