<?php
  include "connect.php";

  if(isset($_GET['id'])){
    $id     = $_GET['id'];
    $id_2   = $id;

    $sql    = mysqli_query($data, "DELETE FROM `order_detail` WHERE `id_order`
              IN (SELECT `id_order` FROM `orders` WHERE `id_order` = '$id')");

    if ($sql) {
      $del  = mysqli_query($data, "DELETE FROM `orders` WHERE id_order = '$id_2'");

      if ($del) {
        
        echo '<script language="javascript">alert("Xóa thành công!");
        window.location.href="http://localhost/cart-shopping/cart-shopping/admin/cart.php";</script>';
      }
    }
     else {
      echo "Lỗi delete: " . mysqli_error($data);
    }
  }
  mysqli_close($data);
?>
