<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Book List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Check</th>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
include 'connn.php';
$query = "SELECT * FROM booklist";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $author = $row['author'];
        $book_id = $row['book_id']; // Assuming 'id' is the primary key of your booklist table
        echo "<tr>";
        echo "<td><input type='checkbox' name='book[]' value='$book_id'></td>";
        echo "<td>$title</td>";
        echo "<td>$author</td>";
        echo "<td><button type='button' class='btn btn-primary open-modal' data-toggle='modal' data-target='#myModal' data-bookid='$book_id'>Action</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No books found</td></tr>";
}
?>

        </tbody>
    </table>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Title</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Synopsis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connn.php';
            $query = "SELECT * FROM booklist";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row['title'];
                    $synopsis = $row['synopsis'];
                    echo "<tr>";
                    echo "<td>$title</td>";
                    echo "<td>$synopsis</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No books found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
