<?php
	include "connect.php";
		$bill = "SELECT * FROM `orders`";
		$query_exec = mysqli_query($data, $bill);
?>
<?php
		require "header.php";
?>
<style>
	<?php
		require "style.css";
	?>
</style>

    <div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="index.php" class="sidebar-nav-link ">
					<div>
						<i class="fas fa-tachometer-alt "></i>
					</div>
					<span>
						Trang chủ
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="cate.php" class="sidebar-nav-link ">
					<div>
						<i class='bx bxs-blanket'></i>
					</div>
					<span>
						Danh Mục
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="product.php" class="sidebar-nav-link ">
					<div>
						<i class="bx bx-closet"></i>
					</div>
					<span>Sản Phẩm</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="cart.php" class="sidebar-nav-link active">
					<div>
						<i class="fas fa-tasks"></i>
					</div>
					<span>Hóa Đơn</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="wrappers">
		<div class="container mt-5">
			<h1 class="title">QUẢN LÝ ĐƠN HÀNG</h1>
		 <table class="table">

			 <thead>
			   <tr class="tableth">

				 <th class="id" scope="col">ID</th>
				 <th class="name-user" scope="col">Tên khách hàng</th>
				 <th class="sdt" scope="col">Số điện thoại</th>
				 <th class="address" scope="col">Địa chỉ</th>
				 <th class="email" scope="col">Email</th>
				 <th class="note" scope="col">Ghi chú</th>
				 <th class="type" scope="col">Loại đơn</th>
				 <th class="price-DH" scope="col">Đơn giá</th>
				 <th class="time" scope="col">Thời gian</th>
				 <th class="detail" scope="col">Chi tiết</th>
				 <th class="" scope="col"></th>
			   </tr>
			 </thead>
			 <?php
				 		foreach ($query_exec as $value):
							$subtotal_price = 0;
							$IDorder = $value['id_order'];
							?>
				<table>
						<tr class="tabletd">
							<td><?= $value['id_order'] ?></td>
							<td><?= $value['name_customer'] ?></td>
							<td><?= $value['phone_number'] ?></td>
							<td><?= $value['address'] ?></td>
							<td><?= $value['email'] ?></td>
							<td><?= $value['note'] ?></td>
							<td><?= $value['order_type'] ?></td>
							<td><?= $value['order_price'] ?></td>
							<td><?= $value['date_order'] ?></td>
							<td>
								<button class="<?=$IDorder?>"
								onClick="reveal(<?=$IDorder?>, icon_<?=$IDorder?>)"><i
								id="icon_<?=$IDorder?>" class="bx bxs-down-arrow"></i></button>
							</td>
							<td>
								<!-- <a href="delBill.php?id=<?=$IDorder?>" name="id_order" onClick="return confirm('Bạn có thật sự muốn xóa món hàng này?');">Xóa</a> -->
							</td>
						</tr>

					<table id="<?=$IDorder?>" class="hidden">
            <tr class ="table">
                <td>Mã đơn hàng</td>
                <td>Mã sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng sản phẩm</td>
                <td>Giá</td>
            </tr>
            <?php
                $query_2nd = "SELECT * FROM `order_detail` WHERE `id_order` = '$IDorder'";
                $exec_query = mysqli_query($data, $query_2nd);
                foreach ($exec_query as $product):
                    $subtotal_price += $product['price'];
            ?>

                <tr>
                    <?php
                        $product_get = $product['id_product'];
                        $select_product = "SELECT * FROM `products` WHERE `id_product` = '$product_get'";
                        $query_select = mysqli_query($data, $select_product);
                        $fetch_select = mysqli_fetch_array($query_select);
                    ?>
                    <td><?=$product['id_order']?></td>
										<td><?=$product['id_product']?></td>
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
				<?php endforeach;?>
		   </table>

			</div>


		<script>
    function reveal(id, id_2) {
        console.log(id);

    if(id.classList.contains("hidden"))
    {
        id_2.classList.remove("bxs-down-arrow");
        id_2.classList.add("bxs-up-arrow");

        id.classList.add("active");
        id.classList.remove("hidden");
    } else{
        id.classList.add("hidden");
        id.classList.remove("active");
        id_2.classList.add("bxs-down-arrow");
        id_2.classList.remove("bxs-up-arrow");
        }
    }

</script>

    <!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>

</html>
