<?php
  include "connect.php";

  if(isset($_GET['id'])){
    $id   = $_GET['id'];
    $id_2 = $id;

  $sql    = mysqli_query($data, "DELETE FROM `products` WHERE `id_product`
          IN (SELECT `id` FROM `category` WHERE `id` = '$id')");
  if ($sql){
    $del  = mysqli_query($data, "DELETE FROM `category` WHERE `id` = '$id_2'");
    if ($del) {
      mysqli_close($data);
      echo '<script language="javascript">alert("Xóa thành công!");
      window.location.href="http://localhost/cart-shopping/cart-shopping/admin/cate.php";</script>';
    }
   }
   else {
        echo "Lỗi delete: " . mysqli_error($data);
    }
  }

  //Đóng database

?>