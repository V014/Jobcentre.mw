<?php 
	session_start();
	include ('assets/php/connection.php');
	include('assets/php/locum-postedjobs.php');
    $rowPosted = $resultsPosted -> fetch_assoc();
    $description = $rowPosted['Description'];
    $vacancyID = $rowPosted['Id'];
    $data = str_replace( '&', '&amp;', $description );
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Application</title>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>
<body id="page-top" style="font-family: 'Open Sans', sans-serif;">
	<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="employer.php">Back</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="vacancies.php">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="feedback.php">FAQ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Carousel -->
    <section id="carousel" style="padding: 0px 0px;">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/banner-1.jpg&quot;);padding: 230px;">
                        <h1 class="text-uppercase"><strong>Application<br></strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle" style="color: #ffffff;">We can help you find the appropriate job for yourself, if you're a company looking for recruits, this is also the place for you.</p><a class="btn btn-success btn-xl js-scroll-trigger" role="button" href="#apply">Find Out More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-1.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title"><strong>Seek Jobs</strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Use our platform to seek for vacancies that are near you or overly available. To get started, login or sign up with us and we'll walk you through.</p>
                        <a href="vacancies.php#vacancies" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-2.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title"><strong>Become An Employer</strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Do you have a top notch company but lack recruits to do the important parts? Use our platform to post vacancies for job seekers to apply.</p>
                        <a href="index.php#login" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-3.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title"><strong>Scholarships</strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Are you looking to get enrolled abroad? This is the right platform to seek for scholarships without hustle.</p>
                        <a href="scholarships.php" class="btn btn-success btn-xl js-scroll-trigger" role="button">Learn More</a>
                    </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
        </ol>
        </div>
    </section>
    <section id="description">
        <div class="col-8 offset-2">
            <form method="post" action="assets/php/locum-description-edit.php">
                <div class="form-group">
                    <textarea id="desc" name="desc"><?php echo $data; ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success form-control" name="update" value="<?php echo $vacancyID ?>" type="submit">Update</button>
                </div>
            </form>
            <script>
            ClassicEditor
                .create( document.querySelector( '#desc' ) )
                .catch( error => {
                    console.error( error );
                } );
            </script>
        </div>
    </section>
    <!-- Contact -->
    <?php include ('contacts.php'); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>
</html>