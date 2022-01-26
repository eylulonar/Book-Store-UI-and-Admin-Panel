<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$name= $_POST['crname'];
$phone= $_POST['crphone'];


$sql = "INSERT into courrier (coname,cophone) values ('$name','$phone')";
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

<form action ="addcourrier.php" method= "POST">
  Courrier Name: <input type="text" name="crname">
  Phone: <input type="text" name="crphone">
  
 
  <input type="submit" name="submit" value="Insert Courrier">

</form>
</body>

</html>