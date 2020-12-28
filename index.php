<?php
session_start();
if(isset($_SESSION['reply'])){
    if($_SESSION['reply'] === "error"){
        $_SESSION['attempts'] += 1;
        $reply = "Invalid credentials!";
    }

    if(isset($_SESSION['locked'])){
    $difference = time() - $_SESSION['locked'];
        if($difference > 10 ){
            unset($_SESSION['locked']);
            unset($_SESSION['attempts']);
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - TheJobCenter</title>
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
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#carousel"><img src="assets/img/logo.png"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#carousel">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#login">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="registration.php">Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="vacancies.php">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum.php">Locum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="scholarships.php">Scholarships</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="about-us.php">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="feedback.php">Feedback</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--- carousel -->
    <?php include ('carousel.php'); ?> 
    <!-- Services -->
    <section id="services" style="padding: 200px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><a class="js-scroll-trigger" href="#carousel"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="vacancies.php"><i class="fa fa-search" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Job Seek</h3>
                        <p class="text-muted mb-0">Login as a job seeker to find your job today, or tomorrow.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#login"><i class="fa fa-clipboard" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Post Job</h3>
                        <p class="text-muted mb-0">Login as an employer to post vacanies for seekers to apply.</p>
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
    <!-- Login -->
    <section id="login" style="background-image: url(&quot;assets/img/banner-2.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
        <div class="login-card"><a class="js-scroll-trigger offset-5" href="#services"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
            <p class="profile-name-card">With these credentials, either login or register with us</p>
            <?php if (isset($_SESSION['reply'])){ ?>
                <p style="color: red; text-align: center;"><?= $reply; ?></p>
            <?php } ?>
            <form class="form-signin" method="post" action="assets/php/user-login.php">
                <span class="reauth-email"> </span>
                <label for="email">Email</label>
                <input class="form-control" type="email" id="Email" required="" placeholder="Email address" name="email">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="Password" required="" placeholder="Password" name="password">
                <label for="role">Role</label>
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
                <?php 
                    if(isset($_SESSION['attempts']) && $_SESSION['attempts'] > 2){
                        $_SESSION['locked'] = time();
                        echo "Please wait for 10 seconds";
                    }else {
                ?>
                <button class="btn btn-success" type="submit" name="login">Login</button>
                <?php unset($_SESSION['reply']); } ?>
            </form>
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