<?php
	include "connect.php";

	if(isset($_POST['name'])){
		$id				= $_POST['id'];
		$name 		=	$_POST['name'];
		$sql 			= "INSERT INTO `category`(`id`, `name`) VALUES ('$id','$name')";

		$query		= mysqli_query($data, $sql);
		if($query){
			echo '<script language="javascript">alert("Thêm danh mục thành công!");
					window.location.href="http://localhost/cart-shopping/cart-shopping/admin/cate.php";</script>';
		}
		else{
			$message = "Lỗi khi thêm danh mục!";
			echo "<script> alert('$message')</script>";
		}
	}
?>
<?php
	require "header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!-- mục lục -->
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
				<a href="cate.php" class="sidebar-nav-link active">
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
				<a href="cart.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tasks"></i>
					</div>
					<span>Cart</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="wrapper">
        <div class="container">
             <form action="#" method="POST"  enctype="multipart/form-data" class="mt-3 col-6 border border-light rounded p-3 m-auto">
								<div class="form-group mb-3">
                    <label for="nameCat" style="color: black;font-weight: bold;">ID danh mục</label>
                    <input class="form-control " name="id" id="id">
                </div>
                <div class="form-group mb-3">
                    <label for="Order" style="color: black;font-weight: bold;">Tên danh mục</label>
                    <input class="form-control " name="name" id="name">
                </div>
                <div class="form-group mt-3 ">
                    <button type="submit" name="btn-submit" class="btn btn-dark px-4  py-2 text-white" >  Thêm </button>
                </div>
            </form>
            </div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<script src="app.js"></script>
	<!-- end import script -->
</body>
</html>