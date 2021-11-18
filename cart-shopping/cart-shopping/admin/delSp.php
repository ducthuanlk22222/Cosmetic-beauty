<?php
  include "connect.php";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  $sql  = "DELETE FROM `products` WHERE `id_product`='$id'";

  if (mysqli_query($data, $sql)) {
    echo '<script language="javascript">alert("Xóa thành công!");
    window.location.href="http://localhost/cart-shopping/cart-shopping/admin/product.php";</script>';

  } else {
      echo "Lỗi delete: " . mysqli_error($data);
  }
  mysqli_close($data);
?>