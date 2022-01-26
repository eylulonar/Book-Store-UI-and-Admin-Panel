<html>
<head>

<?php

include 'connection.php';
error_reporting(0);
$name= $_POST['itmname'];
$sql="SELECT * FROM item WHERE iid=25";
if($result=mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<item>"."<br>";
            echo "<tr>"."<br>";
                echo "<th>iid</th>"."<br>";
                echo "<th>iname</th>"."<br>";
                echo "<th>stock</th>"."<br>";
                echo "<th>price</th>"."<br>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>"."<br>";
                echo "<td>" . $row['iid'] . "</td>"."<br>";
                echo "<td>" . $row['iname'] . "</td>"."<br>";
                echo "<td>" . $row['stock'] . "</td>"."<br>";
                echo "<td>" . $row['price'] . "</td>"."<br>";
            echo "</tr>";
        }
        echo "</item>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}





if ($_POST['submit']) {
    if (mysqli_query($conn, $sql)){
        echo "Data is selected successfully.";
    }
}
else {
    echo "Something went wrong!";
}



?>
</head>
<body>

<form action ="select.php" method= "POST">

 <h4> Enter id to select the item. </h4>
 ID: <input type="text" name="itmname">
<input type="submit" name="submit" value="Select Item">

</form>

</body>

</html>