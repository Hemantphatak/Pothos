<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name="test";
// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password,$database_name);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['Login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repeat_password=$_POST['repeat password'];

  $sql_query="INSERT INTO login(email,password,repeat_password)
  VALUES ('$email','$password','$repeat_password')";

  if(mysqli_query($conn,$sql_query))
  {
    echo"LOGIN SUCCESSFULLY!!!";
  }
  else
  {
    echo "error:".$sql."".mysqli_error($conn);
  }
  mysqli_close($conn);

}

?>