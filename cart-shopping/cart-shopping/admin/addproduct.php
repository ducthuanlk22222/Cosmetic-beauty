<?php
		include "connect.php";

		if(isset($_POST['name'])){
			$id 					= $_POST['id'];
			$name					= $_POST['name'];
			$price 				=	$_POST['price'];
			$description 	= $_POST['description'];
			$idcate 			= $_POST['idcate'];
			if(isset($_FILES['image'])){
				$file 			= $_FILES['image'];
				$file_name 	= $file['name'];
				move_uploaded_file($file['tmp_name'],'../uploads/'.$file_name);
			}
			$sql = "INSERT INTO `products`(`id_product`,`name`, `price`, `image`, `description`, `id_cate`)
							VALUES ('$id','$name','$price','$file_name','$description','$idcate')";

			$query 				= mysqli_query($data, $sql);
			if($query){
				echo '<script language="javascript">alert("Thêm thành công!");
         window.location.href="http://localhost/cart-shopping/cart-shopping/admin/product.php";</script>';
			}
			else{
				$message 		= "Không thêm được!";
				echo "<script> alert('$message')</script>";
			}
		}
?>
<?php
	require "header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
				<a href="cate.php" class="sidebar-nav-link">
					<div>
						<i class='bx bxs-blanket'></i>
					</div>
					<span>
						Danh Mục
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="product.php" class="sidebar-nav-link active ">
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
			<form action="#" method="POST" enctype="multipart/form-data" class="col-8 border border-light p-3 m-auto" >
				<h3 class="text-center"style="color: black;font-weight: bold;">THÊM SẢN PHẨM</h3>
				<div class="form-group">
					<label class="" for="tensp" style="color: black;font-weight: bold;">Cate ID</label>
					<select class="form-control" name="idcate" id="cateid" type="text" required="required">
					<option value="">TÊN DANH MỤC</option>
					<?php
							foreach ($category as $key => $value){ ?>
							<option value="<?php echo $value['id'] ?>">
								<?php
									echo $value['name']
								?>
							</option>
							<?php }
					?>
					</select>
				</div>
				<div class="form-group">
					<label class="" for="tensp" style="color: black;font-weight: bold;">ID Product</label>
					<input class="form-control" name="id" id="idPro" type="text">
				</div>
				<div class="form-group">
					<label class="" for="tensp" style="color: black;font-weight: bold;">Tên sản phẩm</label>
					<input class="form-control" name="name" id="namePro" type="text">
				</div>
				<div class="form-group">
					<label class="" for="giasp" style="color: black;font-weight: bold;">Giá sản phẩm</label>
					<input class="form-control" name="price" id="idDm" type="text">
				</div>
				<div class="form-group">
					<label class="" for="motasp" style="color: black;font-weight: bold;">Mô tả</label>
					<textarea rows="5" class="form-control" name="description" id="note" type="text"> </textarea>
				</div>
				<div class="form-group">
					<label class="" for="hinhsp" style="color: black;font-weight: bold;">Hình sản phẩm</label>
					<input type="file" class="form-control" name="image" id="images">
				</div>
				<div class="form-group mt-3 ">
					<button type="submit" class="btn btn-primary py-2 px-4" id="insert" onclick="submitForm()">THÊM SẢN PHẨM</button>
				</div>
			</form>
			</div>
</div>


    <!-- <button id="insert">Chọn</button> -->

    <!--firebase-->
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-database.js"></script>

    <script id="mainScript">

            var firebaseConfig = {
                apiKey: "AIzaSyDHab9J0kktzjPwTQJSq8nX7YaWIhCXokM",
                authDomain: "ps11760-lta.firebaseapp.com",
                databaseURL: "https://ps11760-lta-default-rtdb.firebaseio.com",
                projectId: "ps11760-lta",
                storageBucket: "ps11760-lta.appspot.com",
                messagingSenderId: "821133202295",
                appId: "1:821133202295:web:e278525d0b88953960c772",
                measurementId: "G-DBT6FK3F9M"
                };
                // Initialize Firebase
                firebase.initializeApp(firebaseConfig);

                const database = firebase.database();

                // var cateid,nameP,idP,priceP,imagesP,noteP;

                var cateid,idP,nameP;

                function Ready(){
                    idDM = document.getElementById('idDm').value;
					cateid = document.getElementById('cateid').value;
                    idP = document.getElementById('idPro').value;
                    nameP = document.getElementById('namePro').value;

                }
                // Hiển thị catalog //
                database.ref('product').orderByKey().once('value').then(function(snapshot) {

                    var listCatalog = snapshot.val()

                    let listCatalogView = document.querySelector('#list-product')

                    console.log(listCatalog)

                    for(let index in listCatalog) {
                        console.log(listCatalog[index])
                        let catalog = `<p>${listCatalog[index].nameCat}

                                        </p>`

                        listCatalogView.innerHTML+=catalog
                    }

                    })
                /* Thêm */
                document.getElementById('insert').onclick = function(){
                    Ready();
                    firebase.database().ref('product/'+idDM).set({
                        cate_id: cateid,
                        idProduct: idP,
						name: nameP
                    });
                }
				const add  = function add(){
                    Ready();
                    firebase.database().ref('product/'+idDM).set({
						cate_id:cateid,
                        nameCat: nameP,
                        idCat: idP
                    });
					let home = window.location.href.replace('admin/addproduct.php', 'admin/product.php')
        			window.location.href = home
                }
				const submitForm = function submitForm(){
					add();
				}
                /* Chọn */
                document.getElementById('select').onclick = function(){
                    Ready();
                    firebase.database().ref('product/'+idDM).on('value',function(snapshot){
                        document.getElementById('nameCat').value = snapshot.val().nameCat;
                        document.getElementById('idCat').value = snapshot.val().idCat;
                    });
                }
                /* Cập nhật */
                document.getElementById('update').onclick = function(){
                    Ready();
                    firebase.database().ref('product/'+idDM).update({
                        nameCat: nameC,
                        idCat: idC
                    });
                }
                /* Xóa */
                document.getElementById('delete').onclick = function(){
                    Ready();
                    firebase.database().ref('product/'+idDM).remove();
                }
    </script> -->
    <!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>