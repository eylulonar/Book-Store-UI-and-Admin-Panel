<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$name= $_POST['custname'];

$sql = "DELETE FROM customer WHERE cid= $name";

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

<form action ="deletecustomer.php" method= "POST">
 <h4> Enter id to delete the customer. </h4>
 ID: <input type="text" name="custname">
<input type="submit" name="submit" value="Delete Customer">

</form>
</body>

</html>