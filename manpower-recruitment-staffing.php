
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
 ul.icons li{
    /* color:#2819fe ; */
    margin-bottom: 10px;
    color: var(--font-color);
    font-size: 17px;
    list-style: inside;
    font-weight: 400;
    list-style-type: none;
 }
 ul.icons span{
    font-size: 12px;
  color: #002EE0;
  margin-right: 15px;
 }

 .padding{
    margin-top: 85px;
 }

 @media (max-width: 768px) {
    .padding{
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
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Services</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- services-page-->


  <section class="w3l-index3" id="services1">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row cwp23-content">
            <div class="col-lg-6 mt-lg-0 mt-5">
                <img src="assets/images/pro1.jpg"  alt="" class="radius-image img-fluid">
              </div>
              <div class="col-lg-6 cwp23-text pr-lg-5">
                <div class="cwp23-title">
                  <!-- <span class="title-subhny mb-2">Wildlive</span> -->
                  <h3 class="title-w3l mb-2">Manpower Recruitment & Staffing Specialist</h3>
                </div>
                <div class="">
                  <ul class="w3l-right-book mt-3">
                    <li><span class="fa fa-check" aria-hidden="true"></span>Full life cycle recruitment suppor</li>
                    <li><span class="fa fa-check" aria-hidden="true"></span>Supplier performance tracking</li>
                    <li><span class="fa fa-check" aria-hidden="true"></span>Onsite support</li>
                    <li><span class="fa fa-check" aria-hidden="true"></span>Recruitment process outsourcing (RPO)</li>
                    <li><span class="fa fa-check" aria-hidden="true"></span>Transition services of incumbent contingent workers</li>
                  </ul>
                </div>
              </div>
          
        </div>
      </div>
    </div>
  </section>
  

  <!-- //services-page-->
 
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