<?php
session_start();
include ('assets/php/connection.php');
include ('assets/php/utils.php');
include ('assets/php/seeker-credentials.php');
include ('assets/php/appliedjobs.php');
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
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">About</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item js-scroll-trigger" role="presentation" href="#services">Services</a><a class="dropdown-item js-scroll-trigger" role="presentation" href="#profile">Profile</a><a class="dropdown-item js-scroll-trigger" role="presentation" href="#seekjob">Seek</a></div>
                    </li><li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="assets/php/Logout.php">Logout</a></li>
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
    <section id="services">
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
                    <div class="mx-auto service-box mt-5"><i class="fa fa-search" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i>
                        <h3 class="mb-3">Seek Job</h3>
                        <p class="text-muted mb-0">Login as a job seeker to find your job today, or tomorrow.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-user-circle-o" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i>
                        <h3 class="mb-3">Manage Profile</h3>
                        <p class="text-muted mb-0">Update yout cv and personal details to improve identity.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-tachometer" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #28a745;"></i>
                        <h3 class="mb-3">Monitor Job</h3>
                        <p class="text-muted mb-0">Receive customized job vacancies and monitor available ones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile -->
    <section id="profile" style="font-family: 'Open Sans', sans-serif;background-image: url(&quot;assets/img/banner-2.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: top;background-attachment: fixed;">
        <div class="text-center login-card">
            <a class="js-scroll-trigger" href="#services"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
            <form class="text-center form-signin" method="post" action="assets/php/seeker-profile.php"><span class="reauth-email"> </span>
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
                    <select class="form-control" name="gender">
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
                <div class="form-group">
                    <select class="form-control" name="nationality">
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
                    <input class="form-control" type="text" placeholder="City | Province" name="city" value="<?php echo $city; ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" name="industry">
                        <optgroup label="industry">
                            <option value="<?php echo "$industry"; ?>"><?php echo "$industry (selected)"; ?></option>
                            <option value="Administration">Administration</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Art">Arts, culture &amp; Design</option>
                            <option value="Banking">Banking</option>
                            <option value="Business">Business, Management &amp; Startups</option>
                            <option value="Communication">Communication</option>
                            <option value="Construction">Construction</option>
                            <option value="Education">Education</option>
                            <option value="Embassy">Embassy</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Finance">Finance</option>
                            <option value="Food">Food Manufacturers &amp; Distributors</option>
                            <option value="General Labor">General Labor</option>
                            <option value="Government">Government</option>
                            <option value="Health">Health Care</option>
                            <option value="Hospitality">Hospitality</option>
                            <option value="HR">Human Resource</option>
                            <option value="IT">Information Technology</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Law">Law</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="ManufacturingComp">Manufacturing Company</option>
                            <option value="MarketRegulation">Market Regulation</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Mathematics">Mathematics, Life &amp; Physical Science</option>
                            <option value="Media">Media</option>
                            <option value="Medical">Medical</option>
                            <option value="Mining">Mining</option>
                            <option value="Nonprofit">Nonprofit &amp; Social Service</option>
                            <option value="Pharmaceuticals">Pharmaceuticals</option>
                            <option value="Policy">Policy &amp; Politics</option>
                            <option value="Procurement">Procurement</option>
                            <option value="Publications">Publications</option>
                            <option value="Purchasing">Purchasing Procurement</option>
                            <option value="Estate">Real Estate</option>
                            <option value="Recruitment">Recruitment Agency</option>
                            <option value="Religion">Religious Organisation</option>
                            <option value="Research">Research</option>
                            <option value="Resturant">Resturant</option>
                            <option value="Retail">Retail</option>
                            <option value="RuralDev">Rural Development</option>
                            <option value="Science">Science &amp; Biotech</option>
                            <option value="Security">Security</option>
                            <option value="Skilled">Skilled Labour</option>
                            <option value="Sports">Sports &amp; Leisure</option>
                            <option value="Supply">Supply Chain</option>
                            <option value="Education">Teaching / Education</option>
                            <option value="Telecommunications">Telecommunications</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Training">Training</option>
                            <option value="TrainingInst">Training Institution</option>
                            <option value="Transportation">Transportation</option>
                            <option value="University">University</option>
                            <option value="Vocation">Vocational Training</option>
                            <option value="Warehousing">Warehousing</option>
                            <option value="Water">Water &amp; Sanitation</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" placeholder="Contact" value="<?php echo $contact; ?>" name="contact">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Address..." name="address"><?php echo "$address"; ?></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" data-toggle="tooltip" data-bs-tooltip="" placeholder="Skills..." name="skills" title="Atleast 3 skills should be provided."><?php echo "$skills"; ?></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="update">Update</button>
                </form>
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
            <form method="post" action="Jobseeker.php">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Title</th>
                                <th>Company</th>
                                <th>Date</th>
                                <th>JobType</th>
                                <th>Location</th>
                                <th>Contact</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($resultApplication){
                                while($rowApplication = $resultApplication -> fetch_assoc()){
                                    $EmployerID = $rowApplication['EmployerID'];
                                    // collect company name
                                    $queryCompany = "SELECT CompanyName, Contact FROM `employer` WHERE `EmployerID` = $EmployerID";
                                    $resultCompany = $connection -> query($queryCompany);
                                    $rowCompany = $resultCompany -> fetch_assoc();
                                    $CompanyName = $rowCompany['CompanyName'];
                                    $Contact = $rowCompany['Contact'];
                        ?>
                        
                            <tr>
                                <td><input value="<?php echo $aID; ?>" name="selected" type="radio"></td>
                                <td><?php echo $rowApplication['Title']; ?></td>
                                <td><?php echo $CompanyName; ?></td>
                                <td><?php echo $rowApplication['Date']; ?></td>
                                <td><?php echo $rowApplication['JobType']; ?></td>
                                <td><?php echo $rowApplication['Location']; ?></td>
                                <td><?php echo $Contact; ?></td>
                                <td><?php echo $rowApplication['Salary']; ?></td>
                            </tr>

                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <div class="form-group text-center col-md-4 offset-md-4 p-4"><button class="btn btn-danger text-white form-control" type="submit" name="delete">Delete</button></div>
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
                <form method="post" action="jobseeker.php#vacancies">
                    <div class="form-group col-md-4 offset-md-4"><input class="form-control" type="text" placeholder="Job Title or Skill" name="title" style="font-family: 'Open Sans', sans-serif;"></div>
                    <div class="form-group col-md-4 offset-md-4"><button class="btn btn-success btn-lg form-control" type="submit" style="font-family: 'Open Sans', sans-serif;font-size: 16px;font-weight: 400;" name="seek"><strong>&nbsp;Seek</strong><br></button></div>
                    <?php
                        if(isset($_POST['seek']) && !empty($_POST['title'])){
                            $title = escTxt($connection, $_POST['title']); 
                            $querySeek = "SELECT v.Id, e.EmployerID, e.CompanyName, v.Title, v.Location, v.JobType, v.Experience, v.Salary, v.Positions, v.Closing, v.Qualifications FROM vacancies AS v INNER JOIN employer AS e ON e.EmployerID = v.EmployerID WHERE v.Title LIKE '%$title%' AND v.Status = 'Posted'";
                            $resultSeek = $connection -> query($querySeek);
                            while($rowSeek = $resultSeek -> fetch_assoc()){
                    ?>
                    <div class="row product-list dev">
                        <div class="offset-md-4 col-sm-6 col-md-4 product-item animation-element">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/logo-default.jpg"></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2><a href="#"></a><?php echo $rowSeek['CompanyName']; ?></h2>
                                    </div>
                                    <div class="col-4"><a class="small-text" href="#">Top employer</a></div>
                                </div>
                                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong><p style="padding-top: 10px;"><?php echo $rowSeek['Title']; ?></p></strong>
                                        <p><strong>Location : </strong><?php echo $rowSeek['Location']; ?></p>
                                        <p><strong>Job Type : </strong><?php echo $rowSeek['JobType']; ?></p>
                                        <p><strong>Qualifications : </strong><?php echo $rowSeek['Qualifications']; ?></p>
                                        <p><strong>Experience : </strong><?php echo $rowSeek['Experience']; ?></p>
                                        <p><strong>Positions : </strong><?php echo $rowSeek['Positions']; ?></p>
                                        <p><strong>Closing : </strong><?php echo $rowSeek['Closing']; ?></p>
                                        <div class="row">
                                            <div class="col-6"><a class="btn btn-md btn-success" href="application.php?id=<?php echo $rowSeek['Id']; ?>">Apply</a></div>
                                            <div class="col-6"><p class="product-price"><?php echo $rowSeek['Salary']; ?></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        } else {
                            $querySeek = "SELECT v.Id, e.EmployerID, e.CompanyName, v.Title, v.Location, v.Experience, v.Salary, v.Positions, v.Closing, v.JobType, v.Qualifications FROM vacancies AS v INNER JOIN employer AS e ON e.EmployerID = v.EmployerID AND v.Status = 'Posted'";
                            $resultSeek = $connection -> query($querySeek);
                            while($rowSeek = $resultSeek -> fetch_assoc()){
                    ?>
                    <div class="row product-list dev">
                        <div class="offset-md-4 col-sm-6 col-md-4 product-item animation-element">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/logo-default.jpg"></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2><a href="#"></a><?php echo $rowSeek['CompanyName']; ?></h2>
                                    </div>
                                    <div class="col-4"><a class="small-text" href="#">Top employer</a></div>
                                </div>
                                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong><p style="padding-top: 10px;"><?php echo $rowSeek['Title']; ?></p></strong>
                                        <p><strong>Location : </strong><?php echo $rowSeek['Location']; ?></p>
                                        <p><strong>JobType : </strong><?php echo $rowSeek['JobType']; ?></p>
                                        <p><strong>Qualifications : </strong><?php echo $rowSeek['Qualifications']; ?></p>
                                        <p><strong>Experience : </strong><?php echo $rowSeek['Experience']; ?></p>
                                        <p><strong>Positions : </strong><?php echo $rowSeek['Positions']; ?></p>
                                        <p><strong>Closing : </strong><?php echo $rowSeek['Closing']; ?></p>
                                        <div class="row">
                                            <div class="col-6"><a class="btn btn-md btn-success" href="application.php?id=<?php echo $rowSeek['Id']; ?>">Apply</a></div>
                                            <div class="col-6"><p class="product-price"><?php echo $rowSeek['Salary']; ?></p></div>
                                        </div>
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