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
                            Interior
                        </h1>

                        <p class="text-center fontWeight600 mt-5 text-white">
                            Home / Interior
                        </p>
                    </div>

                </div>
            </div>
        </div>

      





    </div>



    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <script src="https://unpkg.com/splitting@1.0.5/dist/splitting.js">
    </script>
    <script src="https://codepen.io/shshaw/pen/5eb6d4e9bfd78e3911ed9d0d0dfce69b.js">
    </script>
    <script>
        var swiper = new Swiper(".testimonial-slider2", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Splitting({
                target: '.tiler',
                by: 'cells',
                rows: 3,
                columns: 3,
                image: true
            });
            const videos = document.querySelectorAll(".testimonial-clip");
            const buttons = document.querySelectorAll(".playbtn");

            buttons.forEach((button, index) => {
                button.addEventListener("click", function () {
                    const video = videos[index];

                    if (video.paused) {
                        video.play();
                        button.style.display = "none";
                    } else {
                        video.pause();
                        button.style.display = "block";
                    }
                });


                videos[index].addEventListener("play", function () {
                    buttons[index].style.display = "none";
                });


                videos[index].addEventListener("pause", function () {
                    buttons[index].style.display = "block";
                });

                videos[index].addEventListener("ended", function () {
                    buttons[index].style.display = "block";
                });
            });



        });
    </script>

</body>

</html>