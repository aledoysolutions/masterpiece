
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
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
 <!-- /contact-section -->
<section class="w3l-contact-2 py-5" id="contact">
  <div class="container py-lg-5 py-md-4 py-2">
    <!-- <span class="title-subhny mb-2 text-center">Send a Message</span> -->
    <h3 class="title-w3l mb-5 text-center">Send us a message</h3>
      <div class="contact-grids d-grid">
          <div class="contact-left-img">

            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                  <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                  <h6>Company Address</h6>
                  <p>2nd Floor, UBA Building, 22B Idowu Taylor Street, <br> Victoria Island, Lagos State.</p>
              </div>
            </div>
            
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                  <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                  <h6>Call Us</h6>
                  <p><a style="color:rgb(22 28 45 / 70%);" href="tel:09095300856">09095300856</a></p>
                  <p><a style="color:rgb(22 28 45 / 70%);" href="tel:08035300856">08035300856</a></p>
              </div>
            </div>
            
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                  <span class="fa fa-envelope-o"></span>
              </div>
              <div class="cont-right">
                  <h6>Email Us</h6>
                  <p><a style="color:rgb(22 28 45 / 70%);" href="mailto:info@masterpieceenergies.com" class="mail"> info@masterpieceenergies.com</a></p>
              </div>
            </div>

          </div>
          <div class="contact-right">
              <form action="proc-contact.php" method="post" class="signin-form">
                        <div class="alert alert-danger">Please fill in all fields correctly.</div>
                  <div class="input-grids">
                      <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input" required="" />
                      <input type="email" name="sender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
                      <input type="text" name="subject" id="w3lSubect" placeholder="Subject*" class="contact-input" required="" />
                      <input type="text" name="phone" id="w3lWebsite" placeholder="Your Phone*" class="contact-input"
                          required="" />
                  </div>
                  <div class="form-input">
                      <textarea name="message" id="w3lMessage" placeholder="Type your message here*"
                          required=""></textarea>
                  </div>
                  <div class="form-buttonhny text-lg-right">
                      <button class="btn btn-style btn-primary">Send Message</button>
                  </div>
              </form>
          </div>
      </div>

        <div class="map-iframe mt-5">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6923236354205!2d3.424366074182079!3d6.4335532242037345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf52ed4333ca7%3A0x94ff20d8b4ff646a!2sUBA%20Capital%20and%20Trust%20Ltd!5e0!3m2!1sen!2sng!4v1681222781858!5m2!1sen!2sng"width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>

<!-- //contact-section -->
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