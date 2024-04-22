<?php
	session_start();
	?>
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
	  	<!--preloader-->

	<!--stop preloader-->
    <nav>
     <!--<input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>-->
      <div class="logo"><a href="#"><img class="logo" src="img/logo/marathilogo.png"></a></div>
	  <label for="btn" class="icon">
	  <span class="fa fa-bars"></span>
	  </label>
	  <input type="checkbox" id="btn">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li>
		<label for="btn-1" class="show">Handmade</label>
		<a href="handmade.php">Handmade</a>
		<input type="checkbox" id="btn-1">
		<ul>
		 <li><a href="handmade.php#Explosion Box">Explosion Box</a></li>
		 <li><a href="handmade.php#Card">Card</a></li>
		 <li><a href="handmade.php#Album">Album</a></li>
		 <li><a href="handmade.php#Camera Album">Wooden-Album</a></li>
		 <li><a href="handmade.php#Envelop Albums">Envelop-Album</a></li>
		 <li><a href="handmade.phpss#Scrapbook">Scrapbook</a></li>
		</ul>
		</li>
        <li>
		<label for="btn-2" class="show">Personalized</label>
		<a href="personalized.php">Personalized</a>
		<input type="checkbox" id="btn-2">
		<ul>
		 <li><a href="personalized.php#T-shirt">T-shirt</a></li>
		 <li><a href="personalized.php#Keychain">Keychain</a></li>
		 <li><a href="personalized.php#Frames">Frames</a></li>
		 <li><a href="personalized.php#Brown-Diary">Brown-Diary</a></li>
		 <li><a href="personalized.php#Travel Accessories">Travel Accesrious</a></li>
		 <li><a href="personalized.php#Diaries">Diaries</a></li>
		 </ul>
		</li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="cart.php">
	         <i class="fa fa-shopping-cart" id="cart"></i></a></li>
		<?php
            if(!isset($_SESSION['user_name'])){
        ?>
             <li><a href="login.html">signup</a></li>
         <?php
            }else{
        ?>
		    
             <li><a href="logout.php">Log out</a></li>
      </ul>
      <?php
            }
            ?>
	</nav>
	


	<hr style="height: 2px; color: red; background-color: red;">
	<header style="background-image: url(img/gift.jpg);">
		<h1>welcome to greetings shopping</h1>
		<p>Beautiful Greetings<br>
	</header>


	<!--handmade-gifts-->
	<div class="main">
		<h2>Handmade Gifts</h2>
		<hr color="red" style="width:20%;text-align:left;margin-left:40%">
		<div class="gallery">
		  <div class="img">
			<a href="handmade.php" target="handmade.php">
				<img  src="img/handmade/en1.jpeg" alt="">
			</a>
		</div>

		  <div class="img">
			<a href="handmade.php" target="handmade.php">
		   <img src="img/handmade/e3.jpeg" alt="">
		</a>
		</div>

		 <div class="img">
			<a href="handmade.php" target="handmade.php">
		   <img src="img/handmade/s2.jpeg" alt="">
		</a>
		</div>

		 <div class="img">
			<a href="handmade.php" target="handmade.php">
		   <img src="img/handmade/c2.jpeg" alt="">
		</a>
		</div>
		</div>
	   </div>

	   <!--handmade stop-->

	   <!--personalized-gifts-->
	   <div class="main">
		<h2>Personalized Gifts</h2>
		<hr color="red" style="width:20%;text-align:left;margin-left:40%">
		<div class="gallery">
		  <div class="img">
			<a href="personalized.html" target="personalized.html">
			<img  src="img/personalized/brown-diaries2.jpg" alt="">
		</a>
		
		  </div>
		  <div class="img">
			<a href="personalized.php" target="personalized.php">
		   <img src="img/personalized/diaries3.jpg" alt="">
		</a>
		
		 </div>
		 <div class="img">
			<a href="personalized.php" target="personalized.php">
		   <img src="img/personalized/key1.jpg" alt="">
		</a>
		
		 </div>
		 <div class="img">
			<a href="personalized.php" target="personalized.php">
		   <img src="img/personalized/key2.jpg" alt="">
		</a>
		
		 </div>
		</div>
	   </div>
	   <!--stop personalized-gifts-->
	  

	<!--start footer-->

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
						<a href="handmade.php">Handmade</a><br><br>
						<a href="personalized.php">Personalize</a><br><br>
						<a href="about.php">About</a><br><br>
						<a href="contact.php">contact</a><br><br>
					</ul>
				</div>
			</div>
	
			<div class="footer-items">
				<h2>Greetings</h2>
				<div class="border">
					<ul class="footer-ul">
						<a href="handmade.php#Explosion Box">Explosion-box</a><br><br>
						<a href="handmade.php#Scrapbook">Scrapbook</a><br><br>
						<a href="personalized.php#Brown-Diary">Brown diary</a><br><br>
						<a href="handmade.php#Card">cards</a><br><br>
					</ul>
				</div>
			</div>
	
			
			<div class="footer-items">
				<h2>contct us</h2>
				<div class="border">
					<ul class="footer-ul">
						<li><i class="fas fa-map-marker-alt"></i> 1 xyz street ,new mumbai</li>
						<li><i class="fas fa-phone-alt"></i> 8652145973</li>
						<li><i class="far fa-envelope"></i>thekalamart@gmail.com</li>
					</ul>
					<div class="socials-media">
						<a href="https://www.instagram.com/thekalamart_"><i class="fab fa-instagram"></i></a>
						<a href="8652144974"> <i class="fas fa-phone-alt"></i></a>
						<a href="https://www.youtube.com/channel/UCArlD6o-JXBpQipSAXnvnFg"><i class="fab fa-youtube"></i></a>
						<a href="https://www.facebook.com/thekalaart_"><i class="fab fa-facebook-f"></i></a>
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
