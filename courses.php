<?php
    $tally = false;
    $busy = false;
    $dtp = false;
    $advance_basic = false;
    $advance_tally = false;
    include 'Login_session.php';
    include('_dbconnect.php');

    $course = array("null");
    $course_count = 0;
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $sql = "SELECT course_name from courses INNER JOIN relation ON relation.course_id = courses.course_id WHERE st_id = $id;";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0)
    {
        while($row = mysqli_fetch_assoc($result)){
            array_push($course, $row['course_name']);
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Educom - Education & LMS Template">

    <!-- ========== Page Title ========== -->
    <title>Welcome - <?php echo $_SESSION["username"] ?></title>

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

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

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
							<a href="#">My Courses</a>
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
                    Hi <?php echo $_SESSION["username"] ?>, Welcome to your Courses! 
              </div>
            </centre>
            </div>
        </div>
    </div>

    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Courses</h2>
                    </div>
                </div>
                
                <div class="top-course-items">
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                               <a href="freeCourse.php">
                                <img src="assets/img/courses/1.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                </div>
                                <h4 id="basic">
                                    <a href="freeCourse.php">Basic Computer Course</a>
                                </h4>
                                <div class="footer-meta">
                                    <a class="btn btn-theme effect btn-sm" href="freeCourse.php" style="font-size: 15px;">
                                    Start Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if(array_search("tally",$course)!=null)
                    {
                        echo '<div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/courses/tally.jpg" alt="Thumb">
                            </div>
                            <div class="info"  style="background-color: rgba(5,199,242,0.15);">
                                <div class="meta">
                                </div>
                                <h4 id="tally">
                                    Tally
                                </h4>
                                <div class="footer-meta">
                                    <a class="btn btn-theme effect btn-sm" href="#" style="font-size: 15px;">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    
                    
                    if(array_search("busy",$course) != null)
                    {
                        echo '<div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                
                                <img src="assets/img/busy1.jpg" alt="Thumb">
                                
                            </div>
                            <div class="info">
                                <div class="meta">
                                </div>
                                <h4 id="busy">
                                    Busy
                                </h4>
                                <div class="footer-meta">
                                    <a class="btn btn-theme effect btn-sm" href="#" style="font-size: 15px;">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    
                    if(array_search("dtp",$course)!=null)
                    {
                        echo'<div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                
                                <img src="assets/img/DTP1.jpg" alt="Thumb">
                                
                            </div>
                            <div class="info"  style="background-color: rgba(5,199,242,0.15);">
                                <div class="meta">
                                </div>
                                <h4 id="dtp">
                                    DTP
                                </h4>  
                                <div class="footer-meta">
                                    <a class="btn btn-theme effect btn-sm" href="#" style="font-size: 15px;">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    
                    if(array_search("advance_basic",$course)!=null)
                    {
                        echo'<div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="freeCourse.html">
                                <img src="assets/img/courses/MsOffice.png" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                </div>
                                <h4 id="advanceOffice">
                                    Advance MS Office
                                </h4>
                                <div class="footer-meta">
                                    <a class="btn btn-theme effect btn-sm" href="#" style="font-size: 15px;">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    
                    if(array_search("advance_tally",$course)!=null)
                    {
                        echo '<div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="freeCourse.html">
                                <img src="assets/img/courses/tally1.png" alt="Thumb">
                                </a>
                            </div>
                            <div class="info" style="background-color: rgba(5,199,242,0.15);">
                                <div class="meta">
                                </div>
                                <h4 id="advanceTally">
                                    Advance Tally
                                </h4>
                                <div class="footer-meta">
                                    <a class="btn btn-theme effect btn-sm" href="#" style="font-size: 15px;">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }?>
                    <!-- End Item -->
                </div>
                <!--====== End Courses =======-->
            </div>
        </div>
    </div>
    <!-- End Profile Section -->

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