<?php
		include "connect.php";
		$category = mysqli_query($data, "SELECT * FROM `category`");

?>
<?php
		require "header.php";
?>
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
	<div class="wrappers">
    <div class="container mt-5">
		<h1 class="title">Danh sách danh mục</h1>
		<div class="card-content1" >
	 <table id="table">
		 <thead>
		   <tr class="tableth">
			 <th scope="col">ID</th>
			 <th scope="col">Name</th>
			 <th scope="col"></th>
			 <th scope="col"></th>
			 <th></th>
		   </tr>
		 </thead>
		 <tbody >
		 		<?php
				 	foreach ($category as $value): ?>
						<tr>
							<td><?= $value['id'] ?></td>
							<td><?= $value['name'] ?></td>
							<td>
								<a class="fix-cate" href="suaDM.php?id=<?= $value['id'] ?>">Sửa</a>
							</td>
							<td>
								<a class="delete-cate" href="xoaDM.php?id=<?= $value['id'] ?>"
								   onClick="return confirm('Bạn có thật sự muốn xóa món hàng này?');">Xóa</a>
							</td>
						</tr>
				<?php
					endforeach;
				?>
		 </tbody>
	   </table>
	</div>
	   <div class="addpro"><a href="addcate.php" class="btn btn-dark mb-3">Thêm danh mục</a></div>
	</div>
</div>
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

                let nameC,idC;

                function Ready(){
                    idDM = document.getElementById('idDm').value;
                    idC = document.getElementById('id').value;
                    nameC = document.getElementById('name').value;

                }

				deleteItem =(id) => {
					database.ref('catalog/'+id).remove()
					console.log('Da xoa');
					location.reload();
				}
                // Hiển thị catalog //
                database.ref('catalog').orderByKey().once('value').then(function(snapshot) {

                    var listCatalog = snapshot.val()

                    let listCatalogView = document.querySelector('#list-catalog')

                    console.log(listCatalog)

                    for(let index in listCatalog) {
                        console.log(listCatalog[index])
                        let catalog = `

									<tr class="tabletd">
										<td>${listCatalog[index].id}</td>
										<td>${listCatalog[index].name}</td>
										<td><button onClick="deleteItem(id)" >Xóa</button></td>
										<td><a href="#">Sửa</a></td>
									</tr>


								</table>`

                        listCatalogView.innerHTML+=catalog
                    }

                    })
                /* Thêm */
                document.getElementById('insert').onclick = function(){
                    Ready();
                    firebase.database().ref('catalog/'+idDM).set({
                        name: nameC,
                        id: idC
                    });
                }
                /* Chọn */
                document.getElementById('select').onclick = function(){
                    Ready();
                    firebase.database().ref('catalog/'+idDM).on('value',function(snapshot){
                        document.getElementById('nameCat').value = snapshot.val().nameCat;
                        document.getElementById('idCat').value = snapshot.val().idCat;
                    });
                }
                /* Cập nhật */
                document.getElementById('update').onclick = function(){
                    Ready();
                    firebase.database().ref('catalog/'+idDM).update({
                        nameCat: nameC,
                        idCat: idC
                    });
                }
                /* Xóa */

                 document.getElementBy('delete').onclick = function(){
                    Ready();
                    firebase.database().ref('catalog/'+idDM).remove();
                }



    </script> -->
    <!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<script src="app.js"></script>
	<!-- end import script -->
</body>
</html>