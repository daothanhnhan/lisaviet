<?php 
 
$rows_lien_he = $action->getList('dangky_daily','','','id','desc',$trang,20,'dangky-daily');//var_dump($rows_lien_he);die();
?>
<div class="container">
  <h2>Bảng đăng ký đại lý.</h2>            
  <table class="table">
    <thead>
      <tr>
      	<th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Company</th>
        <th>Note</th>
        <th>Map</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows_lien_he['data'] as $v_row_lh) { ?>
      <tr>
        <td><?php echo $v_row_lh['name'];?></td>
        <td><?php echo $v_row_lh['email'];?></td>
        <td><?php echo $v_row_lh['phone'];?></td>
        <td><?php echo $v_row_lh['address'];?></td>
        <td><?php echo $v_row_lh['company'];?></td>
        <td><?php echo $v_row_lh['note'];?></td>
        <td><?php echo $v_row_lh['map'];?></td>
      </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
<?php

    echo $rows_lien_he['paging'];
    
?>