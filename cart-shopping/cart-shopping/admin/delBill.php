<?php
  include "connect.php";

  if(isset($_GET['id_order'])){
    $id = $_GET['id_order'];
  }
  $sql = "DELETE FROM `order_detail` WHERE `id_order` = '$id'";
    if (mysqli_query($data, $sql)) {

      echo '<script language="javascript">alert("Xóa thành công!");
        		 window.location.href="http://localhost/cart-shopping/cart-shopping/admin/cart.php";</script>';
    }
     else {
      echo "Lỗi delete: " . mysqli_error($data);
    }
    //Đóng database
    mysqli_close($data);

?>