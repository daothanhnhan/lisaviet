<?php 
    $home_combo_cat = $action_product->getProductCatLangDetail_byId(140, $lang);
    $home_muic_pari_cat = $action_product->getProductCatLangDetail_byId(139, $lang);
    $home_nosefrida_cat = $action_product->getProductCatLangDetail_byId(124, $lang);

    $home_combo_list = $action_product->getProductList_byMultiLevel_orderProductId(140,'desc',1,8,'')['data'];
    $home_muic_pari_list = $action_product->getProductList_byMultiLevel_orderProductId(139,'desc',1,8,'')['data'];
    $home_nosefrida_list = $action_product->getProductList_byMultiLevel_orderProductId(124,'desc',1,8,'')['data'];
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">

<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">

<link rel="stylesheet" href="/plugin/animsition/css/animate.css">

<div class="gb-product-moinhat_lisaviet">

    <div class="container">

        <div class="gb-product_lisaviet-title">

            <h2>Các Sản phẩm phân phối</h2>

            <img src="/images/underline.png" alt="" class="img-responsive">

            <p>

                Tất cả các sản phẩm mang thương hiệu Silicon bao gồm: Thiết bị văn phòng, máy chấm công, bảng flipchart,

                máy đóng sách, máy hủy tài liệu, máy đếm tiền đều được sản xuất trên dây chuyền công nghệ hiện đại tiên

                tiến, đạt tiêu chuẩn chất lượng Châu Âu, được giám định bởi các Tổ chức Chứng nhận và Giám định Sản

                phẩm hàng đầu quốc tế.

            </p>

        </div>

        <div class="gb-product-moinhat_lisaviet-body">

            <div class="tabbable-panel">

                <div class="tabbable-line">

                    <ul class="nav nav-tabs ">

                        <li class="active">

                            <a href="#tab_default_1" data-toggle="tab"><?= $home_combo_cat['lang_productcat_name'] ?></a>

                        </li>

                        <li>

                            <a href="#tab_default_2" data-toggle="tab"><?= $home_muic_pari_cat['lang_productcat_name'] ?></a>

                        </li>

                        <li>

                            <a href="#tab_default_3" data-toggle="tab"><?= $home_nosefrida_cat['lang_productcat_name'] ?></a>

                        </li>

                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_default_1">

                            <div class="gb-cacsanphamphanphoi_lisaviet-slide owl-carousel owl-theme">
                                <?php 
                                $d = 0;
                                foreach ($home_combo_list as $item) {
                                    $d++;
                                    $row = $item;
                                    $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                                ?>
                                <div class="item">

                                    <div class="gb-product_lisaviet-item">

                                        <div class="gb-product_lisaviet-item-img">

                                            <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $row['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>" class="img-responsive"></a>

                                        </div>

                                        <div class="gb-product_lisaviet-item-text">

                                            <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h3>

                                            <!--PRICE-->

                                            <?php include DIR_PRODUCT."MS_PRODUCT_LISAVIET_0002.php";?>

                                        </div>
                                         <div class="btn_cart_product_lisaviet">
                                           <?php include DIR_CART."MS_CART_LISAVIET_0008.php";?>
                                           <?php include DIR_CART."MS_CART_LISAVIET_0009.php";?>
                                        </div>

                                    </div>

                                </div>
                                <?php } ?>
                            </div>

                        </div>

                        <div class="tab-pane" id="tab_default_2">

                            <div class="gb-cacsanphamphanphoi_lisaviet-slide owl-carousel owl-theme">

                                <?php 
                                $d = 0;
                                foreach ($home_muic_pari_list as $item) {
                                    $d++;
                                    $row = $item;
                                    $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                                ?>
                                <div class="item">

                                    <div class="gb-product_lisaviet-item">

                                        <div class="gb-product_lisaviet-item-img">

                                            <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $row['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>" class="img-responsive"></a>

                                        </div>

                                        <div class="gb-product_lisaviet-item-text">

                                            <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h3>

                                            <!--PRICE-->

                                            <?php include DIR_PRODUCT."MS_PRODUCT_LISAVIET_0002.php";?>

                                        </div>
                                         <div class="btn_cart_product_lisaviet">
                                           <?php include DIR_CART."MS_CART_LISAVIET_0008.php";?>
                                           <?php include DIR_CART."MS_CART_LISAVIET_0009.php";?>
                                        </div>

                                    </div>

                                </div>
                                <?php } ?>

                            </div>

                        </div>

                        <div class="tab-pane" id="tab_default_3">

                            <div class="gb-cacsanphamphanphoi_lisaviet-slide owl-carousel owl-theme">

                                <?php 
                                $d = 0;
                                foreach ($home_nosefrida_list as $item) {
                                    $d++;
                                    $row = $item;
                                    $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                                ?>
                                <div class="item">

                                    <div class="gb-product_lisaviet-item">

                                        <div class="gb-product_lisaviet-item-img">

                                            <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $row['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>" class="img-responsive"></a>

                                        </div>

                                        <div class="gb-product_lisaviet-item-text">

                                            <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h3>

                                            <!--PRICE-->

                                            <?php include DIR_PRODUCT."MS_PRODUCT_LISAVIET_0002.php";?>

                                        </div>
                                         <div class="btn_cart_product_lisaviet">
                                           <?php include DIR_CART."MS_CART_LISAVIET_0008.php";?>
                                           <?php include DIR_CART."MS_CART_LISAVIET_0009.php";?>
                                        </div>

                                    </div>

                                </div>
                                <?php } ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>

<script>

    $(document).ready(function (){

        $('.gb-cacsanphamphanphoi_lisaviet-slide').owlCarousel({

            loop:true,

            margin:30,

            navSpeed:500,

            dots: false,

            autoplay: true,

            rewind: true,

            navText:[],

            responsive:{

                0:{

                    items:1,

                    nav:false

                },

                767:{

                    items:3,

                    nav: true

                },

                991:{

                    items:4,

                    nav: true

                }

            }

        });

    });

</script>