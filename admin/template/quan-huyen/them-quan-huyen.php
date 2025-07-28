<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

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

	function quan_huyen () {
		global $conn_vn;
		if (isset($_POST['add_quanhuyen'])) {
			// $src= "../images/";
			// $src = "uploads/";

			// if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

			// 	uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);

			// }

			$name = $_POST['name'];
			$note = $_POST['note'];
			$city = $_POST['city'];
			// $image = $_FILES['image']['name'];

			$sql = "INSERT INTO district (name, note, city_id) VALUES ('$name', '$note', $city)";
			$result = mysqli_query($conn_vn, $sql) or die('loi');
			echo '<script type="text/javascript">alert(\'Bạn đã thêm được một Quận Huyện.\');window.location.href="/admin/index.php?page=quan-huyen"</script>';
		}
	}

	quan_huyen();
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin Quận Huyện<br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên Quận Huyện</p>
            <input type="text" class="txtNCP1" name="name" required/>
            <p class="titleRightNCP">Mô tả Quận Huyện</p>
            <textarea class="longtxtNCP2" name="note"></textarea>
            <select class="txtNCP1" name="city">
            	<?php foreach ($list_city as $item) { ?>
            	<option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
            	<?php } ?>
            </select>
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_quanhuyen">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>