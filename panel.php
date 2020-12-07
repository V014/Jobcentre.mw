<?php
session_start();
include ('assets/php/connection.php');
include ('assets/php/admin-credentials.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin - TheJobCenter</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#profile">Profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#vacancies">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#feedback">FAQ</a>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="assets/php/logout.php">Logout</a></li>
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
                        <h1 class="hero-title">Admin Panel</h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">This is the admin section where municipal duties of the site are handled. You may start by interacting with posted vacancies.</p>
                        <a href="#vacancies" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-1.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title">Seek Jobs</h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Use our platform to seek for vacancies that are near you or overly available. To get started, login or sign up with us and we'll walk you through.</p>
                        <a href="#login" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated carousel-hero" style="background-image: url(&quot;assets/img/slider-2.jpg&quot;);padding: 230px;">
                        <h1 class="hero-title">Become An Employer</h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Do you have a top notch company but lack recruits to do the important parts? Use our platform to post vacancies for job seekers to apply.</p>
                        <a href="#login" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
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
        <ol
                class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
        </ol>
        </div>
    </section>
    <!-- Profile -->
    <section id="profile" style="font-family: 'Open Sans', sans-serif;background-image: url(&quot;assets/img/banner-2.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: top;background-attachment: fixed;">
        <div class="text-center login-card"><a class="js-scroll-trigger" href="#carousel"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
            <form class="text-center form-signin" method="post" action="assets/php/admin-profile.php"><span class="reauth-email"> </span>
                <div class="form-group"><input class="form-control" type="text" value="<?php echo $username; ?>" placeholder="Username" name="username"></div>
                <div class="form-group"><input class="form-control" type="password" id="inputPassword" required="" value="<?php echo $password; ?>" name="password" placeholder="Password" style="font-family: 'Open Sans', sans-serif;"></div><button class="btn btn-success" type="submit" name="update">Update</button></form>
            <p class="text-center"
                style="padding-top: 20px;"></p>
        </div>
    </section>
    <!-- Vacancies -->
    <section id="vacancies" style="font-family: 'Open Sans', sans-serif;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center"><a class="js-scroll-trigger" href="#profile"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">Vacancies</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                    <p class="col-md-10 offset-md-1">This table shows the jobs posted by employers. It describes requirements they seek and conditions they offer. You can approve display to job seekers, or delete a post. Just select it first.</p>
                </div>
            </div>
            <form method="post" action="assets/php/admin-postedit.php">
            <div class="table-responsive table-borderless">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-white" style="background-color: rgba(40,167,69,0.87);">
                            <th>Select</th>
                            <th>Employer ID</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th data-toggle="tooltip" data-bs-tooltip="" title="Closing date of vacancy">Closing</th>
                            <th data-toggle="tooltip" data-bs-tooltip="" title="Shows if your vacancy is posted after setteling terms">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('assets/php/admin-postedjobs.php');
                            while($rowPosted = $resultsPosted -> fetch_assoc()){
                        ?>
                        <tr>
                            <td><input value="<?php echo $rowPosted['Id']; ?>" name="selected" type="radio"></td>
                            <td><?php echo $rowPosted['EmployerID']; ?></td>
                            <td><?php echo $rowPosted['Title']; ?></td>
                            <td><?php echo $rowPosted['Location']; ?></td>
                            <td><?php echo $rowPosted['Date']; ?></td>
                            <td><?php echo $rowPosted['Closing']; ?></td>
                            <td><?php echo $rowPosted['Status']; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
            <div class="form-group text-center col-md-4 offset-md-4"><button class="btn btn-success text-white form-control" type="submit" name="approve">Approve</button></div>
            <div class="form-group text-center col-md-4 offset-md-4"><button class="btn btn-danger text-white form-control" type="submit" name="delete">Decline</button></div>
        </form>
    </section>
    <!-- Feedback -->
    <section id="feedback" class="bg-dark text-white" style="padding: 200px 0px;">
        <div class="container text-center"><a class="js-scroll-trigger" href="#vacancies"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: rgb(254,254,254);"></i></a>
            <h2 class="mb-4">Feedback</h2>
            <p>This feedback is from users, an email address will be provided for communication.</p>
            <form method="POST" action="assets/php/deleteFeedback.php">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr style="background-color: #ffffff;">
                                <th>Select</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <?php
                                include ('assets/php/feedback.php');
                                while ($rowFeedback = $resultFeedback -> fetch_assoc()) {
                            ?>
                            <tr>
                                <td><input value="<?php echo $rowFeedback['Id']; ?>" name="selected" type="radio"></td>
                                <td><?php echo $rowFeedback['Name']; ?></td>
                                <td><?php echo $rowFeedback['Email']; ?></td>
                                <td><?php echo $rowFeedback['Message']; ?></td>
                                <td><?php echo $rowFeedback['Date']; ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-lg" type="submit" name="delete" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400">Delete</button>
                </div>
            </form>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>