<?php $page = 'people';

$team = [
    "founders" => [
        [
            "name" => "AR. HEMAL SHAH",
            "image" => "hemal-1024x682.jpg",
            "role" => "Founder"
        ],
        [
            "name" => "AMITA SHAH",
            "image" => "Screenshot-2024-11-06-173144-e1730895092870.png"
            ,
            "role" => "Founder"
        ]
    ],
    "design_team" => [
        [
            "name" => "AR. DHARMIK CHHABHAYIA",
            "image" => "2-1-200x300.png"
        ],
        [
            "name" => "AR. NEHA DOSHI",
            "image" => "3-200x300.png"
        ],
        [
            "name" => "AR. VRUTIKA GOHIL",
            "image" => "4-200x300.png"
        ],
        [
            "name" => "AR. SIDDHARTH PATEL",
            "image" => "5-200x300.png"
        ],
        [
            "name" => "AR. RITIK JAIN",
            "image" => "6-200x300.png"
        ],
        [
            "name" => "AR. AAKANKSH CHAUHAN",
            "image" => "7-200x300.png"
        ],
        [
            "name" => "AR. POOJA GUPTA",
            "image" => "8-200x300.png"
        ],
        [
            "name" => "AR. NISCHAY SHARMA",
            "image" => "9-200x300.png"
        ],
        [
            "name" => "AR. KEWAL PASAD",
            "image" => "10-200x300.png"
        ],
        [
            "name" => "AR. YASH PAMECHA",
            "image" => "11-200x300.png"
        ],
        [
            "name" => "AR. NIDHI RATHI",
            "image" => "12-200x300.png"
        ],
        [
            "name" => "AR. RATEESH PRABHAKAR",
            "image" => "13-200x300.png"
        ],
        [
            "name" => "AR. CHARVI ASHRA",
            "image" => "14-200x300.png"
        ],
        [
            "name" => "AR. RIDDHI LATHI",
            "image" => "15-200x300.png"
        ],
        [
            "name" => "AR. KKRISH RATHOD",
            "image" => "16-200x300.png"
        ],
        [
            "name" => "AR. SAKET JANGID",
            "image" => "17-200x300.png"
        ],
        [
            "name" => "AR. GOWIND SAWANT",
            "image" => "18-200x300.png"
        ],
        [
            "name" => "AR. ARJUN BARI",
            "image" => "19-200x300.png"
        ],
        [
            "name" => "AR. BHAVYA GALA",
            "image" => "20-200x300.png"
        ],
        [
            "name" => "AR. KEVAL THUMAR",
            "image" => "21-200x300.png"
        ],
        [
            "name" => "AR. PARTH MAKWANA",
            "image" => "22-200x300.png"
        ]
    ],
    "drawing_team_pratik_hatiwala" => [
        [
            "name" => "AR. ABHAY DIWALE",
            "image" => "23-200x300.png"
        ],
        [
            "name" => "AR. ATHARVA TATKARE",
            "image" => "24-200x300.png"
        ],
        [
            "name" => "AR. RIDDHI MODI",
            "image" => "25-200x300.png"
        ],
        [
            "name" => "AR. MIDHUN MANOJ",
            "image" => "26-200x300.png"
        ],
        [
            "name" => "AR. BHANVI MHATRE",
            "image" => "27-200x300.png"
        ],
        [
            "name" => "AR. PRANAY NAR",
            "image" => "28-200x300.png"
        ],
        [
            "name" => "AR. HARSH MODY",
            "image" => "29-200x300.png"
        ]
    ],
    "working_drawing_team_vinay_kadam" => [
        [
            "name" => "AR. NAYAN ZATE",
            "image" => "30-200x300.png"
        ],
        [
            "name" => "AR. JANHAVI SHIRKE",
            "image" => "31-200x300.png"
        ],
        [
            "name" => "AR. SHIVANGI VERMA",
            "image" => "32-200x300.png"
        ],
        [
            "name" => "AR. MANALI HUMANE",
            "image" => "33-200x300.png"
        ]
    ],
    "interior_design_team" => [
        [
            "name" => "DHARANA SHAH",
            "image" => "34-200x300.png"
        ],
        [
            "name" => "DHWANI VAGHASIYA",
            "image" => "35-200x300.png"
        ],
        [
            "name" => "GANESH PATNE",
            "image" => "36-200x300.png"
        ]
    ],
    "department_heads" => [
        [
            "name" => "SUDHIR KANCHAN",
            "image" => "37-200x300.png"
        ],
        [
            "name" => "PRATIK HATHIWALA",
            "image" => "38-200x300.png"
        ],
        [
            "name" => "AR. VINAY KADAM",
            "image" => "39-200x300.png"
        ],
        [
            "name" => "HIREN CHOTALIYA",
            "image" => "40-200x300.png"
        ]
    ],
    "administration_department" => [
        [
            "name" => "SHEELA GOWDA",
            "image" => "42-199x300.png"
        ],
        [
            "name" => "NAVNATH UTEKAR",
            "image" => "43-208x300.png"
        ],
        [
            "name" => "MANOJ VARADELLI",
            "image" => "44-206x300.png"
        ]
    ],
    "accounts_department" => [
        [
            "name" => "DEEPAK CHIKHALE",
            "image" => "45-203x300.png"
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

        <div class="page_banner  " style="background-image: url(images/banner/people.jpg);">
            <div class="container w-100">
                <div class="page_banner_inner d-flex align-items-center ">
                    <div class=" w-100">

                        <h1 class="fontWeight700 text-white text-center large_heading fontHeading">
                            Our People
                        </h1>

                        <p class="text-center fontWeight600 mt-5 text-white">
                            Home / Our People
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <section>
            <div class="containerFull">
                <div class="row justify-content-center ">
                    <?php foreach ($team as $department => $members): ?>
                        <!-- Team Name as Section Title -->
                        <div class="col-12 text-center">
                            <div class="team-department my-5">
                                <h4 class="heading fontHeading fontWeight900">
                                    <?php echo ucwords(str_replace('_', ' ', $department)); ?>
                                </h4>
                            </div>
                        </div>

                        <?php foreach ($members as $member): ?>
                            <?php
                            $role = isset($member['role']) ? $member['role'] : "Member";
                            $colClass = ($role === 'Founder') ? 'col-lg-6' : 'col-lg-3';
                            ?>
                            <div class=" mb-4  <?php echo $colClass; ?> col-md-4 col-6 text-center">
                                <div class="item_states_interior">
                                    <img src="images/our-people/<?php echo htmlspecialchars($member['image']); ?>" class="img-fluid rounded"
                                        alt="<?php echo htmlspecialchars($member['name']); ?>">
                                    <h5 class="mt-3"><?php echo htmlspecialchars($member['name']); ?></h5>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>



            </div>
        </section>

    </div>



    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>