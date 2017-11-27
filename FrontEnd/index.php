<?php include "includes/header.php" ?>

    <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                <img src="images/banner.jpg" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">Gallinas y huevos de alta calidad</h4>
                        <!-- /Text title -->

                        <!-- Text description -->
                        <p class="description">Criadas con el mejor cuidado</p>
                        <!-- /Text description -->
                    </div>
                </div>
                <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/banner1.jpg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Control total en alimentación, vacunas y tratamientos </h4>
                        <p class="description">Garantizando la frescura y calidad del animal</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
    <div class="main">
        <div class="wrap">
            <div class="section group">
                <div class="cont span_2_of_3">
                    <h2 class="head">Productos disponibles</h2>
                    <div class="top-box">
                        <?php
                        for ($x = 0; $x <= 8; $x++) { ?>
                            <div class="col_1_of_3 span_1_of_3">
                                <a href="single.php">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="images/carton.jpg" alt=""/>
                                        </div>
                                        <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                        <div class="price">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum simply</p>
                                                <div class="price1">
                                                    <span class="actual">$12.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-right"></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>


                        <div class="clear"></div>
                    </div>


                </div>
                <div class="rsidebar span_1_of_left">
                    <div class="top-border"></div>
                    <div class="border">
                        <link href="css/default.css" rel="stylesheet" type="text/css" media="all"/>
                        <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all"/>
                        <script src="js/jquery.nivo.slider.js"></script>
                        <script type="text/javascript">
                            $(window).load(function () {
                                $('#slider').nivoSlider();
                            });
                        </script>
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                                <img src="images/t-img1.jpg" alt=""/>
                                <img src="images/t-img2.jpg" alt=""/>
                                <img src="images/t-img3.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="btn"><a href="single.html">100% Calidad</a></div>
                    </div>


                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
<?php include "includes/footer.php" ?>