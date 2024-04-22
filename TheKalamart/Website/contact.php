
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="styke3.css">
   <!-- Add font awesome CDN-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contact</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo/shortlogo.png">
   </head>
    <body>
     <nav>
       <!--<input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>-->
        <div class="logo"><a href="#"><img class="logo" src="img/logo/marathilogo.png"></a></div>
      <label for="btn" class="icon">
      <span class="fa fa-bars"></span>
      </label>
      <input class="inputa" type="checkbox" id="btn">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li>
      <label for="btn-1" class="show">Handmade</label>
      <a href="handmade.html">Handmade</a>
      <input class="inputa" type="checkbox" id="btn-1">
      <ul>
       <li><a href="handmade.html#Explosion Box">Explosion Box</a></li>
       <li><a href="handmade.html#Card">Card</a></li>
       <li><a href="handmade.html#Album">Album</a></li>
       <li><a href="handmade.html#Camera Album">Camera-Album</a></li>
       <li><a href="handmade.html#Envelop Albums">Envelop-Album</a></li>
       <li><a href="handmade.html#Scrapbook">Scrapbook</a></li>
      </ul>
      </li>
          <li>
      <label for="btn-2" class="show">Personalized</label>
      <a href="personalized.html">Personalized</a>
      <input class="inputa" type="checkbox" id="btn-2">
      <ul>
       <li><a href="personalized.html#T-shirt">T-shirt</a></li>
       <li><a href="personalized.html#Keychain">Keychain</a></li>
       <li><a href="personalized.html#Frames">Frames</a></li>
       <li><a href="personalized.html#Brown-Diary">Brown-Diary</a></li>
       <li><a href="personalized.html#Travel Accessories">Travel Accesrious</a></li>
       <li><a href="personalized.html#Diaries">Diaries</a></li>
       </ul>
      </li>
          <li><a href="contact.html">Contact</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="login.html">signup</a></li>
      <li>
         <i class="fa fa-shopping-cart" id="cart"></i>
      </li>
        </ul>
    </nav>
<hr>

 <?php 
                           

                            if(isset($_GET['success']))
                            {
                                $Message = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Message.'</div>';
                            }
                        
                        ?>
     
  <!-- contact section -->
        <section id="contact-section">
         
            <form action="process.php" method="POST" role="form" >
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="text" name="surname" placeholder="Last Name"><br>
              <input type="Email" name="email" placeholder="Email" required><br>
              <input type="text" name="phone" placeholder="phone no"><br>
              <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
              <button class="submit" name="btn-sumbit">Submit</button> 
            </form>  

            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
             
              </div>
            </div>
          </div>

          <div class="container-us">
           <h2>Contact Us</h2>
           <p>Email us and keep upto date,<br>
              with our latest post</p>
          <div class="contact-form">

               <!-- First grid -->
            <div>
              <i class="fa fa-map-marker"></i><span class="form-info">at-welshet,nagothane,roha, raigad</span><br>
              <i class="fa fa-phone" > </i><span class="form-info">  +91 7887713087</span><br>
              <i class="fa fa-envelope"></i><span class="form-info"> snehalsparange121@gmail.com</span>
            </div>
            
                <!-- second grid -->
        <div>        
        </section>
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
                 <a href="handmade.html">Handmade</a><br><br>
                 <a href="personalized.html">Personalize</a><br><br>
                 <a href="about.html">About</a><br><br>
                 <a href="contact.html">contact</a><br><br>
               </ul>
             </div>
           </div>
       
           <div class="footer-items">
             <h2>Greetings</h2>
             <div class="border">
               <ul class="footer-ul">
                 <a href="handmade.html#Explosion Box">Explosion-box</a><br><br>
                 <a href="handmade.html#scrapbook">Scrapbook</a><br><br>
                 <a href="handmade.html#Brown Diary">Brown diary</a><br><br>
                 <a href="handmade.html#Cards">cards</a><br><br>
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
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
       
        
    </body>
    