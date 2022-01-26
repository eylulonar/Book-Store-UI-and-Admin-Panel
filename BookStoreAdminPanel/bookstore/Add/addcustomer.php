<html>
<head>

<?php
error_reporting(0);
include 'connection.php';
$name= $_POST['csname'];
$email= $_POST['mail'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$sql = "INSERT into customer ( csname, email, phone, del_address) values ('$name','$email','$phone','$address')";
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

<form action ="addcustomer.php" method= "POST">
  Name: <input type="text" name="csname">
  Email: <input type="mail" name="mail">
  Phone Number: <input type="text" name="phone">
  Address: <input type="text" name="address">
 
  <input type="submit" name="submit" value="Insert Customer">

</form>
</body>

</html>