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
                <h2>Contact</h2>
                <span><a href="index.html" class="home">Home</a> | <a href="#" class="disabled">Contact</a></span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero area ends -->

  <!-- contact starts -->
  <section class="contact-page">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog-details-wrapper">
                <div class="blog-content-wrapper">
        
                   
                    <div class="comment-form">
                      <h4>Get In Touch</h4>

                      <form action="contact-form-db.php" method="post">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control sm" placeholder="Your Name" required>
                          </div>
                          <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your Email"  required>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="text" name="subject" class="form-control" placeholder="Subject"  required>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea required>

                          <p>*Your email address will not be published.</p>
                        </div>

                        <button type="submit" name="contact" class="button header-cta newsletter-btn border-none outline-none">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
  </section>
  <!-- contact ends -->
  

  <!-- footer -->
  <?php include 'footer.php'; ?>