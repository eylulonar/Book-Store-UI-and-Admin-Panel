<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$name= $_POST['cgname'];

$sql = "DELETE FROM category WHERE cgid= $name";

if ($_POST['submit']) {
    if (mysqli_query($conn, $sql)){
        echo "Data is deleted successfully.";
    }
}
else {
    echo "Something went wrong!";
}



?>
</head>
<body>

<form action ="deletecategory.php" method= "POST">
 <h4> Enter category id to delete the category. </h4>
 ID: <input type="text" name="cgname">
<input type="submit" name="submit" value="Delete Category">

</form>
</body>

</html>