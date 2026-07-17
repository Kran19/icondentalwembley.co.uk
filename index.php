<?php
// index.php
$page_title = "Icon Dental- Wembley | Exceptional Dental Care";
$page_description = "At Icon Dental- Wembley, we combine advanced technology with a gentle, personal touch to create healthy, confident smiles that last a lifetime.";
include __DIR__ . '/includes/header.php';
?>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container custom-container hero-content">
            <div class="hero-grid-alternative">
                
                <!-- LEFT SIDE: Masonry Image Grid -->
                <div class="hero-masonry">
                    <div class="masonry-col">
                        <img src="assets/images/treatment.jpeg" class="masonry-item-1" alt="Smiling Patient">
                        <img src="assets/images/invisalign-treatment.png?v=3" class="masonry-item-3" alt="Clear Aligners Patient">
                    </div>
                    <div class="masonry-col">
                        <img src="assets/images/reception.png?v=2" class="masonry-item-2" alt="Clinic Reception">
                        <img src="assets/images/tooth.jpeg" class="masonry-item-4" alt="Healthy Smile">
                    </div>
                </div>

                <!-- RIGHT SIDE: Content Area -->
                <div class="hero-text-content">
                    <span class="hero-" style="font-size:40px;color: #b1986f;"> ICON DENTAL Wembley</span>
                    <br>

                
                    <span class="hero-title" style="font-size: 35px;"> NHS & Private Dentisty.</span>
                    <br>

                    <h3 class="hero-title" style="font-size: 40px;">Enhance Your Smile.<br>Enhance Your Confidence.</h3>
                    <p class="hero-desc" style="font-size: 20px;">Experience modern dentistry in a comfortable, welcoming environment where your smile comes first. We combine advanced technology with a gentle touch to deliver exceptional results.</p>
                    
                    <div class="btn-group-custom d-flex gap-3 hero-actions">
                        <a href="<?php echo $base_url; ?>/book-online.php" class="btn-primary-custom px-4 py-3 m-0" style="font-size: 16px;">
                            <i class="fa-regular fa-calendar-check"></i> Book Consultation
                        </a>
                        <a href="<?php echo $base_url; ?>/treatments.php" class="btn-outline-custom px-4 py-3 m-0" style="font-size: 16px;">
                            Learn More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="section-padding">
        <div class="container custom-container">
            <div class="row align-items-center g-5 mb-5 premium-welcome-section">
                <div class="col-lg-7">
                    <h3 class="welcome-title text-start mb-4">Welcome To ICON DENTAL Wembley</h3><h4>ICON DENTAL Wembley is a thriving mixed NHS and Private practice located in the heart of Wembley.</h4>
                    

                    <div class="welcome-text-content">
                        <!-- <p class="lead-text">Established over 60 years ago, Ealing Road Dental Centre is a thriving mixed <strong>NHS and Private Dentistry</strong> located in the heart of Wembley.</p> -->
                        
                        <p>Under the leadership of Principal Dentist <strong> Dr Kishan Sheth</strong>,our team proudly delivers holistic, patient-centred care. We believe in combining advanced technology with a compassionate approach, attracting a diverse community of patients who trust us with their smiles.</p>
                        
                        <p>Our commitment to excellence means we constantly update our knowledge and techniques. From routine dentistry to advanced aesthetics, we offer a broad spectrum of treatments. For complex cases, we provide seamless referral pathways to consultant specialists across both NHS and private sectors.</p>
                        
                        <!-- <div class="highlight-quote">
                            <i class="fa-solid fa-quote-left"></i>
                            <p>Dr Abbas Arbabi is highly skilled in Implant Surgery, Aesthetic Dentistry, and comprehensive Smile Makeovers.</p>
                        </div> -->
                    </div>
                </div>
                
                <div class="col-lg-5">
                    <div class="welcome-contact-card">
                        <div class="wcc-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <h3 class="wcc-title">Ready to transform your smile?</h3>
                        <p class="wcc-desc">Experience the highest quality in modern dentistry. Book your appointment today and let our expert team take care of you.</p>
                        
                        <div class="wcc-number-wrapper">
                            <span class="wcc-label">Call our team directly</span>
                            <a href="tel:02089983030" class="wcc-number">020 8998 3030</a>
                        </div>
                        
                        <a href="<?php echo $base_url; ?>/book-online.php" class="btn-primary-custom w-100 mt-4">
                            <i class="fa-regular fa-calendar-check"></i> Book Online Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- DENTAL SERVICES -->
            <div class="text-center mt-5 mb-4">
                <h3 class="welcome-title" style="font-size: 32px;">Some of our dental services include</h3>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Service 1 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-hands-bubbles" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Hygienist</h3>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-regular fa-sun" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Tooth Whitening</h3>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-users" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Family & General</h3>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-regular fa-face-smile" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Invisalign</h3>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-crown" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Bridges & Crowns</h3>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-wand-magic-sparkles" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Bonding</h3>
                    </div>
                </div>
                <!-- Service 7 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-regular fa-face-smile-beam" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Cosmetic Dentistry</h3>
                    </div>
                </div>
                <!-- Service 8 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-card p-3 p-md-4 text-center">
                        <div class="service-icon mb-3 mx-auto" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-screwdriver-wrench" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title" style="font-size: clamp(14px, 4vw, 18px);">Implants</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / Features -->
    <section class="section-padding section-light-bg">
        <div class="container custom-container">
            <div class="text-center mb-5">
                <span class="hero-badge">WHY CHOOSE ICON DENTAL WEMBLEY</span>
                <h2 class="welcome-title">Exceptional Care.<br>Outstanding Results.</h2>
                <p class="welcome-desc mx-auto" style="max-width: 600px;">We focus on providing an outstanding patient experience from the moment you contact us.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-star mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">5-Star Patient Care</h3>
                        <p class="feature-text">Friendly, professional service with patient comfort at the heart of everything we do.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-user-doctor mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Experienced Dental Team</h3>
                        <p class="feature-text">A highly skilled team dedicated to delivering excellent clinical outcomes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-microscope mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Advanced Technology</h3>
                        <p class="feature-text">Modern equipment and digital dentistry for accurate diagnosis and comfortable treatment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-gem mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Premium Materials</h3>
                        <p class="feature-text">Using trusted, evidence-based materials for durable, long-lasting results.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-briefcase-medical mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Comprehensive Services</h3>
                        <p class="feature-text">From routine care to advanced implant and cosmetic treatments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-credit-card mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Flexible Finance Available</h3>
                        <p class="feature-text">Spread the cost of treatment with affordable payment options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatments Grid Section -->
    <section class="home-treatments-section">
        <div class="container custom-container">
            <div class="home-treatments-grid">
                <!-- Card 1: Check My Teeth -->
                <div class="home-treatment-card">
                    <span class="card-badge">Check My Teeth</span>
                    <h2 class="card-title">Routine Dental Check-ups & Diagnosis</h2>
                    <p class="card-desc">Comprehensive assessments to ensure your oral health is on track and prevent future issues.</p>
                    <ul class="card-list">
                        <li><i class="fa-solid fa-check"></i> Dental Check-up</li>
                        <li><i class="fa-solid fa-check"></i> Digital X-Rays</li>
                        <li><i class="fa-solid fa-check"></i> Oral Health Assessment</li>
                        <li><i class="fa-solid fa-check"></i> Preventive Care</li>
                    </ul>
                    <a href="<?php echo $base_url; ?>/treatments/check-my-teeth.php" class="card-btn">
                        Book Check-up <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Card 2: Repair My Teeth -->
                <div class="home-treatment-card">
                    <span class="card-badge">Repair My Teeth</span>
                    <h2 class="card-title">Restore Damaged Teeth</h2>
                    <p class="card-desc">State-of-the-art restorative procedures to recover the function and structural integrity of your teeth.</p>
                    <ul class="card-list">
                        <li><i class="fa-solid fa-check"></i> Tooth Fillings</li>
                        <li><i class="fa-solid fa-check"></i> Root Canal Treatment</li>
                        <li><i class="fa-solid fa-check"></i> Crowns</li>
                        <li><i class="fa-solid fa-check"></i> Emergency Dental Care</li>
                    </ul>
                    <a href="<?php echo $base_url; ?>/treatments/repair-my-teeth.php" class="card-btn">
                        Repair My Teeth <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Card 3: Replace My Teeth -->
                <div class="home-treatment-card">
                    <span class="card-badge">Replace My Teeth</span>
                    <h2 class="card-title">Replace Missing Teeth</h2>
                    <p class="card-desc">Premium tooth replacement solutions designed to replicate natural teeth for lasting confidence.</p>
                    <ul class="card-list">
                        <li><i class="fa-solid fa-check"></i> Dental Implants</li>
                        <li><i class="fa-solid fa-check"></i> Dental Bridges</li>
                        <li><i class="fa-solid fa-check"></i> Dentures</li>
                        <li><i class="fa-solid fa-check"></i> Implant Consultation</li>
                    </ul>
                    <a href="<?php echo $base_url; ?>/treatments/replace-my-teeth.php" class="card-btn">
                        Replace My Teeth <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Card 4: Enhance My Teeth -->
                <div class="home-treatment-card">
                    <span class="card-badge">Enhance My Teeth</span>
                    <h2 class="card-title">Create Your Perfect Smile</h2>
                    <p class="card-desc">Bespoke cosmetic options designed to beautify, brighten, and perfect your natural smile.</p>
                    <ul class="card-list">
                        <li><i class="fa-solid fa-check"></i> Teeth Whitening</li>
                        <li><i class="fa-solid fa-check"></i> Invisalign</li>
                        <li><i class="fa-solid fa-check"></i> Veneers</li>
                        <li><i class="fa-solid fa-check"></i> Smile Makeover</li>
                    </ul>
                    <a href="<?php echo $base_url; ?>/treatments/enhance-my-teeth.php" class="card-btn">
                        Enhance My Smile <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Card 5: Facial Aesthetics -->
                <div class="home-treatment-card">
                    <span class="card-badge">Facial Aesthetics</span>
                    <h2 class="card-title">Refresh Your Natural Appearance</h2>
                    <p class="card-desc">Non-surgical cosmetic facial procedures to rejuvenate, refresh, and enhance your features.</p>
                    <ul class="card-list">
                        <li><i class="fa-solid fa-check"></i> Anti-Wrinkle Treatment</li>
                        <li><i class="fa-solid fa-check"></i> Dermal Fillers</li>
                        <li><i class="fa-solid fa-check"></i> Lip Enhancement</li>
                        <li><i class="fa-solid fa-check"></i> Rejuvenation &amp; Skin Care</li>
                    </ul>
                    <a href="<?php echo $base_url; ?>/treatments/facial-aesthetics.php" class="card-btn">
                        Explore Aesthetics <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Smile Makeover & Emergency -->
    <section class="section-padding section-light-bg">
        <div class="container custom-container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="hero-badge">SMILE MAKEOVER</span>
                    <h2 class="welcome-title">Transform Your Smile</h2>
                    <p class="welcome-desc">Our smile makeover treatments combine cosmetic dentistry techniques to create stunning, natural-looking results.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6"><div class="makeover-pill"><i class="fa-solid fa-wand-magic-sparkles"></i> Composite Bonding</div></div>
                        <div class="col-6"><div class="makeover-pill"><i class="fa-regular fa-face-smile"></i> Veneers</div></div>
                        <div class="col-6"><div class="makeover-pill"><i class="fa-regular fa-sun"></i> Teeth Whitening</div></div>
                        <div class="col-6"><div class="makeover-pill"><i class="fa-solid fa-scissors"></i> Gum Contouring</div></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="emergency-card">
                        <h3 class="mb-3 emergency-title"><i class="fa-solid fa-truck-medical"></i> Emergency Dentist in Wembley</h3>
                        <p>Dental emergencies can happen at any time. We provide same-day emergency appointments whenever possible for:</p>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="emergency-badge">Toothache</span>
                            <span class="emergency-badge">Broken Teeth</span>
                            <span class="emergency-badge">Lost Fillings</span>
                            <span class="emergency-badge">Swelling</span>
                            <span class="emergency-badge">Dental Trauma</span>
                            <span class="emergency-badge">Infection</span>
                        </div>
                        <a href="tel:02089983030" class="btn-primary-custom emergency-btn">Call For Emergency Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Patient CTA -->
    <section class="section-padding new-patient-section">
        <div class="container custom-container">
            <div class="row g-5 align-items-center new-patient-row">
                <!-- Left Column: Content -->
                <div class="col-lg-6">
                    <div class="new-patient-content">
                        <span class="hero-badge"><i class="fa-solid fa-user-plus me-2"></i> NEW PATIENTS</span>
                        <h2 class="welcome-title text-start">New Patients Welcome</h2>
                        <p class="welcome-desc text-start" style="max-width: 100%;">Whether you're looking for a family dentist, cosmetic treatment, or emergency appointment, we're here to help.</p>
                        
                        <ul class="new-patient-list text-start">
                            <li>
                                <span class="check-icon-wrapper"><i class="fa-solid fa-check"></i></span>
                                <span>Comprehensive Dental Examination & Digital X-Rays</span>
                            </li>
                            <li>
                                <span class="check-icon-wrapper"><i class="fa-solid fa-check"></i></span>
                                <span>Oral Health Assessment</span>
                            </li>
                            <li>
                                <span class="check-icon-wrapper"><i class="fa-solid fa-check"></i></span>
                                <span>Personalised Treatment Plan</span>
                            </li>
                            <li>
                                <span class="check-icon-wrapper"><i class="fa-solid fa-check"></i></span>
                                <span>Opportunity to Discuss Concerns</span>
                            </li>
                        </ul>
                        
                        <a href="<?php echo $base_url; ?>/book-online.php" class="btn-primary-custom btn-lg mt-2"><i class="fa-regular fa-calendar"></i> Book Appointment</a>
                    </div>
                </div>
                
                <!-- Right Column: Image -->
                <div class="col-lg-6">
                    <div class="new-patient-img-wrapper">
                        <img src="assets/images/temp-img.jpeg" class="new-patient-img" alt="New Patients Welcome - Dental Treatment">
                    </div>
                </div>
            </div>
        </div>
    </section>






    <?php include __DIR__ . '/includes/footer.php'; ?>







