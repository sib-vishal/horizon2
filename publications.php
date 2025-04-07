<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Horizon Architects - Welcome to Our Website </title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .header {
            position: relative;
        }

        .header .menu-links ul li {
            padding: 0 20px;
            transition: all 0.3s ease-in-out;
            position: relative;

            & a {
                padding: 35px 0;
                color: var(--primary-color);
                font-weight: 600;
            }
        }

        .header.stricky-fixed .menu-links ul li {
            & a {
                padding: 35px 0;
                color: #000;
                font-weight: 600;
            }
        }

        .header .menu-links ul li:hover {

            & a {
                color: var(--dark-gold);
            }
        }


        /* social */
        .social_links_btn .socialLink ul li a {
            border-radius: 50%;
            background-color: var(--primary-color);
            color: #fff;
            border: none;
        }

        .social_links_btn .socialLink ul li a:hover {
            border-radius: 50%;
            background-color: var(--dark-gold);
            color: #fff;
            border: none;
        }
    </style>


</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>
        <div class="page_banner">
            <div class="container w-100">
                <div class="page_banner_inner d-flex align-items-center ">
                    <div class=" w-100">

                        <h1 class="fontWeight700 text-white text-center large_heading fontHeading">
                            Publications
                        </h1>

                        <p class="text-center fontWeight600 mt-5 text-white">
                            Home / Publications
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="containerFull">
            <h2 class="fontWeight700 heading fontHeading ">
                Awards
            </h2>
            <hr>
            <div class="position-relative">
                <button class="award_btn prev_award">
                    <i class="fa-solid fa-angle-left"></i> </button>

                <div class="swiper awards_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide boder-slider  mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                    Award Name
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide boder-slider mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                    Award Name
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide boder-slider mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                    Award Name
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide boder-slider mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                    Award Name
                                </h5>
                            </div>
                        </div>


                    </div>


                </div>

                <button class="award_btn next_award">
                    <i class="fa-solid fa-angle-right"></i> </button>
                <div class="swiper-pagination-awards d-flex justify-content-center mt-3"></div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="containerFull">
            <h2 class="fontWeight700 heading fontHeading ">
                Magazine
            </h2>
            <hr>
            <div class="position-relative">
                <button class="award_btn prev_mag">
                    <i class="fa-solid fa-angle-left"></i> </button>

                <div class="swiper mag_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide boder-slider  mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                Magazine Name
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide boder-slider mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                Magazine Name
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide boder-slider mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                Magazine Name
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide boder-slider mb-3">
                            <div class="img_box">
                                <img src="https://placehold.co/600x400" alt="">
                            </div>
                            <div class="content">
                                <h5 class="fontWeight700 fontHeading text-center">
                                Magazine Name
                                </h5>
                            </div>
                        </div>


                    </div>


                </div>

                <button class="award_btn next_mag">
                    <i class="fa-solid fa-angle-right"></i> </button>
                <div class="swiper-pagination-awards d-flex justify-content-center mt-3"></div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="containerFull">
            <h2 class="fontWeight700 heading fontHeading ">
               Our Videos
            </h2>
            <hr>

            <div class="row ">
                <div class="col-lg-4">


                </div>

            </div>
           
        </div>
    </section>



    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>

    <script>
        var swiper = new Swiper(".awards_slider", {
            spaceBetween: 30,

            slidesPerView: 3,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination-awards",
                clickable: true,
            },
            navigation: {
                nextEl: ".next_award",
                prevEl: ".prev_award",
            },
        });
        var swiper = new Swiper(".mag_slider", {
            spaceBetween: 30,

            slidesPerView: 3,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination-mag",
                clickable: true,
            },
            navigation: {
                nextEl: ".next_mag",
                prevEl: ".prev_mag",
            },
        });
    </script>


</body>

</html>