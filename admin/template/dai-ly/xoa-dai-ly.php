<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM dai_ly WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: /admin/index.php?page=dai-ly');
?>