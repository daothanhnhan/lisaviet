<?php 
    $home_truyen_thong_cat = $action_news->getNewsCatLangDetail_byId(75, $lang);
    $home_truyen_thong_list = $action_news->getNewsList_byMultiLevel_orderNewsId(75,'desc',1,3,'')['data'];
?>
<div class="gb-truyenthongnoi_lisaviet">
    <div class="container">
        <div class="gb-product_lisaviet-title">
            <h2><?= $home_truyen_thong_cat['lang_newscat_name'] ?></h2>
            <img src="/images/underline.png" alt="" class="img-responsive">
        </div>
        <div class="row">
            <?php 
            $d = 0;
            foreach ($home_truyen_thong_list as $item) {
                $d++;
                $rowLang = $action_news->getNewsLangDetail_byId($item['news_id'],$lang); 
            ?>
            <div class="col-sm-4">
                <div class="gb-news-blog_lisaviet-item">
                    <div class="gb-news-blog_lisaviet-item-img">
                        <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $item['news_img'] ?>" alt="<?= $rowLang['lang_news_name'] ?>" class="img-responsive"></a>
                        <div class="caption caption-large">
                            <time class="the-date"><?= substr($item['news_created_date'], 0, 10) ?></time>
                        </div>
                    </div>
                    <div class="gb-news-blog_lisaviet-item-text">
                        <div class="gb-news-blog_lisaviet-item-title">
                            <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a></h3>
                        </div>
                        <div class="gb-news-blog_lisaviet-item-text-des">
                            <p><?= $rowLang['lang_news_des'] ?></p>
                        </div>
                    </div>
                    <div class="gb-news-blog_lisaviet-item-button">
                        <a href="/<?= $rowLang['friendly_url'] ?>">
                            <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>