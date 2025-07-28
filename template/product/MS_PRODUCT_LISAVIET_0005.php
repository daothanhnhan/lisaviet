<?php 
    $product_related1 = $action_product->getListProductRelate_byIdCat_hasLimit($productcat_id, 8);//var_dump($product_related1);die;
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-home-product gb-home-product-relate">
    <div class="container">
        <div class="titleCategoryProduct_lisaviet">Sản phẩm liên quan</div>
        <div class="gb-home-product-relate-slide owl-carousel owl-theme">
            <?php 
            foreach ($product_related1 as $item) {
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

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        var owl = $('.gb-home-product-relate-slide');
        owl.owlCarousel({
            loop:true,
            margin:30,
            navSpeed:500,
            nav:true,
            dots:false,
            autoplay: true,
            rewind: true,
            navText:[],
            items:4
        });
    });
</script>