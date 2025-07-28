<?php //include DIR_NEWS."MS_NEWS_LISAVIET_0001.php";?>
<?php 
	function dangky_daily () {
		global $conn_vn;
		if (isset($_POST['add_daily'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$company = $_POST['company'];
			$note = $_POST['note'];
			$map = $_POST['map'];

			$sql = "INSERT INTO dangky_daily (name, email, phone, address, company, note, map) VALUES ('$name', '$email', '$phone', '$address', '$company', '$note', '$map')";
			$result = mysqli_query($conn_vn, $sql) or die('loi');
			echo '<script type="text/javascript">alert(\'Bạn đã đăng ký làm đại lý thành công.\')</script>';
		}
	}
	dangky_daily();
?>

<?php 
	if (!isset($_SESSION['city'])) {
		$_SESSION['city'] = 0;
	}

	if (!isset($_SESSION['district'])) {
		$_SESSION['district'] = 0;
	}

	function listDaiLy () {
		global $conn_vn;
		if ($_SESSION['city']==0) {
			$sql = "SELECT * FROM dai_ly";
		} else {
			if ($_SESSION['district']==0) {
				$sql = "SELECT * FROM dai_ly WHERE city = ".$_SESSION['city'];
			} else {
				$sql = "SELECT * FROM dai_ly WHERE city = ".$_SESSION['city']." AND district = ".$_SESSION['district'];
			}
		}
		
		$result = mysqli_query($conn_vn, $sql);
		$rows = array();
		$num = mysqli_num_rows($result);
		if ($num > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row;
			}
		}
		return $rows;
	}
	$list_daily = listDaiLy();

	function listCity () {
		global $conn_vn;
		$sql = "SELECT * FROM city";
		$result = mysqli_query($conn_vn, $sql);
		$rows = array();
		$num = mysqli_num_rows($result);
		if ($num > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row;
			}
		}
		return $rows;
	}

	$list_city = listCity();

	function listDistrict () {
		global $conn_vn;
		$sql = "SELECT * FROM district WHERE city_id = ".$_SESSION['city'];
		$result = mysqli_query($conn_vn, $sql);
		$rows = array();
		$num = mysqli_num_rows($result);
		if ($num > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row;
			}
		}
		return $rows;
	}

	$list_qhuyen = listDistrict();
