<?php $page = 'mixed-use-architechture'; ?>
<?php
$projects = [
    [
        "project_name" => "Pratap Elegance",
        "developer" => "JPV Realtors",
        "location" => "Andheri West",
        "status" => "Completed",
        "design_team" => [
            "Dharana Shah",
            "Hiren Cholalia"
        ],
        "images" => [
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg"
        ] // <- This closing bracket was missing
    ],

    [
        "project_name" => "Satsang Bharti",
        "developer" => "Rohan Reality",
        "location" => "Malad",
        "status" => "Completed",
        "design_team" => [
            "Ar. Akshay Agarwal"
        ],
        "images" => [
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg"
        ]
    ],
    [
        "project_name" => "Jaydeep Regalia",
        "developer" => "Mukesh Mannat",
        "location" => "Mulund",
        "status" => "On Going",
        "design_team" => [
            "Dharana Shah",
            "Hiren Chotalia"
        ],
        "images" => [
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg",
            "1-scaled-500x420.jpg"
        ]
    ]
];
?>



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
                            Mixed-Use Architechture
                        </h1>

                        <p class="text-center fontWeight600 mt-5 text-white">
                            Home / Mixed-Use Architechture
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="containerFull">
            <div class="row">

                <?php foreach ($projects as $project): ?>
                    <div class="col-lg-4">
                        <div class="item_architechture">
                            <div class="slider">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($project['images'] as $image): ?>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <img src="images/projects/<?= htmlspecialchars($image) ?>"
                                                        alt="Project Image" class="img-fluid" />
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="swiper-button-next "></div>
                                    <div class="swiper-button-prev "></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>

                            <div class="content mt-3">
                                <h5><?= htmlspecialchars($project['project_name']) ?></h5>
                                <div class="d-flex mt-2 flex-wrap gap-1">
                                    <p><strong>Developer:</strong> <?= htmlspecialchars($project['developer']) ?></p> |
                                    <p><strong>Location:</strong> <?= htmlspecialchars($project['location']) ?></p>
                                    <p><strong>Status:</strong> <?= htmlspecialchars($project['status']) ?></p>
                                    <p><strong>Design Team:</strong>
                                        <?= implode(', ', array_map('htmlspecialchars', $project['design_team'])) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
    </section>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


</body>

</html>