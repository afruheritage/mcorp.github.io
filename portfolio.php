<?php include('header.php');?>
  <!-- header ends-->

  <!-- Hero area starts-->
  <section class="hero-area ">
    <div class="hero-banner">
      <div class="inner-hero">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="hero-text">
                <h2>Portfolios</h2>
                <span><a href="home-1.html" class="home">Home</a> | <a href="#" class="disabled">Portfolios</a></span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero area ends -->


   <!-- Portfolio area starts -->
   <?php include ('global-project.php');?>
  <!-- Portfolio area ends -->

<!-- Testimonials starts -->
<?php include ('testimonial.php');?>
<!-- Testimonials ends -->


<!-- Video starts
<div class="video">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 padding-right">
            <a href="https://www.youtube.com/watch?v=tK4Q85BNGto" class="pulse popup-hero" target="_blank">
            <i class="fas fa-play"></i>
            </a>
        </div>
        </div>
    </div>
</div>
 Video ends -->


<!-- Appointment area starts -->
<section class="appointment portfolio-appointment">
    <div class="container">
      <div class="row align-items-center r-center">
        <div class="col-lg-6 r-mb">
          <div class="section-title">
            <div class="sub-heading">
              <img src="assets/images/icon-white.png" alt="caret">
              <p>Portfolio</p>
            </div>
            <h2>Let’s look our global projects</h2>
          </div>
        </div>

        <div class="col-lg-6 d-end">
          <div class="button header-cta appointment-cta">
            <a href="contact.php"><span>Make An Appointment <i class="fas fa-arrow-right"></i></span> </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Appointment area ends -->
  

  <!-- FAQ starts -->
  <?php include ('faq-ques.php');?>
  <!-- FAQ ends -->

    <!-- Blog starts -->
   <?php include ('news.php');?>

  <!-- footer -->
  <?php include 'footer.php'; ?>