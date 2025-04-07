<header class="header-home">
    <div class="containerFull">
        <div class="header-inner">

            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="Logo">

                </a>

            </div>
            <div class="menu-btn">
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
            </div>
        </div>

    </div>
</header>

<div class="sidebar">
    <div class="sidebar-close">
        <div class="sidebar-close-line"></div>
        <div class="sidebar-close-line"></div>
    </div>
    <nav class="sidebar-nav col-lg-6 mx-auto">
        <ul class="sidebar-menu fontHeading">
            <li><a href="index.php">Home</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="our-people.php">Our People</a></li>
            <!-- <li><a href="architecture.php">Architecture</a></li> -->
            <li><a href="interior.php">Interior</a></li>
            <li><a href="vastu-vision.php">Vastu Vision</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
    </nav>
</div>

<script>
    // Select all necessary elements
    const sidebar = document.querySelector('.sidebar');
    const sidebarCloseBtn = document.querySelector('.sidebar-close');
    const menuBtn = document.querySelector('.menu-btn');
    const menuLines = document.querySelectorAll('.menu-line');

    function openSidebar() {

        gsap.set(sidebar, { right: -300 });

        sidebar.style.display = 'block';
        gsap.to(sidebar, {
            duration: 0.5,
            right: 0,
            ease: "power2.out"

        });

        // gsap.to(menuLines[0], {
        //     rotation: 45,
        //     y: 8,
        //     backgroundColor: 'white'
        // });
        // gsap.to(menuLines[1], {
        //     opacity: 0
        // });
        // gsap.to(menuLines[2], {
        //     rotation: -45,
        //     y: -8,
        //     backgroundColor: 'white'
        // });
    }

    function closeSidebar() {

        gsap.to(sidebar, {
            duration: 0.5,
            right: -300,
            ease: "power2.in",
            onComplete: () => {
                sidebar.style.display = 'none';
            }
        });

        // gsap.to(menuLines[0], {
        //     rotation: 0,
        //     y: 0,
        //     backgroundColor: '#fff'
        // });
        // gsap.to(menuLines[1], {
        //     opacity: 1
        // });
        // gsap.to(menuLines[2], {
        //     rotation: 0,
        //     y: 0,
        //     backgroundColor: '#fff'
        // });
    }

    menuBtn.addEventListener('click', openSidebar);


    sidebarCloseBtn.addEventListener('click', closeSidebar);
</script>