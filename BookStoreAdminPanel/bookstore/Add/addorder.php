<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$amount= $_POST['amount'];
$status= $_POST['status'];
$date= $_POST['date'];


$sql = "INSERT into orderitem (amount, stat, ordate) values ('$amount','$status','$date')";
if ($_POST['submit']) {
    if (mysqli_query($conn, $sql)){
        echo "Data is inserted successfully.";
    }
}
else {
    echo "Something went wrong!";
}



?>
</head>
<body>

<form action ="addorder.php" method= "POST">
  Amount: <input type="number" name="amount">
  Status: <input type="text" name="status">
  Date: <input type="text" name="date">
  
 
  <input type="submit" name="submit" value="Insert Order">

</form>
</body>

</html>