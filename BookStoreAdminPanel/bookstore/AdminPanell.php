<!DOCTYPE html>
<html>
<head>
<title> Admin Panel </title>
<style>
body{   
    margin:0px;
    border:0px;
}
#header{
	width: 100%;
	height: 120px;
	background:#A0522D;
	color: white;
	
}
#sidebar{
    width: 300px;
    height: 2000px;
    background:#F5DEB3; 
    float:left;
}
#data{
    height:2000px;
    background:#DEB887;
    color: white;
    font-family: Helvetica;
    font-size: 15px;


}
#adminLogo{
    background: white;
    border-radius: 100px;


}

ul li{
    padding: 20px;
    border-bottom: 2px solid grey;
}
ul li:hover {
    background:#DEB887;
    color:white;

}

</style>
</head>

<body>
<div id="header">
<center><img src="admin_icon.png" alt="adminLogo" id="adminLogo"> 
<hr3> This is the administration panel!</hr3></center>
</div>

<div id="sidebar">
<ul>
<li> <a href= "add.php" target="_blank" > Insert Item </a></li>
<li> <a href= "itemimage.php" target="_blank" > Insert Book Cover </a></li>
<li> <a href= "addcustomer.php" target="_blank" > Insert Customer </a></li>
<li> <a href= "addcourrier.php" target="_blank" > Insert Courrier </a></li>
<li> <a href= "addorder.php" target="_blank" > Insert Order </a></li>
<li> <a href= "addcategory.php" target="_blank" > Insert Category </a></li>
<li> <a href= "delete.php" target="_blank" >Delete Item</a></li>
<li> <a href= "deletecustomer.php" target="_blank" >Delete Customer</a></li>
<li> <a href= "deletecourrier.php" target="_blank" >Delete Courrier</a></li>
<li> <a href= "deleteorder.php" target="_blank" >Delete Order</a></li>
<li> <a href= "deletecategory.php" target="_blank" >Delete Category</a></li>
<li> <a href= "selecttrial.php" target="_blank" >Select Item </a></li>
<li> <a href= "selectcustomer.php" target="_blank" >Select Customer </a></li>
<li> <a href= "selectorder.php" target="_blank" >Select Order </a></li>
<li> <a href= "selectcourrier.php" target="_blank" >Select Courrier </a></li>
<li> <a href= "selectcategory.php" target="_blank" >Select Category </a></li>
</ul>
</div>

<div id="data">
<br><br>

<?php
    error_reporting(0);
    include 'connection.php';
   
    $sql_item = "SELECT * FROM item";
    /*$sql_cust = "SELECT * FROM customer";
    $sql_order = "SELECT * FROM orderitem";
    $sql_cour = "SELECT * FROM courrier";
    $sql_cat = "SELECT * FROM category";*/
    
    $result1 = mysqli_query($conn, $sql_item);
    /*$result2 = mysqli_query($conn, $sql_cust);
    $result3 = mysqli_query($conn, $sql_order);
    $result4 = mysqli_query($conn, $sql_cour);
    $result5 = mysqli_query($conn, $sql_cat);*/
   

if (mysqli_num_rows($result1)>0){
   echo "<h3><center> Book Data Available!<center></h3>";
     while($row = mysqli_fetch_assoc($result1)){
           
        echo " ID: ". $row["iid"]."<br>"."Name: " . $row["iname"]. "<br>"."Image:".$row["image"]. "<br>" . "Stock: ". $row["stock"]. "<br>" . "Price: " . $row ["price"]. "<br>". "Category: " . $row ["catid"]. "<br>"; 
        }

  
} 
/*else if(mysqli_num_rows($result2)>0){
    echo "<h3><center> Customer Data Available!<center></h3>";
     while($row = mysqli_fetch_assoc($result2)){
           
        echo " ID: ". $row["cid"]."<br>"."Name: " . $row["csname"]. "<br>". "Email: ". $row["email"]. "<br>" . "Phone: " . $row ["phone"]. "<br>". "Address: ". $row ["del_address"]. "<br>"; 
        }

}
else if(mysqli_num_rows($result3)>0){
    echo "<h3><center> Order Data Available!<center></h3>";
     while($row = mysqli_fetch_assoc($result3)){
           
        echo " ID: ". $row["oid"]."<br>"."Amount: " . $row["amount"]. "<br>". "Status: ". $row["stat"]. "<br>" . "Order Date: " . $row ["ordate"]. "<br>";
        }

}
else if(mysqli_num_rows($result4)>0){
    echo "<h3><center> Courrier Data Available!<center></h3>";
     while($row = mysqli_fetch_assoc($result4)){
           
        echo " ID: ". $row["coid"]."<br>"."Courrier Name: " . $row["coname"]. "<br>". "Phone: ". $row["cophone"]. "<br>";
        }

}
else if(mysqli_num_rows($result5)>0){
    echo "<h3><center> Category Data Available!<center></h3>";
     while($row = mysqli_fetch_assoc($result5)){
           
        echo " ID: ". $row["cgid"]."<br>"."Category: " . $row["cname"]. "<br>";
        }

}*/




else{
    echo "<h3><center> No item data found! <center></h3>";
  }
?>

</div>
</body>
</html>