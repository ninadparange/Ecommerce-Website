<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['user_name'])){
        header('location: login.html');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select pt.id,pt.product_image,pt.product_name,pt.product_price from cart ct inner join product pt on pt.id=ct.product_id where ct.user_id='$user_id'";
    $user_products_result=mysqli_query($connection,$user_products_query) or die(mysqli_error($connection));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['product_price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo/Webp.net-resizeimage.png">
	<!--fontawesome-->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <!--google font-->
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
            }
  
            li {
                float: left;
            }
  
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
  
            li a:hover:not(.active) {
              background-color: #111;
            }

            able, td, th {  
            border: 1px solid #ddd;
            text-align: left;
            }

            table {
             border-collapse: collapse;
             width: 100%;   
            }

            th, td {
             padding: 15px;
            }
            
        </style>
    </head>
    <body>
        <div>
         
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Image</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($connection,$user_products_query) or die(mysqli_error($connection));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th> <img width="auto" src="<?php echo $row['product_image']?>" width="100" height="100"/></th><th><?php echo $row['product_name']?></th><th><?php echo $row['product_price']?></th>
                            <th><a href='cart_remove.php?product_id=<?php echo $row['id'] ?>'><button style="background-color:black; color:white;">Remove</button></a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="paytmk/kart.php?id=<?php echo $user_id?>" class="btn btn-primary"><button style="background-color:black; color:white;">Confirm Order</button></a></th>
                            <th><a href='index.php'><button style="background-color:black; color:white;">Back</button></a></th></tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            
        </div>
    </body>
</html>
