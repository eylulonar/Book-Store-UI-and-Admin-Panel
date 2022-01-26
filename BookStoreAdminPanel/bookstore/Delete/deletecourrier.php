<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$name= $_POST['couname'];

$sql = "DELETE FROM courrier WHERE coid= $name";

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

<form action ="deletecourrier.php" method= "POST">
 <h4> Enter courrier id to delete the courrier. </h4>
 ID: <input type="text" name="couname">
<input type="submit" name="submit" value="Delete Courrier">

</form>
</body>

</html>