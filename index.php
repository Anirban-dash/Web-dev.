<?php
require 'common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
	<title>Lifestyle Store</title>
        <style>
            .foot{
                position: fixed;
            }
        </style>

</head>
<body>
	        <?php
                require 'header.php';
                ?>
            <div id="banner_image">
            	<div class="container">
            		<center>
            		<div id="banner_content">
            			<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            		</div>
            	</center>
            	</div>
            </div>

   <?php
   require 'footer.php';
   ?>

</body>
</html>