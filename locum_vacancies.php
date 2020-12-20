<?php
include ('assets/php/connection.php');
include ('assets/php/utils.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>locum - Vacancies</title>
    <meta name="description" content="The Job Centre implements intensive search and assessment measures prior to hiring employees directly onto its payroll and subsequently seconding them to clients’ premises. The Job Centre is a registered and approved outsourcing agency by the Ministry of Labour and Manpower Development.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10-1.css">
    <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10.css">
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
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum.php#login">Login / Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger active" href="locum_vacancies.php">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Main</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="scholarships.php">Scholarships</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="about-us.php">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="feedback.php">Feedback</a></li>
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
                        <h1 class="text-uppercase hero-title"><strong>Malawi's most reliable job site</strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Find yourself a job today as a jobseeker, post vacancies as a company and recruit, or browse scholarships as a student.</p>
                        <a class="btn btn-success btn-xl js-scroll-trigger" role="button" href="#services">Find Out More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-1.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title">Seek Jobs</h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Use our platform to seek for vacancies that are near you or overly available. To get started, login or sign up with us and we'll walk you through.</p>
                        <a href="#vacancies" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-2.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title">Become An Employer</h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Do you have a top notch company but lack recruits to do the important parts? Use our platform to post vacancies for job seekers to apply.</p>
                        <a href="index.php#login" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-3.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title">Scholarships</h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Are you looking to get enrolled abroad?<br>This is the right platform to seek for scholarships without hustle.</p>
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
    <!-- Vacancies -->
    <section>
        <div class="container" id="vacancies" style="padding: 100px 0px;">
            <div class="col-lg-12 mx-auto text-center">
                <a class="js-scroll-trigger" href="#services">
                    <i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">Seek Job</h2>
                    <hr class="light my-4">
                    <p class="mb-5" style="font-family: 'Open Sans', sans-serif;">Our market offers a vast amount of opportunities for our users. You'll be able to view the details of offered jobs but you'd have to register or login to apply for them.</p>
                <form method="post" action="locum_vacancies.php#vacancies">
                    <div class="form-group col-md-4 offset-md-4"><input class="form-control" type="text" placeholder="Job Title or Skill" name="title" style="font-family: 'Open Sans', sans-serif;"></div>
                    <div class="form-group col-md-4 offset-md-4"><button class="btn btn-success btn-lg form-control" type="submit" style="font-family: 'Open Sans', sans-serif;font-size: 16px;font-weight: 400;" name="seek"><strong>&nbsp;Seek</strong><br></button></div>
                    <?php
                        if(isset($_POST['seek']) && !empty($_POST['title'])){
                            $Title = escTxt($connection, $_POST['title']); 
                            $querySeek = "SELECT v.Id, e.UserID, e.OrganisationName, v.Title, v.Description, v.Location, v.MiniDesc, v.Closing FROM locum_vacancies AS v INNER JOIN locum_employer AS e ON e.UserID = v.EmployerID WHERE v.Title LIKE '%$Title%' AND v.Status = 'Posted'";
                            $resultSeek = $connection -> query($querySeek);
                            while($rowSeek = $resultSeek -> fetch_assoc()){
                    ?>
                    <div class="row product-list dev">
                        <div class="col-sm-12 col-md-12 product-item animation-element">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="product-image" href="#"><img src="assets/img/logo-default.jpg"></a>
                                    </div>
                                    <div class="col-md-5">
                                        <h3>Quick Description</h3>
                                        <?php echo $rowSeek['MiniDesc']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <h2><?php echo $rowSeek['OrganisationName']; ?></h2>
                                        <strong><p style="padding-top: 10px;"><?php echo $rowSeek['Title']; ?></p></strong>
                                        <p><strong>Location : </strong><?php echo $rowSeek['Location']; ?></p>
                                        <p><strong>Closing : </strong><?php echo $rowSeek['Closing']; ?></p>
                                        <a class="btn btn-sm btn-info" href="locum.php#login">View More</a>
                                        <a class="btn btn-sm btn-success" href="locum.php#login">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        } else {
                            $querySeek = "SELECT v.Id, e.UserID, e.OrganisationName, v.Title, v.Description, v.MiniDesc, v.Location, v.Closing FROM locum_vacancies AS v INNER JOIN locum_employer AS e ON e.UserID = v.EmployerID AND v.Status = 'Posted'";
                            $resultSeek = $connection -> query($querySeek);
                            while($rowSeek = $resultSeek -> fetch_assoc()){
                    ?>
                    <div class="row product-list dev">
                        <div class="col-sm-12 col-md-12 product-item animation-element">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="product-image" href="#"><img src="assets/img/logo-default.jpg"></a>
                                    </div>
                                    <div class="col-md-5">
                                        <h3>Quick Description</h3>
                                        <?php echo $rowSeek['MiniDesc']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <h2><?php echo $rowSeek['OrganisationName']; ?></h2>
                                        <strong><p style="padding-top: 10px;"><?php echo $rowSeek['Title']; ?></p></strong>
                                        <p><strong>Location : </strong><?php echo $rowSeek['Location']; ?></p>
                                        <p><strong>Closing : </strong><?php echo $rowSeek['Closing']; ?></p>
                                        <a class="btn btn-sm btn-info" href="locum.php#login">View More</a>
                                        <a class="btn btn-sm btn-success" href="locum.php#login">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </section>
    <!-- Contacts -->
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