<html>
<head>

<?php
error_reporting(0);
include 'connection.php';
$name= $_POST['cgname'];



$sql = "INSERT into category (cname) values ('$name')";
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

<form action ="addcategory.php" method= "POST">
  Category Name: <input type="text" name="cgname">
  
  
 <input type="submit" name="submit" value="Insert Category">

</form>
</body>

</html>