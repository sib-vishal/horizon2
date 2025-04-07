<?php $page = 'clients';
$data = [
    [
        'name' => 'MAYFAIR',
        'img' => 'logo8.jpg'
    ],
    [
        'name' => 'ROHAN LIFESCAPES',
        'img' => 'rohan-builder.jpg'
    ],
    [
        'name' => 'DLH',
        'img' => 'logo6-1.jpg'
    ],
    [
        'name' => 'MESACON GROUP',
        'img' => 'MESACON-GROUP.jpg'
    ],
    [
        'name' => 'BHARAT INFRA',
        'img' => 'logo1-1.jpg'
    ],
    [
        'name' => 'JPV REALTORS',
        'img' => 'logo4-1.jpg'
    ],
    [
        'name' => 'KALPATARU',
        'img' => 'logo5-1.jpg'
    ],
    [
        'name' => 'MANGAL BUILD HOMES',
        'img' => 'logo15.jpg'
    ],
    [
        'name' => 'SHETH CREATORS',
        'img' => 'logo10.jpg'
    ],
    [
        'name' => 'SWAROOP DEVELOPERS',
        'img' => 'SWAROOP-DEVELOPERS.jpg'
    ],
    [
        'name' => 'ANKUR GROUP',
        'img' => 'logo7.jpg'
    ],
    [
        'name' => 'SHREE BALAJI GROUP',
        'img' => 'SHREE-BALAJI-GROUP.jpg'
    ],
    [
        'name' => 'TANVI CONSTRUCTION',
        'img' => 'logo11.jpg'
    ],
    [
        'name' => 'RAJYOG ENTERPRISES',
        'img' => 'logo17.jpg'
    ],
    [
        'name' => 'ATUL PROJECTS',
        'img' => 'ATUL.jpg'
    ],
    [
        'name' => 'GREENFEILD DEVELOPERS',
        'img' => 'logo3-1.jpg'
    ],
    [
        'name' => 'RUCHIT REALTY',
        'img' => 'logo14.jpg'
    ],
    [
        'name' => 'FORTUNE BUILDERS',
        'img' => 'logo2-1.jpg'
    ],
    [
        'name' => 'VARDHAMAN GROUP',
        'img' => 'logo13.jpg'
    ],
    [
        'name' => 'PRIME TERRA',
        'img' => 'logo16.jpg'
    ],
    [
        'name' => 'VERA DEVELOPERS',
        'img' => 'VEERA.jpg'
    ],
    [
        'name' => 'KONARK BUILDERS',
        'img' => 'KONARK.jpg'
    ],
    [
        'name' => 'SAPTARSHI GROUP',
        'img' => 'SAPTARSHI.jpg'
    ],
    [
        'name' => 'JET REALTY',
        'img' => 'JET-REALTY.jpg'
    ],
    [
        'name' => 'GURUKRUPA GROUP',
        'img' => 'GURUKRUPA.jpg'
    ],
    [
        'name' => 'SADGURU BROTHERS',
        'img' => 'SAGURU.jpg'
    ],
    [
        'name' => 'OYSTER LIVING',
        'img' => 'OYSTER-LIVING.jpg'
    ],
    [
        'name' => 'AGM GROUP',
        'img' => 'AGM.jpg'
    ],
    [
        'name' => 'BHATIYA GROUP',
        'img' => 'BHATIYA-GROUP.jpg'
    ],
    [
        'name' => 'NISAR GROUP',
        'img' => 'NISAAR-GROUP.jpg'
    ],
    [
        'name' => 'KSB GROUP',
        'img' => 'KS-B-GROUP.jpg'
    ],
    [
        'name' => 'MISHAL CONSTRUCTION',
        'img' => 'MISHAL.jpg'
    ],
    [
        'name' => 'ASHRAY REALTORS',
        'img' => 'ASHRAY.jpg'
    ],
    [
        'name' => 'KL GROUP',
        'img' => 'KLGROUP.jpg'
    ],
    [
        'name' => 'PATEL GROUP',
        'img' => 'PATEL-GROUP.jpg'
    ],
    [
        'name' => 'SUNVISION',
        'img' => 'SUN-VISION.jpg'
    ],
    [
        'name' => 'NIRAJ KAKAD',
        'img' => 'NIRAJ-KAKAD.jpg'
    ],
    [
        'name' => 'KAMLA LANDMARC GROUP',
        'img' => 'KAMLA-LANDMARK.jpg'
    ],
    [
        'name' => 'ROYAL REALTORS',
        'img' => 'ROYAL-REALTORS.jpg'
    ],
    [
        'name' => 'KCD',
        'img' => 'KSD.jpg'
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
                          Our Clients
                        </h1>

                        <p class="text-center fontWeight600 mt-5 text-white">
                            Home / Our Clients
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="containerFull ">
            <div class="row justify-content-center">
                <?php foreach ($data as $client) : ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4 text-center">
                        <img src="images/clients/<?php echo $client['img']; ?>" alt="<?php echo $client['name']; ?>" class="img-fluid" style="max-width: 100%; height: auto;">
                       
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
  
   
   

</body>

</html>