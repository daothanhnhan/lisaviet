<?php
    $rows = $acc->getList("dai_ly","","","id","asc",$trang, 100, "thuong-hieu");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <h1><a href="/admin/index.php?page=them-dai-ly">Thêm</a></h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên đại lý</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Logo</th>
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
                            <td><?= $row['address'] ?></td>
                            <td><?= $row['phone'] ?></td>
                            <td>
                                <img src="/images/<?= $row['logo'] ?>" width="100">
                            </td>
                            <td style="float: none;"><a href="/admin/index.php?page=xoa-dai-ly&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="/admin/index.php?page=sua-dai-ly&id=<?= $row['id'] ?>" style="float: none;">Sửa</a></td>
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