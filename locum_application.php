<?php 
session_start();
include ('assets/php/connection.php');
include ('assets/php/locum-seeker-credentials.php');
include ('assets/php/locum-job.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>locum - Application</title>
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
	<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="jobseeker.php#vacancies">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum.php">Locum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="scholarships.php">Scholarships</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="about-us.php">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="feedback.php">Feedback</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Carousel -->
    <?php include ('locum_carousel.php'); ?>
    <!-- description -->
    <section id="description">
        <div class="col-8 offset-2">
            <div class="form-group">
                <?php echo $data ?>
            </div>
        </div>
    </section>
    <!-- application -->
    <section id="apply" style="background-color: #28a745;">
        <div class="login-card"><a class="offset-5 js-scroll-trigger" href="#services"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
            <p class="profile-name-card">Upload your cv and application letter to apply</p>
            <form class="form-signin" method="post" action="assets/php/locum-application.php" enctype="multipart/form-data"><span class="reauth-email"></span>
                <label for="vacancyId">Vacancy ID</label>
                <input class="form-control" type="text" id="inputId" required="" value="<?php echo $vacancyId; ?>" name="vacancyId" data-toggle="tooltip" data-bs-tooltip="" title="Vacancy ID" readonly>
                <label for="fullname">Fullname</label>
                <input class="form-control" type="text" id="inputName" required="" value="<?php echo $fullname; ?>" name="fullname" readonly>
                <label for="compemail">Organisation's Email</label>
                <input class="form-control" type="email" id="inputCompanyEmail" required="" value="<?php echo $companyEmail; ?>" name="companyEmail" readonly>
                <p><em>Before you upload your files, label them like this <strong>"fullname-cv"</strong> or <strong>"firstname-lastname-application-letter".</strong></em></p>
                <div class="form-group">
                    <input type="file" data-toggle="tooltip" data-bs-tooltip="" name="files[]" title="Upload your offer letter and cv." multiple="">
                </div>
                <div class="checkbox" style="padding: 10px;">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" required=""><label class="form-check-label" for="formCheck-1">Accept terms</label>
                    </div>
        		</div>
                <button class="btn btn-success" type="submit" name="apply">Apply</button>
            </form>
    </section>
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