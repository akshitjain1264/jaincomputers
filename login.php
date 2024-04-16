<?php
    $login = false;
    $showErr = false;
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include '_dbconnect.php';
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * from registration where name = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            $login = true;
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $row["st_id"];
            header('location: profile.php'); 
        }
        else{
            $showErr = "Invalid Credentials.";
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
    <title>JAIN COMPUTERS</title>

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
    
    <!--===============Start javascript===============-->
    <script>
        function login(){

            var name = doucment.myForm.username.value.trim();
            if(name==""){
                alert("Please enter the username.");
            }

            var pass = document.myForm.password.value.trim();
            if(pass==""){
                alert("Please enter the password.");

            }
            
        }
    </script>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    <!--===============Start javascript===============-->
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
                            <a href="register.php">Register</a>
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
                            <a href="index.html">Home</a>
                        </li>
						
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle navbar-changes" data-toggle="dropdown" >Course</a>
                            <ul class="dropdown-menu">
                                
								<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Basic Courses</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="basic.html">Basic Computer Course (BCC)</a></li>
                                        <li><a href="tally.html">Accounting Package Tally</a></li> 
                                        <li><a href="busy.html">Accounting Package Busy</a></li>
                                        <li><a href="DTP.html">DTP(Desktop Publishing)</a></li>
                                    </ul>
                                </li>
								<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Advance Courses</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="advance-basic.html">Advance Basic Computer Course(ABCC)</a></li>
                                        <li><a href="advance-tally.html">Advance Tally Course(ATC)</a></li>
                                    </ul>
                                </li>																                              
                            </ul>
                        </li>
						<li class="navbar-changes">
							<a href="coming.html">About Us</a>
						</li>
						<!--<li>
                            <a href="gallery.html">gallery</a>
                        </li>-->
                        <li class="navbar-changes">
                            <a href="contact.html">contact</a>
                        </li>
                    </ul>
                </div>
				<!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start PHP
    ============================================= -->
    <?php
        if($login){
            echo '<div class="alert alert-success">
                            <strong>Sucess!</strong> You have logged in successfully.  
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
        }
        if($showErr){
            echo '<div class="alert alert-warning">
                            <strong>Error! </strong>' . $showErr . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
        }
    ?>
    <!-- End PHP -->

    <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" id="login-form" name="myForm" class="white-popup-block">
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-sign-in-alt"></i> login Now</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username*" name="username" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password*" name="password" type="password">
                                        <span class="input-group-addon" role="button" title="veiw password" id="passBtn" style="width: 5px;">
                                        <i class="fa fa-eye fa-fw" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" onclick="return login()">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Not a member yet? <a href="register.php">Register now</a></p>
                        </div>
                        <div class="login-social">
                            <h4>Login with social</h4>
                            <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

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