?>
<?php 	if($_GET['page'] == 'tro-thanh-dai-ly') {?>
	<div class="gb-chinhsachdaily">
		<div class="container">
			<h3 class="text-center">Chính sách cho đại lý</h3>
			<p>
				Công ty CP Phân Phối và Hỗ trợ dự án Thời Đại Mới gọi tắt NewAge Distribution là thành viên trực thuộc Tập đoàn công nghệ Thời Đại Mới (NewAge Technology Group). Đã trở thành một mô hình kinh doanh và phân phối thiết bị văn phòng, hàng gia dụng và công nghiệp hàng đầu tại Việt Nam. Với gần 100 cán bộ công nhân viên,  NewAge Distribution đã xây dựng được mạng lưới phân phối bán sỉ rộng khắp trên phạm vi cả nước. Với định hướng chiến lược đúng đắn, NewAge Distribution đã và đang đạt tốc độ tăng trưởng liên tục đạt trên 50% / năm.
				<br>	



				NewAge Distribution đã áp dụng hệ thống quản lý chuyên nghiệp và quốc tế, các phần mềm quản trị hiện đại cùng đội ngũ nhân lực cao cấp trong và ngoài nước. Tiếp tục khẳng định vị trí hàng đầu trong hoạt động phân phối các mặt hàng công nghệ cao thiết bị văn phòng, gia dụng, công nghiệp và xây dựng hệ thống đại lý phân phối và trung tâm bảo hành, dịch vụ tại 63 tỉnh thành trên cả nước, và đó cũng là nhiệm vụ trọng tâmcủa NewAge Distribution trong giai đoạn tới.
			</p>
			<strong>Chính sách chung về phát triển đại lý</strong>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	</p>	
			<div class="gb-form-daily">
				<img src="/images/logo%20lisa-01.png" alt="" class="img-responsive">
				<h3 class="text-center">
					Đăng ký làm đại lý phân phối 
				</h3>
				<div class="row">
					<form action="" method="post">
						<div class="col-md-6 col-md-offset-3">	
							<div class="form-group row">
								<div class="col-xs-6">
									<input class="form-control" type="text" name="name" placeholder="Họ và tên" required>
								</div>
								<div class="col-xs-6">
									<input class="form-control" type="email" name="email" placeholder="Email" required>
								</div>
								<div class="col-xs-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i> +84</span>
										<input  type="number" class="form-control" name="phone" placeholder="" required>
									</div>
								</div>
								<div class="col-xs-6">
									<input class="form-control" type="text" name="company" placeholder="Công ty/của hàng" required>
								</div>
								<div class="col-xs-12">
									<input class="form-control" type="text" name="address" placeholder="Địa chỉ" required>
								</div>
								<div class="col-xs-12">
									<textarea class="form-control" rows="5" id="note" name="note" placeholder="Sản phẩm có nhu cầu tìm đại lý"></textarea>
								</div>
								<div class="col-xs-12">
									<textarea class="form-control" rows="5" id="map" name="map" placeholder="Google Map"></textarea>
								</div>
								<div class="col-xs-12">
									<button type="submit" class="btn btn-danger" name="add_daily">Đăng ký</button>
								</div>


							</div>

						</div>
					</form>
				</div>	

			</div>

		</div>	


	</div>
<?php 	}else{ ?>
<div class="gb-timdaily">
	<div class="container">
		<div class="gb-sort-timdaily" style="padding: 10px 5px;">
			<div class="row">
				<div class="col-md-2">
					<select class="form-control" name="city" onchange="city(this)">
						<option value="0">Chọn Tỉnh - Thành phố</option>
						<?php foreach ($list_city as $item) {  ?>
						<option value="<?= $item['id'] ?>" <?= ($item['id']==$_SESSION['city']) ? 'selected' : '' ?> ><?= $item['name'] ?></option>
						<?php } ?>
					</select>	
				</div>
				<div class="col-md-2">
					<select class="form-control" onchange="district(this)">
						<option value="0">Chọn Quận Huyện</option>
						<?php foreach ($list_qhuyen as $item) { ?>
						<option value="<?= $item['id'] ?>" <?= ($item['id']==$_SESSION['district']) ? 'selected' : '' ?> ><?= $item['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-2">
					<div class="gb-sort-timdaily">
						<input type="text" class="form-control" placeholder="Sản phẩm" />

					</div>
				</div>

			</div>
		</div>	
		<div class="gb-tab-map">
			<div class="tab" style="overflow-y: scroll;">
				<?php 
				$d = 0;
				foreach ($list_daily as $item) { 
					$d++;
				?>
				<button class="tablinks <?= ($d==1) ? 'active' : '' ?>" onclick="openCity(event, 'vietnam<?= $d ?>')">
					<?= $item['name'] ?>
					<p>Địa chỉ:  <?= $item['address'] ?></p>
					<p>Điện thoại: <?= $item['phone'] ?></p>

				</button>
				<?php } ?>
				<!-- <button class="tablinks" onclick="openCity(event, 'London')">Cầu giấy
		
					<p>Địa chỉ: Nhà 5, Cầu giấy, Hà Nội</p>
					<p>Điện thoại: 0962456214</p>

				</button>
				<button class="tablinks" onclick="openCity(event, 'Paris')">Cổ nhuế
					
					<p>Địa chỉ: Cổ Nhuế, Bắc Từ Liêm, Hà Nội</p>
					<p>Điện thoại: 0962456214</p>

				</button> -->
				
			</div>
			<?php 
				$d = 0;
				foreach ($list_daily as $item) { 
					$d++;
				?>
			<div id="vietnam<?= $d ?>" class="tabcontent"  style="display: <?= ($d==1) ? 'block' : 'none'; ?>;">
				<?= $item['embed'] ?>
			</div>
			<?php } ?>
			<!-- <div id="London" class="tabcontent" style="display: none;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7448.505945496799!2d105.78866247683703!3d21.02256160874191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5071d33a85%3A0x11b2ab7b4c1f1b61!2zWcOqbiBIb8OgLCBD4bqndSBHaeG6pXksIEhhbm9pLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1536568451975" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
			</div>

			<div id="Paris" class="tabcontent" style="display: none;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7448.427349079909!2d105.85141393265646!3d21.024134694303154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab939165e8d9%3A0xf3952b1fa755bdcc!2sMeli%C3%A1+Hanoi!5e0!3m2!1sen!2s!4v1536569316869" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div> -->
		</div>

	</div>	
</div>	
<?php 	} ?>
<script >
    
	function openCity(evt, cityName) {
	    // Declare all variables
	    var i, tabcontent, tablinks;

	    // Get all elements with class="tabcontent" and hide them
	    tabcontent = $(".tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }

	    // Get all elements with class="tablinks" and remove the class "active"
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }

	    // Show the current tab, and add an "active" class to the link that opened the tab
	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
	}
</script>
<script type="text/javascript">
	function city (data) {
		// alert(data.value);
		var city = data.value;
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     var bien = this.responseText;
		     // alert(bien);
		     location.reload();
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/city.php?city="+city, true);
		  xhttp.send();
	}

	function district (data) {
		// alert(data.value);
		var qh = data.value;
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     var bien = this.responseText;
		     // alert(bien);
		     location.reload();
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/district.php?qh="+qh, true);
		  xhttp.send();
	}
</script>
