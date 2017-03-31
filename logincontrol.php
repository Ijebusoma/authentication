<?php
include_once "db.php";
if (isset($_POST['submit'])) //check if user has clicked submit

{

  //Fetch all data from the form";
$username = $_POST['username'];
$password = hash('md5', $_POST['password']);

$query = "SELECT * FROM user_profile WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($dbconn, $query);
$count = mysqli_num_rows($result); //Count the rows received



if($count == 1) //Check if a row with that data exists in the db
{
echo "successfully logged in";
    }else {
  echo "invalid username or password";
}
}


 ?>
