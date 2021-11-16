<?php
    include "function-cart.php";
    include "confirm-function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place order</title>
</head>
<body>
<style>
    <?php
    include "style/style-placeorder.css";
    ?>
</style>
<section class="contact" id="contact">
        <h1 class="heading-name">COSMETIC</h1>
        <h1 class="heading">Hoàn Tất Đơn Hàng</h1>
        <div class="contact-container">
                <!-- <div> -->
                    <!--class="contact-btn"-->
                    <!-- <h1>Contact Now</h1>
                    <br>
                </div> -->
                <form action="" method="POST">
                    <div class="form-user">
                        <div class="form__user--info">
                            <h1 class="text-white">Thông tin nhận hàng</h1>
                            <table>
                                <tr>
                                    <td><input   required placeholder="Email" name="email"></td>
                                </tr>
                                <tr>
                                    <td><input  required placeholder="Họ và tên" name="name_cs"></td>
                                </tr>
                                <tr>
                                    <td><input  required placeholder="Số điện thoại" name="phone_number"></td>
                                </tr>
                                <tr>
                                    <td><input  required placeholder="Địa chỉ" name="address"></td>
                                </tr>
                                <tr>
                                    <td><textarea style="margin-top:.5rem; resize: none; width: 30rem; height: 80px" type="" required placeholder="Ghi chú" name="note[]"></textarea></td>
                                </tr>
                            </table>
                        </div>
    
                        <div class="form__user--banking">
                            <h1>Hình thức thanh toán</h1>
                            <table>
                                    <tr>
                                        <td>
                                            <div class="check-order">
                                                <input type="radio" required name="pay" value="2" disabled> Chuyển khoản qua ngân hàng
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>
                                                <div class="check-order">
                                                    <input type="radio" required name="pay" value="1" checked> Thanh toán khi nhận hàng
                                                </div>
                                            </td>
                                    </tr>
                            </table>
                        </div>
    
                        <div class="form__user--cart-product">
                            <h1>Đơn hàng
                                (<?=count($products)?> sản phẩm)
                            </h1>
    
                            <?php
                                foreach($products as $row):
                            ?>
                                <table>
                                    <div class="info-products">
                                        <img style="width: 30%;" src="http://localhost/cart-shopping/cart-shopping/uploads/<?=$row['image']?>" alt=<?=$row['name']?>>
                                        <div class="info-product">
                                            <div><strong> Tên sản phẩm: </strong> <?=$row['name']?></div>
                                            <p style="margin:.5rem 0;"><strong> Số lượng: </strong> <?=$products_in_cart[$row['id_product']]?></p>
                                            <p><?=$row['price'] * $products_in_cart[$row['id_product']]?> VND</p>
                                        </div>
                                    </div>
                                    <br>
                                </table>
                            <?php endforeach;?>
                            <p>Tổng tiền cần thanh toán: <?=$subtotal?> VND</p>
                            <button name="confirm" class="btn-confirm" type="submit">Hoàn tất thanh toán</button>
                            <a href="index.php?page=home">
                                <button type="button" name="confirm" class="btn-confirm" > Quay về Trang Chủ </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
    </section>
</body>
</html>