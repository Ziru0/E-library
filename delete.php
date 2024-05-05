<?php
include 'connn.php';
if (isset($_GET['delete'])) {
	$delete_id = $_GET['delete'];
	$sql="delete from booklist where user_id = '$delete_id'";
	mysqli_query($connection,$sql);
	echo "<script>alert('Deleted Succesfully!')</script>";
	echo "<script>window.location='books.php'</script>";
}
  ?>
