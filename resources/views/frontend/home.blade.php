<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Primary SEO -->
    <title>Home | Ashuraj Srivastav</title>
    <meta name="description" content="meta_description">
    <link rel="canonical" href="canonical_url">

    <!-- Structured data (Article / Page) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Article",
            "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "canonical_url"
            },
            "headline": "page_title",
            "description": "meta_description",
            "image": ["image_url"],
            "author": {
            "@type": "Person",
            "name": "author_name"
            },
            "publisher": {
            "@type": "Organization",
            "name": "brand_name",
            "logo": {
                "@type": "ImageObject",
                "url": "brand_logo_url"
            }
            },
            "datePublished": "date_published",
            "dateModified": "date_modified"
        }
    </script>

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="page_title">
    <meta property="og:description" content="meta_description">
    <meta property="og:url" content="canonical_url">
    <meta property="og:image" content="image_url">
    <meta property="og:site_name" content="brand_name">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="page_title">
    <meta name="twitter:description" content="meta_description}}">
    <meta name="twitter:image" content="image_url">
    <meta name="twitter:site" content="@twitter_handle">

    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/fonts/prestashop-icon-font/css/prestashop-icons.css">


    <!-- Custom Styling -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/heroSection.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/aboutSection.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/serviceSection.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/stackSection.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/action-button.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/educationSection.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/letsConnect.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/myBlogs.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/professionalJourney.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/myProjects.css') }}">
