<?php
    $rows = $acc->getList("district","","","id","asc",$trang, 20, "quan-huyen");//var_dump($rows);

    function getCity ($id) {
        global $conn_vn;
        $sql = "SELECT * FROM city WHERE id = $id";
        $result = mysqli_query($conn_vn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
?>	
    <div class="boxPageNews">
        <h1><a href="/admin/index.php?page=them-quan-huyen">Thêm</a></h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Quận Huyện</th>
                    <th>Mô tả</th>
                    <th>Thành phố</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $d = 0;
                    foreach ($rows['data'] as $row) {
                        $d++;
                    ?>
                        <tr>
                            <td><?= $d ?></td>
                            <td><?= $row['name']?></td>
                            <td>
                                <?= $row['note']?>
                            </td>
                            <td><?= getCity($row['city_id'])['name'] ?></td>
                            <td style="float: none;"><a href="/admin/index.php?page=xoa-quan-huyen&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="/admin/index.php?page=sua-quan-huyen&id=<?= $row['id'] ?>" style="float: none;">Sửa</a></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    	
        <div class="paging">             
        	<?= $rows['paging'] ?>
		</div>
    </div>
    <p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>             