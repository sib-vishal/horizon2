<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper with Individual Parallax Backgrounds</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>
        .b {
            border: 2px solid red;
        }

        body {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
            /* font-family: "Poppins", serif; */
            font-family: "Inter", sans-serif;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
        }

        .swiper-container {
            width: 100%;
            height: 90vh;
            margin: 50px auto;
            position: relative;
            overflow: hidden;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }

        /* Each slide's unique parallax background */
        .parallax-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 130%;
            height: 100%;

            background-size: 1600px 100%;
            background-position: center;
            transition: transform 0.5s ease-out;
        }

        /* Pagination Bullets */
        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: #ccc;
            opacity: 1;
            position: relative;
            overflow: hidden;
            transition: all .4s ease-in-out;
        }

        /* Active Bullet */
        .swiper-pagination-bullet-active {
            background: rgb(0, 0, 0);
            width: 70px;
            border-radius: 15px;
        }

        /* Progress Effect */
        .swiper-pagination-bullet-active::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 122, 255, 0.5);
            top: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: left;
            animation: progressBar 2s linear forwards;
        }

        @keyframes progressBar {
            0% {
                transform: scaleX(0);
            }

            100% {
                transform: scaleX(1);
            }
        }
    </style>
</head>

<body>

    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide b">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner-2.jpg');"></div>
                <div>Experienced Designers</div>
            </div>
            <div class="swiper-slide b">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner-3.jpg');"></div>
                <div>Tailored Designs</div>
            </div>
            <div class="swiper-slide">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner-2.jpg');"></div>
                <div>High-Quality Graphics</div>
            </div>
            <div class="swiper-slide">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner.jpg');"></div>
                <div>Quick Turnaround</div>
            </div>
            <div class="swiper-slide">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner-3.jpg');"></div>
                <div>Affordable Pricing</div>
            </div>
            <div class="swiper-slide">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner-2.jpg');"></div>
                <div>Customer-Centric Approach</div>
            </div>
            <div class="swiper-slide">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner.jpg');"></div>
                <div>Cutting-Edge Tools</div>
            </div>
            <div class="swiper-slide">
                <div class="parallax-bg" data-swiper-parallax="-100"
                    style="background-image: url('./images/banner/banner-3.jpg');"></div>
                <div>Reliable Support</div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            spaceBetween: 0,

            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            speed: 1000,
            parallax: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

</body>

</html>