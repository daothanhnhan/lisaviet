<?php 
    $home_news_new = $action_news->getListNewsNew_hasLimit(6);//var_dump($sidebar_news_new);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-newsbloghome_lisaviet">
    <div class="container">
        <div class="gb-product_lisaviet-title">
            <h2>Tin tức Mới nhất</h2>
            <img src="/images/underline.png" alt="" class="img-responsive">
        </div>
        <div class="gb-newsbloghome_lisaviet-slide owl-carousel owl-theme">
            <?php 
            foreach ($home_news_new as $item) {
                $rowLang = $action_news->getNewsLangDetail_byId($item['news_id'],$lang);
            ?>
            <div class="item">
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
                            <p><?= substr($rowLang['lang_news_des'], 0, 200) ?>...</p>
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

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-newsbloghome_lisaviet-slide').owlCarousel({
            loop:true,
            margin: 30,
            navSpeed:500,
            nav:false,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:3
                }
            }
        });
    });
</script>