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
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php#login">Login / Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="vacancies.php">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum.php">Locum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="scholarships.php">Scholarships</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="about-us.php">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger active" href="feedback.php">Feedback</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- carousel -->
    <section id="carousel" style="padding: 0px 0px;">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-nature carousel-hero" style="background-image: url(&quot;assets/img/slider-1.jpg&quot;);padding: 220px">
                        <h1 class="hero-title">Seek Jobs</h1>
                        <p class="hero-subtitle">To quickly search availability of a job, you can simply go to our vacancies page and type in the title of the job. If you happen to find the job you are looking for, you'd have to login or register to see more details which you'd need to apply for the job.</p><a href="index."><button class="btn btn-success btn-lg" type="button">Learn&nbsp; More</button></a></div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-photography carousel-hero" style="background-image: url(&quot;assets/img/slider-2.jpg&quot;);padding: 220px">
                        <h1 class="hero-title">Become An Employer</h1>
                        <p class="hero-subtitle">Do you have a top notch company but lack recuits to do the important parts? Use our platform to post vacancies for job seekers to apply. If you want to post a job, you'd have to login or register to provide details of the type of skills you need from potential employees.</p><a href="index.html#login"><button class="btn btn-success btn-lg" type="button">Get Started</button></a></div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-technology carousel-hero" style="background-image: url(&quot;assets/img/slider-3.jpg&quot;);padding: 220px">
                        <h1 class="hero-title">Scholarships</h1>
                        <p class="hero-subtitle">Are you looking to get enrolled abroad?<br>This is the right platform to seek for scholarships without hustle. Go to our scholarship page to view the schools that have openings that you could plan and apply for.</p><a href="scholarships.html"><button class="btn btn-success btn-lg" type="button">Learn&nbsp; More</button></a></div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol
                class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
        </div>
    </section>
    <!-- Feedback -->
    <section id="feedback" style="padding: 200px 0px;">
        <div class="container text-center">
            <h2 class="mb-4">Feedback</h2>
            <form method="POST" action="assets/php/sendfeedback.php">
                <div class="form-group col-md-4 offset-md-4"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                <div class="form-group col-md-4 offset-md-4"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group col-md-4 offset-md-4"><textarea class="form-control" name="message" placeholder="Message"></textarea></div>
                <div class="form-group col-md-4 offset-md-4"><button class="btn btn-success btn-lg form-control" data-aos="zoom-in" data-aos-duration="400" name="send" type="submit">Send</button></div>
            </form>
        </div>
    </section>
    <!-- contacts -->
    <?php include ('contact-us.php'); ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
    <script src="assets/js/Testimonial-Slider-9.js"></script>
</body>

</html>