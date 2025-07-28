<?php                                                                        
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];

        $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_product->getProductCatDetail_byId($rowCatLang['productcat_id'],$lang);
        $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat['productcat_id'],'desc',$trang,9,$slug);//var_dump($rows);
    }else{
        $rows = $action->getList('product','','','product_id','desc',$trang,9,'san-pham');
    }
    
    $_SESSION['sidebar'] = 'productCat';
?> 
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_LISAVIET_0001.php";?>
<div class="gb-page-sanpham_lisaviet">
    <div class="container">
        <div class="col-md-9">
            <?php include DIR_SEARCH."MS_SEARCH_LISAVIET_0001.php";?>
            <div class="row">
                <?php 
                $d = 0;
                foreach ($rows['data'] as $item) {
                    $d++;
                    $row = $item;
                    $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                ?>
                <div class="col-md-4 col-sm-6">
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
                <?php
                    if ($d%3==0) {
                        echo '<hr style="width:100%;border:0;" />';
                    }
                }
                ?>
            </div>
            <div><?= $rows['paging'] ?></div>
        </div>
        <div class="col-md-3">
            <?php include DIR_SIDEBAR."MS_SIDEBAR_LISAVIET_0001.php";?>
            <?php include DIR_SIDEBAR."MS_SIDEBAR_LISAVIET_0006.php";?>
            <?php include DIR_SIDEBAR."MS_SIDEBAR_LISAVIET_0005.php";?>
            <?php include DIR_SIDEBAR."MS_SIDEBAR_LISAVIET_0003.php";?>
        </div>
    </div>
</div>