<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM city WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: /admin/index.php?page=thanh-pho');
?>