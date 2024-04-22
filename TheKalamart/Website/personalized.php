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
<h1><a name="T-shirt">T-shirts</a></h1>
<div class="img-area">
		<div class="single-img"><img src="img/personalized/t1.jpg" alt="">
			<h2>Printed T-shirt</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(19)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=19" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>    
			
		</div>
		<div class="single-img"><img src="img/personalized/t2.jpg" alt="">
			<h2>T-shirt</h2>
			<h4>RS 2000</h4>  
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(20)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=20" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>      
            
		</div>
		<div class="single-img"><img src="img/personalized/t3.jpg" alt="">
			<h2>Printed T-shirt</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(21)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=21" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<!---start add to cart------>
<div class="wrapper">
<h1><a name="Keychain">Keychains</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/personalized/key1.jpg" alt="">
			<h2>Wooden Keychain</h2>
            <h4>RS 150</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=4" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/key2.jpg" alt="">
			<h2>Keychain</h2>
            <h4>RS 150</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=5" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
			
		</div>
		<div class="single-img"><img src="img/personalized/key3.jpg" alt="">
			<h2>Krychain</h2>
            <h4>RS 150</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=6" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
<h1><a name="Frames">Frames</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/personalized/frame1.jpg" alt="">
			<h2>Photo Frame</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=7" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/frame2.jpg" alt="">
			<h2>Photo Frame</h2>
            <h4>RS 350</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=8" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/frame3.jpg" alt="">
			<h2>Photo Frame</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=9" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
<h1><a name="Brown-Diary">Brown-Diary</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/personalized/brown-diaries1.jpg" alt="">
			<h2>Brown-Diaries</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=10" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/brown-diaries2.jpg" alt="">
        <h2>Brown-Diaries</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=11" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/brown-diaries3.jpg" alt="">
            <h2>Brown-Diaries</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=12" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
<h1><a name="Travel Accessories">Travel-Accessories</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/personalized/travel1.jpg" alt="">
        <h2>Large Bag</h2>
		<h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=13" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/travel2.jpg" alt="">
			<h2>Bag</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=14" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/travel3.jpg" alt="">
			<h2>Bottle</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=15" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
	</div>
</div>

<div class="wrapper">
<h1><a name="Diaries">Diaries</a></h1>

	<div class="img-area">
		<div class="single-img"><img src="img/personalized/diaries1.jpg" alt="">
			<h2>Printed-Diaries</h2>
            <h4>RS 850</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=16" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/diaries2.jpg" alt="">
			<h2>Diary</h2>
            <h4>RS 550</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(17)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=17" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
                                                <?php
                                            }
                                        }
                                        ?>   
		</div>
		<div class="single-img"><img src="img/personalized/diaries3.jpg" alt="">
			<h2>Diary</h2>
            <h4>RS 350</h4>
            <?php if(!isset($_SESSION['user_name'])){  ?>
                                        <p><a href="login.html" role="button" class="block"><p><button>Buy Now</button></p></a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
                                                echo '<a href="#" class=block disabled><p><button>Added to cart</button></p></a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?product_id=18" class="block" name="add" value="add" class="btn btn-block btr-primary"><p><button>ADD TO CART</button></p></a>
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