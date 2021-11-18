<?php
    template_header("CHECK ORDER", "index.php?page=home#about", "index.php?page=home#testimonial", "index.php?page=products");
    include "server/sql_connection.php";

    if (isset($_POST['check_order'])){

        $phone_number = $_POST['phone-txt'];

        $query_sqlLine = "SELECT * FROM orders WHERE phone_number = '$phone_number' ORDER BY date_order ASC";
        $query_exec = mysqli_query($connection, $query_sqlLine);

        // $fetch_sql = mysqli_fetch_array($query_exec);
        // $customer_orders = $fetch_sql['id_order'];
        // header("location: index.php?page=result");
        // exit;
    }
?>

<br>
<br>
<br>
<br>
<br>
<hr>
<style>
        <?php
            include "style/style-cart.css";
        ?>
</style>
<div class="container">
    <h1>Đơn hàng có số điện thoại: <?=$phone_number?></h1>
    <?php
        $count = 0;
        foreach($query_exec as $row){
          $count++;
        }

        if ($count == 0) {
          ?>
          <div>
            <p>Đã có lỗi xảy ra mời bạn thử lại</p>
            <div class="back">

                <a href="index.php?page=home">
                  <button class="btn-home">Quay về trang chú</button>
                </a>
             
              
                <a href="index.php?page=check-orders">
                  <button class="btn-DH">Kiểm tra lại đơn hàng</button>
                </a>
            </div>
            
          </div>
        <?php
        }
        else{
        foreach($query_exec as $row):
            $subtotal_price = 0;
            $IDorder = $row['id_order'];
    ?>
    
    

    <table>
        <tr>
            <td><?=$IDorder?></td>
            <td></td>
            <td></td>
            <td><?=$row['date_order']?></td>
            <td><button class="<?=$row['id_order']?>" onclick="reveal(<?=$row['id_order']?>, icon_<?=$row['id_order']?>)"><i id="icon_<?=$row['id_order']?>" class="bx bxs-down-arrow"></i></button></td>
        </tr>
        <table id="<?=$row['id_order']?>" class="hidden">
            <tr>
                <td></td>
                <td>Mã sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng sản phẩm</td>
                <td>Giá</td>
            </tr>
            <?php                
                $query_2nd = "SELECT * FROM order_detail WHERE id_order = '$IDorder'";
                $exec_query = mysqli_query($connection, $query_2nd);
                foreach ($exec_query as $product):
                    $subtotal_price += $product['price'];
            ?>
                <tr>
                    <?php
                        $product_get = $product['id_product'];
                        $select_product = "SELECT * FROM products WHERE id_product = '$product_get'";
                        $query_select = mysqli_query($connection, $select_product);
                        
                        $fetch_select = mysqli_fetch_array($query_select);
                    ?>
                    <td>
                        <img src="http://localhost/cart-shopping/cart-shopping/uploads/<?=$fetch_select['image']?>" alt="<?=$product_get?>">
                    </td>
                    <td><?=$product_get?></td>
                    <td><?=$fetch_select['name']?></td>
                    <td><?=$product['quantity']?></td>
                    <td><?=$product['price']?> VND</td>
                </tr>
            <?php endforeach;?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Giá đơn hàng: </td>
                <td><?=$subtotal_price?></td>
            </tr>
        </table>
    </table>
    <?php endforeach; }?>
</div>

<script>
    function reveal(id, id_2) {
        console.log(id_2);

    if(id.classList.contains("hidden")) 
    {
        id_2.classList.remove("bxs-down-arrow");
        id_2.classList.add("bxs-up-arrow");

        id.classList.add("acitve");
        id.classList.remove("hidden");   
    } else{
        id.classList.add("hidden");
        id.classList.remove("active");
        id_2.classList.add("bxs-down-arrow");
        id_2.classList.remove("bxs-up-arrow");
        }
    }

</script>

<br>
<br>
<br>
<br>
<hr>

<?php
    template_footer();
?>