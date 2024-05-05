	<?php
	include 'conn.php';
	session_start();
	$user_id = $_SESSION['id'];
	if(!isset($_SESSION['id'])) {
	   echo '<script>alert("You do not have access to this page. Please log in first.");</script>';
	   header("Location: login.php");
		exit();
	   }
   
   $stmt = $con->prepare("SELECT * FROM elib WHERE user_id = ?");
   $stmt->execute([$user_id]);
   $user = $stmt->fetch(PDO::FETCH_ASSOC);
   if($user){
   } else {
	   echo 'failed to find';
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
								<li><div class="group">
									  <svg viewBox="0 0 24 24" aria-hidden="true" class="icon"><g>
      										<path
       										 d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
    									  ></path></g>
												 </svg>
												 <input class="input" type="search" id="searchInput" placeholder="Search">
												 <button type="button" class="button1" onclick="searchAndHighlight()">Search</button>
													
								</div></li>	
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
												<li><a onclick="window.location.href='reserbook.php';">Profile</a></li>
												<li><a onclick="window.location.href='logout.php';">Log-out</a></li>
                    							<?php else: ?>
                        						<li><a onclick="window.location.href='login.php';">Log-in</a></li>
                      						    <li><a onclick="window.location.href='register.php';">Register</a></li>
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
		</div>
	</nav>

	
	<div class="hero overlay inner-page">
		<img src="images/blob.svg" alt="" class="img-fluid blob">
		<div class="container">
			<div class="row align-items-center  text-center pt-5">
				<div class="col-lg-6">
					<form action="" method="post">
					<div class="section5">
    <style>
       
table {
	width: 900px;
	border-collapse: collapse;
	margin-top: 100px;
	margin-left: 600px;
}

/* Style for table headers */
th {
	background-color: #f2f2f2;
	border: 1px solid #ddd;
	padding: 8px;
	text-align: left;
}

/* Style for table cells */
td {
	border: 1px solid #ddd;
	padding: 8px;
}

/* Style for even rows */
tr {
	background-color: #f2f2f2;
}

/* Style for table hover effect */
tr:hover {
	background-color: #ddd;
}


#pagination {
	text-align: center;
	margin-top: 20px;
}
#pagination a {
	border: 1px solid #CCCCCC;
	padding: 5px 10px;
	font-family: arial;
	text-decoration: none;
	background: none repeat scroll 0 0 #EEEEEE;
	color: #222222;
}
#pagination a:hover {
	background-color: #FFFFFF;
}
a#active{
	background-color: #FFFFFF;
}
#sample thead tr th {
	font-size: 20px;
}


input[type="text"] {
	padding: 8px;
	margin: 5px 0;
	box-sizing: border-box; /* Ensures padding and border are included in element's total width and height */
	border: 1px solid #ccc;
	border-radius: 4px;
}

/* Style for the input text when it's focused */
input[type="text"]:focus {
	border-color: #007bff; /* Change border color when focused */
	outline: none; /* Remove the default focus outline */
}
  /* Style for the button */
  input[type="submit"] {
	padding: 10px 20px;
	margin: 5px;
	font-size: 16px;
	cursor: pointer;
	background-color: #007bff;
	color: white;
	border: none;
	border-radius: 4px;
}

/* Style for the button when hovered */
input[type="submit"]:hover {
	background-color: #0056b3; /* Darker shade of the primary color */
}

/* Style for the button when pressed */
input[type="submit"]:active {
	background-color: #0056b3; /* Darker shade of the primary color */
	transform: translateY(1px); /* Move the button down 1px when pressed */
}
#secret {
	margin-top: 19px; width: 168px;
}
    </style>


<table cellspacing="0" cellpadding="2" id="sample" >
<thead>
	<tr>
		<th>  </th>
		<th> Title </th>
		<th> Author </th>
		<th> Action </th>
	</tr>
</thead></center>
<tbody>
	<?php
		include('conn.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 5; 		
		$result = $con->prepare("SELECT * FROM booklist ORDER BY book_id ASC LIMIT $start_from, 5");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['book_id']; ?></td>
		<td><?php echo $row['author']; ?></td>
		<td><?php echo $row['title']; ?></td>
        <td><input type="checkbox" name="selected_books[]" value="<?php echo $row['book_id']; ?>"></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>

<div id="pagination">
	<?php 

	$result = $con->prepare("SELECT COUNT(book_id) FROM booklist");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 5); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>




