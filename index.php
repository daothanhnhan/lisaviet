<?php
//phpinfo();die;
session_start();
ob_start();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$folder = dirname(__FILE__);
include_once('config.php');
include_once('__autoload.php');
$action = new action();
include_once dirname(__FILE__).DIR_FUNCTIONS."database.php";
// $urlAnalytic = $action->showabc();    
include_once dirname(__FILE__).'/'.DIR_FUNCTIONS_PAGING."pagination.php";
include_once 'functions/phpmailer/class.smtp.php';
include_once 'functions/phpmailer/class.phpmailer.php';
include_once "functions/vi_en.php";
// // LÀM RÕ NHỮNG THƯ VIỆN NÀY
// // include_once('lib/vi_en.php');
// // include_once('lib/nganLuong/NL_Checkoutv3.php');

// // LÀM RÕ Install Cart

// Install MultiLanguage
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE."lang_config.php";
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE.$lang_file;
// Install Friendly Url
include_once dirname(__FILE__).DIR_FUNCTIONS_URL."url_config.php";
// Configure Website
include_once dirname(__FILE__).DIR_FUNCTIONS."website_config.php";
// echo $translate['link_contact'];die;
$trang = isset($_GET['trang']) ? $_GET['trang'] : '1';
// $action = new action();
$cart = new action_cart();
$menu = new action_menu();
$action_product = new action_product();
$action_news = new action_news();
$action_page = new action_page();
if($lang == "vn"){
    $rowConfig_lang = $action->getDetail('config_languages','id',1);
}else{
    $rowConfig_lang = $action->getDetail('config_languages','id',2);
}


$rowConfig = $action->getDetail('config','config_id',1);
?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="<?= $meta_des ?>">

    <meta name="keywords" content="<?= $meta_key ?>">

    <title>l<?= $title ?></title>

    <link rel="icon" href="/images/<?= $rowConfig['icon_web'] ?>" type="image/gif" sizes="16x16">



    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap-theme.css">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css'>

    <link rel="stylesheet" href="/plugin/fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/style-lisaviet.css">

    <script src="/plugin/jquery/jquery-2.0.2.min.js"></script>

    <script src="/plugin/bootstrap/js/bootstrap.js"></script>

</head>



<body>

<?php include_once dirname(__FILE__).DIR_THEMES."header.php";?>

<div class="gb-content">

    <?php

    if (isset($_GET['page'])){



        $urlAnalytic = $action->getTypePage_byUrl($_GET['page'],$lang);
        // echo $urlAnalytic;

        switch ($urlAnalytic) {



            case 'tin-tuc':
                $title = "Tin Tức";


                include_once dirname(__FILE__).DIR_THEMES."tintuc.php"; break;

            case 'newscat_languages':
                include_once dirname(__FILE__).DIR_THEMES."tintuc.php"; break;

            case 'search-news':
                include_once dirname(__FILE__) . DIR_THEMES . "search-news.php";break;

            case 'news_languages':



                include_once dirname(__FILE__).DIR_THEMES."chitiettintuc.php"; break;

            case 'lien-he':
                $title = "Liên hệ";


                include_once dirname(__FILE__).DIR_THEMES."lienhe.php"; break;



            case 'gio-hang':



                include_once dirname(__FILE__).DIR_THEMES."giohang.php"; break;



            case 'khuyen-mai':



                include_once dirname(__FILE__).DIR_THEMES."khuyenmai.php"; break;

            case 'san-pham':
                $title = "Sản phẩm";


                include_once dirname(__FILE__).DIR_THEMES."sanpham.php"; break;

            case 'productcat_languages':
                include_once dirname(__FILE__).DIR_THEMES."sanpham.php"; break;

            case 'search-product':
                include_once dirname(__FILE__) . DIR_THEMES . "search-product.php";break;

            case 'price':
                include_once dirname(__FILE__) . DIR_THEMES . "price.php";break;

            case 'hang-thanh-ly':



                include_once dirname(__FILE__).DIR_THEMES."hangthanhly.php"; break;



            case 'thanh-toan':
                $title = "Thanh toán";


                include_once dirname(__FILE__).DIR_THEMES."cart-payment.php"; break;

            case 'product_languages':



                include_once dirname(__FILE__).DIR_THEMES."chitietsanpham.php"; break;

            case 'huong-dan-dat-hang':



                include_once dirname(__FILE__).DIR_THEMES."huongdanmuahang.php"; break;

            case 'huong-dan-thanh-toan':



                include_once dirname(__FILE__).DIR_THEMES."cachthucthanhtoan.php"; break;



            case 'chinh-sach-van-chuyen':



                include_once dirname(__FILE__).DIR_THEMES."chinhsachvanchuyen.php"; break;

            case 'page_language':



                include_once dirname(__FILE__).DIR_THEMES."gioithieu.php"; break;

            case 'tro-thanh-dai-ly':

                include_once dirname(__FILE__).DIR_THEMES."daily.php"; break;


            case 'tim-dai-ly':

                include_once dirname(__FILE__).DIR_THEMES."daily.php"; break;

        }

    }

    else include_once dirname(__FILE__).DIR_THEMES."home.php";

    ?>

</div>





<?php include_once dirname(__FILE__).DIR_THEMES."footer.php"; ?>

</body>



</html>



