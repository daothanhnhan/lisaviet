<?php 
	include_once dirname(__FILE__)."/../database.php";
	$city = $_GET['city'];
	$sql = "SELECT * FROM district WHERE city_id = $city";
	$result = mysqli_query($conn_vn, $sql);
	$rows = array();
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
	}

	echo '<option value="0">Chọn Quận Huyện</option>';
	foreach ($rows as $item) {
		echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
	}
?>