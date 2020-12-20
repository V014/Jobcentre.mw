<?php
session_start();
include ('assets/php/connection.php');
include ('assets/php/locum-employer-credentials.php');
include ('assets/php/locum-applied.php');
include('assets/php/locum-postedjobs.php');
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
    <title>locum - Employer</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger active" href="#carousel">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="locum_vacancies.php">Vacancies</a></li>
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
                        <h1 class="hero-title">Welcome <?php echo $organisationName; ?></h1>
                        <hr class="light my-4">
                        <p class="hero-subtitle">Add to your experience by updating your profile, visible vacancies to seek are labeled posted under status.</p>
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
    <section id="services" style="padding: 220px 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><a class="js-scroll-trigger" href="#about"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #ffc107;"></i></a>
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
            <a class="js-scroll-trigger" href="#top">
                <i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;">
                </i>
            </a>

            <form class="text-center form-signin" method="post" action="assets/php/locum-employer-profile.php"><span class="reauth-email"> </span>
                <p><strong><?php echo $organisationName; ?></strong> profile management</p>

                <div class="form-group">
                    <input class="form-control" type="email" id="inputEmail" required="" value="<?php echo $email; ?>" placeholder="Email address" name="email" style="font-family: 'Open Sans', sans-serif;">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="inputPassword" required="" value="<?php echo $password; ?>" placeholder="Password" style="font-family: 'Open Sans', sans-serif;" name="password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" value="<?php echo $ceo; ?>" placeholder="Cheif executive officer" name="ceo">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" value="<?php echo $organisationName; ?>" placeholder="Organisation Name" name="organisationName">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="address" placeholder="Address..."><?php echo $address; ?></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" name="location">
                        <optgroup label="Location">
                            <option value="<?php echo $location; ?>"><?php echo "$location (Location)"; ?></option>
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
                <input class="form-control" name="city" type="text" placeholder="City | Province" value="<?php echo $city; ?>"></div>
                <div class="form-group">
                    <input class="form-control" type="text" name="contact" placeholder="Contact" value="<?php echo $contact; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Company Website" name="website" value="<?php echo $website; ?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" placeholder="Organisation Description..."><?php echo $description; ?></textarea></div>
                <button class="btn btn-success" type="submit" name="update">Update</button>
            </form>
        </div>
    </section>
     <!-- Post Job -->
    <section id="postjob" class="p-0" style="background-color: #28a745;padding: 200px 0px;font-family: 'Open Sans', sans-serif;">
        <div class="container-fluid p-0">
            <div class="row" style="padding: 128px 0px;">
                <div class="col-lg-8 mx-auto text-center"><a class="js-scroll-trigger" href="#services"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: rgb(254,254,254);"></i></a>
                    <h2 class="section-heading" style="color: rgb(255,255,255);">Post Job</h2>
                    <hr class="light my-4">
                    <p class="mb-5" style="font-family: 'Open Sans', sans-serif;color: rgb(255,255,255);">Give a description of the job you want to engage with job seeker, you will be able to modify its details after posting aswell.</p>

                    <form method="post" action="assets/php/locum-postjob.php">
                        <div class="form-group col-md-8 offset-md-2">
                            <input class="form-control" type="text" placeholder="Job Title or Skill" name="title" required="">
                        </div>
                        <div class="form-group col-md-8 offset-md-2" data-toggle="tooltip" data-bs-tooltip="" title="Location of job">
                            <select class="form-control" name="location" required="">
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
                    <p>Below is a list of vacancies your company has posted. After settling terms, your posts will be able to be viewed by jobseekers.
                </div>
            </div>
            <form method="post" action="assets/php/locum-postedit.php">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Title</th>
                                <th>Location</th>
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
            <div class="form-group col-md-6 offset-md-3" style="padding-top: 20px;">
                <select class="form-control" name="column">
                    <optgroup label="Detail to change">
                        <option value="Title" selected="">Title</option>
                        <option value="Location">Job Location</option>
                        <option value="Description">Description</option>
                        <option value="Closing">Closing Date</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group col-md-6 offset-md-3">
                    <textarea class="form-control" name="replacement" placeholder="Replacement..." data-toggle="tooltip" data-bs-tooltip="" title="Write the replacement details here"></textarea>
                </div>
            <div class="form-group text-center col-md-6 offset-md-3">
                <button class="btn btn-success text-white form-control" type="submit" name="view">View</button></a>
            </div>
            <div class="form-group text-center col-md-6 offset-md-3">
                <button class="btn btn-info text-white form-control" type="submit" name="update">Update</button></a>
            </div>
            <div class="form-group text-center col-md-6 offset-md-3">
                <button class="btn btn-danger text-white form-control" type="submit" name="delete">Delete</button>
            </div>
        </form>
    </section>
    <!-- Applied -->
    <section id="applied" class="bg-dark" style="padding: 200px 0px;font-family: 'Open Sans', sans-serif;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center text-white"><a class="js-scroll-trigger" href="#postjob"><i class="fa fa-chevron-circle-up" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="400" style="font-size: 40px;color: #28a745;"></i></a>
                    <h2 class="section-heading">Applications</h2>
                    <hr class="my-4" style="filter: contrast(0%);">
                    <p>Below is a list of people who hace applied for vacancies you posted.</p>
                </div>
            </div>
            <form method="post" action="assets/php/locum-delete-application.php">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Vacancy</th>
                                <th>Fullname</th>
                                <th>Gender</th>
                                <th data-toggle="tooltip" data-bs-tooltip="" title="Date of birth">Dob</th>
                                <th>City</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Profession</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($resultSeeker){
                                while($rowSeeker = $resultSeeker -> fetch_assoc()){
                        ?>
                        
                            <tr>
                                <td><input value="<?php echo $aID; ?>" name="selected" type="radio"></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $rowSeeker['Fullname']; ?></td>
                                <td><?php echo $rowSeeker['Gender']; ?></td>
                                <td><?php echo $rowSeeker['Dob']; ?></td>
                                <td><?php echo $rowSeeker['City']; ?></td>
                                <td><?php echo $rowSeeker['Contact']; ?></td>
                                <td><?php echo $rowSeeker['Address']; ?></td>
                                <td><?php echo $rowSeeker['Profession']; ?></td>
                                <td><?php echo $date; ?></td>
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
            <form class="form form-horizontal" method="POST" action="assets/php/locum-delete-files.php">
                <h2 class="section-heading"><strong>Download</strong> files below.</h2>
              <?php
                $files = scandir("assets/locum_uploads");
                  for ($a = 2; $a < count($files); $a++) {
                    if(strpos($files[$a], $email)){
               ?>
              <div class="form-group card"><input value="<?php echo $files[$a]; ?>" name="selected" type="radio"><p><a download="<?php echo $files[$a] ?>" href="assets/locum_uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a></p></div>
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