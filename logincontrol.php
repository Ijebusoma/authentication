<?php
<include_once "db.php";
if (isset($_POST['submit'])) //check if user has clicked submit

{
  //Fetch all data from the form";
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT password FROM user_profile WHERE username = '$username' ";
$dbpwd = mysqli_query($dbconn,$query);
//encrypt password
$encpassword = hash('md5', '$password');
//compare encrypted password with password from db
if($dbpwd===$encpassword)
{
  //check if username matches before loggin in
  //decrypt password
  //check for password matching
  if
}

 ?>
