<?php
// treatments/orthodontics.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bone Grafting | Icon Dental Wembley</title>
    
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

    <!-- Navbar Light (Simulated active state via JS below if needed, but handled mostly via CSS) -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/navbar.php'; ?>

    <!-- ==================== LIGHT VERSION ==================== -->
    <main class="light-version">
        <div class="container container-custom">
            
            <!-- Breadcrumb -->
            <div class="breadcrumb-custom">
                <i class="fa-solid fa-house"></i>
                <a href="/dental/icon-dental/">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="/dental/icon-dental/treatments.php">Treatments</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span class="current">Bone Grafting</span>
            </div>

            <!-- Hero Section -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-label">BONE GRAFTING</div>
                    <h1 class="hero-title">Restoring Bone.<br>Building Foundations.<br>Securing Smiles.</h1>
                    <div class="hero-title-line"></div>
                    <p class="hero-desc">Our bone grafting treatments are designed to rebuild jawbone structure, providing a strong, healthy foundation for dental implants and restoring your natural facial contours.</p>
                    
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div class="feature-content">
                                <h4>Expert Orthodontists</h4>
                                <p>Specialist care from experienced professionals</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="feature-content">
                                <h4>Advanced Technology</h4>
                                <p>Precision planning for predictable results</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-regular fa-face-smile"></i></div>
                            <div class="feature-content">
                                <h4>Discreet Solutions</h4>
                                <p>Clear aligners and aesthetic braces available</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                            <div class="feature-content">
                                <h4>Better Oral Health</h4>
                                <p>Improved bite, easier cleaning and long-term benefits</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="hero-image-container">
                        <img src="../assets/images/orthodontics-hero.jpg" alt="Smiling woman holding aligners">
                        <div class="floating-card">
                            <div class="floating-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="floating-text">Your Journey to a<br>Straighter Smile<br>Starts Here.</h3>
                                <div class="floating-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Treatments Section -->
            <section class="treatments-section">
                <div class="section-header">

                    <h2 class="section-title">Our Bone Grafting Procedures</h2>
                </div>

                <div class="cards-grid">
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/invisalign-treatment.jpg" alt="Invisalign">
                        </div>
                        <h3>Invisalign®</h3>
                        <p>Clear, removable aligners that straighten your teeth discreetly and comfortably.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/metal-braces.jpg" alt="Metal Braces">
                        </div>
                        <h3>Metal Braces</h3>
                        <p>Traditional braces that are reliable, effective and affordable.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/ceramic-braces.jpg" alt="Ceramic Braces">
                        </div>
                        <h3>Ceramic Braces</h3>
                        <p>Tooth-coloured braces that blend naturally with your smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/lingual-braces.jpg" alt="Lingual Braces">
                        </div>
                        <h3>Lingual Braces</h3>
                        <p>Hidden braces placed behind your teeth for a completely discreet option.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/early-orthodontics.jpg" alt="Early Orthodontics">
                        </div>
                        <h3>Early Orthodontics</h3>
                        <p>Interceptive treatments for children to guide healthy growth and alignment.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/retainers.jpg" alt="Retainers">
                        </div>
                        <h3>Retainers</h3>
                        <p>Custom retainers to maintain your new beautiful smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>

                <!-- CTA Strip -->
                <div class="cta-strip">
                    <div class="cta-left">
                        <div class="cta-icon"><i class="fa-regular fa-calendar-check"></i></div>
                        <div class="cta-text">
                            <h3>Start Your Treatment Journey</h3>
                            <p>Book your consultation today and let our experts create a personalised treatment plan just for you.</p>
                        </div>
                    </div>
                    <div class="cta-right">
                        <a href="#" class="btn-primary-dark">
                            Book Your Consultation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="sparkle-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <!-- ==================== DARK VERSION ==================== -->
    <main class="dark-wrapper">
        <div class="container container-custom">
            
            <!-- Breadcrumb -->
            <div class="breadcrumb-custom">
                <i class="fa-solid fa-house"></i>
                <a href="/dental/icon-dental/">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="/dental/icon-dental/treatments.php">Treatments</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span class="current">Bone Grafting</span>
            </div>

            <!-- Hero Section -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-label">BONE GRAFTING</div>
                    <h1 class="hero-title">Restoring Bone.<br>Building Foundations.<br>Securing Smiles.</h1>
                    <div class="hero-title-line"></div>
                    <p class="hero-desc">Our bone grafting treatments are designed to rebuild jawbone structure, providing a strong, healthy foundation for dental implants and restoring your natural facial contours.</p>
                    
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div class="feature-content">
                                <h4>Expert Orthodontists</h4>
                                <p>Specialist care from experienced professionals</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="feature-content">
                                <h4>Advanced Technology</h4>
                                <p>Precision planning for predictable results</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-regular fa-face-smile"></i></div>
                            <div class="feature-content">
                                <h4>Discreet Solutions</h4>
                                <p>Clear aligners and aesthetic braces available</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                            <div class="feature-content">
                                <h4>Better Oral Health</h4>
                                <p>Improved bite, easier cleaning and long-term benefits</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="hero-image-container">
                        <img src="../assets/images/orthodontics-hero.jpg" alt="Smiling woman holding aligners">
                        <div class="floating-card">
                            <div class="floating-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="floating-text">Your Journey to a<br>Straighter Smile<br>Starts Here.</h3>
                                <div class="floating-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Treatments Section -->
            <section class="treatments-section">
                <div class="section-header">

                    <h2 class="section-title">Our Bone Grafting Procedures</h2>
                </div>

                <div class="cards-grid">
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/invisalign-treatment.jpg" alt="Invisalign">
                        </div>
                        <h3>Invisalign®</h3>
                        <p>Clear, removable aligners that straighten your teeth discreetly and comfortably.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/metal-braces.jpg" alt="Metal Braces">
                        </div>
                        <h3>Metal Braces</h3>
                        <p>Traditional braces that are reliable, effective and affordable.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/ceramic-braces.jpg" alt="Ceramic Braces">
                        </div>
                        <h3>Ceramic Braces</h3>
                        <p>Tooth-coloured braces that blend naturally with your smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/lingual-braces.jpg" alt="Lingual Braces">
                        </div>
                        <h3>Lingual Braces</h3>
                        <p>Hidden braces placed behind your teeth for a completely discreet option.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/early-orthodontics.jpg" alt="Early Orthodontics">
                        </div>
                        <h3>Early Orthodontics</h3>
                        <p>Interceptive treatments for children to guide healthy growth and alignment.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/retainers.jpg" alt="Retainers">
                        </div>
                        <h3>Retainers</h3>
                        <p>Custom retainers to maintain your new beautiful smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>

                <!-- CTA Strip -->
                <div class="cta-strip">
                    <div class="cta-left">
                        <div class="cta-icon"><i class="fa-regular fa-calendar-check"></i></div>
                        <div class="cta-text">
                            <h3>Start Your Treatment Journey</h3>
                            <p>Book your consultation today and let our experts create a personalised treatment plan just for you.</p>
                        </div>
                    </div>
                    <div class="cta-right">
                        <a href="#" class="btn-primary-dark" style="background: #b1986f; color: #173a28;">
                            Book Your Consultation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="sparkle-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to set the active nav link to Treatments
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                if(link.textContent.includes('Treatments')) {
                    link.classList.add('active-treatments');
                }
            });
        });
        function populateModal(element) {
            const title = element.querySelector('h3').innerText;
            const desc = element.querySelector('p').innerText;
            const imgUrl = element.querySelector('img').src;
            
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDesc').innerText = desc + " We offer comprehensive procedures tailored to your needs. During your consultation, we will assess your oral health and provide a customized treatment plan.";
            document.getElementById('modalImg').src = imgUrl;
        }
    </script>
    
    <!-- Treatment Modal -->
    
    <div class="modal fade" id="treatmentModal" tabindex="-1" aria-labelledby="treatmentModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle">Treatment Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-4">
            <div class="image-wrapper">
                <img id="modalImg" src="" alt="Treatment Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p id="modalDesc"></p>
          </div>
          <div class="modal-footer" style="justify-content: center; padding: 20px;">
            <a href="/dental/icon-dental/book-online.php" class="btn-primary-dark" style="text-decoration: none;">Book a Consultation <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/footer.php'; ?>
</body>
</html>
