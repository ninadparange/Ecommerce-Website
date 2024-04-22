<?php
	session_start();
    require 'check_if_added.php'
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>theKalamart</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo/Webp.net-resizeimage.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styke3.css">
	<!--fontawesome-->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<!--link href="css/all.min.css" rel="stylesheet">
	<link href="css/fontawesome.min.css" rel="stylesheet">-->
  <!--google font-->
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>
  <body>
  <?php
	  	require 'header.php';
    ?>
  <hr>     


	  
<!---start add to cart------>
<div class="wrapper">
	<h1><a name="Explosion Box" >Explosion-Boxs</a></h1>

	<div class="img-area">
		<div class="single-img"><a href="product.html"><img src="img/handmade/e1.jpg"></a>
			<h2>Explosion-Box</h2>
            <h4>RS 2000</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=1" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>    
			
		</div>
		<div class="single-img"><img src="img/handmade/e2.jpeg" alt="">
			<h2>Explosion-Box</h2>
			<h4>RS 1500</h4>  
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=2" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>      
            
		</div>
		<div class="single-img"><img src="img/handmade/e3.jpeg" alt="">
			<h2>Explosion-Box</h2>
            <h4>RS 1500</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=3" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<!---start add to cart------>
<div class="wrapper">
	<h1><a name="Card">Cards</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/handmade/c1.jpeg" alt="">
			<h2>Card</h2>
            <h4>RS 450</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=4" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/c2.jpeg" alt="">
			<h2>Card</h2>
            <h4>RS 450</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=5" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
			
		</div>
		<div class="single-img"><img src="img/handmade/c3.jpeg" alt="">
			<h2>Card</h2>
            <h4>RS 450</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=6" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
	<h1><a name="Album">Albums</a> </h1>

	<div class="img-area">
		<div class="single-img"><img src="img/handmade/a1.jpeg" alt="">
			<h2>Explosion-Box</h2>
            <h4>RS 2000</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=7" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/a2.jpg" alt="">
			<h2>Explosion-Box</h2>
            <h4>RS 1500</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=8" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/a3.jpg" alt="">
			<h2>Explosion-Box</h2>
            <h4>RS 1500</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=9" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
	<h1><a name="Camera Album">Wooden-Albums</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/handmade/w1.jpeg" alt="">
			<h2>Customize Wooden-Album</h2>
            <h4>RS 2000</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=10" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/w2.jpeg" alt="">
			<h2>Wooden-Album</h2>
            <h4>RS 2000</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=11" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/w3.jpeg" alt="">
			<h2>Camera Wooden-Album</h2>
            <h4>RS 1000</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=12" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
	<h1><a name="Envelop Album">Envelops-Albums</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/handmade/en1.jpeg" alt="">
			<h2>Envelop-Card</h2>
            <h4>RS 450</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=13" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/en2.jpeg" alt="">
			<h2>Envelop-Album</h2>
            <h4>RS 550</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=14" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/en3.jpeg" alt="">
			<h2>Envelop-Album</h2>
            <h4>RS 450</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=15" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
	<h1><a name="Scrapbook">Scrapbooks
	</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/handmade/s1.jpeg" alt="">
			<h2>Scrapbook</h2>
            <h4>RS 1500</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=16" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/s2.jpeg" alt="">
			<h2>heart scrapbook</h2>
            <h4>RS 1000</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(17)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=17" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/handmade/s3.jpeg" alt="">
			<h2>scrapbook</h2>
            <h4>RS 2000</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart1_add.php?product_id=18" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>


       
       


       <!--footer start-->
	   <div class="footer">
		<div class="inner-footer">
	
			<div class="footer-items">
				<img src="img/logo/marathilogo.png">
				<p>We aim to achieve<br> the one-day delivery and<br> bring revolution all across.</p>
			</div>
	
			<div class="footer-items">
				<h2>Quick Links</h2>
				<div class="border">
					<ul class="footer-ul">
						<a href="#">Handmade</a><br><br>
						<a href="#">Personalize</a><br><br>
						<a href="#">About</a><br><br>
						<a href="#">contact</a><br><br>
					</ul>
				</div>
			</div>
	
			<div class="footer-items">
				<h2>Greetings</h2>
				<div class="border">
					<ul class="footer-ul">
						<a href="#">Explosion-box</a><br><br>
						<a href="#">Scrapbook</a><br><br>
						<a href="#">Brown diary</a><br><br>
						<a href="#">cards</a><br><br>
					</ul>
				</div>
			</div>
	
			
			<div class="footer-items">
				<h2>contct us</h2>
				<div class="border">
					<ul class="footer-ul">
						<li><i class="fas fa-map-marker-alt"></i> 1 xyz street ,new mumbai</li>
						<li><i class="fas fa-phone-alt"></i> 8652145973</li>
						<li><i class="far fa-envelope"></i>theKalamart@.com</li>
					</ul>
					<div class="socials-media">
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"> <i class="fas fa-phone-alt"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
						<a href="#"><i class="fab fa-facebook-f"></i></a>
					</div>
				</div>
			</div>
	
			<div class="footer-bottom">
				All Right reserved by &copy;theKalamart 2020
			</div>
	
	</div>
	</div>	
    
</body>
</html>