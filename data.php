
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
            <img src="assets/images/analysis.jpg" alt="" class="radius-image img-fluid image" >
          </div>
          <div class="col-lg-6 cwp23-text pr-lg-5">
            <div class="cwp23-title">
              <!-- <span class="title-subhny mb-2">Wildlive</span> -->
              <h3 class="title-w3l mb-2">Data Mastering </h3>
            </div>
            <div class="">
              <p class="">We enable forward-lookimng organizations in the Oil and Gas industry to master their data at scale, improve regulatory operations, lower their risks, and enhance customer experience.</p>
              <ul class="w3l-right-book mt-3">
                <li><span class="fa fa-check" aria-hidden="true"></span>Spend Optimization </li>
                <p class="mb-3">Increase visibility into spend, streamline category strategy development, discover the best suppliers and lower PPV, and uncover tail spend that drives unnecessary costs. </p>
                <li><span class="fa fa-check" aria-hidden="true"></span>Legacy syastem consolidation</li>
                <p>Consolidate disparate systems across business units and geographies (eg: ERP systems, CRMs, data lakes) to lower overhead costs and streamline operations</p>
                <!-- <li><span class="fa fa-check" aria-hiddthe power of AIen="true"></span>Pellen tesque libero ut justo</li> -->
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <section class="w3l-index3" id="services1">
    <div class="midd-w3 py-">
      <div class="container py-lg- py-md-3">
        <div class="row cwp23-content">
         
          <div class="col-lg-6 cwp23-text pr-lg-5">
            <div class="cwp23-title">
              <!-- <span class="title-subhny mb-2">Wildlive</span> -->
              <!-- <h3 class="title-w3l mb-2">Data Mastering </h3> -->
            </div>
            <div class="">
              <!-- <p class="">We enable forward-lookimng organizations in the Oil and Gas industry to master their data at scale , improve regulatory operations, lower thir risks and enhance customer experience</p> -->
              <ul class="w3l-right-book mt-0">
                <li><span class="fa fa-check" aria-hidden="true"></span>Well Mastering </li>
                <p class="mb-3">We enable companies to consolidate well data from engineering, geoscience, and drilling, cleanse and categorize data, and deliver insights into operations, drive cost savings and increase well reserves.</p>
                <li><span class="fa fa-check" aria-hidden="true"></span>Supply Chain Management</li>
                <p>Streamline operations by mastering supplier data from ERP systems across business units, factories & geographies, categorize parts & materials, and stay ahead of changes to the supply chain.</p>
                <!-- <li><span class="fa fa-check" aria-hiddthe power of AIen="true"></span>Pellen tesque libero ut justo</li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-6  mt-lg-0 mt-5">
            <img src="assets/images/oil3.jpg" alt="" class="radius-image img-fluid image" >
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //services-page-->
  <!-- stats -->
  <!-- //w3l-content-4-->
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