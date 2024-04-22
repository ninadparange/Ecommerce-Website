<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thekalamart";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user_name = $_POST["user_name"];
$phone_no = $_POST["phone_no"];
$Email_Id = $_POST["email_id"];
$password = $_POST["password"];
$Address = $_POST["address"];

$sql = "insert into register(user_name,phone_no,Email_Id,password,Address)
VALUES('$user_name','$phone_no','$Email_Id','$password','$Address')";
if(mysqli_query($conn,$sql)){
  echo "<h2>data inserted successfully</h2>";
}else{
  echo "error: could not able to execute $sql.".mysqli_error($conn);
}

$conn->close();

?>
