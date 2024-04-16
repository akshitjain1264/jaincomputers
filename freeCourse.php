<?php
    include 'Login_session.php';
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jain Computers">

    <!-- ========== Page Title ========== -->
    <title>Free Course</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/logo-1.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

    <style>
        #head {
            background-color: rgba(5,199,242,0.2);
            border-radius: none;
            text-align: center;
            font-size: 25px;
            font-family: serif;
            color: black;
            padding: 25px;
            margin: 0 px;
        }
    </style>

    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>

<body>

    
    <!-- Start Header Top 
    ============================================= --
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 address-info text-left">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fas fa-copy"></i> Whatsapp No. : <strong>+91 9891313737</strong>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> For Enquiry: <strong>+91 8076110200</strong>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 link text-right">
                    <ul>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 address-info text-left">
                    <div class="info">
                        <ul>
                            <li>
								<a href="https://api.whatsapp.com/send?phone=919891313737&forceIntent=true&load=loadInIOSExternalSafari">
									<img src="assets/img/whatsapp.png" alt="whataspp">
									<i></i><strong>+91 - 9891313737</strong>
								</a>
                            </li>
                            <li>
								<a href="tel:+91-8076110200">
									<img src="assets/img/call1.png" alt="call">
									<i></i><strong>+91 - 8076110200</strong>
								</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 link text-right">
                    <ul>
                        <li>
                            <a href="logout.php">Sign Out</a>
                        </li>
                    </ul>
                </div>              
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo2.png" class="logo" alt="Logo">
                    </a>
                </div>

                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu" style="padding-top: 12px;">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown navbar-changes">
                            <a href="profile.php">Dashboard</a>
                        </li>
						<li class="navbar-changes">
							<a href="courses.php">My Courses</a>
						</li>
						<!--<li>
                            <a href="gallery.html">gallery</a>
                        </li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle navbar-changes" data-toggle="dropdown" ><i class="fas fa-user-circle" style='font-size:20px' aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                
								<li class="dropdown">
                                    <a href="#">Hello! <?php echo $_SESSION["username"] ?></a>
                                </li>
                                <li class="dropdown">
                                    <a href="logout.php">Sign Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
				<!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Profile Section 
    ============================================= -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <centre>
                <div class="alert" id="head">
                    Hi <?php echo $_SESSION["username"] ?>, Welcome to our <span style="color: red;">Free Course!</span> 
              </div>
            </centre>
            </div>
        </div>
    </div>

    <!-- Start Video Section
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Course Videos</h2>
                    </div>
                </div>
                <!--====== Start Videos 1=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>1. Introduction</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ITbO-YMHsfo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->
                
                <!--====== Start Videos 2=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>2. Memory</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/s4NxiGsmVPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->

                <!--====== Start Videos 3=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>3. Unit of Computer</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/O4PD7LeI1HE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->

                <!--====== Start Videos 4=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>4. Windows Operating</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/bAbxONzoT7k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->
                <!--====== Start Videos 5=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>5. Part of Windows</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Yg966Dxy5kc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->
                <!--====== Start Videos 6=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>6. Keyboard Technique</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/4wJw5L9wULg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->
                <!--====== Start Videos 7=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>7. MS Paint - Home</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/iun_QqzJ-F4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->
                <!--====== Start Videos 8=======-->
                <div class="top-course-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <h3>8. MS Paint - File</h3>
                        <div class="item">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/0fb6sdi7-Es" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--====== End Video =======-->

            </div>
        </div>
    </div>
    <!-- End Video Section -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding" style="padding-top:70px; padding-bottom:70px;">
                <div class="row">
                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item about">
                            <h4>About Us</h4>
                            <p>
                                <strong>Jain Computers</strong> is providing valuable Computer and Educational courses from 20 glorious years. We aim to give students a Successful path. 
                            </p>
                            <ul>
                                <li>
                                    <p>Email <span><a href="mailto:info@jaincomputers.in">info@jaincomputers.in</a></span></p>
                                </li>
                                <li>
                                    <p>Office <span>E-115 Yadav Nagar Samaypur Delhi-110042</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-1 col-sm-0 item equal-height">
                        
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-3 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Basic Courses</h4>
                            <ul>	
                                <li>
                                    <a href="basic.html"><i class="ti-angle-right"></i>Basic Computer Course</a>
                                </li>
                                <li>
                                    <a href="tally.html"><i class="ti-angle-right"></i>Accounting Package Tally</a>
                                </li>
                                <li>
                                    <a href="busy.html"><i class="ti-angle-right"></i>Accounting Package Busy</a>
                                </li>
                                <li>
                                    <a href="DTP.html"><i class="ti-angle-right"></i>DTP(Desktop Publishing)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Advances Courses</h4>
                            <ul>
                                <li>
                                    <a href="advance-basic.html"><i class="ti-angle-right"></i>Advance Basic Computer Course (ABCC)</a>
                                </li>
                                <li>
                                    <a href="advance-tally.html"><i class="ti-angle-right"></i>Advance Tally Course(ATC)</a>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href="#">Jain Info Solution</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>


</html>