<?php
error_reporting(0);
?>
<?php
include 'connection.php';
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "image/".$filename;
		
	

		// Get all the submitted data from the form
		$sql = "INSERT INTO item (image) VALUES ('$filename')";

		// Execute query
		mysqli_query($conn, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
$result = mysqli_query($conn, "SELECT * FROM item");
while($data = mysqli_fetch_array($result))
{

?>
<img src="<?php echo $data['Filename']; ?>">

<?php
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="imagestyle.css">

	
</head>
<head>
<title>Image Upload</title>
<div id="content">

<form method="POST" action="itemimage.php" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value=""/>
	
	<div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>
</form>
</div>
</body>
</html>
