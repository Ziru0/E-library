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