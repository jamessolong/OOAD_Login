<?php


session_start();
mysqli_connect("localhost","root","");
mysqli_select_db("demo");

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


$strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['usernametxt'])."'

and password = '".mysql_real_escape_string($_POST['passwordtxt'])."'";

$objQuery = mysqli_query($strSQL);

$objResult = mysqli_fetch_array($objQuery);

if(!$objResult){
  header("location:admin_page.php");
}
?>











