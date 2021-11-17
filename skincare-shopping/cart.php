<?php
include "function-cart.php";
template_header("CART", "index.php?page=home#about", "index.php?page=home#testimonial");
?>

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
    <a href="#shopping-cart" class="back-to-top">
        <i class="bx bxs-to-top ai"></i>
    </a>

    <h1 id="shopping-cart">Giỏ hàng</h1>
    <form action="" method="POST">
        <table>
            <thead>
                <td>Sản phẩm</td>
                <td>Tên</td>
                <td>Giá</td>
                <td>Số lượng</td>
                <td>Tổng</td>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Giỏ hàng không có sản phẩm.</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <img src="http://localhost/cart-shopping/cart-shopping/uploads/<?=$product['image']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </td>
                        <td>
                            <p><?=$product['name']?></p>
                            <br>
                            <a href="index.php?page=cart&remove=<?=$product['id_product']?>" class="remove">Xóa</a>
                        </td>
                        <td class="price"><?=$product['price']?> VND</td>
                        <td class="quantity">
                            <input type="number" name="quantity-<?=$product['id_product']?>" value="<?=$products_in_cart[$product['id_product']]?>" min="1" max="" placeholder="Quantity" required>
                        </td>
                        <td name="total_price_single" class="price"><?=$product['price'] * $products_in_cart[$product['id_product']]?> VND</td>
                    </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Tổng tiền cần thanh toán:</span>
            <span name="total_price_multiple" class="price"><?=$subtotal?> VND</span>
        </div>
        <div class="buttons">
            <input class="btn-cart-1" type="submit" value="Cập nhật" name="update">
            <input class="btn-cart-2" type="submit" value="Thanh toán" name="placeorder">
        </div>
    </form>
</div>

    <script>
        let backToTopBtn = document.querySelector('.back-to-top')

        window.onscroll = () => {
            if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopBtn.style.display = 'flex'
            }else{
                backToTopBtn.style.display = 'none'
            }
        }
    </script>
<br>
<br>
<br>
<br>
<hr>
<?php
// template_feedBack();
template_footer();
?>