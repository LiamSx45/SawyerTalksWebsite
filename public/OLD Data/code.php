<?php
session_start();
include('include/db.php');
if (isset($_POST['register'])) {
   
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $song = $_POST['song'];
  $opt = $_POST['opt'];

$data =[
	'fullname' => $fullname,
	'email' => $email,
	'pass' => $pass,
	'song' => $song,
	'opt' => $opt
];
$ref ="register/";
$postdata = $database->getReference($ref)->push($data);
 if($postdata){
 $_SESSION['status']="Data Inserted";
 header("Location:updated-register.php");

 }
 else{
   $_SESSION['status']="Data Not Inserted";
 header("Location:updated-register.php");
 }
 }
?>