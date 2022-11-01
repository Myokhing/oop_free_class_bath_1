<?php 
include("config/db_con.php");
if(isset($_GET['id']))
{
 $id = $_GET['id'];
 $sql = "DELETE FROM users WHERE id = $id";
 $result = mysqli_query($link, $sql);
 if($result)
 {
  header("location: index.php");
 }else
 {
  echo "cannot user delete";
 }
}