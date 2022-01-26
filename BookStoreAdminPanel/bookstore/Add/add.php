<html>
<head>

<?php
error_reporting(0);
include 'connection.php';
$name= $_POST['itemname'];

$stock= $_POST['stock'];
$price= $_POST['price'];
$catid= $_POST['catid'];

$sql = "INSERT into item (iname, stock, price, catid) values ('$_POST[itemname]','$_POST[stock]','$_POST[price]','$_POST[catid]')";
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

<form action ="add.php" method= "POST">
  Name: <input type="text" name="itemname">
  
  Stock: <input type="number" name="stock">
  Price: <input type="number" name="price">
  Category: <input type="number" name="catid">
 
  <input type="submit" name="submit" value="Insert Item">
  

</form>
</body>

</html>
