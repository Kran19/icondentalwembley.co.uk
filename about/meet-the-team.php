
<?php
// about/meet-the-team.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Meet The Team</title>
    
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
                <span>Meet the Team</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">MEET THE TEAM</span>
                    <h2 class="about-title">The Friendly<br>Experts Behind<br>Your Smile</h2>
                    <p class="about-desc">Our experienced team combines clinical excellence with a gentle approach to provide exceptional dental care in a welcoming environment.</p>
                    
                    <div class="mini-features">
                        <div class="mini-feature">
                            <div class="mini-icon">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                            <div>
                                <h4 class="mini-feature-title">Highly Qualified</h4>
                                <p class="mini-feature-text">Extensive training and continuous education</p>
                            </div>
                        </div>
                        <div class="mini-feature">
                            <div class="mini-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div>
                                <h4 class="mini-feature-title">Patient Focused</h4>
                                <p class="mini-feature-text">Your comfort and care are our priority</p>
                            </div>
                        </div>
                        <div class="mini-feature">
                            <div class="mini-icon">
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div>
                                <h4 class="mini-feature-title">Passionate</h4>
                                <p class="mini-feature-text">We love creating healthy, beautiful smiles</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="../assets/images/about-us-light.png" alt="Dental Clinic Team" class="about-image img-light">
                        <img src="../assets/images/about-us-dark.png" alt="Dental Clinic Team" class="about-image img-dark">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding pt-0">
        <div class="container custom-container">
            
            <div class="explore-heading-wrapper">
                <div class="heading-line"></div>
                <h2 class="explore-heading">Our Dental Team</h2>
                <div class="heading-line"></div>
            </div>

            <div class="team-grid">
                <!-- Card 1 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Dr Abbas Arbabi</h3>
                        <div class="team-role">DDS Oral Implant Surgeon</div>
                        <p class="team-desc">GDC: 75201</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Sara Moshtofar</h3>
                        <div class="team-role">Dental Hygienist</div>
                        <p class="team-desc">GDC: 281632</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Btisam Serbout</h3>
                        <div class="team-role">Dental Hygienist</div>
                        <p class="team-desc">GDC: 243637</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Dr Mohammed Maki</h3>
                        <div class="team-role">Dental Hygienist</div>
                        <p class="team-desc">GDC: 295609</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Dr Rishil Lamba</h3>
                        <div class="team-role">Dental Hygienist</div>
                        <p class="team-desc">GDC: 111524</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <div class="cta-left">
                    <div class="cta-icon">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <h2 class="cta-heading">Book an appointment with our team</h2>
                        <p class="cta-text">We're here to help you achieve a healthy, confident smile.</p>
                    </div>
                </div>
                <div class="cta-right">
                    <a href="#" class="btn-outline-custom">Learn More</a>
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



