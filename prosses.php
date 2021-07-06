<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'base_control';
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn){
    die ("connection failed: ".mysql_connect_error());
}
echo"";



 if (isset($_POST['stop'])) {
 $stop = $_POST["stop"];
 echo"<br>";
 $my_query = "";
 
 $my_query = "select * from values_base_control WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query= "INSERT INTO values_base_control (stop) value('$stop')";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "Stop";
 }
 else {
	echo"ERROR:unable to past <br>";
}}


 else if (isset($_POST['backward'])) {
 $backward = $_POST["backward"];
 echo"<br>";
 $my_query = "";
 
 $my_query = "select * from values_base_control WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query= "INSERT INTO values_base_control (backward) value('$backward')";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "Backward";
 }
 else {
	echo"ERROR:unable to past <br>";
}}


 else if (isset($_POST['forward'])) {
 $forward = $_POST["forward"];
 echo"<br>";
 $my_query = "";
 
 $my_query = "select * from values_base_control WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query= "INSERT INTO values_base_control (forward) values('$forward')";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "Forward";
 }
 else {
	echo"ERROR:unable to past <br>";
}}


 else if (isset($_POST['left'])) {
 $left = $_POST["left"];
 echo"<br>";
 $my_query = "";
 
 $my_query = "select * from values_base_control WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query= "INSERT INTO values_base_control (left_side) values('$left')";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "Left";
 }
 else {
	echo"ERROR:unable to past <br>";
}}

 else if (isset($_POST['right'])) {
 $right = $_POST["right"];
 echo"<br>";
 $my_query = "";
 
 $my_query = "select * from values_base_control WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query= "INSERT INTO values_base_control (right_side) values('$right')";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "Right";
 }
 else {
	echo"ERROR:unable to past <br>";
}}


?>