<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Gil DC. Nieto - Web Developer Portfolio</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Source+Code+Pro:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #0a192f;
            --primary-color: #112240;
            --secondary-color: #1e3a8a;
            --accent-color: #2563eb;
            --tech-blue: #007bff;
            --dark-gray: #2d3748;
            --medium-gray: #4a5568;
            --light-gray: #718096;
            --light-bg: #f8fafc;
            --card-bg: #ffffff;
            --border-color: #e2e8f0;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 10px 25px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-gray);
            line-height: 1.6;
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);
            min-height: 100vh;
        }

        .code-font {
            font-family: 'Source Code Pro', monospace;
        }

        .main-container {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: var(--shadow-hover);
            margin: 2rem auto;
            max-width: 1200px;
            overflow: hidden;
        }

        /* Header Styles */
        .navbar {
            background: var(--primary-dark);
            padding: 1rem 0;
            border-bottom: 2px solid var(--accent-color);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: white !important;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
            transform: translateY(-1px);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
            border-bottom: 3px solid var(--accent-color);
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 8px;
            border: 3px solid var(--accent-color);
            margin: 0 auto 2rem;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 1.5rem;
            color: var(--accent-color);
            font-weight: 500;
        }

        /* Section Styles */
        .section {
            padding: 3rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .section:last-child {
            border-bottom: none;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
        }

        /* Skills Styles */
        .skill-category {
            margin-bottom: 2rem;
        }

        .skill-category-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--border-color);
        }

        .skill-badge {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            padding: 0.6rem 1.2rem;
            margin: 0.3rem;
            border-radius: 6px;
            font-weight: 500;
            transition: var(--transition);
            border: none;
            font-size: 0.9rem;
        }

        .skill-badge:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        /* Project Styles */
        .project-card {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            margin-bottom: 2rem;
            height: 100%;
            background: var(--card-bg);
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            border-color: var(--accent-color);
        }

        .project-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
            transition: var(--transition);
            border-bottom: 2px solid var(--accent-color);
        }

        .project-card:hover .project-image {
            transform: scale(1.03);
        }

        .project-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .project-duration {
            color: var(--accent-color);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .project-description {
            color: var(--medium-gray);
            line-height: 1.6;
        }

        /* Experience & Education Styles */
        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 2px;
            height: 100%;
            background: var(--accent-color);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -0.8rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: var(--accent-color);
            border: 2px solid white;
            border-radius: 50%;
        }

        .timeline-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.3rem;
        }

        .timeline-subtitle {
            color: var(--accent-color);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .timeline-duration {
            color: var(--light-gray);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .timeline-details li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.2rem;
        }

        .timeline-details li::before {
            content: '▸';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
        }

        /* Contact Styles */
        .contact-info {
            text-align: center;
        }

        .contact-item {
            margin-bottom: 1.5rem;
            padding: 1.5rem;
            background: var(--light-bg);
            border-radius: 8px;
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }

        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
            border-color: var(--accent-color);
        }

        .contact-icon {
            font-size: 2rem;
            color: var(--accent-color);
            margin-bottom: 0.5rem;
        }

        .contact-text {
            font-size: 1.1rem;
            color: var(--dark-gray);
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: var(--primary-dark);
            color: white;
            padding: 2rem 0;
            text-align: center;
            border-top: 2px solid var(--accent-color);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .profile-image {
                width: 120px;
                height: 120px;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mark Gil DC. Nieto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-container">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container text-center">
                <div class="profile-image">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dba0aa88-8f8d-45b4-881c-d18a02640a41.png" alt="Professional portrait of Mark Gil DC. Nieto, Web Developer with modern business attire" />
                </div>
                <h1 class="hero-title">Mark Gil DC. Nieto</h1>
                <p class="hero-subtitle">Web Developer</p>
                <p class="lead">Solution-oriented developer with 5+ years of experience in software development</p>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="section">
            <div class="container">
                <h2 class="section-title">About Me</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead text-center mb-4">
                            Solution-oriented developer with 5 years of experience in software development and system architecture. 
                            Skilled in designing, building, and maintaining web applications, as well as supporting and enhancing existing systems.
                        </p>
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                        <h5>Location</h5>
                                        <p>Sto.Tomas, Sta Maria, Bulacan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                                        <h5>Phone</h5>
                                        <p>09355612873</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                        <h5>Email</h5>
                                        <p>mgdelacruznieto17@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="section bg-light">
            <div class="container">
                <h2 class="section-title">Skills & Technologies</h2>
                
                <div class="skill-category">
                    <h3 class="skill-category-title">Languages & Frameworks</h3>
                    <div class="d-flex flex-wrap">
                        <span class="skill-badge">PHP (5.4 to 8.3)</span>
                        <span class="skill-badge">CodeIgniter 3 & 4</span>
                        <span class="skill-badge">Laravel 10</span>
                        <span class="skill-badge">JavaScript (ES6+)</span>
                        <span class="skill-badge">jQuery</span>
                        <span class="skill-badge">HTML5</span>
                        <span class="skill-badge">CSS3</span>
                        <span class="skill-badge">Bootstrap 3,4, & 5</span>
                        <span class="skill-badge">Alpine.js</span>
                    </div>
                </div>

                <div class="skill-category">
                    <h3 class="skill-category-title">Databases & APIs</h3>
                    <div class="d-flex flex-wrap">
                        <span class="skill-badge">MySQL / MariaDB</span>
                        <span class="skill-badge">PostgreSQL</span>
                        <span class="skill-badge">RESTful APIs</span>
                        <span class="skill-badge">AJAX & JSON</span>
                        <span class="skill-badge">XML (parsing, validation, XSLT)</span>
                    </div>
                </div>

                <div class="skill-category">
                    <h3 class="skill-category-title">Tools & Concepts</h3>
                    <div class="d-flex flex-wrap">
                        <span class="skill-badge">Git / Version Control</span>
                        <span class="skill-badge">Composer</span>
                        <span class="skill-badge">npm (Node Package Manager)</span>
                        <span class="skill-badge">Postman</span>
                        <span class="skill-badge">Laravel Artisan CLI</span>
                        <span class="skill-badge">MVC Architecture</span>
                        <span class="skill-badge">XAMPP / Laragon / Docker</span>
                        <span class="skill-badge">Apache (basic configuration)</span>
                        <span class="skill-badge">Basic Linux command-line</span>
                        <span class="skill-badge">Input validation & sanitization</span>
                        <span class="skill-badge">CSRF & XSS protection</span>
                        <span class="skill-badge">Password hashing</span>
                        <span class="skill-badge">Datatable (Server-Side)</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="section">
            <div class="container">
                <h2 class="section-title">Featured Projects</h2>
                <div class="row">
                    <!-- Project 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-card card h-100">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a42ed245-9dd4-4836-b0e9-9cf15e4462c1.png" alt="Order of Payment system dashboard showing transaction processing and payment integration with MYEG services" class="project-image" />
                            <div class="card-body">
                                <h3 class="project-title">Order Of Payment</h3>
                                <p class="project-duration">April 2023 - May 2024</p>
                                <p class="project-description">
                                    Developed an online payment system integrated with MYEG for processing government-related transaction fees.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-card card h-100">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ca20fa48-d8f7-484c-bb0e-16df53f2ad06.png" alt="GoComet Manifest system interface showing shipment tracking and document management dashboard" class="project-image" />
                            <div class="card-body">
                                <h3 class="project-title">Manifest (GoComet)</h3>
                                <p class="project-duration">August 2023 - February 2024</p>
                                <p class="project-description">
                                    Built dashboard to upload, monitor, and sync shipment manifests via GoComet API with access-level control.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-card card h-100">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1c74be84-5313-445a-b55e-712b189cf22d.png" alt="PEZA Storage and Retrieval system interface showing document management and inventory tracking features" class="project-image" />
                            <div class="card-body">
                                <h3 class="project-title">PEZA Storage & Retrieval</h3>
                                <p class="project-duration">April 2023 - Present</p>
                                <p class="project-description">
                                    Document and inventory storage system for PEZA-related records with digital archiving and compliance features.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-primary btn-lg" onclick="showMoreProjects()">
                        <i class="fas fa-arrow-down me-2"></i>View More Projects
                    </button>
                </div>

                <!-- Additional Projects (Hidden initially) -->
                <div id="more-projects" class="row mt-4" style="display: none;">
                    <!-- Project 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-card card h-100">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a58a26f7-30f7-4c1f-97b1-586790e51288.png" alt="BlackBox Enterprise Planning System dashboard showing workflow management and approval processes" class="project-image" />
                            <div class="card-body">
                                <h3 class="project-title">BlackBox - ERP</h3>
                                <p class="project-duration">February 2021 - December 2022</p>
                                <p class="project-description">
                                    Enterprise Planning System used across departments with automated approval processes for purchases and expenses.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-card card h-100">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/73cb7c32-e9af-49e4-9559-b3e5a606bfeb.png" alt="Tax and Accounting System interface showing financial reporting and compliance dashboard" class="project-image" />
                            <div class="card-body">
                                <h3 class="project-title">BlackBox - TAcS</h3>
                                <p class="project-duration">June 2020 - December 2022</p>
                                <p class="project-description">
                                    Tax filing and accounting system for Finance departments with automated workflows and compliance tracking.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-card card h-100">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/60701839-4abe-4dc4-8d9a-53579809dbf6.png" alt="Point of Sale system interface showing transaction processing and inventory management features" class="project-image" />
                            <div class="card-body">
                                <h3 class="project-title">BlackBox - POS</h3>
                                <p class="project-duration">July 2020 - February 2021</p>
                                <p class="project-description">
                                    Point of Sale and Inventory system for cashiers and kitchen staff with stock level monitoring and transaction processing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="section bg-light">
            <div class="container">
                <h2 class="section-title">Work Experience</h2>
                
                <div class="timeline">
                    <div class="timeline-item">
                        <h3 class="timeline-title">Web Developer I</h3>
                        <p class="timeline-subtitle">Intercommerce Network Services</p>
                        <p class="timeline-duration">January 2023 - Present</p>
                        <ul class="timeline-details">
                            <li>Assist in the design, development, and maintenance of web applications</li>
                            <li>Write clean, scalable code in PHP, JavaScript, HTML, jQuery, Bootstrap, and CSS</li>
                            <li>Work with MySQL/MariaDB databases and RESTful APIs</li>
                            <li>Experience with CodeIgniter 3 & 4, Laravel 10 frameworks</li>
                            <li>Participate in Agile/Scrum development processes</li>
                        </ul>
                    </div>

                    <div class="timeline-item">
                        <h3 class="timeline-title">Web Developer I</h3>
                        <p class="timeline-subtitle">Black Coders Group Inc.</p>
                        <p class="timeline-duration">June 2020 - December 2022</p>
                        <ul class="timeline-details">
                            <li>Developed dynamic websites using CodeIgniter 3 Framework</li>
                            <li>Utilized PHP, JavaScript, jQuery, HTML, CSS, and MySQL</li>
                            <li>Collaborated with developers and designers on various projects</li>
                            <li>Provided support and optimization for existing web systems</li>
                            <li>Used Git for source control and version management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="section">
            <div class="container">
                <h2 class="section-title">Education</h2>
                
                <div class="timeline">
                    <div class="timeline-item">
                        <h3 class="timeline-title">BS in Information Technology</h3>
                        <p class="timeline-subtitle">Bulacan State University</p>
                        <p class="timeline-duration">2017 - 2019</p>
                    </div>

                    <div class="timeline-item">
                        <h3 class="timeline-title">Associate Computer Technology</h3>
                        <p class="timeline-subtitle">Bulacan State University</p>
                        <p class="timeline-duration">2015 - 2017</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section bg-light">
            <div class="container">
                <h2 class="section-title">Get In Touch</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p class="contact-text">mgdelacruznieto17@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <p class="contact-text">09355612873</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p class="contact-text">Sto.Tomas, Sta Maria, Bulacan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2024 Mark Gil DC. Nieto. All rights reserved.</p>
            <p>Web Developer Portfolio</p>
        </div>
    </footer>

    <!-- Bootstrap & JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple animation for page elements
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.section, .project-card, .skill-badge');
            elements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
                element.classList.add('animate');
            });
        });

        // Show more projects functionality
        function showMoreProjects() {
            const moreProjects = document.getElementById('more-projects');
            const button = document.querySelector('button[onclick="showMoreProjects()"]');
            
            if (moreProjects.style.display === 'none') {
                moreProjects.style.display = 'flex';
                moreProjects.classList.add('animate');
                button.innerHTML = '<i class="fas fa-arrow-up me-2"></i>Show Less Projects';
            } else {
                moreProjects.style.display = 'none';
                button.innerHTML = '<i class="fas fa-arrow-down me-2"></i>View More Projects';
            }
        }

        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>