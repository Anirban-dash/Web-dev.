<?php
require 'common.php';
$user_id=$_SESSION['id'];
$query="SELECT u.id,name,price from items i INNER JOIN users_items u where i.id=u.item_id and u.user_id='$user_id'";
$result= mysqli_query($con, $query) or die(mysqli_error($con)); 
$sum=0;
$i=1;
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
	        <div class="n">
                 <?php
                require 'header.php';      
                ?>
            </div>
        
            
                <div class="col-sm-offset-4 col-sm-4">
                    <table class="table table-stripe table-responsive table-hover">
                        <thead>
                            
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>  </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row= mysqli_fetch_array($result)) {?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><a href="cart-remove.php?id={$row['id']}" class='remove_item_link'> Remove</a></td>
                            </tr>
                            <?php $sum=$sum+$row['price'];
                            $i=$i+1;
                             
                            } ?>
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td><?php echo $sum ?></td>
                                <td><a href="success.php"><button class="btn btn-primary">Place Order</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
          
            
             <?php
               require 'footer.php';
               ?>
   

    </body>
</html>

