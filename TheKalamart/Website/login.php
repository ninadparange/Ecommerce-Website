<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'thekalamart');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}else{
if (isset($_POST['user_name']) and isset($_POST['password'])){
	
  // Assigning POST values to variables.
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  
  // CHECK FOR THE RECORD FROM TABLE
  $query = "SELECT * FROM `register` WHERE user_name='$user_name' and Password='$password'";
   
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);
  
  if ($count == 1){
  
    $row=mysqli_fetch_array($result);
        session_start();
        $_SESSION['user_name']=$user_name;
        $_SESSION['id']=$row['id'];  //user id
        header('location: index.php');
  }else{
   echo  "wrong username";
  }
  }
}
  ?>