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
	<title>Log In</title>
         <style>
            .foot{
                position: fixed;
            }
        </style>
</head>
<body>
    <div class="n">
		  <?php
                require 'header.php';
                ?>
            </div>         
            <div class="col-md-offset-4 col-md-4">
	            <div class="panel panel-primary">
	            	<div class="panel-heading">
	            		LOGIN
	            	</div>
	            	<div class="panel-body">
                            <form method="POST" action="login_submit.php">
	            		<div class="text-warning">
	            			<p>Login to make a purchase</p>
	            		</div>
	            		<div class="form-group">
                                    <label for="email">Email ID</label>
                                    <input type="email" name="email" id="email" class="form-control" required="true">
                                        
	            		</div>
	            		<div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required="true">
	            		</div>
                                <button type="submit" class="btn btn-primary">Login</button>
	            		<div class="panel-footer">
	            			<p>Don't have an account?<a href="signup." active>Register</a></p>
	            		</div>
                                
                            </form>
	            	</div> 
	            </div>
	        </div>  
	    
	        <?php
   require 'footer.php';
   ?>
</body>
</html>

