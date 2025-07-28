<?php 
    // function listTrademark () {
    //     global $conn_vn;
    //     $sql = "SELECT * FROM trademark";
    //     $result = mysqli_query($conn_vn, $sql);
    //     $rows = array();
    //     $num = mysqli_num_rows($result);
    //     if ($num > 0) {
    //         while ($row = mysqli_fetch_assoc($result)) {
    //             $rows[] = $row;
    //         }
    //     }
    //     return $rows;
    // }

    // function listProducCatOfTrademark ($id) {
    //     global $conn_vn;
    //     $sql = "SELECT * FROM productcat WHERE trademark_arr LIKE '%$id%'";
    //     $result = mysqli_query($conn_vn, $sql);
    //     $rows = array();
    //     $num = mysqli_num_rows($result);
    //     if ($num > 0) {
    //         while ($row = mysqli_fetch_assoc($result)) {
    //             $rows[] = $row;
    //         }
    //     }
    //     return $rows;
    // }

    // $list_trademark = listTrademark();
?>
<nav class="gb-main-menu" >

    <div class="main-navigation uni-menu-text">

        <div class="cssmenu ">

            <!-- <ul>

                <li><a href="/index.php">Trang chủ</a></li>

                <li><a href="gioi-thieu">Giới thiệu</a></li>

                <li><a href="">Hợp tác đại lý</a></li>
                <li class="has-sub">
     
                    <a href="san-pham">Ngàng hàng</a>

                    <ul >
                        <li class="has-sub">

                            <a href="">
                                Bộ bảo quản thực phẩm ComboEZ
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                            <ul >

                            <li>

                                <a href="">Bộ bảo quản thực phẩm ComboEZ</a>

                            </li>

                            <li>

                                <a href="">Bình rửa mũi pari.</a>

                            </li>

                            <li>

                                <a href="">Hút mũi Nosefrida</a>

                            </li>
                            <li>

                                <a href="">Hút mũi Nosefrida</a>

                            </li>

                    </ul>

                        </li>

                        <li>

                            <a href="">Bình rửa mũi pari.</a>

                        </li>

                        <li>

                            <a href="">Hút mũi Nosefrida</a>

                        </li>

                    </ul>

                </li>
                <li>
                    <a href="tin-tuc">Thương hiệu </a>
                     <ul class="">
                            <?php 
                            foreach ($list_trademark as $item) { 
                                $list_pro_cat = listProducCatOfTrademark($item['id']);
                            ?>
                            <li>
                                <a href="#"><img src="/images/<?= $item['image'] ?>"></a>
                                <ul> 
                                    <?php 
                                    foreach ($list_pro_cat as $item1) { 
                                        $rowLang = $action_product->getProductCatLangDetail_byId($item1['productcat_id'], $lang);
                                    ?>
                                    <li>
                                        <a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_productcat_name'] ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
                    </ul>
                </li>

                

                <li>
                    <a href="lien-he">Đại lý</a>
                    <ul>
                        <li><a href="tim-dai-ly">Tìm đại lý</a></li>

                        <li><a href="tro-thanh-dai-ly">Trở thành đại lý</a></li>  

                    </ul>
                </li>
                <li>
                    <a href="tin-tuc">Tin tức </a>
                     <ul>
                        <li><a href="tin-hot">Tin hot</a></li>

                        <li><a href="tin-khuyen-mai">Tin khuyến mãi</a></li> 

                        <li><a href="chia-se-kinh-nghiem">Chia sẻ kinh nghiêm</a></li>

                        <li><a href="trai-nghiem-nguoi-dung">Trải nghiệm người dùng</a></li>  

                    </ul>
                </li>
                <li>
                    <a href="tin-tuc">Hỗ trợ</a>
                    <ul>
                        <li><a href="huong-dan-su-dung">Hướng dẫn sửa dụng</a></li>

                        <li><a href="bao-hanh">Bảo hành</a></li> 

                       

                    </ul>
                </li>

                <li><a href="lien-he">Liên hệ</a></li>
                <li>
                    <?php include DIR_SEARCH."MS_SEARCH_LISAVIET_0003.php";?>
                </li>

            </ul> -->
            <?php 
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuTraiCam_1($list_menu,0,$lang,0);
            ?>
        </div>

    </div>

</nav>
<script>
$(document).ready(function(){
    $(".gb-nav-search-lisaviet > a").click(function(){
        $(this).next().children().fadeToggle(800).focus();
    });
});
</script>
<script>
    // console.log($( ".cssmenu > ul > li" ).eq(3).text())
$( ".cssmenu > ul > li" ).eq(3).hover(function() {
    $(this).parents("div.col-md-9").css('position', 'inherit');
    $(this).parents("div.container").css('position', 'relative');
    $(this).children("ul").addClass('custom_cssmenu');
  }, function() {
     $(this).children("ul").removeClass('custom_cssmenu');
  });

</script>
