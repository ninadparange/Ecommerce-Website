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
		 <li><a href="handmade.php#Scrapbook">Scrapbook</a></li>
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
		<li><a href="about.php">About</a></li>
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