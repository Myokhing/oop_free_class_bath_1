<?php 
include("../config/db_con.php");

// $data = [
//  'name' => $_POST['name'],
//  'email' => $_POST['email'],
//  'password' => $_POST['password'],
// ];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

if(isset($_POST['user_create']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
 $result = mysqli_query($link, $sql);
 if($result)
 {
  header("location: ../index.php");
 }else{
  echo "user create fail";
 }
}