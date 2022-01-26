<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$name= $_POST['itname'];

$sql = "DELETE FROM item WHERE iid= $name";

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

<form action ="delete.php" method= "POST">
 <h4> Enter id to delete the item. </h4>
 ID: <input type="text" name="itname">
<input type="submit" name="submit" value="Delete Item">

</form>
</body>

</html>