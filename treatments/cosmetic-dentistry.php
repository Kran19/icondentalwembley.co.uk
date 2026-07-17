<?php
// treatments/cosmetic-dentistry.php
$current_page = 'treatments.php'; // For navbar active state
$page_title = "Cosmetic Dentistry - Icon Dental Wembley";
include dirname(__DIR__) . '/includes/header.php';
?>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container" style="max-width: 1320px;">
                <!-- Breadcrumb -->
                <div class="breadcrumb-text">
                    <a href="<?php echo $base_url; ?>/index.php"><i class="fa-solid fa-house"></i> Home</a> <i class="fa-solid fa-chevron-right"></i> <a href="<?php echo $base_url; ?>/treatments.php">Treatments</a> <i class="fa-solid fa-chevron-right"></i> <span style="color:#b1986f;">Cosmetic Dentistry</span>
                </div>

                <div class="row align-items-center g-5">
                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <span class="hero-label">COSMETIC DENTISTRY</span>
                        <h1 class="hero-title">Enhance Your Smile.<br>Enhance Your Confidence.</h1>
                        <div class="hero-title-line"></div>
                        <p class="hero-desc">Our cosmetic dentistry treatments are designed to improve the appearance of your smile using advanced techniques and a personalised approach.</p>
                        
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-tooth"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Natural Results</span>
                                    <span class="feature-subtitle">Beautiful results<br>that look and feel<br>natural</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Safe & Effective</span>
                                    <span class="feature-subtitle">Advanced techniques<br>with your safety in<br>mind</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Personalised Care</span>
                                    <span class="feature-subtitle">Treatment plans<br>tailored to your<br>unique smile</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Long Lasting<br>Confidence</span>
                                    <span class="feature-subtitle">Enjoy a radiant<br>smile that lasts<br>for years</span>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group-custom">
                            <a href="#" class="btn-primary-custom">
                                Book a Consultation <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#" class="btn-outline-custom">
                                View Smile Gallery <i class="fa-solid fa-circle-play"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6 position-relative">
                        <div class="hero-image-container">
                            <img src="<?php echo $base_url; ?>/assets/images/smile.png" alt="Smiling woman" class="hero-img-light">
                        </div>
                        
                        <!-- <div class="floating-card">
                            <i class="fa-solid fa-tooth"></i>
                            <div class="floating-card-text">
                                A Smile You'll<br>Love to Share.
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
                        <h2 class="section-title">Our Cosmetic Dentistry Treatments</h2>
                        <div class="title-line"></div>
                    </div>
                </div>

                <div class="services-grid">
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-teeth-open"></i></div>
                        <h3 class="service-title">Teeth Whitening</h3>
                        <p class="service-desc">Brighten your smile and remove stains for a whiter, more radiant appearance.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Porcelain Veneers</h3>
                        <p class="service-desc">Custom-made veneers to correct discolouration, chips, gaps and uneven teeth.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <h3 class="service-title">Composite Bonding</h3>
                        <p class="service-desc">Reshape and repair teeth with minimal invasion and natural looking results.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 4 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-user-doctor"></i></div>
                        <h3 class="service-title">Smile Makeover</h3>
                        <p class="service-desc">A complete smile transformation tailored to your facial features and goals.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 5 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-face-smile"></i></div>
                        <h3 class="service-title">Invisalign®</h3>
                        <p class="service-desc">Straighten your teeth discreetly with clear aligners for a confident smile.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 6 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Gum Contouring</h3>
                        <p class="service-desc">Improve the shape and symmetry of your gums for a more balanced smile.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- CTA Strip -->
                <div class="cta-strip">
                    <div class="cta-strip-left">
                        <div class="cta-icon-wrapper">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <div class="cta-text-content">
                            <h3 class="cta-title">Ready to Transform Your Smile?</h3>
                            <p class="cta-desc mb-0">Book your consultation today and take the first step towards a more confident you.</p>
                        </div>
                    </div>
                    <div class="cta-strip-right">
                        <a href="<?php echo $base_url; ?>/book-online.php" class="btn-primary-custom" style="padding: 12px 28px; font-size: 15px;">Book an Appointment <i class="fa-solid fa-arrow-right"></i></a>
                        <i class="fa-solid fa-wand-magic-sparkles sparkle-icon"></i>
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
                        heroImg.src = "<?php echo $base_url; ?>/assets/images/smile.png";
                    } else {
                        heroImg.src = "<?php echo $base_url; ?>/assets/images/smile.png";
                    }
                }
            });
        });
        
        bodyObserver.observe(document.body, {
            attributes: true
        });

        // Initial check
        if (document.body.classList.contains('dark-theme')) {
            document.querySelector('.hero-img-light').src = "<?php echo $base_url; ?>/assets/images/smile.png";
        }
    </script>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
