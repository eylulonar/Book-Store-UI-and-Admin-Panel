<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="filterstyle.css">

	
</head>
<body>
    <style> 
  input[type=submit] {
  background-color: #DA70D6;
  border: none;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
button[type=submit] {
  background-color: #DA70D6;
  border: none;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

</style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <center><h2>Select Category</h2></center>
                    </div>
                </div>
            </div>

            <!-- Brand List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>
                                <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <center><h3>Selection</h3></center>
                            <hr>
                            <?php
                                include 'connection.php';

                                $cat_query = "SELECT * FROM category";
                                $cat_query_run  = mysqli_query($conn, $cat_query);

                                if(mysqli_num_rows($cat_query_run) > 0)
                                {
                                    foreach($cat_query_run as $catlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['cats']))
                                        {
                                            $checked = $_GET['cats'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="cats[]" value="<?= $catlist['cgid']; ?>" 
                                                    <?php if(in_array($catlist['cgid'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $catlist['cname']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Item Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            if(isset($_GET['cats']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['cats'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT * FROM category WHERE cgid IN ($rowbrand)";
                                    $products_run = mysqli_query($conn, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                                <div class="col-md-4 mt-3">
												<br>
                                                    <div class="border p-2">
                                                        <h4><?= $proditems['cname']; ?></h4>
                                                    </div>
													</br>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $products = "SELECT * FROM category";
                                $products_run = mysqli_query($conn, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $proditems) :
                                        ?>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <h4><?= $proditems['cname']; ?></h4>
                                                </div>
                                            </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                        ?>
						
					
                    </div>
                </div>
            </div>
        </div>
		<br>  </br>
						<form method="POST" action="welcome.php">
							<input name="form" type="submit" value="Back"/>
							
					</form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>