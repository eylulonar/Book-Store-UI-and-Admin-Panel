<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$name= $_POST['orname'];

$sql = "DELETE FROM orderitem WHERE oid= $name";

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

<form action ="deleteorder.php" method= "POST">
 <h4> Enter id to delete the order. </h4>
 ID: <input type="text" name="orname">
<input type="submit" name="submit" value="Delete Order">

</form>
</body>

</html>