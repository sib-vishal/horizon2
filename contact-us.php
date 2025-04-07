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
                           Contact Us
                        </h1>

                        <p class="text-center fontWeight600 mt-5 text-white">
                            Home / Contact Us
                        </p>
                    </div>

                </div>
            </div>
        </div>

        
        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="leftContactInnerPage">
                            <div class="d-flex align-items-center">
                                <div class="iconLaw">
                                    <i class="fa-solid fa-house"></i>
                                </div>
                                <div class="rightIconLaw">
                                    <p class="title fontWeight600 text_primary"><i>Get in Touch</i></p>
                                </div>
                            </div>
                            <h2 class="sub_heading fontWeight600 mt-4">Do you need help?</h2>
                            <h3 class="sub_heading fontWeight600 text_primary mt-2"><i>Contact with us now!</i></h3>
                            <div class="newContactIcons stickyItem">
                                <div class="connectIcon">
                                    <div class="newIcons">
                                        <div class="loader">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="fontWeight600 fontHeading">Address</h3>
                                        <h5>Topiwala Centre, 2ND FLOOR, OFFICE UNIT NO.1, Washington Plaza, Swami Vivekanand Marg, Goregaon West, Mumbai Suburban, MH-400104</h5>
                                    </div>
                                </div>
                                <div class="connectIcon">
                                    <div class="newIcons">
                                        <div class="loader">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="fontWeight600 fontHeading">Phone</h3>

                                        <h5><a class="text-black" href="tel: 022- 35110154"> 022 2613 6658
                                            </a></h5>
                                    </div>
                                </div>
                                <div class="connectIcon">
                                    <div class="newIcons">
                                        <div class="loader">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="fontWeight600 fontHeading">Email</h3>

                                        <h5><a class="text-black"
                                                href="mailto:info@horizonarchitects.co.in">info@horizonarchitects.co.in</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="rightContactInner">
                            <h3 class="sub_heading fontHeading fontWeight60 text-center"><span
                                    class="text-white">Contact
                                    with us</span> <span class="text_primary">now !</span></h3>
                            <form action="" class="mt-4">
                                <div class="itemFormInner">
                                    <input type="text" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="itemFormInner">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="itemFormInner">
                                    <input type="phone" name="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="itemFormInner">
                                    <input type="text" name="company" placeholder="Company Name">
                                </div>
                                <!--<div class="itemFormInner">-->
                                <!--    <textarea name="message" id="" placeholder="Write your message"></textarea>-->
                                <!--</div>-->
                                <div class="itemFormInner">
                                    <button class="btnContact">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25164.100081752367!2d72.846702!3d19.163451!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b41b55c2cf%3A0xdcac34199d7f880b!2sHorizon%20Architects!5e1!3m2!1sen!2sin!4v1742645837940!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>
    </div>



    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>