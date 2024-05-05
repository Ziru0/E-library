
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Open Sans', sans-serif;
}
table {
  background: white;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
  width: 1000px;	
  margin-left: 600px;
}
th {
  border-bottom: 1px solid #364043;
  color: #364043;
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: center;
}
td {
  color: #364043;
  font-weight: 400;
  padding: 0.65em 1em;
}
.disabled td {
  color: #4F5F64;
}
tbody tr {
  transition: background 0.25s ease;
}
tbody tr:hover {
  background: #364043;
}

</style>
<form action="" method="POST">  
    <input type="text"  name="title" placeholder="title">
    <input type="text"  name="author" placeholder="author">
    <input type="text"  name="synopsis" placeholder="synopsis">
    <button  type="submit" value="submit" name="addp">add book</button>
    <button  type="submit" value="delete" name="delete">delete book</button>
    <a href="delete.php?delete=<?php echo $user_id;?>">delete</a>

    <?php
	include 'connn.php';
if (isset($_POST['addp'])) {
	$stmt = $connection->prepare("INSERT INTO booklist (title, author, synopsis) VALUES (?, ?, ?)");

// Bind the parameters
$stmt->bind_param("sss", $title, $author, $synopsis);

// Set the parameters and execute the statement
$title = $_POST["title"];
$author = $_POST["author"];
$synopsis = $_POST["synopsis"];

$stmt->execute();

// Check if the query was successful
if ($stmt->affected_rows > 0) {
    echo "<script>alert('Saved Successfully!')</script>";
    echo "<script>window.location='books.php'</script>";
} else {
    echo "<script>alert('Failed to save data.')</script>";
}
}
?> 
</form>  
</body>

<select class="form-select" name="selectoption" id="dropdown" size="3" aria-label="size 3 select example">
					<option value="" disabled selected>Please Select Book</option>
<?php
include 'connn.php';
$query = "SELECT * FROM booklist";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
		$user_id = $row['user_id'];
        $title = $row['title'];
        $author = $row['author'];
        
        echo "<option value=\"$user_id\">  $user_id $title -$author</option>";
    }
} else {
    echo "<option value=''>No books found</option>";
}
?>
</select>

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

</html>

