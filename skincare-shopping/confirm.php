<?php
    // include "function-cart.php";
    // include "server/sql_connection.php";
    include "confirm-function.php";

    $order_id = "";

    $count = 0;
    // $id_number = random_int(100, 999);
    $query_sql = "SELECT * FROM orders";
    $result = mysqli_query($connection, $query_sql);
    // $sql_query = mysqli_fetch_assoc($result);

    if ($result == True) {
        foreach($result as $row) {
            $temp = substr($row['id_order'], 3, 6);
            if ($temp == date("dmy")) {
                $count++;
            }
        }

        // $id_number2 = random_int(100, 999);
        // $order_id = "ID" . $order_type . date("dmy") . $id_number2;
        if ($count < 10) {
            $order_id = date("dmy") . "00" . $count;
        }
        else if ($count < 100) {
            $order_id = date("dmy") . "0" . $count;
        }
        else {
            $order_id = date("dmy") . $count;
        }
    }
    else {
        // $id_number2 = random_int(100, 999);
        // $order_id = "ID" . $order_type . date("dmy") . $id_number2;
        if ($count < 10) {
            $order_id = date("dmy") . "00" . "1";
        }
    }

    $query_sql2 = "SELECT * FROM order_detail WHERE id_order LIKE '%$order_id' LIMIT 1";
    $sql2 = mysqli_query($connection, $query_sql2);

    $result_sql2 = mysqli_fetch_array($sql2);

    $id_order = $result_sql2['id_order'];

    // echo count($products);
    template_header("CONFIRM", "index.php?page=home#about", "index.php?page=home#testimonial", "index.php?page=product");
?>
<style>
    <?php
        include "style/style-cart.css";
    ?>
</style>

<br>
<br>
<br>
<br>
<br>
<hr>

<div class="container container-confirm">
    <h1>Cảm ơn bạn đã đặt hàng tại COSMETIC</h1>
    <h2>Thông tin hóa đơn</h2>

    <p style="margin-top:.5rem;"><strong> Order ID: </strong><?=$id_order?></p>
    <?php
        $sum_price = 0;
        $query_2 = "SELECT * FROM order_detail WHERE id_order = '$id_order'";
        $result_2 = mysqli_query($connection, $query_2);

        foreach($result_2 as $row):
    ?>
    <div class="confirm-text">
        <?php
            $id_pr = $row['id_product'];
            $line = "SELECT * FROM products WHERE id_product = '$id_pr'";
            $query_line = mysqli_query($connection, $line);

            $fetch = mysqli_fetch_array($query_line);
            $prName_onSCreen = $fetch['name'];
            $sum_price += $row['price'];
        ?>
        <p> <strong> Tên sản phẩm: </strong><?=$prName_onSCreen?></p>
        <img src="http://localhost/cart-shopping/cart-shopping/uploads/<?=$fetch['image']?>" alt="<?=$id_pr?>">
        <p> <strong> Số lượng: </strong><?=$row['quantity']?></p>
        <p> <strong> Giá: </strong><?=$row['price']?> VND</p>
    </div>
    <?php endforeach;?>
    <p> <strong> Tổng tiền: </strong><?=$sum_price?></p>
    <a class="confirm__back" href="index.php?page=home">
        <button type="button" name="" value=""> Quay về trang chủ </button>
    </a>
    <a class="confirm__back" href="index.php?page=products">
        <button type="button" name="" value=""> Quay về trang sản phẩm </button>
    </a>
</div>

<br>
<br>
<br>
<br>
<hr>

<?php
    template_footer();
?>