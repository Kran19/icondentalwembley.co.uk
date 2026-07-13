<?php
// treatments.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Treatments</title>
    
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
    <section class="treatments-hero">
        <div class="container custom-container">
            
            <div class="breadcrumb-nav">
                <a href="index.php">Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>Treatments</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="hero-label">OUR TREATMENTS</span>
                    <h2 class="hero-title">Advanced Dentistry.<br>Beautiful, Healthy Smiles.</h2>
                    <p class="hero-desc">From routine care to life-changing transformations, our treatments are designed around your needs, comfort, and goals.</p>
                    
                    <div class="hero-features">
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="hf-title">Latest Technology</h3>
                                <p class="hf-desc">State-of-the-art equipment</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-regular fa-heart"></i></div>
                            <div>
                                <h3 class="hf-title">Gentle & Comfortable</h3>
                                <p class="hf-desc">Pain-minimised treatments</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-notes-medical"></i></div>
                            <div>
                                <h3 class="hf-title">Personalised Care</h3>
                                <p class="hf-desc">Tailored treatment for every patient</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div>
                                <h3 class="hf-title">Trusted Experts</h3>
                                <p class="hf-desc">Highly experienced dental team</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#treatments" class="btn-primary-custom mt-2">
                        View All Treatments <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper mt-5 mt-lg-0">
                        <!-- Reusing the newly successfully generated image -->
                        <img src="assets/images/stories/hero.png" alt="Patient and Dentist">
                        
                        <!-- Floating Quote Card -->
                        <div class="floating-quote-card">
                            <div class="quote-icon"><i class="fa-regular fa-heart"></i></div>
                            <h3 class="quote-text">Your smile<br>is our passion</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatments Grid -->
    <section class="treatments-section" id="treatments">
        <div class="container custom-container">
            <div class="treatments-grid">
                <!-- Card 1 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <!-- Fallback using existing images -->
                        <img src="assets/images/general.png" alt="General Dentistry">
                        <div class="t-icon-circle"><i class="fa-solid fa-tooth"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Check My Teeth</h3>
                        <p class="t-desc">Keep your smile healthy with check-ups, cleans, fillings, crowns and more.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <img src="assets/images/smile.png" alt="Smile Makeovers">
                        <div class="t-icon-circle"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Repair My Teeth</h3>
                        <p class="t-desc">Transform your smile with whitening, veneers, bonding and complete makeovers.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <!-- Reuse smile image or placeholder -->
                        <img src="assets/images/stories/priya_before.png" alt="Invisalign">
                        <div class="t-icon-circle"><i class="fa-solid fa-teeth-open"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Enhance My Teeth</h3>
                        <p class="t-desc">Straighten your teeth discreetly with clear aligners for a confident smile, every day.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <img src="assets/images/implant.png" alt="Dental Implants">
                        <div class="t-icon-circle"><i class="fa-solid fa-tooth"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Replace My Teeth</h3>
                        <p class="t-desc">Replace missing teeth with durable, natural-looking implant solutions.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <img src="assets/images/reception.png" alt="View All Treatments">
                        <div class="t-icon-circle"><i class="fa-solid fa-border-all"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Facical Aesthetics</h3>
                        <p class="t-desc">Explore our full range of dental services tailored to you and your family.</p>
                        <a href="#" class="t-link">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Benefits Strip -->
            <div class="benefits-strip">
                <div class="benefits-group">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h4 class="benefit-title">Minimal Discomfort</h4>
                            <p class="benefit-desc">Comfort-first approach in every treatment</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-pound-sign"></i></div>
                        <div>
                            <h4 class="benefit-title">Flexible Payment</h4>
                            <p class="benefit-desc">Interest-free options to suit your budget</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-notes-medical"></i></div>
                        <div>
                            <h4 class="benefit-title">Emergency Care</h4>
                            <p class="benefit-desc">Same-day appointments when you need us</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-regular fa-heart"></i></div>
                        <div>
                            <h4 class="benefit-title">Aftercare Support</h4>
                            <p class="benefit-desc">We're with you every step of your journey</p>
                        </div>
                    </div>
                </div>
                <div class="benefit-image-wrapper">
                    <img src="assets/images/reception.png" alt="Clinic Reception">
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-banner">
                <div class="cta-left">
                    <div class="cta-icon-circle"><i class="fa-regular fa-calendar-check"></i></div>
                    <div>
                        <h2 class="cta-heading">Ready to start your smile journey?</h2>
                        <p class="cta-desc">Book your appointment online in just a few clicks.</p>
                    </div>
                </div>
                <div class="cta-actions">
                    <a href="/dental/icon-dental/book-online.php" class="btn-primary-custom">
                        <i class="fa-regular fa-calendar"></i> Book Online
                    </a>
                    <a href="#" class="btn-outline-custom">
                        <i class="fa-solid fa-phone"></i> Call Us
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/footer.php'; ?>
</body>
</html>



