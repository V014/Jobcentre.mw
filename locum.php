<?php
if(isset($_GET['reply'])){
    if($_GET['reply'] === "used"){
        echo "<script>alert('Email address already in use!')</script>";
    }

    if($_GET['reply'] === "error"){
        echo "<script>alert('Wrong credentials!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>locum - The Job Centre</title>
    <meta name="description" content="The Job Centre implements intensive search and assessment measures prior to hiring employees directly onto its payroll and subsequently seconding them to clients’ premises. The Job Centre is a registered and approved outsourcing agency by the Ministry of Labour and Manpower Development.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
</head>

<body id="page-top" style="font-family: 'Open Sans', sans-serif;">
    <!-- navbar -->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#carousel">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#login">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum_registration.php">Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum_vacancies.php">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Main</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="scholarships.php">Scholarships</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="about-us.php">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="feedback.php">Feedback</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Carousel -->
    <?php include ('locum_carousel.php'); ?>
    <!-- Services -->
    <section id="services" style="padding: 200px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><a class="js-scroll-trigger" href="#about"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="locum_vacancies.php"><i class="fa fa-search" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Locum Job</h3>
                        <p class="text-muted mb-0">Login as a locum job seeker to find your job today, or tomorrow.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#login"><i class="fa fa-clipboard" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Post Job</h3>
                        <p class="text-muted mb-0">Login as a locum employer to post vacanies for seekers to apply.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="scholarships.php"><i class="fa fa-graduation-cap" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Scholarships</h3>
                        <p class="text-muted mb-0">Search for potential scholarships that you might stumble upon.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login | Register -->
    <section id="login" style="background-image: url(&quot;assets/img/physician.png&quot;);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
        <div class="text-center login-card">
            <a class="js-scroll-trigger" href="#services">
                <i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
            <p class="profile-name-card">With these credentials, either login or register with us</p>

            <form class="form-signin" method="post" action="assets/php/locum-login-register.php">
                <span class="reauth-email"> </span>
                <input class="form-control" type="email" id="inputEmail" required="" placeholder="Email address" name="email">
                <input class="form-control" type="password" id="inputPassword" required="" placeholder="Password" name="password">
                <select class="form-control" name="role">
                    <optgroup label="Role">
                        <option value="jobseeker" selected="">Job Seeker</option>
                        <option value="employer">Employer</option>
                    </optgroup>
                </select>
                <div class="checkbox" style="padding: 10px;">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" required="">
                        <label class="form-check-label" for="formCheck-1">Accept terms</label>
                    </div>
                </div>
                <button class="btn btn-success" type="submit" name="login">Login</button>
                <button class="btn btn-warning text-white" type="submit" name="register">Register</button>
            </form>
            <a class="forgot-password" href="#">Forgot your password?</a></div>
    </section>
    <!-- Top -->
    <?php include ('top.php'); ?>    
    <!-- Contact -->
    <?php include ('contact-us.php'); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>