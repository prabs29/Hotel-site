<?php
 $servername ="localhost";
 $username ="root";
 $password ="";
 $dbname ="hotel2";

 $conn = mysqli_connect($servername,$username,$password,$dbname);

 if($conn)
 {
 	echo "connection ok";
 }
 else
 {
 	echo "connection failed";
 }
?>