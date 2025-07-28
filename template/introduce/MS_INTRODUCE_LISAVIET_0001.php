<?php 
     $action_page = new action_page(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_page->getPageLangDetail_byUrl($slug,$lang);
    $row = $action_page->getPageDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'pageDetail';
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_LISAVIET_0001.php";?>
<div class="gb-introducehome_lisaviet">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div class="gb-introducehome_lisaviet-left">

                    <?= $rowLang['lang_page_content'] ?>

                    

                </div>

            </div>

           

        </div>

    </div>

</div>