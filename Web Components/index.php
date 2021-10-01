<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Xpert Health - Home</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/32.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Xpert health</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Specialties">Specialties</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Doctors">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Hospital">Hospital</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <?php
                if(!isset($_SESSION['patient_id']))
                {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <?php
                }
                else
                {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="client/dashboard.php">Dashboard</a></li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>
    </nav>
    <header id="home" class="text-center text-white d-flex masthead" style="background-image:url('assets/img/header.jpg');">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>Book for Consulting <br> today and get a kit</strong></h1>
                    <hr>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">A wide range of Doctors, Physicians and more at your call </p><a class="btn btn-primary btn-xl" role="button" href="#services">Find Out More</a>
            </div>
        </div>
    </header>
    <section id="Specialties" class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0 popup-gallery">
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Specialties/fullsize/1.jpg"><img class="img-fluid" src="assets/img/Specialties/thumbnails/1.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Immunologists</strong></span></div>
                                <div class="project-name"><span>They treat immune system disorders such as asthma, eczema, food allergies, insect sting allergies, and some autoimmune diseases.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Specialties/fullsize/2.jpg"><img class="img-fluid" src="assets/img/Specialties/thumbnails/2.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Anesthesiologists</strong></span></div>
                                <div class="project-name"><span>These doctors give you drugs to numb your pain or to put you under during surgery, childbirth, or other procedures.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Specialties/fullsize/3.jpg"><img class="img-fluid" src="assets/img/Specialties/thumbnails/3.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Cardiologists</strong></span></div>
                                <div class="project-name"><span>They’re experts on the heart and blood vessels.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Specialties/fullsize/4.jpg"><img class="img-fluid" src="assets/img/Specialties/thumbnails/4.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Colon and Rectal Surgeons</strong></span></div>
                                <div class="project-name"><span>You would see these doctors for problems with your small intestine, colon, and bottom.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Specialties/fullsize/5.jpg"><img class="img-fluid" src="assets/img/Specialties/thumbnails/5.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Critical Care Medicine Specialists</strong></span></div>
                                <div class="project-name"><span>They care for people who are critically ill or injured, often heading intensive care units in hospitals.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Specialties/fullsize/6.jpg"><img class="img-fluid" src="assets/img/Specialties/thumbnails/6.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Endocrinologists</strong></span></div>
                                <div class="project-name"><span>These are experts on hormones and metabolism. They can treat conditions like diabetes, thyroid problems, infertility, and calcium and bone disorders.</span></div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section id="about" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="text-white section-heading">We've got what you need!</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Our physicians take a detailed and personalized approach to patient care. For over 25 years, we have been providing comprehensive heart health care to the Capital Region.</p><a class="btn btn-light btn-xl" role="button" href="/register.php">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <section id="Doctors" class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0 popup-gallery">
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Doctors/fullsize/1.jpg"><img class="img-fluid" src="assets/img/Doctors/thumbnails/1.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Nita Ahuja</strong></span></div>
                                <div class="project-name"><span>Surgery</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Doctors/fullsize/2.jpg"><img class="img-fluid" src="assets/img/Doctors/thumbnails/2.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Catherine Alonzo</strong></span></div>
                                <div class="project-name"><span>Catherine Alonzo</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Doctors/fullsize/3.jpg"><img class="img-fluid" src="assets/img/Doctors/thumbnails/3.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Joachim Baehring</strong></span></div>
                                <div class="project-name"><span>Neurology</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Doctors/fullsize/4.jpg"><img class="img-fluid" src="assets/img/Doctors/thumbnails/4.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Richard Antaya</strong></span></div>
                                <div class="project-name"><span>Dermatology</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Doctors/fullsize/5.jpg"><img class="img-fluid" src="assets/img/Doctors/thumbnails/5.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>PAUL BERNSTEIN</strong></span></div>
                                <div class="project-name"><span>Nephrology</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Doctors/fullsize/6.jpg"><img class="img-fluid" src="assets/img/Doctors/thumbnails/6.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Robert Bona</strong></span></div>
                                <div class="project-name"><span>Hematology</span></div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Premium Experience</h3>
                        <p class="text-muted mb-0">We have experienced consultants personnel ready to offer the most accurate information services</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Always Available</h3>
                        <p class="text-muted mb-0">If you Send us a message We will Always respond 24/7</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                        <h3 class="mb-3">Up to Date</h3>
                        <p class="text-muted mb-0">We give you updates on the current health situations around the world health updates on our platform.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                        <h3 class="mb-3">We Care</h3>
                        <p class="text-muted mb-0">Your experience will be the best because your health is of top priority to us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Hospital" class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0 popup-gallery">
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Hospital/fullsize/1.jpg"><img class="img-fluid" src="assets/img/Hospital/thumbnails/1.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>the john hopkins hospital</strong></span></div>
                                <div class="project-name"><span>The Johns Hopkins Hospital is a world renowned leader in patient care, serving the greater Baltimore community and patients from all across the globe.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Hospital/fullsize/2.jpg"><img class="img-fluid" src="assets/img/Hospital/thumbnails/2.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Mayo Clinic</strong></span></div>
                                <div class="project-name"><span>The Rochester, Minnesota–based Mayo Clinic has provided patients with comprehensive medical care for over 150 years.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Hospital/fullsize/3.jpg"><img class="img-fluid" src="assets/img/Hospital/thumbnails/3.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Cleveland Clinic</strong></span></div>
                                <div class="project-name"><span>it was the first major medical center to organize with patient-center institutes to combine clinical services around a single disease or organ system.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="Hospital/fullsize/4.jpg"><img class="img-fluid" src="assets/img/Hospital/thumbnails/4.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>Singapore General Hospital</strong></span></div>
                                <div class="project-name"><span>The oldest hospital in Singapore, founded in 1821, has grown from a British imperial troop cantonment near the banks of the Singapore River</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Hospital/fullsize/5.jpg"><img class="img-fluid" src="assets/img/Hospital/thumbnails/5.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>University of Tokyo Hospital</strong></span></div>
                                <div class="project-name"><span>Japan's vital medical hub has advanced both medical research and practice, while educating the top doctors and researchers in the country.</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/Hospital/fullsize/6.jpg"><img class="img-fluid" src="assets/img/Hospital/thumbnails/6.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span><strong>st. vincent medical center</strong></span></div>
                                <div class="project-name"><span>Verity Health System entered into an agreement with the State of California on 20/03/ 2020, to give the State access to the closed hospital as part of the State's preparations to care for patients impacted by COVID-19.</span></div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Give us a call or send us an email and we will get back to you as soon as possible!. Hospitals should also send us an Email if interested in our Platform</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center me-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a href="mailto:Admin@xperthealth.com">Admin@xperthealth.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>