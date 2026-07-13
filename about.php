<?php
// about.php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: -1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | About Us</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    
    <link rel="stylesheet" href="/dental/icon-dental/assets/css/style.css?v=12">
</head>
<body>

    <!-- Navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/navbar.php'; ?>


    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container custom-container">
            
            <div class="breadcrumb-nav">
                <a href="index.php">Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>About</span>
            </div>

            <div class="row">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">ABOUT ICON DENTAL- WEMBLEY</span>
                    <h2 class="about-title">Exceptional Dental Care for Healthier, Happier, Smiles.</h2>
                    <p class="about-desc" style="text-align: justify;">At Icon Dental- Wembley, we combine advanced technology with a personalised approach to deliver outstanding dental care for the whole family. Your comfort, health, and confidence are always our priority.</p>
                    
                    <div class="hero-features">
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="hf-title">State-of-the-Art Technology</h3>
                                <p class="hf-desc">Advanced tools for precise diagnosis and treatment.</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-users"></i></div>
                            <div>
                                <h3 class="hf-title">Experienced Professionals</h3>
                                <p class="hf-desc">Highly skilled team dedicated to your care.</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-regular fa-heart"></i></div>
                            <div>
                                <h3 class="hf-title">Patient-Centred Approach</h3>
                                <p class="hf-desc">We listen, we care, and we put you first.</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div>
                                <h3 class="hf-title">Trusted by Our Community</h3>
                                <p class="hf-desc">Proudly serving Wembley and surrounding areas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="assets/images/reception.png" alt="Luxury Dental Clinic Reception">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container custom-container">
            <div class="stats-card">
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-regular fa-face-smile"></i></div>
                    <div class="stat-val">2500+</div>
                    <div class="stat-label">Happy Patients</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-regular fa-star"></i></div>
                    <div class="stat-val">4.9/5</div>
                    <div class="stat-label">Google Rating</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-regular fa-calendar"></i></div>
                    <div class="stat-val">15+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="stat-val">100%</div>
                    <div class="stat-label">Patient Focused</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-val">20+</div>
                    <div class="stat-label">Dental Experts</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="stat-val">1</div>
                    <div class="stat-label">Convenient Location</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values + Mission Section -->
    <section class="values-section">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6 pe-lg-5" style="padding:21px;">
                    <h2 class="section-heading">Our Values</h2>
                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="value-title">Integrity</h3>
                                <p class="value-desc">We believe in honesty, transparency, & ethical care in everything we do.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-regular fa-star"></i></div>
                            <div>
                                <h3 class="value-title">Excellence</h3>
                                <p class="value-desc">We are committed to providing the highest standard of dental care.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-users"></i></div>
                            <div>
                                <h3 class="value-title">Compassion</h3>
                                <p class="value-desc">We treat every patient with kindness, respect and empathy.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-microscope"></i></div>
                            <div>
                                <h3 class="value-title">Innovation</h3>
                                <p class="value-desc">We embrace the latest technology & techniques for better outcomes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-card">
                        <div class="mission-content">
                            <h2 class="mission-heading">Our Mission</h2>
                            <p class="mission-desc">To provide exceptional dental care in a comfortable environment, helping our patients achieve long-term oral health and beautiful smiles.</p>
                            <a href="about/meet-the-team.php" class="btn-primary-custom">
                                Meet The Team <i class="fa-solid fa-users ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section>
        <div class="container custom-container">
            <div class="cta-banner">
                <div class="cta-left">
                    <div class="cta-icon-circle"><i class="fa-regular fa-calendar-check"></i></div>
                    <div>
                        <h2 class="cta-heading">Ready to take the next step towards a healthier smile?</h2>
                        <p class="cta-desc">Book your appointment online in just a few clicks.</p>
                    </div>
                </div>
                <div class="cta-right">
                    <a href="/dental/icon-dental/book-online.php" class="btn-primary-custom">
                        <i class="fa-regular fa-calendar"></i> Book Online
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




