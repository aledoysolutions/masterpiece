
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
  .contact{
    margin-left: 150px;
  }
  @media (max-width:768px) {
    .contact{
      margin: 0;
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
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Careers</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
 <!-- /contact-section -->

 <section class="w3l-index3" id="services1">
  <div class="midd-w3 py-5">
    <div class="container py-lg-5 py-md-3">
      <h3 class="title-w3l mb-5 text-center">Join Our Pool of Prospects</h3>
      <div class="row cwp23-content">
        <div class="col-lg-2 mt-lg-0 mt-5">
          
        </div>
        <div class="col-lg-8 cwp23-text pr-lg-5">
          <div class="contact-grids ">
            <!-- <div class="contact-right"> -->
              <form action="proc-careers.php" method="post" class="signin-form">
                        <div class="alert alert-success">Your information has been received. We would contact you anytime we're recruiting for a position you fit into.</div>
                <div class="input-grids">

                    <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input"
                        required="" />
                    <input type="email" name="sender" id="w3lSender" placeholder="Your Email*"
                        class="contact-input" required="" />
                    <input type="text" name="phone" id="w3lSubect" placeholder="Phone number*" class="contact-input"
                        required="" />
                    <!-- <input type="text" onfocus="(this.type='file')" name="w3lWebsite" id="w3lWebsite" placeholder="Upload CV*" class="contact-input"
                        required="" /> -->
                </div>
                <div class="form-input">
                    <textarea name="message" id="w3lMessage" placeholder="Brief info about yourself*"
                        required=""></textarea>
                </div>
                <div class="form-buttonhny text-lg-right">
                    <button class="btn btn-style btn-primary">Submit </button>
                </div>
              </form>
            <!-- </div> -->
          </div>
        </div>
        <div class="col-lg-2 mt-lg-0 mt-5">

        </div>
      </div>
    </div>
  </div>
</section>



<!-- //contact-section -->
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