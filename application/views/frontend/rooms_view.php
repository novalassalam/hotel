<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Room and Suite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="<?php echo base_url() . 'theme/images/favicon.png' ?>" />
    <meta name="description" content="OpenSource SOURCE CODE company profile hotel yang di develop oleh nono ninii">

    <!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="YES" />
    <!-- //META FOR IOS & HANDHELD -->

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/font-awesome.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/font-lotusicon.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/owl.carousel.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/jquery-ui.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/magnific-popup.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/settings.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/bootstrap-select.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/helper.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/custom.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/responsive.css' ?>">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/style.css' ?>">

</head>

<body>


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v2">

            <?php $this->load->view('frontend/headertop'); ?>
            <!-- END / HEADER TOP -->

            <!-- HEADER LOGO & MENU -->
            <?php $this->load->view('frontend/header'); ?>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->

        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- ROOM -->
        <section class="section-room bg-white">
            <div class="container">

                <div class="room-wrap-3">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">

                            <!-- ITEM -->

                            <?php foreach ($data->result() as $row) :

                                if (($row->kd_compare) % 2 == 0) {
                                    $rata = 'room_item-3 thumbs-right';
                                } else {
                                    $rata = 'room_item-3';
                                }
                            ?>
                                <div class="<?php echo $rata; ?>">

                                    <div class="img">
                                        <a href="<?php echo site_url('reservation'); ?>">
                                            <img src="<?php echo base_url() . 'assets/images/' . $row->gambar_large; ?>" alt="">
                                        </a>
                                    </div>

                                    <div class="text-thumbs">

                                        <div class="thumbs">
                                            <a href="<?php echo site_url('reservation'); ?>"><img src="<?php echo base_url() . 'assets/images/' . $row->gambar_kotak; ?>" alt=""></a>
                                        </div>

                                        <div class="text">
                                            <h2><a href="#"><?php echo $row->type; ?></a></h2>
                                            <span class="price">Start from <span class="amout"><b><?php
                                                                                                    $has = $this->db->get_where('room_price', array('kd_compare' => $row->kd_compare))->last_row()->price;

                                                                                                    echo 'Rp ' . number_format($has); ?></b></span> per day</span>
                                            <?php echo $row->detail; ?>

                                            <span class="price">
                                                <b>Detail room</b>
                                                <hr>
                                                <div class="popup-gallery"> <a href="https://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="The Cleaner"><img src="https://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75"></a> <a href="https://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Winter Dance"><img src="https://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75"></a> <a href="https://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="The Uninvited Guest"><img src="https://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75"></a> <a href="https://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="Oh no, not again!"><img src="https://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75"></a> <a href="https://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg" title="Swan Lake"><img src="https://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75"></a> <a href="https://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg" title="The Shake"><img src="https://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75"></a> <a href="https://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg" title="Who's that, mommy?"><img src="https://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75"></a> </div>
                                             
                                            </span>

                                            <a href="<?php echo site_url('reservation'); ?>" class="awe-btn awe-btn-13">BOOK NOW</a>
                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>
                            <!-- END / ITEM -->


                        </div>



        </section>
        <!-- END / ROOM -->

        <!-- FOOTER -->
        <?php $this->load->view('frontend/footer'); ?>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery-1.11.0.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery-ui.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/bootstrap.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/bootstrap-select.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/isotope.pkgd.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.themepunch.revolution.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.themepunch.tools.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/owl.carousel.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.appear.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.countTo.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.countdown.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.parallax-1.1.3.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.magnific-popup.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/js/scripts.js' ?>"></script>
    <script>
                                                    $(document).ready(function() {
                                                        $('.popup-gallery').magnificPopup({
                                                            delegate: 'a',
                                                            type: 'image',
                                                            tLoading: 'Loading image #%curr%...',
                                                            mainClass: 'mfp-img-mobile',
                                                            gallery: {
                                                                enabled: true,
                                                                navigateByImgClick: true,
                                                                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                                                            },
                                                            image: {
                                                                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                                                                titleSrc: function(item) {
                                                                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                                                                }
                                                            }
                                                        });
                                                    });
                                                </script>
</body>

</html>