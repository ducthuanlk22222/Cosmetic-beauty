<?php

  $host       = 'localhost';
  $user       = 'root';
  $password   = '';
  $db         = 'admin';

  session_start();
  $data = mysqli_connect($host, $user, $password, $db);

if($data === false){
  die("connection failed!");
}

if(isset($_POST["username"]))
{
  $username  = $_POST["username"];
  $password  = $_POST["password"];

  $sql = "SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";

  $result   = mysqli_query($data, $sql);
  $row      = mysqli_fetch_array($result);

  if ($row["usertype"]=="admin")
  {
    $_SESSION["username"]=$username;
    header("Location:http://localhost/cart-shopping/cart-shopping/admin/index.php");

  }
  elseif ($row["usertype"]=="user")
  {
    $_SESSION["username"]=$username;
    header("Location:http://localhost/cart-shopping/cart-shopping/");

  }
  else
  {
    echo '<script language="javascript">alert("Tài khoản hoặc mật khẩu không đúng!");
         window.location.href="http://localhost/LoginAdmin/";</script>';
  }
}
?>
