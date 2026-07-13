<?php
// about/why-choose-us.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Why Choose Us</title>
    
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
                <span>Why Choose Us</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">WHY CHOOSE US</span>
                    <h2 class="about-title">Exceptional Care.<br>Trusted by Families<br>in Wembley.</h2>
                    <p class="about-desc">At Icon Dental- Wembley, we go beyond conventional dentistry. We combine advanced technology, a gentle approach, and genuine care to deliver a dental experience that sets us apart.</p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="../assets/images/why-choose-us-hero.png" alt="Happy Patient at Dental Clinic">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section>
        <div class="container custom-container">
            <div class="feature-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                    <h3 class="feature-title">Experienced Team</h3>
                    <p class="feature-desc">Highly skilled dentists with years of expertise across all areas of dental care.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-laptop-medical"></i>
                    </div>
                    <h3 class="feature-title">Advanced Technology</h3>
                    <p class="feature-desc">We use the latest dental technology for precise diagnosis and treatments.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <h3 class="feature-title">Patient Focused</h3>
                    <p class="feature-desc">Your comfort, health, and goals are always our top priority.</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="feature-title">Honest & Transparent</h3>
                    <p class="feature-desc">Open communication and clear pricing with no hidden surprises.</p>
                </div>

                <!-- Feature 5 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <h3 class="feature-title">Convenient Care</h3>
                    <p class="feature-desc">Flexible appointments and a welcoming environment for the whole family.</p>
                </div>

                <!-- Feature 6 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-regular fa-face-smile"></i>
                    </div>
                    <h3 class="feature-title">Beautiful Results</h3>
                    <p class="feature-desc">We are dedicated to delivering healthy, natural looking smiles that last.</p>
                </div>
            </div>

            <!-- Stats + CTA Section -->
            <div class="stats-cta-section">
                <div class="stats-container">
                    <div class="stat-block">
                        <i class="fa-solid fa-user-group stat-icon"></i>
                        <div class="stat-value">2500+</div>
                        <div class="stat-label">Happy Patients</div>
                    </div>
                    <div class="stat-block">
                        <i class="fa-regular fa-star stat-icon"></i>
                        <div class="stat-value">4.9/5</div>
                        <div class="stat-label">Google Rating</div>
                    </div>
                    <div class="stat-block">
                        <i class="fa-regular fa-calendar stat-icon"></i>
                        <div class="stat-value">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-block">
                        <i class="fa-solid fa-shield-halved stat-icon"></i>
                        <div class="stat-value">100%</div>
                        <div class="stat-label">Patient Focused</div>
                    </div>
                </div>
                
                <div class="cta-block">
                    <i class="fa-regular fa-heart cta-icon-heart"></i>
                    <div class="cta-content">
                        <h3>Your smile is our passion</h3>
                        <p>We are committed to helping you achieve a healthy, confident smile that lasts a lifetime.</p>
                        <a href="meet-the-team.php" class="btn-primary-custom">
                            Meet the Team <i class="fa-solid fa-user-group ms-1"></i>
                        </a>
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



