<?php
// about/smile-stories.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Smile Stories</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    
    <link rel="stylesheet" href="/dental/icon-dental/assets/css/style.css?v=2">
</head>
<body>

    <!-- Navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/navbar.php'; ?>


    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container custom-container">
            
            <div class="breadcrumb-nav">
                <a href="../index.php">Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <a href="../about.php">About</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>Smile Stories</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">SMILE STORIES</span>
                    <h2 class="about-title">Real People.<br>Real Stories.<br>Beautiful Smiles.</h2>
                    <p class="about-desc">Every smile has a story. Discover how our patients transformed their oral health, confidence, and lives with personalised care at Icon Dental- Wembley.</p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="../assets/images/stories/hero.png" alt="Happy Patient at Dental Clinic">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section>
        <div class="container custom-container">
            
            <!-- Stats Bar -->
            <div class="stats-bar">
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-face-smile"></i></div>
                    <div>
                        <div class="stat-bar-value">2500+</div>
                        <div class="stat-bar-label">Happy Patients</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-star"></i></div>
                    <div>
                        <div class="stat-bar-value">4.9/5</div>
                        <div class="stat-bar-label">Google Rating</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-calendar"></i></div>
                    <div>
                        <div class="stat-bar-value">15+</div>
                        <div class="stat-bar-label">Years Experience</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div>
                        <div class="stat-bar-value">100%</div>
                        <div class="stat-bar-label">Patient Focused</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-heart"></i></div>
                    <div>
                        <div class="stat-bar-value">Countless</div>
                        <div class="stat-bar-label">Confident Smiles</div>
                    </div>
                </div>
            </div>

            <!-- Transformations Grid -->
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="section-title">Patient Transformations</h2>
                <a href="#" class="view-more-link">View more stories <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>

            <div class="transformation-grid">
                <!-- Card 1 -->
                <div class="trans-card">
                    <div class="trans-img-container">
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/sarah_before.png" alt="Before">
                            <span class="trans-badge">Before</span>
                        </div>
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/sarah_after.png" alt="After">
                            <span class="trans-badge">After</span>
                        </div>
                    </div>
                    <div class="trans-content">
                        <div class="trans-category">SMILE MAKEOVER</div>
                        <h3 class="trans-title">From Uneasy to Unstoppable</h3>
                        <p class="trans-desc">Porcelain veneers and teeth whitening gave Sarah the confidence to smile without holding back.</p>
                        <div class="patient-info">
                            <img src="../assets/images/stories/avatar_sarah.png" alt="Sarah T." class="patient-avatar">
                            <div class="patient-details">
                                <div class="patient-name">Sarah T.</div>
                                <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="trans-card">
                    <div class="trans-img-container">
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/james_before.png" alt="Before">
                            <span class="trans-badge">Before</span>
                        </div>
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/james_after.png" alt="After">
                            <span class="trans-badge">After</span>
                        </div>
                    </div>
                    <div class="trans-content">
                        <div class="trans-category">DENTAL IMPLANTS</div>
                        <h3 class="trans-title">A New Smile, A New Chapter</h3>
                        <p class="trans-desc">Dental implants restored James' smile and allowed him to enjoy life's little moments again.</p>
                        <div class="patient-info">
                            <img src="../assets/images/stories/avatar_james.png" alt="James R." class="patient-avatar">
                            <div class="patient-details">
                                <div class="patient-name">James R.</div>
                                <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="trans-card">
                    <div class="trans-img-container">
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/priya_before.png" alt="Before">
                            <span class="trans-badge">Before</span>
                        </div>
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/priya_after.png" alt="After">
                            <span class="trans-badge">After</span>
                        </div>
                    </div>
                    <div class="trans-content">
                        <div class="trans-category">INVISALIGN</div>
                        <h3 class="trans-title">Straight Smile, Zero Brackets</h3>
                        <p class="trans-desc">Invisalign clear aligners helped Priya achieve a beautiful, straight smile discreetly.</p>
                        <div class="patient-info">
                            <img src="../assets/images/stories/avatar_priya.png" alt="Priya S." class="patient-avatar">
                            <div class="patient-details">
                                <div class="patient-name">Priya S.</div>
                                <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Section -->
            <div class="testimonial-section">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testi-left-content">
                            <i class="fa-solid fa-quote-left quote-icon-large"></i>
                            <h2 class="testi-heading">Our patients’ happiness is our greatest achievement.</h2>
                            <p class="testi-desc">We're proud to be part of so many incredible smile journeys. Here's what our patients have to say.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testi-card-wrapper">
                            <div class="testi-card">
                                <div class="testi-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testi-text">"The team at Icon Dental- Wembley are amazing! From the moment I walked in, I felt cared for. My smile makeover has truly changed my life. I can't stop smiling!"</p>
                                <div class="patient-info border-0 pt-0 mt-0">
                                    <img src="../assets/images/stories/avatar_emma.png" alt="Emma L." class="patient-avatar">
                                    <div class="patient-details">
                                        <div class="patient-name">Emma L.</div>
                                        <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="testi-controls">
                                <button class="slider-btn"><i class="fa-solid fa-chevron-left"></i></button>
                                <button class="slider-btn"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/footer.php'; ?>
</body>
</html>



