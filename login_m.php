<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password FROM admin WHERE email=? AND password=? ";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$stmt -> bind_result($username, $password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
	$query1 = "SELECT * FROM admin WHERE email = '$username'";
	$ses_sql = mysqli_query($conn, $query1);
	$row = mysqli_fetch_assoc($ses_sql);
	$user =$row['email'];
	$_SESSION['login_user1']=$username;
	$_SESSION['mmail']=$username;// Initializing Session
	$_SESSION['id']=$id;// Initializing Session
	header("location: add_details.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>