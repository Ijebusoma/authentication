<?php
<include_once "db.php";
echo "<p> You have been successfully registered, please login </p>";
<html>
<head>
<body>

<form action = "logincontrol.php" method="post">
<input type = 'text' name = "username">
<input type = 'password' name = "password">
<input type = "submit" name = "submit" id = "submit">
</form>
</body>

</head>
</html>
 ?>
