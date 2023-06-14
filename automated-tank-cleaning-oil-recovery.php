
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
  .image{
   margin-top: 90px;
  }
  @media (max-width:768px) {
    .image{
      margin-top: 0;
    }
  }
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
          <div class="col-lg-6  mt-lg-0">
            <img src="assets/images/automated-tank-cleanning-oil-recovery.jpeg" alt="" class="radius-image img-fluid  " >
          </div>
          <div class="col-lg-6 cwp23-text pr-lg-5">
            <div class="cwp23-title">
              <!-- <span class="title-subhny mb-2">Wildlive</span> -->
              <h3 class="title-w3l mb-2">Automated Tank Cleaning and Oil Recovery </h3>
            </div> <br>
            <div class="">
              <p class="">Our automatic tank-cleaning technology reduces cleaning time, crew requirement, and carbon footprint and minimizes or even eliminates confined-space entry. Within the industry's more stringent QHSE environment, our technology improves safety and reduces the number of personnel onboard, waste generation and associated emissions, and downtime during the cleaning process. </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- //services-page-->

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