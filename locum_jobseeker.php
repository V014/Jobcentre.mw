<?php
session_start();
include ('assets/php/connection.php');
include ('assets/php/utils.php');
include ('assets/php/locum-seeker-credentials.php');
include ('assets/php/locum-appliedjobs.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jobseeker - TheJobCenter</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger active" href="#carousel">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#vacancies">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="assets/php/logout.php">Logout</a></li>
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
                        <h1 class="hero-title">Welcome <?php echo $fullname; ?></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Add to your experience by updating your profile, be informed that we only allow .pdf for documents.</p>
                        <a href="#profile" class="btn btn-success btn-xl js-scroll-trigger" role="button">Get Started</a>
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
    <!-- Services -->
    <section id="services" style="padding: 230px 0px">
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
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#vacancies"><i class="fa fa-search" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Seek Job</h3>
                        <p class="text-muted mb-0">Login as a job seeker to find your job today, or tomorrow.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#profile"><i class="fa fa-user-circle-o" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Manage Profile</h3>
                        <p class="text-muted mb-0">Update yout cv and personal details to improve identity.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#applied"><i class="fa fa-tachometer" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i></a>
                        <h3 class="mb-3">Monitor Job</h3>
                        <p class="text-muted mb-0">Receive customized job vacancies and monitor available ones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile -->
    <section id="profile" style="font-family: 'Open Sans', sans-serif;background-image: url(&quot;assets/img/banner-2.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: top;background-attachment: fixed;">
        <div class="text-center login-card"><a class="js-scroll-trigger" href="#services"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
            <form class="text-center form-signin" method="post" action="assets/php/locum-seeker-profile.php"><span class="reauth-email"> </span>
                <p>Hi <strong><?php echo $fullname; ?></strong> Change your details here.</p>
                <div class="form-group">
                    <input class="form-control" type="email" id="inputEmail" required="" placeholder="Email" value="<?php echo $email; ?>" name="email" style="font-family: 'Open Sans', sans-serif;">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="inputPassword" required="" placeholder="Password" value="<?php echo $password; ?>" style="font-family: 'Open Sans', sans-serif;" name="password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" value="<?php echo $fullname; ?>" placeholder="Fullname" name="fullname">
                </div>
                <div class="form-group">
                    <select class="form-control" name="gender" data-toggle="tooltip" data-bs-tooltip="" title="Your gender">
                        <optgroup label="Gender">
                            <option value="<?php echo "$gender"; ?>"><?php echo "$gender (selected)"; ?>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" data-toggle="tooltip" data-bs-tooltip="" type="date" name="dob" title="Date of Birth" value="<?php echo $dob; ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" name="nationality" data-toggle="tooltip" data-bs-tooltip="" title="Your nationality">
                        <optgroup label="Nationality">
                            <option value="<?php echo "$nationality"; ?>"><?php echo "$nationality (selected)"; ?>
                            <option value="Emirates">Emirates</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Malawian">Malawian</option>
                            <option value="Moldovian">Moldovian</option>
                            <option value="Namibian">Namibian</option>
                            <option value="Omanian">Omanian</option>
                            <option value="Other">Other</option>
                            <option value="Qatari">Qatari</option>
                            <option value="Emirites">Emirites</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" data-toggle="tooltip" data-bs-tooltip="" name="location" title="Your current location">
                        <optgroup label="Location">
                            <option value="<?php echo "$location"; ?>"><?php echo "$location (selected)"; ?>
                            <option value="Dubai">Dubai</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Oman">Oman</option>
                            <option value="Other">Other</option>
                            <option value="Qatar">Qatar</option>
                            <option value="UAE">UAE</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group"><input class="form-control" type="text" placeholder="City | Province" name="city" value="<?php echo $city; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" placeholder="Contact" value="<?php echo $contact; ?>" name="contact">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Address..." name="address"><?php echo "$address"; ?></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" name="profession" data-toggle="tooltip" data-bs-tooltip="" title="Your profession">
                        <optgroup label="Profession">
                            <option value="<?php echo "$profession"; ?>"><?php echo "$profession (selected)"; ?>
                            <option value="Doctor">Doctor</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Clinician">Clinician</option>
                        </optgroup>
                    </select>
                </div>
                <button class="btn btn-success" type="submit" name="update">Update</button></form>
                </div>
    </section>
    <!-- Applied -->
    <section id="applied" class="bg-dark" style="padding: 200px 0px;font-family: 'Open Sans', sans-serif;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center text-white"><a class="js-scroll-trigger" href="#postjob"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">Applications</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                    <p>Below is a list of vacancies you have applied for. You may delete them but then employers won't be able to view them. If the intended employer has seen the application they may also delete it after collecting your details.</p>
                </div>
            </div>
            <form method="post" action="assets/php/locum-delete-application.php?">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Title</th>
                                <th>Company</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $queryApplied = "SELECT v.Title, a.Id, e.OrganisationName, v.Date, v.Location, e.Contact FROM locum_vacancies AS v INNER JOIN locum_applications AS a ON a.VacancyID = v.Id INNER JOIN locum_employer AS e ON v.EmployerID = e.UserID";
                            $resultApplied = $connection -> query($queryApplied);
                            if ($resultApplied){
                                while($rowApplied = $resultApplied -> fetch_assoc()){
                        ?>
                            <tr>
                                <td><input value="<?php echo $aID; ?>" name="selected" type="radio"></td>
                                <td><?php echo $rowApplied['Title']; ?></td>
                                <td><?php echo $rowApplied['OrganisationName']; ?></td>
                                <td><?php echo $rowApplied['Date']; ?></td>
                                <td><?php echo $rowApplied['Location']; ?></td>
                                <td><?php echo $rowApplied['Contact']; ?></td>
                            </tr>

                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
        </form>
    </section>
    <!-- vacancies -->
    <section>
        <div class="container" id="vacancies" style="padding: 100px 0px;">
            <div class="col-lg-12 mx-auto text-center">
                <a class="js-scroll-trigger" href="#profile">
                    <i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">Seek Job</h2>
                    <hr class="light my-4">
                    <p class="mb-5" style="font-family: 'Open Sans', sans-serif;">Our market offers a vast amount of opportunities for our users. You'll be able to view the details of offered jobs but you'd have to register or login to apply for them.</p>
                <form method="post" action="locum_jobseeker.php#vacancies">
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
                                    <div id="collapser" class="collapse col-md-5">
                                        <?php echo $rowSeek['Description']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <h2><a href="#"></a><?php echo $rowSeek['OrganisationName']; ?></h2>
                                        <strong><p style="padding-top: 10px;"><?php echo $rowSeek['Title']; ?></p></strong>
                                        <p><strong>Location : </strong><?php echo $rowSeek['Location']; ?></p>
                                        <p><strong>Closing : </strong><?php echo $rowSeek['Closing']; ?></p>
                                        <a class="btn btn-sm btn-info" href="locum_application.php?id=<?php echo $rowSeek['Id']; ?>">View More</a>
                                        <a class="btn btn-sm btn-success" href="locum_application.php?id=<?php echo $rowSeek['Id']; ?>#apply">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        } else {
                            $querySeek = "SELECT v.Id, e.UserID, e.OrganisationName, v.Location, v.Title, v.Description, v.MiniDesc, v.Closing FROM locum_vacancies AS v INNER JOIN locum_employer AS e ON e.UserID = v.EmployerID AND v.Status = 'Posted'";
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
                                    <div id="collapser" class="collapse col-md-5">
                                        <?php echo $rowSeek['Description']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <h2><a href="#"></a><?php echo $rowSeek['OrganisationName']; ?></h2>
                                        <strong><p style="padding-top: 10px;"><?php echo $rowSeek['Title']; ?></p></strong>
                                        <p><strong>Location : </strong><?php echo $rowSeek['Location']; ?></p>
                                        <p><strong>Closing : </strong><?php echo $rowSeek['Closing']; ?></p>
                                        <a class="btn btn-sm btn-info" href="locum_application.php?id=<?php echo $rowSeek['Id']; ?>">View More</a>
                                        <a class="btn btn-sm btn-success" href="locum_application.php?id=<?php echo $rowSeek['Id']; ?>#apply">Apply</a>
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
    <!-- contact -->
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