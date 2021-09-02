<?php
require 'common.php';
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
		@media(min-width: 1440px){
			.foot{
				position: fixed;
			}
		}
	</style>

</head>
<body>
    <div style="margin-bottom:60px;">
		  <?php
                require 'header.php';
                ?>
            </div>   
             <div class="container">
            	<div class="row">
            		<div class="col-sm-4">
                            <form method="POST" action="signup_submit.php">
            				<h3>Sign Up</h3><br>
	               			<div class="form-group">
	               				<label for="fullname">Full Name</label>
                                                <input type="text" name="fullname" id="fullname" class="form-control" required="true">
	            			</div>
	            			<div class="form-group">
	            				<label for="email">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" required="true">
	            			</div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                                   <input type="password" name="password" id="password" class="form-control">
                                        </div>
	            			<div class="form-group">
	               				<label for="Phone">Contact Number</label>
                                                <input type="tel" name="phone" id="phone" class="form-control" required="true">
	            			</div>
	            			<div class="form-group">
	               				<label for="city">City</label>
                                                <input type="text" name="city" id="city" class="form-control" required="true">
	            			</div>
	            			<div class="form-group">
	               				<label for="address">Full Address</label>
                                                <textarea name="address" id="address" class="form-control" required="true" rows="3" cols="50"></textarea>
	            			</div>
                                        <button type="submit" class="btn btn-default btn-primary btn-block">Submit</button>
            			</form>
            		</div>
            		
            	</div>
            </div>

	     
	    	        <?php
   require 'footer.php';
   ?>
	     
</body>
</html>



