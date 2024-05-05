<?php
session_start();
include 'conn.php';
?>  
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="dsficon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="css/tiny-slider.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/glightbox.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/flatpickr.min.css">


  <title>DSF Library</title>
</head>
<body>

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <div class="row g-0 align-items-center">
            <div class="col-2">
							<a href="index.php" class="logo" >
								<img src="images/logo.png" alt="" width="150px" height="150px">
							</a>
						</div>	
            <div class="col-8 text-center ">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="Books.php">Books</a></li>

							</ul>
						</div>
						
								<div class="col-2 text-end">
									<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
										<span></span>
									</a>
									<div class="accouont">
									<div class="col-8 text-center ">
										<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
											<li class="has-children">
												<a href="">Account</a>
												<ul class="dropdown">
												<?php if (isset($_SESSION['username'])): ?>
												<li><a onclick="window.location.href='profile.php';">Profile</a></li>
												<li><a onclick="window.location.href='logout.php';">Log-out</a></li>
                    							<?php else: ?>
                        						<li><a onclick="window.location.href='login.php';">Log-in</a></li>
                  							    <?php endif; ?>
													
												</ul>
											</li>
								
										</ul>
									</div>
								</div>
							  </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="hero overlay inner-page">
    <img src="images/blob.svg" alt="" class="img-fluid blob">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up" >Blog / News</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section sec-news">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
          <div class="card post-entry">
            <a href="single.html"><img src="images/araw.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Feb 1, 2024</span></div>
              <h5 class="card-title"><a href="single.html">DSF Foot Parade</a></h5>
              <p>Dipolog School of Fisheries Faculty and Staff, and the Supreme Students' Council Officers join the foot parade as part of the celebration of the 109th Araw ng Olingan.
                The parade started at the Barangay Hall of Olingan, Purok Riverside to Purok Mangga along the National Highway which commences around 7:00 in the morning.</p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card post-entry">
            <a href="single.html"><img src="images/halal journey.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Feb 22, 2024</span></div>
              <h5 class="card-title"><a href="single.html">Halal Journey </a></h5>
              <p>The resource speakers of the Training of Trainers on Halal Awareness, Dir. Omarkhayyam I. Dalagan, MDM., JD.; Prof. Noor D. Saada, PhD.; Mr. Raymond J. Sucgang; and Ms. Rivera B. Aliponga visits the Food Processing Plant of the Dipolog School of Fisheries.
                 They conducted a minor inspection and provided recommendations.</p>
              <p class="mt-5 mb-0"><a href="single.html">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card post-entry">
            <a href="single.html"><img src="images/haaa.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Feb 21, 2024</span></div>
              <h5 class="card-title"><a href="single.html">Happening Now</a></h5>
              <p>"True halal is not just about what we consume, but it encompasses the integrity and compassion with which we live our lives. It's a reflection of our respect for all beings and a commitment to righteousness in all our actions."   - Yasmin Mogahed
               "Training of Trainers on Halal Awareness" in Dipolog School of Fisheries.</p>
              <p class="mt-5 mb-0"><a href="single.html">Read more</a></p>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card post-entry">
            <a href="single.html"><img src="images/valen.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">fed 13, 2024</span></div>
              <h5 class="card-title"><a href="single.html">DSF SERVING WITH A HEART | DSF Valentine's Day Celebration</a></h5>
              <p>Valentine's Day holds significance as a celebration of love, rooted in cultural traditions and evolving into a global occasion for expressing affection. 
                It serves as a romantic gesture for couples, a platform for strengthening relationships, and an opportunity for individuals to show appreciation for loved ones. </p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card post-entry">
            <a href="single.html"><img src="images/pled.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Mar 4, 2024</span></div>
              <h5 class="card-title"><a href="single.html"> Casual Position within the institution</a></h5>
              <p>The Dipolog School of Fisheries extends its heartfelt congratulations on the successful installation of the ten (10) Administrative Aide I - Casual Position within the institution. 
                This momentous occasion was marked by an oath-taking ceremony, graciously facilitated by the esteemed TESDA Director General. </p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

         <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
          <div class="card post-entry">
            <a href="single.html"><img src="images/funrun2.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Mar 1, 2024</span></div>
              <h5 class="card-title"><a href="single.html">DSF Funrun</a></h5>
              <p>The Dipolog School of Fisheries proudly joins the nation in honoring and empowering women as we dedicate this month to celebrate their achievements and contributions.
                 To kick off the month-long festivity, our community came together for a vibrant and energetic color fun run earlier today. 
                Faculty, staff, and students alike participated.</p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>


      </div>

      <div class="row">
        <div class="col-lg-12 text-center py-5">
          <div class="custom-navigation">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <span>...</span>
            <a href="#">5</a>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>About</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <address>43 Raymouth Rd. Baltemoer, <br> London 3910</address>
            <ul class="list-unstyled links">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Company</h3>
            <ul class="list-unstyled float-start links">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Mission</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
            <ul class="list-unstyled float-start links">
              <li><a href="#">Partners</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Creative</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Navigation</h3>
            <ul class="list-unstyled links mb-4">
              <li><a href="#">Our Vision</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>

            <h3>Social</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
      </div> <!-- /.row -->

      <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
  </html>
