<?php
    template_header("PRODUCTS", "index.php?page=home#about", "#testimonial", "index.php?page=products");    

    $page = 1;

    $all_record = $pdo->query("SELECT COUNT(id_product) FROM products");
    $all_record = $all_record->fetch(PDO::FETCH_ASSOC);

    $max_page = ceil($all_record['COUNT(id_product)'] / 8);

    if (isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $max_page) {
      $page = $_GET['p'];
    }

    $start = ($page - 1) * 8;
    $result = $pdo->query("SELECT * FROM products LIMIT {$start}, 8");
?>

<body>
<style>
    <?php
    include "style/style-products.css";
    ?>
</style>
    <a href="#about" class="back-to-top">
        <i class="bx bxs-to-top ai"></i>
    </a>

    <!-- <div class="fullheight align-items-center" id="about">
        <div class="container1">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="http://localhost/skincare-shopping/assets/images/anh1.jpg" alt="" class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3><span class="primary-color">CENLIA</span> - Vẻ đẹp <span class="primary-color">vượt ngoài</span> ranh giới</h3>
                        <p>Thương hiệu mỹ phẩm có nguồn gốc từ Hàn Quốc, được các chuyên gia đầu ngành nghiên cứu và cho ra đời dòng sản phẩm đặc biệt phù hợp cho làn da của người Việt</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- content -->
    <section class="wrapper container" id="products">
        <h1 id="#product" class="heading">SẢN PHẨM</h1>
        <div class="products">
            <?php
                // $stmt = $pdo->prepare("SELECT * FROM products LIMIT ($start), 3");
                // $stmt->execute();
                // $products = $stmt->fetch(PDO::FETCH_ASSOC);

                // $query = 'SELECT * FROM products';

                // $products = mysqli_query($connection, $query);
                ?>
            <ul>
                <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <li class="main-product">
                    <div class="gird_row">
                        <div class="gird_colums">
                            <a href="index.php?page=product&id_product=<?=$row['id_product']?>" class="item-wrap botton-up play-on-scroll">
                                <div class="img-product">
                                    <img name="img_product" class="img-prd"
                                        src="http://localhost/cart-shopping/cart-shopping/uploads/<?=$row['image']?>"
                                        alt="<?=$row['name']?>">
                                </div>
                            </a>
                            <form action="index.php?page=cart" method="POST">
                                <div class="content-product">
                                    <input type="hidden" name="quantity" value="1" min="1" max="">
                                    <input name="product_id" type="hidden" value="<?=$row['id_product']?>">
                                    <a href="index.php?page=product&id_product=<?=$row['id_product']?>" class="item-wrap botton-up play-on-scroll">
                                        <h3 name="name_product" class="content-product-h3"><?=$row['name']?></h3>
                                    </a>
                                    <div class="content-product-deltals">
                                        <div class="price">
                                            <span class="money"><?=$row['price']?> VNĐ</span>
                                        </div>
                                        <button type="submit" class="btn btn-cart">Thêm Vào Giỏ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="numbers">
            <?php for($i = 0; $i < $max_page; $i++): ?>
                <a class="
            <?php if ($i + 1 == $page) {
                echo "active number-page";
            } ?>" href="index.php?page=products&p=<?= $i + 1 ?>"><?= $i + 1 ?></a>
            <?php endfor; ?>
        </div>
    </section>

    <script>
        <?php
        include "products.js";
        ?>
    </script>
</body>
<?php
template_feedBack();
template_footer();?>
</html>