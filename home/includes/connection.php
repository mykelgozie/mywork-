<?php   

 $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
 if (!$connection ){

 	die("Connection Failed: <br/>".mysql_error());

 }

 $db_select  = mysqli_select_db($connection, DB_NAME);
 if (!$db_select){

 	die("Database Selection Failed:<br/>".mysql_error());
 }



?>