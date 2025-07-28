<!--MENU MOBILE-->

<?php include_once DIR_MENU."MS_MENU_LISAVIET_0002.php"; ?>

<!-- End menu mobile-->



<!--MENU DESTOP-->

<header>

    <div class="gb-header-lisaviet">

        <!-- <div class="gb-top-header_lisaviet">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-sm-8">

                        <div class="gb-top-header_lisaviet-left">

                            <ul>

                                <li><i class="fa fa-phone" aria-hidden="true"></i> 0962965624 - 01629662322

                                </li>

                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@lisaviet.com</li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4">

                        <div class="gb-top-header_lisaviet-right">

                            <?php include DIR_SEARCH."MS_SEARCH_LISAVIET_0002.php" ?>

                        </div>

                    </div>

                </div>

            </div>

        </div> -->

        <div class="gb-header-between_lisaviet">

            <div class="container">

                <div class="row">

                    <div class="col-md-3 col-sm-3  col-xs-7">

                        <div class="logo_lisaviet">

                            <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="logo" class="img-responsive"></a>

                        </div>

                    </div>

                    <div class="col-md-9 col-sm-7">

                        <div class="gb-header-between_lisaviet-between">

                            <?php include DIR_MENU."MS_MENU_LISAVIET_0001.php";?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>



<script src="/plugin/sticky/jquery.sticky.js"></script>

<script>

    $(document).ready(function () {

        $(".sticky-menu").sticky({topSpacing:0});

    });

</script>