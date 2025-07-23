<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/imgs">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/imgs/favicon-16x16.png">
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
    <link rel="stylesheet" href="../assets/css/style.css">

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
            <a class="logo" href="../">Sharat</a>
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


    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <a href="https://festivelearn.com" class="portfolio-card">
                        <img src="../assets/imgs/FestiveLearn.png" class="portfolio-card-img" alt="FestiveLearn">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>FestiveLearn</h5>
                                    <p class="font-weight-normal">Category: Website</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://www.tangytwist.live" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/tangyTwist.png" class="img-responsive rounded" alt="TangyTwist">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>TangyTwist</h5>
                                    <p class="font-weight-normal">Category: Website</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="../projects/comming-soon/" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/commingsoon.png" class="img-responsive rounded" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Comming Soon Template</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="https://mokshfenster.com" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/MokshFenster.png" class="img-responsive rounded" alt="Moksh Fenster">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Moksh Fenster</h5>
                                    <p class="font-weight-normal">Category: Website</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="../projects/glitch/" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/glitch.png" class="img-responsive rounded" alt="Glitch">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Glitch</h5>
                                    <p class="font-weight-normal">Category: Website</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="https://github.com/sharat0/admission-management-system" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/admission.png" class="img-responsive rounded" alt="Admission Management System">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Admission Management System</h5>
                                    <p class="font-weight-normal">Category: ASP.net Web-App</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="https://github.com/sharat0/Logistics-Maagemet-System" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/logistics.png" class="img-responsive rounded" alt="Logistics Management System">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Logistics Management System</h5>
                                    <p class="font-weight-normal">Category: Windows Application</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="../projects/LivingSpace/" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/livingspaces.png" class="img-responsive rounded" alt="Pg Room Website Template">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Living Spaces</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="../projects/age-of-internet/" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/age_of_internet.png" class="img-responsive rounded" alt="Age of Internet">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Age of Internet</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="../projects/login-template/" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/login.png" class="img-responsive rounded" alt="Login Page Template">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Login Template</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <a href="../projects/comming-soon/" class="portfolio-card">
                        <img class="portfolio-card-img" src="../assets/imgs/comming_soon.png" class="img-responsive rounded" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Comming Soon Template</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>

            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

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
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>

            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="../assets/imgs/avatar2.jpg" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="../assets/imgs/avatar3.jpg" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="../forms/sendMail.php" class="contact-form col-md-10 col-lg-8 m-auto" method="post">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea id="comment" rows="6" name="message" class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <!-- <div class="g-recaptcha" data-sitekey="6LegAxAqAAAAAIrco5S2-_aAeEvD4j-JIxnw_XcB"></div> -->
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <a href="https://www.sharat.tech">Apoorv Sharat</a>
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="https://www.linkedin.com/in/apoorv-sharat/" class="link"><i class="ti-linkedin"></i></a>
                <a href="https://github.com/sharat0" class="link"><i class="ti-github"></i></a>
                <a href="mailto:apoorv.sharat0@gmail.com" class="link"><i class="ti-google"></i></a>
                <a href="https://www.instagram.com/apoorv.sharat/" class="link"><i class="ti-instagram"></i></a>
                <a href="https://www.facebook.com/apoorv.sharat.7712" class="link"><i class="ti-facebook"></i></a>
                <a href="https://x.com/apoorv_sharat" class="link"><i class="ti-twitter-alt"></i></a>
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