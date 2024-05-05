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
	</nav>

	<div class="hero overlay inner-page">
		<img src="images/blob.svg" alt="" class="img-fluid blob">
		<div class="container">
			<div class="row align-items-center justify-content-center text-center pt-5">
				<div class="col-lg-6">
					<h1 class="heading text-white mb-3" data-aos="fade-up">About Us</h1>
				</div>
			</div>
		</div>
	</div>

<center>
	<div class="section5">
    <style>
        table {
			margin-top: 30px;
            width: 80%;
            border-collapse: collapse;
			margin-bottom: 50px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
			color: black;
        }
        th {
		  color: #ffff;
          background-color: #1553EA;
        }
		
    </style>

<h2>Reservation Data</h2>

<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "e-library";

			$connection = new mysqli($servername, $username, $password, $dbname);

			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}
			$sql = "SELECT reservation.*,  elib.fullname, elib.course
			FROM reservation 
			JOIN elib ON reservation.user_id = elib.user_id 
			WHERE elib.user_id = '" . $_SESSION['id'] . "'
			GROUP BY reservation.reservation_id";

			$result = $connection->query($sql);

			if ($result->num_rows > 0) {
				echo "<table><tr><th>Title </th><th>Full Name</th><th>Time</th><th>Course</th><th>Date</th></tr>";
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["selected_books"] . "</td><td>" . $row["fullname"] . "</td><td>" . $row["timess"] . "</td><td>" . $row["course"] . "</td><td>" . $row["dates"] . "</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			$connection->close();
			?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="reservation_id" value="1"> <!-- Replace '1' with the actual reservation ID -->
        <button type="submit" name="delete">Delete Reservation</button>
    </form>

</center>


<?php
include 'connn.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-library";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Get the reservation ID from the form
    $reservation_id = $_POST['reservation_id'];

    // Construct SQL query to delete the reservation
    $sql = "DELETE FROM reservation WHERE user_id = $reservation_id";

    // Execute the query
    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Removed Succesfully!')</script>";
    } else {
        echo "Error deleting reservation: " . $connection->error;
    }
}

// Close connection
$connection->close();
?>


  </body>
  </html>
