
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Masterpiece Energies Nigeria ltd - the best oil ang gas company in Nigeria </title>
  <link rel="icon" href="assets/images/logo.png">
  <link rel="preconnect" href="//fonts.gstatic.com">
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
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About Us</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- about page about section -->
  <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row">
          <div class="col-lg-7 mb-lg-0 mb-md-5 mb-4 align-self">
            <!-- <h6 class="title-subhny">Our Story</h6> -->
            <h3 class=" mx-0 title-w3l">About Masterpiece Energies</h3>
            <p class="mt-md-4 mt-3">We leverage the power of technology to deliver world-class digital transformation, innovative equipment and
              material procurement, and supply sevices to the oil and gas industry throughout Africa and  the rest of the world. We always endeavour to help pur clients achieve operational efficiency, increased productivity and cost savings; as these are critical in today’s competitive marketplace.  <br><br>

              

              Our many years of experience in the technology, Oil and Gas industry has helped us to build valuable relationships and partnerships with renowned original equiment manufacturers and suppliers. Our strategic partnerships cut across suppliers across Europe, USA, far East, as well as other sub-continents. These strategic relationships allow us to provide our customers with world-class software and hardware equipment to the correct specification on time and within budget.<br><br>

              Working for Oil and Gas companies primarily in Nigeria, Cameroon, Ghana, Kenya, Angola and other African nations; we can positively impact operations, procure and ship all equipment and materials used in exploration, drilling, marine services, production and all oil products.</p>
            <!-- <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="about.php"> Read More</a> -->
          </div>
          <div class="col-lg-5 mt-lg-0 mt-4">
            <div class="position-relative">
              <img src="assets/images/barrel.jpg" alt="image" style="height:500px; " class="radius-image img-fluid image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about page about section -->

  <section class="w3l-grids-3 py-5" id="why">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row bottom-ab-grids">
        <div class="col-lg-6 bottom-right-grids pl-lg-5 mt-lg-0 mt-5">
          <img src="assets/images/barrel2.jpg" alt="" class="radius-image img-fluid">
        </div>
        <div class="col-lg-6 bottom-ab-left align-self">
          <!-- <span class="title-subhny mb-2">Masterpiece Energies</span> -->
          <h3 class="title-w3l mb-2">We Are Building A Sustainable Future</h3>
          <p class="">We have an unwavering focus on our business systems, processes, and underlying technology. This solid innovation strategy separates us from the rest. </p>
   
        </div>
       
      </div>
    </div>
  </section>


  <!-- home page block grids -->
 
  <!-- //home page block grids -->
  <!--/team-->

  <!--//team-->
  <?php
    include('inc/footer.php');
  ?>
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