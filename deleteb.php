<?php
session_start();
if($_SESSION['uname']){

  include "connect.php";
  $id=$_GET['var'];
  $sql="DELETE  from websolblog where id='$id';";
  $result = mysqli_query($conn, $sql);
  header('Location:dashboard.php');










}
else{
  header('Location:admin.php');
}
