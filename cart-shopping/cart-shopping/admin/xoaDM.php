<?php
  include "connect.php";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  $sql = "DELETE FROM `category` WHERE `id`='$id'";
  if (mysqli_query($data, $sql)) {
    header("Location:http://localhost/cart-shopping/cart-shopping/admin/cate.php");

  } else {
      echo "Lỗi delete: " . mysqli_error($data);
  }
  //Đóng database
  mysqli_close($data);
?>