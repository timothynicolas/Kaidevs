<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaidevs</title>
    <link rel="stylesheet" href="css/main.css">

    <!-- GOOGLE FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="assets/favicon.png" type="image/x-icon" />

    
</head>
<body>
    <div class="container navbar-container">
        <nav class="navbar ">
        <a href="#"><p class="logo">Kaidevs</p></a>

        <div class="nav-links">
            <a href="#about"><button>About</button></a>
            <a href="#services"><button>Services</button></a>
            <button popovertarget="modalUnavailable">Reviews</button>
            <button popovertarget="modalUnavailable">Portfolio</button>
            
        </div>
        
        <a href="https://calendly.com/kaidevs/consultation" target="_blank" rel="noopener noreferrer"><button class="nav-cta">Book a Call<img src="assets/navbar-call.svg" class="navbar-call-icon"></button></a>

        <button class="hamburger-button">
            <img src="assets/navbar-hamburger.svg" class="nav-hamburger">
        </button>
    
        </nav>
        
    </div>
    <div id="modalUnavailable" popover class="modal-overlay">
        <div class="modal-content">
            <img class="modal-icon" src="assets/modal-wrench.svg">
            <p class="modal-title">Coming Soon!</p>
            <p>This part of our site isn’t live yet — just like your dream website, it's <em>still in the works</em>.</p>
            <button popovertarget="modalUnavailable" popovertargetaction="hide" class="modal-button">Close</button>
        </div>
    </div> 

    <section class=" container mobile-navbar">
        <div class="header-container">

            <p class="logo">Kaidevs</p>
            <button id="mobile-xmark">
                <img src="assets/mobile-navbar-xmark.svg">
            </button>
        </div>
        <div class="mobile-navbar-content">
            <ul>
                <a href="#" class="mobile-navbar-item">
                    <li>
                        <img src="assets/mobile-navbar-house.svg" alt="home icon">Home
                    </li>
                </a>

                <a href="#about" class="mobile-navbar-item">
                    <li>
                        <img src="assets/mobile-navbar-about.svg" alt="about icon">About
                    </li>
                </a>

                <a href="#services" class="mobile-navbar-item">
                    <li>
                        <img src="assets/mobile-navbar-services.svg" alt="home icon">Services
                    </li>
                </a>

                <li>
                    <button popovertarget="modalUnavailable">

                        <img src="assets/mobile-navbar-reviews.svg" alt="home icon">Reviews
                    </button>
                </li>
                <li>
                    <button popovertarget="modalUnavailable">

                        <img src="assets/mobile-navbar-portfolio.svg" alt="portfolio icon">Portfolio
                    </button>
                </li>

                
                
            </ul>
            <div class="btn-container">
                 <a href="https://calendly.com/kaidevs/consultation" target="_blank" rel="noopener noreferrer"><button class="hero-primary-btn">Book a Call</button></a>

            </div>
            
        </div>
       
    </section>

    <div class="container">
        <div class="grid-container">

            

            <section class="hero-image-container">
                <img class="hero-image" src="assets/hero-image.svg">
            </section>

            <section class="hero-text-container">
                <div>
                    <p class="primary-header">Crafting Excellence</p>
                    <p class="secondary-header"><span class="secondary-header underline">One Pixel </span>at a Time</p>
                </div>

                <p class="subheader">We craft elegant web experiences that elevate your brand — and turn visitors to customers.</p>
                
                <div class="hero-button-container">
                    <a href="https://calendly.com/kaidevs/consultation" target="_blank" rel="noopener noreferrer" class="hero-primary-btn">Book a Call</a>
                    <a href="#services" class="hero-secondary-btn">See Services</a>
                </div>

            </section>

            <section class="about-image-container" id="about">
                <img class="hero-image" src="assets/about-image.svg">
            </section>
            
            <section class="about-text-container">
                
                <p class="secondary-header">We are <span class="primary-header underline">Kaidevs</span></p>

                <p class="subheader">At Kaidevs, we believe in the principle of Kaizen—a Japanese philosophy that means “continuous improvement.” We apply this mindset to every line of code, every user interface, and every client experience.</p>
                <br>

                <p class="subheader">We’re not just developers—we’re growth partners. Whether you're a startup, a small business, or an enterprise, we build websites that adapt to your goals and scale with your success.</p>
            </section>

            <section class="services-text-container" id="services">
                <p class="secondary-header">Our <span class="primary-header underline">Services</span></p>
            </section>

            <section class="services-carousel-container">
                <div class="carousel-container">
                    <button id="prevBtn" class="nav-btn">‹</button>

                    <div class="carousel-track">

                        <!-- PACKAGE 1-->

                        <div class="carousel-item">
                            <div class="service-description">
                                <p class="title">Website Design</p>
                                <p>Already have a developer? We'll handle the design for you!</p>
                                <p>We create a custom website design that reflects your brand's personality—delivered in clean, organized Figma design file.</p>

                                <button class="service-btn">Choose Plan</button>
                            </div>
                           
                            <hr>

                            <div class="design-inclusions">
                                <p class="subtitle">Design</p>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Custom Figma Layouts</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Brand-consistent Style Guide</p>
                                </div>
                               

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Dev-ready Assets</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Basic SEO Setup</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Custom Domain & Hosting</p>
                                </div>
                                
                            </div>
                            <div class="advanced-inclusions">
                                <p class="subtitle">Advanced</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Admin Dashboard Panel</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Account Management</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Account Management</p>
                                </div>
                            </div>
                            <!-- <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button> -->

                        </div>

                        <!-- PACKAGE 2 -->

                        <div class="carousel-item">
                            <div class="service-description">
                                <p class="title">Website Development</p>
                                <p>Already got a design? We'll bring it to life!</p>
                                <p>You provife the design—we'll handle the responsive, pixel-accurate front-end code. Ideal for static sites or dev handoff.</p>

                                <button class="service-btn">Choose Plan</button>
                            </div>
                           
                            <hr>

                            <div class="design-inclusions">
                                <p class="subtitle">Design</p>
                                <div class="item">
                                    <img class="check" src="assets/services-xmark.svg">
                                    <p>Custom Figma Layouts</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-xmark.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-xmark.svg">
                                    <p>Brand-consistent Style Guide</p>
                                </div>
                               

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Dev-ready Assets</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic SEO Setup</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Custom Domain & Hosting</p>
                                </div>
                                
                            </div>
                            <div class="advanced-inclusions">
                                <p class="subtitle">Advanced</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Admin Dashboard Panel</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Account Management</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Account Management</p>
                                </div>
                            </div>
                            <!-- <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button> -->

                        </div>

                        <!-- PACKAGE 3-->

                        <div class="carousel-item special-item">
                            <!-- <div class="popular-badge">MOST POPULAR</div> -->
                            <div class="service-description">
                                <p class="title">Complete Website Build</p>
                                <p>We design and code the website for you. Simple and easy.</p>
                                <p>We handle both the website design and development. Great for portfolios, landing pages, and basic business sites.</p>

                                <button class="service-btn special-btn">Choose Plan</button>
                            </div>
                           
                            <hr>

                            <div class="design-inclusions">
                                <p class="subtitle">Design</p>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Custom Figma Layouts</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Brand-consistent Style Guide</p>
                                </div>
                               

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Dev-ready Assets</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic SEO Setup</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Custom Domain & Hosting</p>
                                </div>
                                
                            </div>
                            <div class="advanced-inclusions">
                                <p class="subtitle">Advanced</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Admin Dashboard Panel</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Account Management</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Account Management</p>
                                </div>
                            </div>
                            <!-- <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button> -->

                        </div>

                        <!-- PACKAGE 4 -->

                        <div class="carousel-item">
                            <div class="service-description">
                                <p class="title">Business Website Build</p>
                                <p>Design, code, and advanced features—all in one.</p>
                                <p>This all-in-one package combines design, development, and powerful tools like booking and online stores.</p>

                                <button class="service-btn">Choose Plan</button>
                            </div>
                           
                            <hr>

                            <div class="design-inclusions">
                                <p class="subtitle">Design</p>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Custom Figma Layouts</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Brand-consistent Style Guide</p>
                                </div>
                               

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Dev-ready Assets</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic SEO Setup</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Custom Domain & Hosting</p>
                                </div>
                                
                            </div>
                            <div class="advanced-inclusions">
                                <p class="subtitle">Advanced</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Admin Dashboard Panel</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Account Management</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Account Management</p>
                                </div>
                            </div>
                            <!-- <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button> -->
                        </div>
                    </div>

                    <button id="nextBtn" class="nav-btn">›</button>
                </div>
            </section>

            <section class="services-plan1 plan">
                <div class="service-desc">
                    <p class="title">Website Design</p>
                    <p>Already have a developer? We'll handle the design for you!</p>
                    <p>We create a custom website that reflects your brand's personality—delivered in clean, organized Figma design file.</p>
                    <button>Choose Plan</button>
                </div>
                <hr>
                <div class="inclusion-container">

                    <p class="title">Design</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Custom Figma Layouts</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Mobile & Desktop Design</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Brand-consistent Style Guide</p>
                    </div>
                    
                </div>

                <div class="inclusion-container">
                    <p class="title">Development</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Dev-ready Assets</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Basic SEO Setup</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Custom Domain & Hosting</p>
                    </div>
                </div>

                <div class="inclusion-container">
                    <p class="title">Advanced</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Business Integrated System</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Admin Dashboard</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Database Integration</p>
                    </div>
                </div>
            </section>
            <section class="services-plan2 plan">
                <div class="service-desc">
                    <p class="title">Website Development</p>
                    <p>Already got a design? We'll bring it to life!</p>
                    <p>You provide the design—we'll handle the responsive, pixel-accurate front-end code. Ideal for static sites or dev handoff. </p>
                    <button>Choose Plan</button>
                </div>
                <hr>
                <div class="inclusion-container">

                    <p class="title">Design</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Custom Figma Layouts</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Mobile & Desktop Design</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Brand-consistent Style Guide</p>
                    </div>
                    
                </div>

                <div class="inclusion-container">
                    <p class="title">Development</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Dev-ready Assets</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Basic SEO Setup</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Custom Domain & Hosting</p>
                    </div>
                </div>

                <div class="inclusion-container">
                    <p class="title">Advanced</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Business Integrated System</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Admin Dashboard</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Database Integration</p>
                    </div>
                </div>
            </section>
            <section class="services-plan3 plan">
                
                <div class="popular-badge">MOST POPULAR</div> 

                <div class="service-desc">
                    <p class="title">Complete Website Build</p>
                    <p>We design and code the website for you. Simple and Easy.</p>
                    <p>We handle both the website design and development. Great for portfolios, landing pages, and basic business sites.</p>
                    <button class="services-plan3-button">Choose Plan</button>
                </div>
                <hr>
                <div class="inclusion-container">

                    <p class="title">Design</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Custom Figma Layouts</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Mobile & Desktop Design</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Brand-consistent Style Guide</p>
                    </div>
                    
                </div>

                <div class="inclusion-container">
                    <p class="title">Development</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Dev-ready Assets</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Basic SEO Setup</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Custom Domain & Hosting</p>
                    </div>
                </div>

                <div class="inclusion-container">
                    <p class="title">Advanced</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Business Integrated System</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Admin Dashboard</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-xmark.svg">
                        <p>Database Integration</p>
                    </div>
                </div>
            </section>
            <section class="services-plan4 plan">
               <div class="service-desc">
                    <p class="title">Business Website Build</p>
                    <p>Design, code, and advanced features—all in one.</p>
                    <p>This package combines design, development, and powerful technologies that suit your business needs.</p>
                    <button>Choose Plan</button>
                </div>
                <hr>
                <div class="inclusion-container">

                    <p class="title">Design</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Custom Figma Layouts</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Mobile & Desktop Design</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Brand-consistent Style Guide</p>
                    </div>
                    
                </div>

                <div class="inclusion-container">
                    <p class="title">Development</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Dev-ready Assets</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Basic SEO Setup</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Custom Domain & Hosting</p>
                    </div>
                </div>

                <div class="inclusion-container">
                    <p class="title">Advanced</p>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Business Integrated System</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Admin Dashboard</p>
                    </div>
                    <div class="itemm">
                        <img class="icon" src="assets/services-check.svg">
                        <p>Database Integration</p>
                    </div>
                </div>
            </section>
            <section class="cta-text-container">
                <div>
                    <p class="secondary-header">Got an Idea?  </p>
                    <p class="secondary-header">Let's <span class="primary-header underline">Bring it to Life</span></p>
                </div>
                <p class="subheader">Whether you're launching a business, refreshing your brand, or need a custom site from scratch—we'll design and build a website that works for you. Tell us what you need, and we'll make it happen.</p>
                <a href="https://calendly.com/kaidevs/consultation" class="cta-button" target="_blank" rel="noopener noreferrer">Start My Project</a>

               
            </section>
            <section class="cta-img-container">
                <img class="cta-img" src="assets/cta-img.svg">
            </section>
            
            
            <?php include 'components/footer.php'; ?>

            </div>  <!-- idk para san to, but the code breaks when u remove it -->


        </div> <!-- grid-container -->
    </div> <!-- container -->

    <script type="module" src="script.js"></script>

</body>
</html>