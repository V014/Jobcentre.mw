<?php
session_start();
if(isset($_SESSION['reply'])){
    if($_SESSION['reply'] === "suberror"){
        $reply = "Try again later!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - TheJobCenter</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php#login">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger active" href="registration.php">Register</a></li>
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
    <section class="text-center">
        <button class="btn btn-success btn-lg" type="button" data-toggle="collapse" data-target="#seeker">Job Seeker</button>
        <button class="btn btn-dark btn-lg" type="button" data-toggle="collapse" data-target="#employer">Employer</button>
    </section>
<!-- Job seeker -->
    <section id="seeker" style="font-family: 'Open Sans', sans-serif;background-image: url(&quot;assets/img/banner-2.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: top;background-attachment: fixed;" class="collapse">
        <div class="login-card">
            <a class="js-scroll-trigger offset-5" href="#carousel"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
            <form class="form-signin" method="post" action="assets/php/user-registration.php">
                <span class="reauth-email"> </span>
                <p class="text-center">Job seekers form below.</p>
                <label for="email">Email</label>
                <div class="form-group">
                    <input class="form-control" type="email" id="inputEmail" required="" placeholder="Email" name="email">
                </div>
                <label for="password">Password</label>
                <div class="form-group">
                    <input class="form-control" type="password" id="inputPassword" required="" placeholder="Password" name="password">
                </div>
                <label for="fullname">Fullname</label>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                </div>
                <label for="gender">Gender</label>
                <div class="form-group">
                    <select class="form-control" name="gender">
                        <optgroup label="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </optgroup>
                    </select>
                </div>
                <label for="date of birth">Date of birth</label>
                <div class="form-group">
                    <input class="form-control" data-toggle="tooltip" data-bs-tooltip="" type="date" name="dob" title="Date of Birth">
                </div>
                <label for="location">Location</label>
                <select class="form-control" data-toggle="tooltip" data-bs-tooltip="" name="location" title="Your current location">
                    <optgroup label="Location">
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
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <select class="form-control" name="nationality">
                        <optgroup label="Nationality">
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
                <label for="city">City</label>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="City | Province" name="city">
                </div>
                <label for="industry">Industry</label>
                <div class="form-group">
                    <select class="form-control" name="industry">
                        <optgroup label="industry">
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
                <label for="number">Number</label>
                <div class="form-group">
                    <input class="form-control" type="number" placeholder="Contact" name="contact">
                </div>
                <label for="Address">Address</label>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Postal address..." name="address"></textarea>
                </div>
                <label for="skills">Skills</label>
                <div class="form-group">
                    <textarea class="form-control" data-toggle="tooltip" data-bs-tooltip="" placeholder="Atleast 3 Skills..." name="skills" title="Atleast 3 skills should be provided."></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="register">Register</button>
            </form>
        </div>
    </section>
<!-- emplpoyer -->
    <section id="employer" style="font-family: 'Open Sans', sans-serif;background-image: url(&quot;assets/img/banner-3.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: top;background-attachment: fixed;" class="collapse">
    <div class="text-center login-card">
        <a class="js-scroll-trigger" href="#services">
            <i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;">
            </i>
        </a>

        <form class="text-center form-signin" method="post" action="assets/php/employer-profile.php"><span class="reauth-email"> </span>
            <p>Company form below</p>
            <div class="form-group">
                <input class="form-control" type="email" id="inputEmail" required="" placeholder="Email address" name="email" style="font-family: 'Open Sans', sans-serif;">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" id="inputPassword" required="" placeholder="Password" style="font-family: 'Open Sans', sans-serif;" name="password">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Cheif executive officer" name="ceo">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Company Name" name="companyName">
            </div>
            
            <div class="form-group">
                <select class="form-control" name="industry">
                    <optgroup label="Industry">
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
                <select class="form-control" name="organisationType" style="font-family: 'Open Sans', sans-serif;">
                    <optgroup label="Organisation Type">
                        <option value="Private">Private</option>
                        <option value="Public">Public</option>
                        <option value="Government">Government</option>
                        <option value="SemiGovernment">Semi-Government</option>
                        <option value="NGO">NGO</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="address" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <select class="form-control" name="location">
                    <optgroup label="Location">
                        <option value="Dubai">Dubai</option><option value="Kuwait">Kuwait</option>
                        <option value="Malawi">Malawi</option><option value="Moldova">Moldova</option>
                        <option value="Namibia">Namibia</option><option value="Oman">Oman</option>
                        <option value="Other">Other</option><option value="Qatar">Qatar</option>
                        <option value="UAE">UAE</option>
                    </optgroup>
                </select>
            </div>
        <div class="form-group">
            <input class="form-control" name="city" type="text" placeholder="City | Province"></div>
            <div class="form-group">
                <input class="form-control" type="tel" name="contact" placeholder="Contact">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Company Website" name="website">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" placeholder="Company Description..."></textarea>
            </div>
            <button class="btn btn-success" type="submit" name="register">Register</button>
        </form>
    </div>   
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