
<?php
include 'conn.php';
session_start();

if(isset($_POST['submit'])){
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $stmt = $con->prepare("SELECT * FROM elib WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
		$_SESSION['id'] = $user['user_id']; 
        $_SESSION['username'] = $user['username'];

        // Redirect to a welcome page or any other page you want
		header("Location: books.php");
        exit();
    } else {
        // User not found or invalid credentials
		echo "<script>alert('Invalid username or password');</script>";
       
    }
}
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
	<link rel="stylesheet" href="css/style2.css">

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
											<li><a href="logout.php">Log-out</a></li>
											<li><a href="#">Menu Two</a></li>
											
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

	<div class="hero overlay">
		<img src="images/blob.svg" alt="" class="img-fluid blob">
		<div class="container">
			<div class="row align-items-center justify-content-between pt-5">
				
					<center>
					<div class="body">
        <div class="containersss">
            <form action="#" method="post">
                <div class="head">
                    <span>Sign up</span>
                </div>
                <div class="inputs">
					<input type="text" class="username" name="username" placeholder="UserName">
                    <input type="password" class="password" name="password" placeholder="Password">
                </div>
                <button class="buttonl" type="submit" name="submit">Sign In</button>
            </form>
            <div class="form-footer">
                <p>Have an account? <a href="registration.php">SIGN UP</a></p> 
            </div>
        </div>
    </div>
			</center>
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

    <!-- Preloader -->
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