</head>
<body>
    <section class="hero-section">
        <!-- Screen reader only heading for accessibility -->
        <h2 class="visually-hidden">Hero Section - Introduction</h2>

        <!-- Enhanced Navigation Overlay -->
        <nav class="navbar navbar-expand-lg navbar-overlay">
            <div class="container">
                <a class="navbar-brand logo" href="#">Portfolio</a>

                <!-- Enhanced Menu Button -->
                <button class="navbar-toggler menu-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="tel:+919811161332" class="phone-link">
                            Hire Me
                        </a>
                    </div>
                    <!-- Mobile phone link -->
                    <div class="d-lg-none">
                        <a href="tel:+919811161332" class="phone-link">
                        <!-- <i class="fas fa-phone me-2"></i> -->Hire Me
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Gradient Overlay -->
        <div class="hero-overlay"></div>

        <!-- Hero Content -->
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="hero-content text-center">
                <!-- CHANGE NAME: Replace "Ashuraj Srivastav" with your name -->
                <h1 class="display-3 fw-bold mb-4">Hi, I am <span class="accent-text">Ashuraj Srivastav</span></h1>

                <!-- CHANGE DESCRIPTION: Replace with your own text -->
                <p class="lead mb-5 mx-auto" style="max-width: 950px;">
                    Full-Stack PHP Developer with 2+ years of experience, specializing in Laravel, PHP, and RESTful APIs. I develop robust web applications, eCommerce platforms, and custom solutions with a strong focus on performance, scalability, and clean code.
                </p>

                <!-- Social Icons -->
                <div class="social-icons mt-4">
                    <a href="https://www.facebook.com/share/1G6PywpoBf/" style="text-decoration: none;" class="social-icon text-white" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    {{-- <a href="#" style="text-decoration: none;" class="social-icon text-white" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a> --}}
                    <a href="https://www.linkedin.com/in/ashuraj-srivastav/" style="text-decoration: none;" class="social-icon text-white" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/AshurajSrivastav01" style="text-decoration: none;" class="social-icon text-white" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.instagram.com/ashuraj_srivastav_/" style="text-decoration: none;" class="social-icon text-white" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down fa-2x"></i>
        </div>
    </section>

    <!-- About Me Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="https://via.placeholder.com/550x550" alt="Ashuraj - Laravel Developer" class="about-img img-fluid">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">About Me</h2>
                    <p class="about-text">
                        With <strong>1.2 years</strong> of focused experience in Laravel development, I've honed my skills in building
                        robust backend systems that power modern web applications. My journey has taken me through
                        various projects involving <strong>API development</strong>, <strong>custom admin panels</strong>, and <strong>content management systems</strong>.
                    </p>
                    <p class="about-text">
                        I'm passionate about writing <strong>clean, maintainable code</strong> that not only works today but remains
                        flexible for tomorrow's needs. My approach combines technical expertise with an emphasis on
                        <strong>scalability</strong> and <strong>performance optimization</strong>, ensuring the solutions I build can grow with your business.
                    </p>
                    <p class="about-text">
                        Beyond code, I value <strong>collaboration</strong> and <strong>clear communication</strong>. I believe the best results come from
                        teams that work synergistically, blending technical skills with shared vision and purpose.
                    </p>

                    <div class="skill-tags">
                        <span class="skill-tag"><i class="fas fa-server"></i> Laravel</span>
                        <span class="skill-tag"><i class="fas fa-plug"></i> REST APIs</span>
                        <span class="skill-tag"><i class="fas fa-database"></i> MySQL</span>
                        <span class="skill-tag"><i class="fas fa-layer-group"></i> MVC</span>
                        <span class="skill-tag"><i class="fas fa-shield-alt"></i> Security</span>
                        <span class="skill-tag"><i class="fas fa-rocket"></i> Optimization</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="tech-section" id="tech">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Tech Stack</h2>

            <div class="row">
                <!-- Backend Column -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="tech-category">
                        <h3 class="category-title"><i class="fas fa-server"></i> Backend</h3>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-laravel"></i></div>
                            <span class="tech-name">Laravel</span>
                        </div>
                        <div class="tech-item">
                            <!-- <div class="tech-icon"><i class="fab fa-laravel"></i></div> -->
                            <div class="tech-icon">
                                <strong>PS</strong>
                            </div>
                            <span class="tech-name">Prestashop</span>
                        </div>
                        <div class="tech-item">
                            <!-- <div class="tech-icon"><i class="ps-icon ps-logo"></i></div> -->
                            <div class="tech-icon">
                                <svg width="20px" height="20px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.999 60.165V93.79M101.97 80l.005 54.095m-51.128-56.35c-.265 18.528 0 37.687 0 56.35m103.151 0V79.999c-.107-28.355-51.575-28.715-52.024 0 .133-7.346-3.623-14.21-9.867-18.032m5.382-7.212-8.97-8.565 24.667-20.286A222.577 222.577 0 0 0 6 60.164h32.29v15.327c21.841 5.004 42.561 3.44 59.2-20.736z" class="a" style="fill:none;stroke:#3276c3;stroke-width:17.856;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none" transform="translate(16.001 16)"></path></g></svg>
                            </div>
                            <span class="tech-name">Moodle</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-php"></i></div>
                            <span class="tech-name">PHP</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fas fa-database"></i></div>
                            <span class="tech-name">MySQL</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fas fa-exchange-alt"></i></div>
                            <span class="tech-name">REST API</span>
                        </div>
                    </div>
                </div>

                <!-- Frontend Column -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="tech-category">
                        <h3 class="category-title"><i class="fas fa-laptop-code"></i> Frontend</h3>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-html5"></i></div>
                            <span class="tech-name">HTML5</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-css3-alt"></i></div>
                            <span class="tech-name">CSS3</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-bootstrap"></i></div>
                            <span class="tech-name">Bootstrap</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-js-square"></i></div>
                            <span class="tech-name">JavaScript</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-react"></i></div>
                            <span class="tech-name">React.js</span>
                        </div>
                    </div>
                </div>

                <!-- Tools Column -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="tech-category">
                        <h3 class="category-title"><i class="fas fa-tools"></i> Tools & Others</h3>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-git-alt"></i></div>
                            <span class="tech-name">Git</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-github"></i></div>
                            <span class="tech-name">GitHub</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fas fa-code"></i></div>
                            <span class="tech-name">VS Code</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fas fa-cloud"></i></div>
                            <span class="tech-name">Postman</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon"><i class="fab fa-figma"></i></div>
                            <span class="tech-name">Figma</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Services I Offer</h2>

            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="service-title">Landing Page Design</h3>
                        <p class="service-desc">Fast, responsive landing pages to boost your conversions with optimized performance and SEO-ready structure.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 my-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="service-title">Professional Website</h3>
                        <p class="service-desc">Complete business websites with stunning UI and backend integration to establish your online presence.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 my-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3 class="service-title">Industry Solutions</h3>
                        <p class="service-desc">Custom web solutions tailored for specific industries like healthcare, real estate, education, and more.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6 my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="service-title">Custom Admin Panel</h3>
                        <p class="service-desc">Role-based admin dashboards and CMS with Laravel for efficient content and user management.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6 my-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3 class="service-title">Ecommerce Solutions</h3>
                        <p class="service-desc">Multi-vendor or single-vendor eCommerce websites with secure payment & order management systems.</p>
                    </div>
                </div>

                <!-- Service 6 (optional placeholder) -->
                <div class="col-lg-4 col-md-6 my-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3 class="service-title">API Development</h3>
                        <p class="service-desc">RESTful API development and integration services for mobile apps and third-party systems.</p>
                    </div>
                </div>
            </div>

            <!-- Bonus Offer Section -->
            <div class="bonus-offer" data-aos="fade-up">
                <h3 class="bonus-title">Special Bonus With All Services</h3>
                <div class="bonus-items">
                    <div class="bonus-item">
                        <i class="fas fa-globe"></i> Free Domain (worth ₹1500)
                    </div>
                    <div class="bonus-item">
                        <i class="fas fa-hdd"></i> Free Web Hosting for 1 Year
                    </div>
                </div>
                <p class="bonus-note">Included with all website development services</p>
            </div>

            <!-- CTA Button -->
            <div class="text-center" data-aos="fade-up">
                <button class="btn cta-button" id="quoteButton">
                    Get a Free Quote <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section" id="projects">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Projects</h2>

            <!-- Filter Tabs -->
            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="laravel">Laravel</button>
                <button class="filter-btn" data-filter="ecommerce">Ecommerce</button>
                <button class="filter-btn" data-filter="api">API</button>
                <button class="filter-btn" data-filter="admin">Admin Panels</button>
            </div>

            <div class="row" id="projects-container">
                <!-- Project 1 -->
                <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="laravel admin">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/600x400?text=Blog+CMS" alt="Blog CMS Platform" class="project-img">
                        <div class="project-body">
                            <h3 class="project-title">Blog CMS Platform</h3>
                            <p class="project-desc">
                                A complete content management system with admin panel and frontend.
                                I developed both backend and admin interface, implementing user roles,
                                rich text editing, and SEO features.
                            </p>
                            <div class="tech-stack">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Bootstrap</span>
                                <span class="tech-badge">JavaScript</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn btn-github project-btn">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" class="btn btn-demo project-btn">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-aos-delay="100" data-category="ecommerce">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/600x400?text=Ecommerce" alt="Ecommerce Website" class="project-img">
                        <div class="project-body">
                            <h3 class="project-title">Ecommerce Website</h3>
                            <p class="project-desc">
                                Single vendor ecommerce platform with product management,
                                cart system, and payment integration. I built the entire
                                backend including order processing and inventory management.
                            </p>
                            <div class="tech-stack">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Stripe API</span>
                                <span class="tech-badge">Bootstrap</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn btn-github project-btn">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <button class="btn btn-disabled project-btn" disabled>
                                    <i class="fas fa-lock"></i> Private
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-aos-delay="200" data-category="api">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/600x400?text=API+System" alt="API System" class="project-img">
                        <div class="project-body">
                            <h3 class="project-title">API-based System</h3>
                            <p class="project-desc">
                                RESTful API with CRUD operations and JWT authentication.
                                I designed the API architecture, implemented security
                                measures, and created comprehensive documentation.
                            </p>
                            <div class="tech-stack">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">REST API</span>
                                <span class="tech-badge">JWT</span>
                                <span class="tech-badge">Postman</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn btn-github project-btn">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" class="btn btn-demo project-btn">
                                    <i class="fas fa-external-link-alt"></i> API Docs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="admin">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/600x400?text=Admin+Panel" alt="Custom Admin Panel" class="project-img">
                        <div class="project-body">
                            <h3 class="project-title">Custom Admin Panel</h3>
                            <p class="project-desc">
                                Tailored admin dashboard for a client's business operations.
                                I created custom modules for data visualization, reporting,
                                and user management with role-based permissions.
                            </p>
                            <div class="tech-stack">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">Vue.js</span>
                                <span class="tech-badge">Charts.js</span>
                                <span class="tech-badge">Tailwind CSS</span>
                            </div>
                            <div class="project-links">
                                <button class="btn btn-disabled project-btn" disabled>
                                    <i class="fas fa-lock"></i> Private
                                </button>
                                <a href="#" class="btn btn-demo project-btn">
                                    <i class="fas fa-external-link-alt"></i> Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience-section" id="experience">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Professional Journey</h2>
                <p class="section-subtitle">
                    Here's where I've gained hands-on experience building real-world Laravel applications.
                </p>
            </div>

            <div class="timeline">
                <!-- Current Experience -->
                <div class="experience-card" data-aos="fade-up">
                    <div class="timeline-dot"></div>
                    <div class="card-content">
                        <div class="company-info">
                            <div class="company-logo">TN</div>
                            <div>
                                <h3 class="company-name">LDS Engineers Pvt. Ltd.</h3>
                                <p class="job-role">Laravel Developer</p>
                            </div>
                        </div>
                        <span class="job-duration">
                            <i class="far fa-calendar-alt"></i> May 2025 – Present
                        </span>

                        <h4 class="responsibilities-title">
                            <i class="fas fa-tasks"></i> Key Responsibilities
                        </h4>
                        <ul class="responsibilities-list">
                            <li>Developed RESTful APIs and CRUD operations for web applications</li>
                            <li>Built and maintained custom admin panels with role-based access control</li>
                            <li>Integrated third-party services like payment gateways and SMS APIs</li>
                            <li>Collaborated with frontend developers and UI/UX designers</li>
                            <li>Optimized database queries and application performance</li>
                        </ul>

                        <h4 class="achievements-title">
                            <i class="fas fa-trophy"></i> Notable Achievements
                        </h4>
                        <ul class="achievements-list">
                            <li>Reduced backend response time by 30% through query optimization</li>
                            <li>Delivered 10+ projects/modules within deadlines</li>
                            <li>Improved security using Laravel Sanctum for API authentication</li>
                        </ul>

                        <div class="tech-used">
                            <span class="tech-badge">Laravel</span>
                            <span class="tech-badge">REST API</span>
                            <span class="tech-badge">MySQL</span>
                            <span class="tech-badge">Livewire</span>
                            <span class="tech-badge">AWS</span>
                        </div>
                    </div>
                </div>

                <!-- Previous Experience -->
                <div class="experience-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-dot"></div>
                    <div class="card-content">
                        <div class="company-info">
                            <div class="company-logo">BS</div>
                            <div>
                                <h3 class="company-name">Industryal Catalyst Pvt. Ltd.</h3>
                                <p class="job-role">Full Stack Developer</p>
                            </div>
                        </div>
                        <span class="job-duration">
                            <i class="far fa-calendar-alt"></i> Apr 202 - May 2025
                        </span>

                        <h4 class="responsibilities-title">
                            <i class="fas fa-tasks"></i> Key Responsibilities
                        </h4>
                        <ul class="responsibilities-list">
                            <li>Developed and maintained Laravel, PHP, and PrestaShop applications.</li>
                            <li>Built custom modules and integrated RESTful APIs for eCommerce and CRM systems.</li>
                            <li>Managed SQL databases, optimized queries, and ensured system performance.</li>
                            <li>Delivered responsive front-end interfaces using HTML, CSS, JavaScript, and Bootstrap.</li>
                        </ul>

                        <h4 class="achievements-title">
                            <i class="fas fa-trophy"></i> Notable Achievements
                        </h4>
                        <ul class="achievements-list">
                            <li>Enhanced eCommerce platforms with custom PrestaShop modules.</li>
                            <li>Streamlined attendance tracking using a QR-based solution.</li>
                            <li>Improved sales team efficiency with a CRM Quotation Generator.</li>
                            <li>Boosted customer management by launching CRM v2 with advanced features.</li>
                        </ul>

                        <div class="tech-used">
                            <span class="tech-badge">Prestashop</span>
                            <span class="tech-badge">Laravel</span>
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">SQL</span>
                            <span class="tech-badge">API Development</span>
                            <span class="tech-badge">HTML</span>
                            <span class="tech-badge">CSS</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">Bootstrap</span>
                            <span class="tech-badge">jQuery</span>
                        </div>
                    </div>
                </div>

                <!-- Previous Experience -->
                <div class="experience-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-dot"></div>
                    <div class="card-content">
                        <div class="company-info">
                            <div class="company-logo">BS</div>
                            <div>
                                <h3 class="company-name">Brandshow Consultancy Service Pvt. Ltd.</h3>
                                <p class="job-role">PHP Developer Intern</p>
                            </div>
                        </div>
                        <span class="job-duration">
                            <i class="far fa-calendar-alt"></i> Jan 2022 – Apr 2023
                        </span>

                        <h4 class="responsibilities-title">
                            <i class="fas fa-tasks"></i> Key Responsibilities
                        </h4>
                        <ul class="responsibilities-list">
                            <li>Designed and developed databases and backend systems for live projects like Cozy PG and Azamgarh Directory.</li>
                            <li>Implemented edit pages, inquiry forms, and login APIs (Lumen Framework) to improve system functionality and security.</li>
                            <li>Wrote scalable backend code ensuring reliable performance for client projects.</li>
                            <li>Provided on-site technical support and maintained client websites with timely updates.</li>
                        </ul>

                        <h4 class="achievements-title">
                            <i class="fas fa-trophy"></i> Notable Achievements
                        </h4>
                        <ul class="achievements-list">
                            <li>Enhanced user experience by adding interactive features like inquiry forms and edit pages for Cozy PG.</li>
                            <li>Improved system scalability and reliability for Azamgarh Directory.</li>
                            <li>Boosted online presence through social media posting and off-page SEO activities.</li>
                            <li>Ensured client satisfaction by delivering updates and resolving issues quickly on-site.</li>
                        </ul>

                        <div class="tech-used">
                            <span class="tech-badge">Laravel</span>
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">SQL</span>
                            <span class="tech-badge">HTML</span>
                            <span class="tech-badge">CSS</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">Bootstrap</span>
                            <span class="tech-badge">jQuery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quotation Form Modal -->
    <div class="quotation-modal" id="quotationModal">
        <div class="quotation-form">
            <button class="close-modal" id="closeModal">&times;</button>
            <h3 class="form-title">Request a Free Quote</h3>
            <form id="quoteForm">
                <div class="d-flex gap-3" style="width: 100%;">
                    <div class="form-group" style="width: 100%;">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" required="" />
                    </div>

                    <div class="form-group" style="width: 100%;">
                        <label for="company" class="form-label">Company Name (Optional)</label>
                        <input type="text" class="form-control" id="company">
                    </div>
                </div>

                <div class="d-flex gap-3" style="width: 100%;">
                    <div class="form-group" style="width: 100%;">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group" style="width: 100%;">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" />
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label class="form-label">Services Needed</label>
                    <div class="service-checkboxes">
                        <div class="checkbox-item">
                            <input type="checkbox" id="service1" name="services" value="Landing Page Design">
                            <label for="service1">Landing Page Design</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="service2" name="services" value="Professional Website">
                            <label for="service2">Professional Website</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="service3" name="services" value="Industry Solutions">
                            <label for="service3">Industry Solutions</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="service4" name="services" value="Custom Admin Panel">
                            <label for="service4">Custom Admin Panel</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="service5" name="services" value="Ecommerce Solutions">
                            <label for="service5">Ecommerce Solutions</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="service6" name="services" value="API Development">
                            <label for="service6">API Development</label>
                        </div>
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..."></textarea>
                </div>

                <button type="submit" class="submit-quote">
                    Submit Quote Request <i class="fas fa-paper-plane ms-2"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fab-container">
        <div class="fab-menu" id="fabMenu">
            <a href="path/to/your-resume.pdf" class="fab-item resume" download>
                <i class="fas fa-file-pdf"></i>
                <span class="tooltip-text">Download Resume</span>
            </a>
            <a href="tel:+919811161332" class="fab-item call">
                <i class="fas fa-phone"></i>
                <span class="tooltip-text">Call Me</span>
            </a>
            <a href="mailto:your.email@example.com" class="fab-item email">
                <i class="fas fa-envelope"></i>
                <span class="tooltip-text">Email Me</span>
            </a>
        </div>
        <button class="fab-main" id="fabMain">
            <i class="fas fa-plus"></i>
        </button>
    </div>

    <!-- Blog Section -->
    <section class="blog-section" id="blog">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Blog</h2>

            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card">
                        <img src="https://via.placeholder.com/600x400?text=Laravel+Tips" alt="Laravel Tips" class="blog-img">
                        <div class="blog-body">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> June 15, 2023
                            </div>
                            <h3 class="blog-title">10 Laravel Optimization Tips for Better Performance</h3>
                            <div class="blog-tags">
                                <span class="blog-tag">Laravel</span>
                                <span class="blog-tag">Performance</span>
                            </div>
                            <p class="blog-excerpt">
                                Discover practical techniques to optimize your Laravel applications, from database query optimization to caching strategies that can significantly improve response times.
                            </p>
                            <a href="#" class="read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card">
                        <img src="https://via.placeholder.com/600x400?text=API+Security" alt="API Security" class="blog-img">
                        <div class="blog-body">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> April 28, 2023
                            </div>
                            <h3 class="blog-title">Securing Laravel APIs: Best Practices</h3>
                            <div class="blog-tags">
                                <span class="blog-tag">Laravel</span>
                                <span class="blog-tag">API</span>
                                <span class="blog-tag">Security</span>
                            </div>
                            <p class="blog-excerpt">
                                A comprehensive guide to securing your Laravel APIs, covering authentication, rate limiting, input validation, and other essential security measures.
                            </p>
                            <a href="#" class="read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog-card">
                        <img src="https://via.placeholder.com/600x400?text=Livewire" alt="Livewire" class="blog-img">
                        <div class="blog-body">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> March 10, 2023
                            </div>
                            <h3 class="blog-title">Building Dynamic UIs with Laravel Livewire</h3>
                            <div class="blog-tags">
                                <span class="blog-tag">Laravel</span>
                                <span class="blog-tag">Livewire</span>
                                <span class="blog-tag">Frontend</span>
                            </div>
                            <p class="blog-excerpt">
                                Learn how to create interactive interfaces without writing complex JavaScript by leveraging Laravel Livewire's powerful capabilities.
                            </p>
                            <a href="#" class="read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="view-all" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="btn btn-outline-primary">
                    View All Articles <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Let's Connect</h2>

            <div class="row">
                <!-- Contact Info Column -->
                <div class="col-lg-5 contact-col">
                    <div class="contact-card">
                        <h3 class="contact-info-title">Contact Information</h3>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="contact-label">Name</div>
                                <div class="contact-value">Ashuraj Kumar</div>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <div class="contact-label">Email</div>
                                <div class="contact-value">info@ashurajsrivastav.me</div>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                            <div>
                                <div class="contact-label">LinkedIn</div>
                                <a href="https://www.linkedin.com/in/ashuraj-srivastav/" class="contact-value" target="_blank">linkedin.com/in/ashuraj-srivastav</a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-github"></i>
                            </div>
                            <div>
                                <div class="contact-label">GitHub</div>
                                <a href="https://github.com/AshurajSrivastav01" class="contact-value" target="_blank">github.com/AshurajSrivastav01</a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div>
                                <div class="contact-label">Instagram</div>
                                <a href="https://www.instagram.com/ashuraj_srivastav_/" class="contact-value" target="_blank">instagram.com/ashuraj_srivastav_</a>
                            </div>
                        </div>

                        {{-- <div class="social-links">
                            <a href="https://linkedin.com/in/ashuraj" style="text-decoration: none;" class="social-link" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/ashuraj" style="text-decoration: none;" class="social-link" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://twitter.com/ashuraj" style="text-decoration: none;" class="social-link" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="mailto:info@ashurajsrivastav.me" style="text-decoration: none;" class="social-link">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <!-- Contact Form Column -->
                <div class="col-lg-7">
                    <div class="contact-card">
                        <h3 class="contact-info-title">Send Me a Message</h3>

                        <form id="contactForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn submit-btn">
                                Send Message <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </form>

                        <div id="thankYouMessage">
                            <i class="fas fa-check-circle me-2"></i> Thank you for your message! I'll get back to you soon.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Enhanced menu toggle animation
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navbarCollapse = document.querySelector('.navbar-collapse');

            menuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
            });

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar-overlay');
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Close mobile menu when clicking on a link
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    const navbarToggler = document.querySelector('.navbar-toggler');
                    if (navbarToggler && !navbarToggler.classList.contains('collapsed')) {
                        navbarToggler.click();
                        menuToggle.classList.remove('active');
                    }
                });
            });

            // Handle navbar collapse events for animation
            navbarCollapse.addEventListener('show.bs.collapse', function() {
                menuToggle.classList.add('active');
            });

            navbarCollapse.addEventListener('hide.bs.collapse', function() {
                menuToggle.classList.remove('active');
            });
        });
    </script>

    <script>
        // Initialize AOS animation
        AOS.init({
            once: true,
            easing: 'ease-out',
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Close mobile menu when clicking a nav link
        const navLinks = document.querySelectorAll('.nav-link');
        const menuToggle = document.getElementById('navbarNav');
        const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle: false});

        navLinks.forEach((navLink) => {
            navLink.addEventListener('click', () => {
                if (menuToggle.classList.contains('show')) {
                    bsCollapse.hide();
                }
            });
        });
    </script>

    <script>
        // Simple form submission handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Here you would typically send the form data to a server
            // For this example, we'll just show the thank you message

            // Show thank you message
            document.getElementById('thankYouMessage').style.display = 'block';

            // Reset form
            this.reset();

            // Hide thank you message after 5 seconds
            setTimeout(function() {
                document.getElementById('thankYouMessage').style.display = 'none';
            }, 5000);
        });
    </script>

    <script>
        document.getElementById('fabMain').addEventListener('click', function() {
            document.getElementById('fabMenu').classList.toggle('show-menu');
            this.querySelector('i').classList.toggle('fa-plus');
            this.querySelector('i').classList.toggle('fa-times');
        });
    </script>

    <script>
        // Quotation Form Modal
        const quoteButton = document.getElementById('quoteButton');
        const quotationModal = document.getElementById('quotationModal');
        const closeModal = document.getElementById('closeModal');
        const quoteForm = document.getElementById('quoteForm');

        quoteButton.addEventListener('click', () => {
            quotationModal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });

        closeModal.addEventListener('click', () => {
            quotationModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Enable scrolling
        });

        // Close modal when clicking outside the form
        quotationModal.addEventListener('click', (e) => {
            if (e.target === quotationModal) {
                quotationModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Form submission
        quoteForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Here you would typically send the form data to a server
            // For demo purposes, we'll just show an alert and reset the form
            alert('Thank you for your quote request! I will get back to you soon.');
            quoteForm.reset();
            quotationModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    </script>

    <script>
        // Enhanced filter functionality with smooth animations
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectItems = document.querySelectorAll('.project-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update active button
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    // First fade out all projects
                    projectItems.forEach(item => {
                        item.classList.add('hide');
                        item.classList.remove('show');
                    });

                    // After fade out completes, filter and fade in matching projects
                    setTimeout(() => {
                        projectItems.forEach(item => {
                            const categories = item.getAttribute('data-category').split(' ');

                            if (filterValue === 'all' || categories.includes(filterValue)) {
                                item.style.display = 'block';
                                setTimeout(() => {
                                    item.classList.remove('hide');
                                    item.classList.add('show');
                                }, 20);
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    }, 300); // Match this with the CSS transition duration
                });
            });
        });
    </script>
</body>
</html>
