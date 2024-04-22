<?php 

    if(isset($_POST['btn-sumbit']))
    {
       $YourName = $_POST['Your Name'];
       $LastName = $_POST['Last Name'];
       $Email = $_POST['Email'];
	$phoneno = $_POST['phone no'];
       $Message = $_POST['Message'];

       if(empty($YourName) || empty($LastName) || empty($Email) || empty($phoneno) || empty($Message))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "sahilparange30@gmail.com";

           if(mail($to,$YourName,$Message,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>