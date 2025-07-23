<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/imgs">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/imgs/favicon-16x16.png">
    <meta name="author" content="Apoorv Sharat">
    <meta name="keywords" content="Portfolio, portfolio design, developer portfolio, hello world, HTML, CSS, JavaScript, Apoorv, sharat, Sharat, Apoorv Sharat, portfolio, developer, front end, back end, full stack">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Apoorv Sharat | Portfolio | Full Stack Developer" />
    <meta property="og:title" content="Sharat - Portfolio" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image" content="favicon.ico" />
    <meta property="og:url" content="https://sharat.tech/" />
    <meta property="og:description" content="Hey there! Welcome to my portfolio. It contains a wide variety of projects I have worked on and some of the github repositories too.">
    <meta content="Hey there! Welcome to my portfolio. It contains a wide variety of projects I have worked on and some of the github repositories too." name="description" />
    <meta name="copyright" content="https://sharat.tech/">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="general">
    <title>Apoorv Sharat | Full Stack Developer</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="assets/css/meyawo.css">

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <style>
        * {
            z-index: 1;
        }

        .neon-circle {
            position: fixed;
            width: 300px;
            height: 300px;
            z-index: -1;
            background: rgb(59, 130, 246);
            background: radial-gradient(circle, rgb(23, 31, 59) 50%, rgb(21 35 66) 50%, rgb(15, 27, 53) 50%, rgba(15, 23, 42, 1) 100%);
            border-radius: 50%;
            pointer-events: none;
            /* Prevents the circle from interfering with other elements */
            transform: translate(-50%, -50%);
            /* Center the circle on the cursor */
            will-change: transform;
            /* Optimize performance */
        }
    </style>
    <?php
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        session_unset();
        session_destroy();
        echo '<script>alert("' . $error . '")</script>';
    }
    ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">Sharat</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Testmonial</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header justify-items-space-around">
        <div class="header-content">
            <div id="particles-js"></div>
            <h1 class="header-title">
                <span class="up">Hi! I'm Apoorv Sharat</span>
            </h1>
            <p class="header-subtitle">Full-Stack Web Developer & Digital Creator</p>
            <p class="header-description">Crafting high-performance websites, sleek user experiences, and growth-driven solutions for modern businesses.</p>
            <a class="btn btn-primary" href="#contact">Let's Work Together</a>
        </div>
        <img src="assets/imgs/Astronout_Apoorv_Sharat.png" class="about-img" alt="Apoorv Sharat personal portfolio">
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <div class="container text-center">
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/Apoorv.png" class="about-img" alt="Apoorv Sharat personal portfolio">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Tech Entrepreneur | Full-Stack Web Developer | Brand Strategist</p>
                    <h2 class="section-title mb-3">Meet Apoorv Sharat</h2>
                    <p>
                        With 6+ years in the digital space, I’ve helped startups and brands build standout web platforms, apps, and marketing systems that don’t just look good — they drive results. Whether it’s a polished landing page, an end-to-end app, or a growth funnel, I bring a deep blend of technology, design, and strategy to every project.<br><br>
                        <strong>From founding AssignIQ (AI project manager) to leading Classhed (student-tech ecosystem), my journey has been driven by one goal: Build digital experiences that create real impact.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Offer</p>
            <h6 class="section-title mb-6">Services</h6>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/responsive.svg" alt="Web Development" class="icon">
                            <h6 class="title">Web Development</h6>
                            <p class="subtitle">Responsive, fast, and scalable websites and apps built using React, PHP, Laravel, Node.js, and Firebase.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/pencil-case.svg" alt="Graphic & UI/UX Design" class="icon">
                            <h6 class="title">Graphic & UI/UX Design</h6>
                            <p class="subtitle">Professional, brand-aligned visuals, logos, banners, social media creatives, and full UI kits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/analytics.svg" alt="Digital Marketing & SEO" class="icon">
                            <h6 class="title">Digital Marketing & SEO</h6>
                            <p class="subtitle">Result-focused SEO strategies, ad campaigns, and digital funnels to help you grow fast & smart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/toolbox.svg" alt="Android App Development" class="icon">
                            <h6 class="title">Android App Development</h6>
                            <p class="subtitle">Custom Android apps with clean architecture, modern UI, and seamless integration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">Featured Projects</p>
            <h6 class="section-title mb-6">Coming Soon</h6>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="portfolio-card">
                        <a href="https://assigniq.tech">
                        <img src="assets/imgs/assigniq.png" class="portfolio-card-img" alt="AssignIQ">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>AssignIQ</h4>
                                <p class="font-weight-normal">AI-powered task manager for startups</p>
                            </span>
                        </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="portfolio-card">
                        <a href="#">
                        <img src="assets/imgs/classhed.png" class="portfolio-card-img" alt="Classhed">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Classhed</h4>
                                <p class="font-weight-normal">Learning & hackathon ecosystem for students</p>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="portfolio-card">
                        <a href="#">
                        <img src="assets/imgs/oh.png" class="portfolio-card-img" alt="Object Heaven">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Object Heaven</h4>
                                <p class="font-weight-normal">3D product design marketplace</p>
                            </span>
                        </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="portfolio-card">
                        <a href="#">
                        <img src="assets/imgs/commingsoon.png" class="portfolio-card-img" alt="Client Brands">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>...and more</h4>
                                <p class="font-weight-normal">E-commerce, education, and local businesses</p>
                            </span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="btn btn-outline-primary mt-4" href="./portfolio">📂 Explore Portfolio</a>
        </div>
    </section>

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn btn-lg my-font btn-primary rounded">Hire Me</button>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Clients Say</p>
            <h6 class="section-title mb-6">Testimonials</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar2.jpg" class="testimonial-card-img" alt="Client Testimonial">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">“Apoorv's work on our eCommerce site was exceptional — fast, responsive, and brand-perfect.”</p>
                            <h6 class="testimonial-card-title">[Client Name], CEO, [Brand]</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar3.jpg" class="testimonial-card-img" alt="Client Testimonial">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">“From zero to launch in 3 weeks. Highly recommended for any startup founder.”</p>
                            <h6 class="testimonial-card-title">[Client Name], Startup Founder</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">Ready to launch something powerful?</p>
            <h6 class="section-title mb-5">Let's Connect</h6>
            <form action="./forms/sendMail.php" class="contact-form col-md-10 col-lg-8 m-auto" method="post">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea id="comment" rows="6" name="message" class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Contact Me Now" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form>
            <div class="contact-details mt-4">
                <p><strong>Email:</strong> <a href="mailto:hello@sharat.tech">hello@sharat.tech</a></p>
                <p><strong>Location:</strong> Bhagalpur, India (Available for global projects)</p>
                <div class="social-links text-center">
                    <a href="https://www.linkedin.com/in/apoorv-sharat/" class="link"><i class="ti-linkedin"></i></a>
                    <a href="https://www.instagram.com/apoorv.sharat/" class="link"><i class="ti-instagram"></i></a>
                    <a href="https://github.com/sharat0" class="link"><i class="ti-github"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Apoorv Sharat – Full-Stack Developer & Digital Creator<br>
                Based in India. Trusted by founders, creators, and marketers globally.
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="https://www.linkedin.com/in/apoorv-sharat/" class="link"><i class="ti-linkedin"></i></a>
                <a href="https://github.com/sharat0" class="link"><i class="ti-github"></i></a>
                <a href="mailto:hello@sharat.tech" class="link"><i class="ti-google"></i></a>
                <a href="https://www.instagram.com/apoorv.sharat/" class="link"><i class="ti-instagram"></i></a>
            </div>
        </footer>
        <div class="neon-circle" id="neon-circle"></div>
    </div> <!-- end of page footer -->
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>
    <script>
        document.addEventListener('mousemove', function(e) {
            const neonCircle = document.getElementById('neon-circle');
            const offsetX = neonCircle.offsetWidth / 2;
            const offsetY = neonCircle.offsetHeight / 2;
            neonCircle.style.left = `${e.clientX - offsetX + 100}px`;
            neonCircle.style.top = `${e.clientY - offsetY + 100}px`;
        });
    </script>

    <script>
        particlesJS.load('particles-js', 'particles.json', function() {
            console.log('particles.js loaded - callback');
        });
    </script>

</body>

</html>