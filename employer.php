<?php
session_start();
include ('assets/php/connection.php');
include ('assets/php/employer-credentials.php');
include ('assets/php/applied.php');
include('assets/php/postedjobs.php');
if(isset($_GET['reply'])){
    if($_GET['reply'] === "used"){
        echo "<script>alert('Operation success!')</script>";
    }

    if($_GET['reply'] === "error"){
        echo "<script>alert('Nothing to delete!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employer - TheJobCenter</title>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>

<body id="page-top" style="font-family: 'Open Sans', sans-serif;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger active" href="#carousel">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="vacancies.php">Vacancies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Main</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="scholarships.php">Scholarships</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="about-us.php">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="feedback.php">Feedback</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--- carousel -->
    <section id="carousel" style="padding: 0px 0px;">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-nature carousel-hero" style="background-image: url(&quot;assets/img/banner-1.jpg&quot;);padding: 220px 0px;">
                        <h1 class="text-uppercase"><strong>Welcome <?php echo $companyName; ?><br></strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Malawi's most reliable job site<br>Find your perfect job today.</p>
                        <a href="#login" class="btn btn-success btn-lg js-scroll-trigger">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-photography carousel-hero" style="background-image: url(&quot;assets/img/slider-1.jpg&quot;);padding: 220px 0px;">
                        <h1 class="text-uppercase"><strong>Contact An Employer</strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Once you apply for a vacancy, the employer will receive your application documents.</p>
                        <a href="#login" class="btn btn-success btn-lg js-scroll-trigger">Get Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-technology carousel-hero" style="background-image: url(&quot;assets/img/slider-2.jpg&quot;);padding: 220px 0px;">
                        <h1 class="text-uppercase"><strong>Browse Vacanices</strong></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">While you're logged in, scroll down the page or click the Seek job icon to browse.</p>
                        <a href="#login" class="btn btn-success btn-lg js-scroll-trigger">Get Started</a>
                    </div>
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
    <!-- Services -->
    <section id="services" style="padding: 220px 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><a class="js-scroll-trigger" href="#carousel"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #ffc107;"></i></a>
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#postjob"><i class="fa fa-search" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #ffc107;"></i></a>
                        <h3 class="mb-3">Post Job</h3>
                        <p class="text-muted mb-0">Post a vacany for job seekers to apply.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#profile"><i class="fa fa-user-circle-o" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #ffc107;"></i></a>
                        <h3 class="mb-3">Manage Profile</h3>
                        <p class="text-muted mb-0">Update your company information easily.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><a class="js-scroll-trigger" href="#applied"><i class="fa fa-tachometer" data-aos="zoom-in" data-aos-duration="200" style="font-size: 64px;color: #ffc107;"></i></a>
                        <h3 class="mb-3">Monitor Job</h3>
                        <p class="text-muted mb-0">View vacancy applications and activity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile -->
    <section id="profile" style="font-family: 'Open Sans', sans-serif;background-image: url(&quot;assets/img/banner-2.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: top;background-attachment: fixed;">
        <div class="text-center login-card">
            <a class="js-scroll-trigger" href="#services">
                <i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;">
                </i>
            </a>

            <form class="text-center form-signin" method="post" action="assets/php/employer-profile.php"><span class="reauth-email"> </span>
                <p><strong><?php echo $companyName; ?></strong> profile management</p>
                <div class="form-group"><input class="form-control" type="email" id="inputEmail" required="" value="<?php echo $email; ?>" placeholder="Email address" name="email" style="font-family: 'Open Sans', sans-serif;"></div>
                <div class="form-group"><input class="form-control" type="password" id="inputPassword" required="" value="<?php echo $password; ?>" placeholder="Password" style="font-family: 'Open Sans', sans-serif;" name="password"></div>
                <div class="form-group"><input class="form-control" type="text" value="<?php echo $ceo; ?>" placeholder="Cheif executive officer" name="ceo"></div>
                <div class="form-group"><input class="form-control" type="text" value="<?php echo $companyName; ?>" placeholder="Company Name" name="companyName"></div>
                
                <div class="form-group">
                    <select class="form-control" name="industry">
                        <optgroup label="Industry">
                            <option value="<?php echo $industry; ?>"><?php echo "$industry (Industry)"; ?></option>
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
                            <option value="<?php echo $orgType; ?>"><?php echo "$orgType (Organisation)"; ?></option><option value="Private">Private</option>
                            <option value="Public">Public</option>
                            <option value="Government">Government</option>
                            <option value="SemiGovernment">Semi-Government</option>
                            <option value="NGO">NGO</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="address" placeholder="Address"><?php echo $address; ?></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" name="location">
                        <optgroup label="Location">
                            <option value="<?php echo $location; ?>"><?php echo "$location (Location)"; ?></option>
                            <option value="Dubai">Dubai</option><option value="Kuwait">Kuwait</option>
                            <option value="Malawi">Malawi</option><option value="Moldova">Moldova</option>
                            <option value="Namibia">Namibia</option><option value="Oman">Oman</option>
                            <option value="Other">Other</option><option value="Qatar">Qatar</option>
                            <option value="UAE">UAE</option>
                        </optgroup>
                    </select>
                </div>
            <div class="form-group">
                <input class="form-control" name="city" type="text" placeholder="City | Province" value="<?php echo $city; ?>"></div>
                <div class="form-group">
                    <input class="form-control" type="tel" name="contact" placeholder="Contact" value="<?php echo $contact; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Company Website" name="website" value="<?php echo $website; ?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" placeholder="Company Description..."><?php echo $description; ?></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="update">Update</button>
            </form>
        </div>
    </section>
    <!-- Post Job -->
    <section id="postjob" class="p-0" style="background-color: #28a745;padding: 200px 0px;font-family: 'Open Sans', sans-serif;">
        <div class="container-fluid p-0">
            <div class="row" style="padding: 128px 0px;">
                <div class="col-lg-8 mx-auto text-center"><a class="js-scroll-trigger" href="#profile"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: rgb(254,254,254);"></i></a>
                    <h2 class="section-heading" style="color: rgb(255,255,255);">Post Job</h2>
                    <hr class="light my-4">
                    <p class="mb-5" style="font-family: 'Open Sans', sans-serif;color: rgb(255,255,255);">Give a description of the job you want to engage with job seeker, you will be able to modify its details after posting aswell.</p>

                    <form method="post" action="assets/php/postjob.php">
                        <div class="form-group col-md-8 offset-md-2">
                            <input class="form-control" type="text" placeholder="Job Title or Skill" name="title" required="">
                        </div>
                        <div class="form-group col-md-8 offset-md-2" data-toggle="tooltip" data-bs-tooltip="" title="Location of job">
                            <select class="form-control" name="location">
                                <optgroup label="Job Location">
                                    <option value="Balaka">Balaka</option>
                                    <option value="Blantyre" selected="">Blantyre</option>
                                    <option value="Chikwawa">Chikwawa</option>
                                    <option value="Chiradzulu">Chiradzulu</option>
                                    <option value="Dedza">Dedza</option>
                                    <option value="Dowa">Dowa</option>
                                    <option value="Karonga">Karonga</option>
                                    <option value="Kasungu">Kasungu</option>
                                    <option value="Lilongwe">Lilongwe</option>
                                    <option value="Machinga">Machinga</option>
                                    <option value="Mangochi">Mangochi</option>
                                    <option value="Mchinji">Mchinji</option>
                                    <option value="Mulanje">Mulanje</option>
                                    <option value="Mwanza">Mwanza</option>
                                    <option value="Mzimba">Mzimba</option>
                                    <option value="Mzuzu">Mzuzu</option>
                                    <option value="Neno">Neno</option>
                                    <option value="Nkhatabay">Nkhatabay</option>
                                    <option value="Nkhotakota">Nkhotakota</option>
                                    <option value="Nsanje">Nsanje</option>
                                    <option value="Ntcheu">Ntcheu</option>
                                    <option value="Ntchisi">Ntchisi</option>
                                    <option value="Phalombe">Phalombe</option>
                                    <option value="Rumphi">Rumphi</option>
                                    <option value="Salima">Salima</option>
                                    <option value="Thyolo">Thyolo</option>
                                    <option value="Zomba">Zomba</option>
                                </optgroup>
                            </select>
                        </div>
                    <div class="form-group col-md-8 offset-md-2">
                        <input class="form-control" data-toggle="tooltip" data-bs-tooltip="" type="date" name="closingDate" title="Closing date of vacancy" required="">
                    </div>
                    <div class="form-group col-md-8 offset-md-2" data-bs-tooltip="" title="Quick description">
                        <textarea name="minidesc" class="form-control" placeholder="Quick description..."></textarea>
                    </div>
                    <div class="form-group col-md-8 offset-md-2">
                        <textarea id="description" name="description" placeholder="Full description..."></textarea>
                    </div>
                    <div class="form-group col-md-8 offset-md-2">
                        <button class="btn btn-light btn-lg form-control" name="post" type="submit" style="font-family: 'Open Sans', sans-serif;font-size: 16px;font-weight: 400;"><strong>&nbsp;Post</strong><br></button>
                    </div>
            </form>
            <script>
            ClassicEditor
                .create( document.querySelector( '#description' ) )
                .catch( error => {
                    console.error( error );
                } );
            </script>
        </div>
        </div>
        </div>
    </section>
    <!-- Posted -->
    <section id="posted" style="padding-top: 200px;font-family: 'Open Sans', sans-serif;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center"><a class="js-scroll-trigger" href="#postjob"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">Posted</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                    <p class="col-10 offset-1">Below is a list of vacancies your company has posted. After settling terms, your posts will be able to be viewed by jobseekers. This section is for quick updates of information, if you wish to update your decription, select the vacancy you want to update and click view, it will take you to a page that will allow you to edit the desctription.
                </div>
            </div>
            <form method="post" action="assets/php/postedit.php">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Closing</th>
                                <th data-toggle="tooltip" data-bs-tooltip="" title="Shows if your vacancy is posted after setteling terms">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($rowPosted = $resultsPosted -> fetch_assoc()){
                        ?>
                            <tr>
                                <td><input value="<?php echo $rowPosted['Id']; ?>" name="selected" type="radio" required=""></td>
                                <td><?php echo $rowPosted['Title']; ?></td>
                                <td><?php echo $rowPosted['Location']; ?></td>
                                <td><?php echo $rowPosted['MiniDesc']; ?></td>
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
            <div class="form-group col-md-4 offset-md-4" style="padding-top: 20px;">
                <select class="form-control" name="column" data-toggle="tooltip" data-bs-tooltip="" title="Select the column you want to update and write the change">
                    <optgroup label="Detail to change">
                        <option value="Title" selected="">Title</option>
                        <option value="Location">Job Location</option>
                        <option value="MiniDesc">Description</option>
                        <option value="Closing">Closing Date</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group col-md-4 offset-md-4">
                    <textarea class="form-control" name="replacement" placeholder="Replacement..." data-toggle="tooltip" data-bs-tooltip="" title="Write the replacement details here"></textarea>
                </div>
            <div class="form-group text-center col-md-4 offset-md-4">
                <button class="btn btn-success text-white form-control" type="submit" name="view">View</button></a>
            </div>
            <div class="form-group text-center col-md-4 offset-md-4">
                <button class="btn btn-info text-white form-control" type="submit" name="update">Update</button></a>
            </div>
            <div class="form-group text-center col-md-4 offset-md-4">
                <button class="btn btn-danger text-white form-control" type="submit" name="delete">Delete</button>
            </div>
        </form>
    </section>
    <!-- Applied -->
    <section id="applied" class="bg-dark" style="padding: 200px 0px;font-family: 'Open Sans', sans-serif;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center text-white"><a class="js-scroll-trigger" href="#posted"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">Applications</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                    <p>Below is a list of people who hace applied for vacancies you posted.</p>
                </div>
            </div>
            <form method="post" action="assets/php/delete-application.php">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Vacancy</th>
                                <th>Fullname</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Skills</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($resultApplied){
                                while($rowApplied = $resultApplied -> fetch_assoc()){
                        ?>
                        
                            <tr>
                                <td><input value="<?php echo $aID; ?>" name="selected" type="radio" required=""></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $rowApplied['Fullname']; ?></td>
                                <td><?php echo $rowApplied['Contact']; ?></td>
                                <td><?php echo $rowApplied['Address']; ?></td>
                                <td><?php echo $rowApplied['Skills']; ?></td>
                                <td><?php echo $rowApplied['Date']; ?></td>
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
    <!-- download -->
    <section id="downloads" style="padding: 200px 0px;font-family: 'Open Sans', sans-serif;">
        <div class="form-group col-md-6 offset-md-3 text-center" style="padding-top: 20px;">
            <form class="form form-horizontal" method="POST" action="assets/php/delete-files.php">
                <h2 class="section-heading"><strong>Download</strong> files below.</h2>
              <?php
                $files = scandir("assets/uploads");
                  for ($a = 2; $a < count($files); $a++) {
                    if(strpos($files[$a], $email)){
               ?>
              <div class="form-group card"><input value="<?php echo $files[$a]; ?>" name="selected" type="radio"><p><a download="<?php echo $files[$a] ?>" href="assets/uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a></p></div>
              <?php
                    }
                }
              ?>
              <input type="submit" name="delete" class="btn btn-danger btn-lg form-control" value="delete">
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