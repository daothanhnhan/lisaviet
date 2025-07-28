<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	function listDistrict () {
		global $conn_vn;
		$sql = "SELECT * FROM district WHERE city_id = 1";
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

	$list_qh = listDistrict();

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

	function dai_ly () {
		global $conn_vn;
		if (isset($_POST['add_daily'])) {
			$src= "../images/";
			// $src = "uploads/";
			$logo = "";

			if(isset($_FILES['logo']) && $_FILES['logo']['name'] != ""){

				uploadPicture($src, $_FILES['logo']['name'], $_FILES['logo']['tmp_name']);
				$logo = $_FILES['logo']['name'];

			}

			$name = $_POST['name'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$embed = $_POST['embed'];
			$city = $_POST['city'];
			$district = $_POST['district'];

			$embed = str_replace('width="600"', 'width="100%"', $embed);

			$sql = "INSERT INTO dai_ly (name, address, phone, logo, embed, city, district) VALUES ('$name', '$address', '$phone', '$logo', '$embed', $city, $district)";
			$result = mysqli_query($conn_vn, $sql);
			echo '<script type="text/javascript">alert(\'Bạn đã thêm được một đại lý.\');window.location.href="/admin/index.php?page=dai-ly"</script>';
		}
	}

	dai_ly();
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin đại lý<br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên đại lý</p>
            <input type="text" class="txtNCP1" name="name" required/>
            <p class="titleRightNCP">Địa chỉ</p>
            <input type="text" class="txtNCP1" name="address" required/>
            <p class="titleRightNCP">Điện thoại</p>
            <input type="text" class="txtNCP1" name="phone" required/>
            <p class="titleRightNCP">Ảnh thương hiệu</p>
            <input type="file" class="txtNCP1" name="logo" />
            <p class="titleRightNCP">Google Map</p>
            <textarea class="longtxtNCP2" name="embed" style="height: 100px;"></textarea>
            <p class="titleRightNCP">Thành phố</p>
            <select class="txtNCP1" name="city" onchange="listDistrict(this)">
            	<?php foreach ($list_city as $item) { ?>
            	<option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
            	<?php } ?>
            </select>
            <p class="titleRightNCP">Quận Huyện</p>
            <select class="txtNCP1" name="district" id="district">
            	<option value="0">Chọn ...</option>
            	<?php foreach ($list_qh as $item) { ?>
            	<option value="<?= $item['id'] ?>"  ><?= $item['name'] ?></option>
            	<?php } ?>
            </select>
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_daily">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>
<script type="text/javascript">
	function listDistrict (data) {
		// alert(data.value);
		var city = data.value;
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     var bien = this.responseText;
		     // alert(bien);
		     document.getElementById("district").innerHTML = bien;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/admin_city.php?city="+city, true);
		  xhttp.send();
	}
</script>