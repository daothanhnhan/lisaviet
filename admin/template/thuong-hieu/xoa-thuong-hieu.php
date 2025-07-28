<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM trademark WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: /admin/index.php?page=thuong-hieu');
?>