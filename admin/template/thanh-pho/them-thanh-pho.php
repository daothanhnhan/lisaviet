<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	

	function thanh_pho () {
		global $conn_vn;
		if (isset($_POST['add_thanhpho'])) {
			// $src= "../images/";
			// $src = "uploads/";

			// if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

			// 	uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);

			// }

			$name = $_POST['name'];
			$note = $_POST['note'];
			// $image = $_FILES['image']['name'];

			$sql = "INSERT INTO city (name, note) VALUES ('$name', '$note')";
			$result = mysqli_query($conn_vn, $sql);
			echo '<script type="text/javascript">alert(\'Bạn đã thêm được một thành phố.\');window.location.href="/admin/index.php?page=thanh-pho"</script>';
		}
	}

	thanh_pho();
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin thành phố<br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên thành phố</p>
            <input type="text" class="txtNCP1" name="name" required/>
            <p class="titleRightNCP">Mô tả thành phố</p>
            <textarea class="longtxtNCP2" name="note"></textarea>
            
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_thanhpho">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>