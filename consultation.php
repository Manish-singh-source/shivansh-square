<!DOCTYPE html>
<html lang="en">


<head>
    <title>Consultation | Shivansh Square Interior Design</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Book a simple interior design consultation with Shivansh Square for homes, offices, and commercial spaces in India." name="description" >
    <meta content="interior design consultation India, office interior design, home interior design, Shivansh Square" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <style>
        .consultation-card {
            background: #f8f6f1;
            border: 1px solid rgba(13, 39, 56, .1);
            box-shadow: 0 16px 45px rgba(13, 39, 56, .08);
        }

        .consultation-aside {
            background: #0D2738;
            color: #fff;
            padding: 32px;
            border-radius: 8px;
        }

        .consultation-aside a,
        .consultation-aside p {
            color: rgba(255, 255, 255, .86);
        }

        .consultation-aside__item {
            padding: 18px 0;
            border-bottom: 1px solid rgba(204, 166, 105, .28);
        }

        .consultation-aside__item:first-of-type {
            padding-top: 0;
        }

        .consultation-aside__item:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .consultation-aside i {
            color: #CCA669;
            margin-right: 10px;
        }
    </style>

</head>

<body>
    <?php include __DIR__ . '/header.php'; ?>
    <script src="js/site-layout.js"></script>
        
        <!-- content begin -->
        <main>

            <a href="#" id="back-to-top"></a>
                    
            <!-- page preloader begin -->
            <div id="de-loader"></div>
            <!-- page preloader close -->

            <section class="bg-dark text-light relative jarallax">
                <img src="images/background/2.webp" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-md-8">
                            <div class="spacer-double sm-hide"></div>
                            <h1 class="mb-3 wow fadeInUp" data-wow-delay=".2s">Interior Design Consultation</h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Consultation</li>
                            </ul>   
                        </div>
                        <div class="col-md-4">
                            <p class="mb-0 wow fadeInRight" data-wow-delay=".2s">
                                Share your site details and requirements. Our team will help you plan a clear scope for design, materials, budget, and execution.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="gradient-edge-bottom h-50 op-6"></div>
                <div class="sw-overlay op-5"></div>
            </section>

            <section>
                <div class="container">
                    
                    <div class="row g-5 align-items-start">

                        <!-- LEFT -->
                        <div class="col-lg-8">
                            <div class="consultation-card rounded-1 p-40">
                                <form name="interior-estimator-form" id="interior-estimator-form" class="position-relative" method="post" action="mail.php">
                                    <input type="hidden" name="form_type" value="Interior Design Consultation">
                                    <div class="row g-4">

                                        <!-- Name -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="name">Your Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Your full name">
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="email">Email Address</label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="phone">Phone Number</label>
                                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 99670 64755">
                                            </div>
                                        </div>

                                        <!-- City -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="city">City / Site Location</label>
                                                <input type="text" id="city" name="city" class="form-control" placeholder="Mumbai, Pune, Ahmedabad...">
                                            </div>
                                        </div>

                                        <!-- Project Type -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="project_type">Project Type</label>
                                                <div class="relative">
                                                    <select id="project_type" name="project_type" class="form-control">
                                                        <option value="">Select Project Type</option>
                                                        <option>Complete Home Interior</option>
                                                        <option>Modular Kitchen</option>
                                                        <option>Living Room / Bedroom</option>
                                                        <option>Office Interior</option>
                                                        <option>Retail / Commercial Space</option>
                                                        <option>Renovation Work</option>
                                                    </select>
                                                    <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Property Size -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="property_size">Approx. Area</label>
                                                <div class="relative">
                                                    <select id="property_size" name="property_size" class="form-control">
                                                        <option value="">Select Area</option>
                                                        <option>Under 500 sq. ft.</option>
                                                        <option>500 - 1,000 sq. ft.</option>
                                                        <option>1,000 - 2,000 sq. ft.</option>
                                                        <option>2,000 - 5,000 sq. ft.</option>
                                                        <option>Above 5,000 sq. ft.</option>
                                                    </select>
                                                    <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Design Style -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="design_style">Design Style</label>
                                                <div class="relative">
                                                    <select id="design_style" name="design_style" class="form-control">
                                                        <option value="">Select Style</option>
                                                        <option>Modern</option>
                                                        <option>Contemporary</option>
                                                        <option>Luxury</option>
                                                        <option>Traditional Indian</option>
                                                        <option>Minimal</option>
                                                        <option>Not Sure Yet</option>
                                                    </select>
                                                    <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Timeline -->
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <label for="timeline">Project Timeline</label>
                                                <div class="relative">
                                                    <select id="timeline" name="timeline" class="form-control">
                                                        <option value="">Select Timeline</option>
                                                        <option>Flexible</option>
                                                        <option>Within 30 Days</option>
                                                        <option>1 - 3 Months</option>
                                                        <option>3 - 6 Months</option>
                                                        <option>Urgent Requirement</option>
                                                    </select>
                                                    <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Additional Services -->
                                        <div class="col-md-12">
                                            <label class="mb-3">Services Required</label>
                                            <div class="row gx-3">

                                                <div class="col-md-4">
                                                    <div class="d-checkbox">
                                                        <input id="furniture" name="services[]" type="checkbox" value="Furniture and Seating">
                                                        <label for="furniture">Furniture & Seating</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="d-checkbox">
                                                        <input id="lighting" name="services[]" type="checkbox" value="Electrical and Lighting">
                                                        <label for="lighting">Electrical & Lighting</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="d-checkbox">
                                                        <input id="custom" name="services[]" type="checkbox" value="Civil and Interior Works">
                                                        <label for="custom">Civil & Interior</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="d-checkbox">
                                                        <input id="3d" name="services[]" type="checkbox" value="Design and 3D Views">
                                                        <label for="3d">Design & 3D Views</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="d-checkbox">
                                                        <input id="decor" name="services[]" type="checkbox" value="Flooring and Finishes">
                                                        <label for="decor">Flooring & Finishes</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="d-checkbox">
                                                        <input id="supervision" name="services[]" type="checkbox" value="Turnkey Execution">
                                                        <label for="supervision">Turnkey Execution</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Budget -->
                                        <div class="col-md-12">
                                            <div class="field-set">
                                                <label for="budget_range">Estimated Budget Range</label>
                                                <div class="relative">
                                                    <select id="budget_range" name="budget_range" class="form-control">
                                                        <option value="">Select Budget Range</option>
                                                        <option>Under Rs. 5 lakh</option>
                                                        <option>Rs. 5 lakh - Rs. 15 lakh</option>
                                                        <option>Rs. 15 lakh - Rs. 30 lakh</option>
                                                        <option>Rs. 30 lakh - Rs. 75 lakh</option>
                                                        <option>Rs. 75 lakh+</option>
                                                    </select>
                                                    <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Notes -->
                                        <div class="col-md-12">
                                            <div class="field-set">
                                                <label for="message">Project Details</label>
                                                <textarea id="message" name="message" class="form-control" placeholder="Tell us about the site, rooms/areas, current condition, and any specific requirements."></textarea>
                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-md-12">
                                            <input type="submit" id="send_message" value="Request Consultation" class="btn-main">
                                        </div>

                                    </div>

                                    <div id="success_message" class="success">
                                        Your request has been submitted successfully. Our team will contact you shortly.
                                    </div>

                                    <div id="error_message" class="error">
                                        Sorry, there was an error sending your form.
                                    </div>

                                </form>
                            </div>
                        </div>

                        <!-- RIGHT -->
                        <div class="col-lg-4">
                            <div class="consultation-aside">
                                <h3 class="mb-3">Plan Your Interior Project</h3>
                                <p class="mb-4">Use this form to share the basic scope. We will review your requirement and guide you on design direction, material selection, execution timeline, and practical budgeting.</p>

                                <div class="consultation-aside__item">
                                    <h4 class="mb-2"><i class="icofont-phone"></i>Call Us</h4>
                                    <a href="tel:+919967064755">+91 99670 64755</a>
                                </div>

                                <div class="consultation-aside__item">
                                    <h4 class="mb-2"><i class="icofont-clock-time"></i>Working Hours</h4>
                                    <p class="mb-0">Monday - Saturday<br>10:00 AM - 7:00 PM</p>
                                </div>

                                <div class="consultation-aside__item">
                                    <h4 class="mb-2"><i class="icofont-check"></i>What We Cover</h4>
                                    <p class="mb-0">Homes, offices, retail spaces, modular workstations, civil interiors, lighting, flooring, and turnkey execution.</p>
                                </div>
                            </div>
                        </div>


                    </div>                    
                  
                </div>
            </section>
            
        </main>
        <!-- content close -->

        <!-- overlay content begin -->
        <div id="extra-wrap" class="bg-dark text-light">
            <div id="btn-close">
                <span></span>
                <span></span>
            </div>

            <div id="extra-content">
                <div class="brand-text-logo brand-text-logo--overlay">Shivansh Square</div>

                <div class="spacer-30-line"></div>

                <h4 class="mb-3">Latest Projects</h4>

                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="hover">
                            <div class="relative overflow-hidden">
                                <a href="project-single.php" class="d-block hover relative text-light">
                                    <img src="images/misc/up-right-arrow.webp" class="abs w-40 p-4 z-2 top-0 end-0 p-4 hover-op-1" alt="">
                                    <div class="relative overflow-hidden rounded-1 wow scaleIn" data-wow-duration="1.5s">
                                        <img src="images/projects-wide/1.webp" class="w-100 hover-scale-1-2" alt="">
                                    </div>
                                    <div class="gradient-edge-top op-5 h-70"></div>
                                </a>
                            </div>
                        </div>                            
                    </div>

                    <div class="col-lg-6">
                        <div class="hover">
                            <div class="relative overflow-hidden">
                                <a href="project-single.php" class="d-block hover relative text-light">
                                    <img src="images/misc/up-right-arrow.webp" class="abs w-40 p-4 z-2 top-0 end-0 p-4 hover-op-1" alt="">
                                    <div class="relative overflow-hidden rounded-1 wow scaleIn" data-wow-duration="1.5s">
                                        <img src="images/projects-wide/2.webp" class="w-100 hover-scale-1-2" alt="">
                                    </div>
                                    <div class="gradient-edge-top op-5 h-70"></div>
                                </a>
                            </div>
                        </div>                            
                    </div>

                    <div class="col-lg-6">
                        <div class="hover">
                            <div class="relative overflow-hidden">
                                <a href="project-single.php" class="d-block hover relative text-light">
                                    <img src="images/misc/up-right-arrow.webp" class="abs w-40 p-4 z-2 top-0 end-0 p-4 hover-op-1" alt="">
                                    <div class="relative overflow-hidden rounded-1 wow scaleIn" data-wow-duration="1.5s">
                                        <img src="images/projects-wide/3.webp" class="w-100 hover-scale-1-2" alt="">
                                    </div>
                                    <div class="gradient-edge-top op-5 h-70"></div>
                                </a>
                            </div>
                        </div>                            
                    </div>

                    <div class="col-lg-6">
                        <div class="hover">
                            <div class="relative overflow-hidden">
                                <a href="project-single.php" class="d-block hover relative text-light">
                                    <img src="images/misc/up-right-arrow.webp" class="abs w-40 p-4 z-2 top-0 end-0 p-4 hover-op-1" alt="">
                                    <div class="relative overflow-hidden rounded-1 wow scaleIn" data-wow-duration="1.5s">
                                        <img src="images/projects-wide/4.webp" class="w-100 hover-scale-1-2" alt="">
                                    </div>
                                    <div class="gradient-edge-top op-5 h-70"></div>
                                </a>
                            </div>
                        </div>                            
                    </div>


                </div>

                <div class="spacer-30-line"></div>

                <h4 class="mb-3">Our Services</h4>

                <ul class="ul-check">
                    <li><a href="services.php">Residential Interior Design</a></li>
                    <li><a href="services.php">Office Interior Design</a></li>
                    <li><a href="services.php">Civil Interior Works</a></li>
                    <li><a href="services.php">Modular Workstations</a></li>
                    <li><a href="services.php">Lighting & Electrical Works</a></li>
                    <li><a href="services.php">Turnkey Project Execution</a></li>
                </ul>


                <div class="spacer-30-line"></div>

                <h4>Contact Us</h4>
                <div><i class="icofont-clock-time me-2 id-color"></i>Monday - Saturday 10:00 AM - 7:00 PM</div>
                <div><i class="icofont-phone me-2 id-color"></i><a href="tel:+919967064755">+91 99670 64755</a></div>

                <div class="spacer-30-line"></div>

                <h4>About Us</h4>
                <p>Shivansh Square creates practical, premium interiors for Indian homes, offices, and commercial spaces with a clear focus on planning, materials, execution, and finish quality.</p>

                <!-- <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div> -->
            </div>
        </div>
        <!-- overlay content end -->
    <?php include __DIR__ . '/footer.php'; ?>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/vendors.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation-consultation.js"></script>

</body>


</html>
