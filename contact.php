<?php
  $name=$_POST['name'];
   $visitor_email =$_POST['email'];
   $visitor_subject =$_POST['subject'];
   $message =$_POST['message'];

// Create connection
$conn = mysqli_connect("localhost","root","9850","contact");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into contactme(name,email,subject,message)
VALUES ('".$name."','".$visitor_email."','".$visitor_subject."','".$message."')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>