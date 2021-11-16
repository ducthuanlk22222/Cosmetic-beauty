<?php
template_header("Product", "index.php?page=home#about", "index.php?page=home#testimonial");

// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id_product'])) {
    // Prepare statement and execute, prevents SQL injection
    // $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ? ');
    $stmt = $pdo->prepare("SELECT products.*, category.name AS name_cate FROM products JOIN category ON products.id_cate = category.id WHERE products.id_product = ?;");
       
    $stmt->execute([$_GET['id_product']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
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

<div class="product content-wrapper">
    <div class="about-img">
        <img src="http://localhost/cart-shopping/cart-shopping/uploads/<?=$product['image']?>" width="500" height="500" alt="<?=$product['name']?>">
    </div>
    <div class="description-product">
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
            
        </span>
        <form action="index.php?page=cart" method="post">
            <input  class="product-SL" type="number" name="quantity" value="1" min="1" max="" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id_product']?>">
            <input class="submit" type="submit" value="Add To Cart">
        </form>
        <div class="description">
            <div>
                <strong> Mô tả: </strong><?=$product['description']?> <br>
                <strong> Loại: </strong> <?=$product['name_cate']?>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<hr>

<?php template_footer()?>