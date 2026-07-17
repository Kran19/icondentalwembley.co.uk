<?php
// treatments/general-dentistry.php
$current_page = 'treatments.php'; // For navbar active state
$page_title = "General Dentistry - Icon Dental Wembley";
include dirname(__DIR__) . '/includes/header.php';
?>


    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container" style="max-width: 1320px;">
                <!-- Breadcrumb -->
                <div class="breadcrumb-text">
                    <a href="<?php echo $base_url; ?>/index.php"><i class="fa-solid fa-house"></i> Home</a> <i class="fa-solid fa-chevron-right"></i> <a href="<?php echo $base_url; ?>/treatments.php">Treatments</a> <i class="fa-solid fa-chevron-right"></i> <span style="color:#b1986f;">General Dentistry</span>
                </div>

                <div class="row align-items-center g-5">
                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <span class="hero-label">GENERAL DENTISTRY</span>
                        <h1 class="hero-title">Complete Care for<br>a Healthy Smile</h1>
                        <p class="hero-desc">Our general dentistry services focus on prevention, early diagnosis and treatment to help you maintain a healthy smile for life.</p>
                        
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Preventive Care</span>
                                    <span class="feature-subtitle">Protect your smile<br>for the future</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-tooth"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Early Diagnosis</span>
                                    <span class="feature-subtitle">Detect issues early,<br>treat easily</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Patient Focused</span>
                                    <span class="feature-subtitle">Comfortable care<br>tailored to you</span>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group-custom">
                            <a href="#" class="btn-primary-custom">
                                Book an Appointment <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#" class="btn-outline-custom">
                                Learn More <i class="fa-regular fa-circle-play"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6 position-relative">
                        <div class="hero-image-container">
                            <!-- JS script below will swap this source for dark mode if needed -->
                            <img src="<?php echo $base_url; ?>/assets/images/general.png" alt="Dentist examining smiling female patient" class="hero-img-light">
                        </div>
                        
                        <!-- <div class="floating-card">
                            <i class="fa-solid fa-tooth"></i>
                            <div class="floating-card-text">
                                Healthy Smiles,<br>Confident You.
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container" style="max-width: 1320px;">
                <div class="section-header">
                    <div class="section-icon">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                    <div class="section-title-wrapper">
                        <div class="title-line"></div>
                        <h2 class="section-title">Our General Dentistry Services</h2>
                        <div class="title-line"></div>
                    </div>
                </div>

                <div class="services-grid">
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Check-ups &<br>Examinations</h3>
                        <p class="service-desc">Regular check-ups to keep your teeth and gums healthy.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-pump-medical"></i></div>
                        <h3 class="service-title">Professional<br>Cleaning</h3>
                        <p class="service-desc">Remove plaque and tartar for a cleaner, fresher smile.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Fillings</h3>
                        <p class="service-desc">Tooth-coloured fillings to restore strength and function.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 4 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Gum Disease<br>Treatment</h3>
                        <p class="service-desc">Diagnosis and treatment to keep your gums healthy.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 5 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Root Canal<br>Treatment</h3>
                        <p class="service-desc">Relieve pain and save your natural teeth with expert care.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 6 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Tooth<br>Extractions</h3>
                        <p class="service-desc">Safe and gentle extractions when necessary.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Benefits Strip -->
                <div class="benefits-strip">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Experienced Team</span>
                            <span class="benefit-desc">Highly skilled dentists you can trust</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-calendar-days"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Modern Technology</span>
                            <span class="benefit-desc">Advanced equipment for precise treatment</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-regular fa-heart"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Comfort First</span>
                            <span class="benefit-desc">Gentle care in a relaxing environment</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-award"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Trusted by Families</span>
                            <span class="benefit-desc">Quality care for patients of all ages</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Check for theme changes to swap hero image if needed
        const bodyObserver = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.attributeName === "class") {
                    const heroImg = document.querySelector('.hero-img-light');
                    if (document.body.classList.contains('dark-theme')) {
                        heroImg.src = "<?php echo $base_url; ?>/assets/images/general.png";
                    } else {
                        heroImg.src = "<?php echo $base_url; ?>/assets/images/general.png";
                    }
                }
            });
        });
        
        bodyObserver.observe(document.body, {
            attributes: true
        });

        // Initial check
        if (document.body.classList.contains('dark-theme')) {
            document.querySelector('.hero-img-light').src = "<?php echo $base_url; ?>/assets/images/general.png";
        }
    </script>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
