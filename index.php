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
    
</head>
<body>
    <div class="container navbar-container">
        <nav class="navbar ">
        <p class="logo">Kaidevs</p>

        <div class="nav-links">
            <button>About</button>
            <button>Services</button>
            <button>Reviews</button>
            <button>Portfolio</button>
        </div>
        
        <button class="nav-cta">Book a Call<img src="assets/navbar-call.svg" class="navbar-call-icon"></button>

        <img src="assets/navbar-hamburger.svg" class="nav-hamburger">
    
        </nav>
        
    </div>

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
                    <button class="hero-primary-btn">Book a Call</button>
                    <button class="hero-secondary-btn">See Services</button>
                </div>

            </section>

            <section class="about-image-container">
                <img class="hero-image" src="assets/about-image.svg">
            </section>
            
            <section class="about-text-container">
                
                <p class="secondary-header">We are <span class="primary-header underline">Kaidevs</span></p>

                <p class="subheader">At Kaidevs, we believe in the principle of Kaizen—a Japanese philosophy that means “continuous improvement.” We apply this mindset to every line of code, every user interface, and every client experience.</p>
                <br>

                <p class="subheader">We’re not just developers—we’re growth partners. Whether you're a startup, a small business, or an enterprise, we build websites that adapt to your goals and scale with your success.</p>
            </section>

            <section class="services-text-container">
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
                                    <p>Wireframes & Layout Structure</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>High-fidelity Figma Mockup</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Font & Color Palette Selection</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Brand-consistent Visuals</p>
                                </div>

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>HTML5, CSS3, and JavaScript</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Responsive Layout</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Basic Animations</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Dev-ready File Layoff</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>1-year Website Hosting</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Custom Domain Name</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Basic SEO</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Website SEO Certificate</p>
                                </div>
                            </div>
                            <div class="advanced-inclusions hidden">
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
                                    <p>E-commerce Functionality </p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Online Booking System</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Database Integration</p>
                                </div>
                                
                            </div>
                            <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button>

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
                                    <p>Wireframes & Layout Structure</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-xmark.svg">
                                    <p>High-fidelity Figma Mockup</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-xmark.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-xmark.svg">
                                    <p>Font & Color Palette Selection</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-xmark.svg">
                                    <p>Brand-consistent Visuals</p>
                                </div>

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>HTML5, CSS3, and JavaScript</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Responsive Layout</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic Animations</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Dev-ready File Layoff</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>1-year Website Hosting</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Custom Domain Name</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic SEO</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Website SEO Certificate</p>
                                </div>
                            </div>
                            <div class="advanced-inclusions hidden">
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
                                    <p>E-commerce Functionality </p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Online Booking System</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Database Integration</p>
                                </div>
                                
                            </div>
                            <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button>

                        </div>

                        <!-- PACKAGE 3-->

                        <div class="carousel-item special-item">
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
                                    <p>Wireframes & Layout Structure</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>High-fidelity Figma Mockup</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Font & Color Palette Selection</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Brand-consistent Visuals</p>
                                </div>

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>HTML5, CSS3, and JavaScript</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Responsive Layout</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic Animations</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Dev-ready File Layoff</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>1-year Website Hosting</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Custom Domain Name</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic SEO</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Website SEO Certificate</p>
                                </div>
                            </div>
                            <div class="advanced-inclusions hidden">
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
                                    <p>E-commerce Functionality </p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Online Booking System</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-xmark.svg">
                                    <p>Database Integration</p>
                                </div>
                                
                            </div>
                            <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button>

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
                                    <p>Wireframes & Layout Structure</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>High-fidelity Figma Mockup</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Mobile & Desktop Design</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Font & Color Palette Selection</p>
                                </div>
                                <div class="item">
                                    <img class="check" src="assets/services-check.svg">
                                    <p>Brand-consistent Visuals</p>
                                </div>

                            </div>

                            <div class="development-inclusions">
                                <p class="subtitle">Development</p>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>HTML5, CSS3, and JavaScript</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Responsive Layout</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic Animations</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Dev-ready File Layoff</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>1-year Website Hosting</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Custom Domain Name</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Basic SEO</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Website SEO Certificate</p>
                                </div>
                            </div>
                            <div class="advanced-inclusions hidden">
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
                                    <p>E-commerce Functionality </p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Online Booking System</p>
                                </div>
                                <div class="item">
                                    <img class="xmark" src="assets/services-check.svg">
                                    <p>Database Integration</p>
                                </div>
                                
                            </div>
                            <button class="expand" data-expanded="false">
                                See all inclusions
                                <img src="assets/services-angle-down.svg">
                            </button>
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
                <button>Start My Project</button>
               
            </section>
            <section class="cta-img-container">
                <img class="cta-img" src="assets/cta-img.svg">
            </section>
            
            <section class="footer">
                <hr>
                <div class="footer-content">
                    <p>© 2025 Kaidevs, Philippines. All rights reserved.</p>
                    <div class="social-links">
                        <img src="assets/footer-instagram.svg">
                        <img src="assets/footer-fb.svg">
                        <img src="assets/footer-x.svg">
                        <img src="assets/footer-tiktok.svg" style="height: 1.5rem">
                    </div>
                </div>
            </section>

            </div>  <!-- idk para san to, but the code breaks when u remove it -->


        </div> <!-- grid-container -->
    </div> <!-- container -->

    <script src="script.js"></script>

</body>
</html>