</div>
					</div>
			    </div>
			</div>
		</div>
	</div>

	
	<div class="section">
		<div class="container">
			<div class="row">
			<div class="custom-select">
</div>
				<div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
					<div class="contact-info">
						

						<div class="address mt-2">
							<i class="icon-room"></i>
							<h4 class="mb-2">Location:</h4>
							<p>Dipolog School of Fisheries,<br> Olingan Dipolog, City</p>
						</div>

						<div class="open-hours mt-4">
							<i class="icon-clock-o"></i>
							<h4 class="mb-2">Open Hours:</h4>
							<p>
								Monday-Friday:<br>
								8:00 AM - 5:00 PM
							</p>
						</div>

						<div class="email mt-4">
							<i class="icon-envelope"></i>
							<h4 class="mb-2">Email:</h4>
							<p>dsfolingan@gmail.com</p>
						</div>

						<div class="phone mt-4">
							<i class="icon-phone"></i>
							<h4 class="mb-2">Call:</h4>
							<p>+1 1234 55488 55</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
						<div class="row">
							
							<div class="col-6 mb-3">
								<input type="time" class="form-control" name="timess" placeholder="TIME">
							</div>
							
							<div class="col-6 mb-3">
								<input type="date" class="form-control" name="dates" placeholder="DATE">
							</div>
							
							<div class="col-12">
							<button class="button2" type="submit" value="submit" name="submit">Reserve</button>
							</div>
						</div>
						
						
						
					</form>
			</div>
			</div>
		</div>
	</div> <!-- /.untree_co-section -->

	<?php
include 'connn.php';
if (isset($_POST['delete'])) {
	$delete_id = $_POST['delete'];
	$sql="delete from booklist where user_id = '$delete_id'";
	mysqli_query($connection,"delete form booklist (user_id) VALUES ('$user_id')");
	echo "<script>alert('Deleted Succesfully!')</script>";
	echo "<script>window.location='books.php'</script>";
}
  ?>
	
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

      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

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




	<script>
        function searchAndHighlight() {
            var searchQuery = document.getElementById("searchInput").value.toLowerCase();
            var select = document.getElementById("selectOptions");

            for (var i = 0; i < select.options.length; i++) {
                var optionText = select.options[i].text.toLowerCase();
                var optionValue = select.options[i].value.toLowerCase();

                if (optionText.includes(searchQuery) || optionValue.includes(searchQuery)) {
                    select.options[i].classList.add("highlight");
                } else {
                    select.options[i].classList.remove("highlight");
                }
            }
        }
    </script>

	<?php
	include 'connn.php';
if (isset($_POST['addp'])) {
	$user_id = $_POST["id"];
	$title = $_POST["title"];
	$author = $_POST["author"];
    mysqli_query($connection,"INSERT INTO booklist (id,title,author) VALUES ('$id','$title','$author')");
	echo "<script>alert('Saved Successfully!')</script>";
	echo "<script>window.location='books.php'</script>";
}
?> 

<?php
include 'connn.php';

if (isset($_POST['submit'])) {
    $selected_books = $_POST["selected_books"];
    $fullname = $_POST["fullname"];
    $timess = $_POST["timess"];
    $course = $_POST["course"];
    $dates = $_POST["dates"];

    // Fetch titles of selected books from the database
    $selected_books_titles = array();
    foreach ($selected_books as $book_id) {
        $result = mysqli_query($connection, "SELECT title FROM booklist WHERE book_id = '$book_id'");
        $row = mysqli_fetch_assoc($result);
        $selected_books_titles[] = $row['title'];
    }

    // Serialize the array of selected book titles into a string
    $selected_books_str = implode(",", $selected_books_titles);

    // Insert the data into the database
    mysqli_query($connection, "INSERT INTO reservation (selected_books, fullname, timess, course, dates) VALUES ('$selected_books_str', '$fullname', '$timess', '$course', '$dates')");

    echo "<script>alert('Saved Successfully!')</script>";
    echo "<script>window.location='books.php'</script>";
}
?>


  </body>
  </html>
