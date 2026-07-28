<?php
// about/meet-the-team.php
$page_title = "Icon Dental- Wembley | Meet The Team";
include dirname(__DIR__) . '/includes/header.php';
?>

<style>
/* Team Section Spacing */
.team-section-wrapper {
    margin-bottom: 80px;
}
.team-section-wrapper:last-of-type {
    margin-bottom: 0;
}

/* Redesigned Card Image Layout */
.team-card {
    cursor: pointer;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, background-color 0.3s ease, border-color 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
    border-radius: 20px !important;
}
.team-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(177, 152, 111, 0.2);
    border-color: rgba(177, 152, 111, 0.4);
}
.team-card:active {
    transform: scale(0.98);
}

.team-card-img-wrapper {
    width: 100%;
    aspect-ratio: 4 / 5;
    overflow: hidden;
    position: relative;
    border-bottom: 1px solid rgba(177, 152, 111, 0.1);
    background-color: rgba(73, 87, 70, 0.1);
}
body.dark-theme .team-card-img-wrapper {
    border-bottom-color: rgba(255, 255, 255, 0.05);
    background-color: rgba(0, 0, 0, 0.2);
}

.team-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.team-card:hover .team-card-img {
    transform: scale(1.04);
}

.team-card-content {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.team-name {
    font-size: 22px !important;
    font-weight: 600;
    margin-bottom: 6px !important;
}

.team-role {
    font-size: 14.5px !important;
    font-weight: 500;
    color: #b1986f;
    margin-bottom: 10px !important;
}

.team-desc {
    font-size: 13.5px !important;
    line-height: 1.6;
    margin-bottom: 20px !important;
    flex-grow: 1;
}

.team-learn-more {
    margin-top: auto;
    font-size: 14px;
    font-weight: 600;
    color: #b1986f;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: color 0.3s ease;
}
.team-card:hover .team-learn-more {
    color: #d6c09b;
}
.team-learn-more i {
    font-size: 12px;
    transition: transform 0.3s ease;
}
.team-card:hover .team-learn-more i {
    transform: translateX(4px);
}

/* Front of House Placeholder Styling */
.foh-placeholder-card {
    border: 1px dashed rgba(177, 152, 111, 0.35);
    background: transparent;
    cursor: default;
}
body.dark-theme .foh-placeholder-card {
    border: 1px dashed rgba(177, 152, 111, 0.25);
    background: rgba(73, 87, 70, 0.15);
}
.foh-placeholder-card:hover {
    transform: none;
    box-shadow: none;
    border-color: rgba(177, 152, 111, 0.35);
}
.foh-placeholder-img-bg {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, rgba(73, 87, 70, 0.05), rgba(73, 87, 70, 0.15));
}
body.dark-theme .foh-placeholder-img-bg {
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.3));
}
.foh-placeholder-img-bg i {
    font-size: 42px;
    color: rgba(177, 152, 111, 0.25);
}

/* Team Modal Premium Styles */
.team-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10000;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}
.team-modal.active {
    opacity: 1;
    visibility: visible;
}
.team-modal-backdrop {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(13, 22, 16, 0.85); /* dark green tinted backdrop overlay */
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}
.team-modal-content {
    position: relative;
    background-color: #233222; /* premium dark forest green background matching reference image */
    color: #ffffff;
    width: 90%;
    max-width: 500px;
    border-radius: 24px;
    padding: 40px 30px;
    z-index: 10001;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.6), 0 0 40px rgba(177, 152, 111, 0.15);
    transform: scale(0.9) translateY(20px);
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.4s ease;
    border: 1px solid rgba(177, 152, 111, 0.15);
    opacity: 0;
}
.team-modal.active .team-modal-content {
    transform: scale(1) translateY(0);
    opacity: 1;
}
.team-modal-close {
    position: absolute;
    top: 25px;
    right: 25px;
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.6);
    font-size: 24px;
    cursor: pointer;
    transition: color 0.3s ease, transform 0.3s ease;
    line-height: 1;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}
.team-modal-close:hover {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.05);
    transform: rotate(90deg);
}
.team-modal-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.team-modal-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 36px;
    font-weight: 500;
    color: #d6c09b; /* elegant gold/bronze title */
    margin-bottom: 25px;
    margin-top: 10px;
    letter-spacing: 0.5px;
    line-height: 1.2;
}
.team-modal-image-container {
    width: 160px;
    height: 160px;
    margin-bottom: 25px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #b1986f; /* gold border around circular image */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    background-color: #3f4b3d;
}
.team-modal-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.team-modal-role {
    font-family: 'Inter', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #b1986f;
    margin-bottom: 6px;
    letter-spacing: 0.5px;
}
.team-modal-gdc {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.5);
    margin-bottom: 20px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.team-modal-bio {
    overflow-y: auto;
    max-height: 120px;
    font-family: 'Inter', sans-serif;
    font-size: 14.5px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 30px;
    max-width: 420px;
    font-weight: 300;
}
.team-modal-footer {
    width: 100%;
    display: flex;
    justify-content: center;
}
.team-modal-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 35px;
    border-radius: 30px;
    background: #b1986f; /* primary gold button background */
    color: #1e2b1d; /* dark green text for readability */
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 8px 25px rgba(177, 152, 111, 0.3);
}
.team-modal-btn:hover {
    background-color: #d6c09b;
    color: #1e2b1d;
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(177, 152, 111, 0.5);
}
.team-modal-btn i {
    font-size: 16px;
    transition: transform 0.3s ease;
}
.team-modal-btn:hover i {
    transform: translateX(4px);
}
</style>

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
                        <img src="../assets/images/team.png" alt="Dental Clinic Team" class="about-image img-light">
                        <img src="../assets/images/team.png" alt="Dental Clinic Team" class="about-image img-dark">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding pt-0">
        <div class="container custom-container">
            <!-- Management Section -->
            <div class="team-section-wrapper">
                <div class="explore-heading-wrapper">
                    <div class="heading-line"></div>
                    <h2 class="explore-heading">Management</h2>
                    <div class="heading-line"></div>
                </div>
                <div class="team-grid">
                    <!-- Card 1: Dr Kishan Sheth -->
                    <div class="team-card" data-name="Dr Kishan Sheth" data-role="Principal Dentist" data-gdc="GDC: 279027" data-image="../assets/images/kishan seth.jpeg" data-bio="BDS King’s College London 2018
Dr. Kishan Sheth graduated in 2018 from King’s College London as a runner up for the prestigious Jose Souyave Prize for excellence in root canal treatment and then embarked on his vocational training in Central London.
 
Kish has spoken amongst respected leaders at national and international conferences in Dubai, Sharjah and Atlanta, and has numerous publications out in the dental press. Kish has worked with Oral B, Colgate, Henry Schein and Septodont in organising and delivering presentations for students and staff. In his fourth year, he became the youngest Honorary Editor of DentaltownUK, a position he still holds today alongside an editorial board position in the Journal of Oral Medicine. Kish completed training in ‘Advanced Cosmetic and Restorative Dentistry’ with renowned dentist Dr Chris Orr at Advanced Dental Seminars and furthered his ‘Oral Surgery and Surgical Implantology’ training with the team at Doctores Valencia and renowned implant surgeon Dr Alfredo Valencia.
 
Kish has also completed a Postgraduate Certificate in Dental Law and Ethics with the University of Bedfordshire, as well as a Masters degree (MSc) in Implant Dentistry with Universidad Rey Juan Carlos, in Madrid. Kish is currently working towards completion of a Masters of Surgery degree at the Medical School of UCL, in Aesthetic Medicine.
 
Outside of dentistry, Kishan loves Bollywood dancing, reading plays, watching films and keeping active at the gym. He has even written a novel, ‘The Ramayan Returns’.
 
Kish has also completed a Postgraduate Certificate in Dental Law and Ethics with the University of Bedfordshire, as well as a Masters degree (MSc) in Implant Dentistry with Universidad Rey Juan Carlos, in Madrid. Kish is currently working towards completion of a Masters of Surgery degree at the Medical School of UCL, in Aesthetic Medicine.
 
Outside of dentistry, Kishan loves Bollywood dancing, reading plays, watching films and keeping active at the gym. He has even written a novel, ‘The Ramayan Returns’">
                        <div class="team-card-img-wrapper">
                            <img src="../assets/images/kishan seth.jpeg" onerror="this.src='../assets/images/team/michael.png'" alt="Dr Kishan Sheth" class="team-card-img">
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Kishan Sheth</h3>
                            <div class="team-role">Principal Dentist</div>
                            <p class="team-desc">GDC: 279027</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 2: Dr Hina Kanani -->
                    <div class="team-card" data-name="Dr Hina Kanani" data-role="Operations Manager" data-gdc="" data-image="../assets/images/team/hina-kanani.jpg" data-bio="Hina is the Business Operations Manager at ICON DENTAL Wembley, where she is dedicated to ensuring that every patient receives an exceptional experience from the moment they walk through our doors. With a strong background in healthcare, Hina is a qualified medical doctor and currently works as a General Practitioner within the NHS, bringing a unique patient-centred perspective to the management of the practice.
Alongside her clinical work, Hina is currently pursuing a Master of Business Administration (MBA), combining her passion for healthcare with expertise in leadership, strategy, and business management. Her diverse experience allows her to bridge the gap between outstanding clinical care and the seamless day-to-day running of the practice.
Hina is passionate about creating an environment where patients feel welcomed, listened to, and cared for. She believes that excellent dentistry is about more than just clinical treatment—it is about delivering compassionate, personalised care and ensuring that every">
                        <div class="team-card-img-wrapper">
                            <img src="../assets/images/heena.jpeg" onerror="this.src='../assets/images/team/sarah.png'" alt="Dr Hina Kanani" class="team-card-img">
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Hina Kanani</h3>
                            <div class="team-role">Operations Manager</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 3: Rajeshri Sheth -->
                    <div class="team-card" data-name="Rajeshri Sheth" data-role="Practice Manager" data-gdc="" data-image="../assets/images/team/rajeshri-sheth.jpg" data-bio="Rajeshri Sheth is our dedicated Practice Manager, coordinating clinical administration, patient relations, and ensuring our Wembley clinic services run smoothly.">
                        <div class="team-card-img-wrapper">
                           <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre>   
                            <!-- <img src="../assets/images/team/rajeshri-sheth.jpg" onerror="this.src='../assets/images/team/sarah.png'" alt="Rajeshri Sheth" class="team-card-img"> -->
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Rajeshri Sheth</h3>
                            <div class="team-role">Practice Manager</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dentists Section -->
            <div class="team-section-wrapper">
                <div class="explore-heading-wrapper">
                    <div class="heading-line"></div>
                    <h2 class="explore-heading">Dentists</h2>
                    <div class="heading-line"></div>
                </div>
                <div class="team-grid">
                    <!-- Card 1: Dr Kishan Sheth -->
                    <div class="team-card" data-name="Dr Kishan Sheth" data-role="Principal Dentist" data-gdc="GDC: 279027" data-image="../assets/images/kishan sheth.jpeg" data-bio="BDS King’s College London 2018
Dr. Kishan Sheth graduated in 2018 from King’s College London as a runner up for the prestigious Jose Souyave Prize for excellence in root canal treatment and then embarked on his vocational training in Central London.
 
Kish has spoken amongst respected leaders at national and international conferences in Dubai, Sharjah and Atlanta, and has numerous publications out in the dental press. Kish has worked with Oral B, Colgate, Henry Schein and Septodont in organising and delivering presentations for students and staff. In his fourth year, he became the youngest Honorary Editor of DentaltownUK, a position he still holds today alongside an editorial board position in the Journal of Oral Medicine. Kish completed training in ‘Advanced Cosmetic and Restorative Dentistry’ with renowned dentist Dr Chris Orr at Advanced Dental Seminars and furthered his ‘Oral Surgery and Surgical Implantology’ training with the team at Doctores Valencia and renowned implant surgeon Dr Alfredo Valencia.
 
Kish has also completed a Postgraduate Certificate in Dental Law and Ethics with the University of Bedfordshire, as well as a Masters degree (MSc) in Implant Dentistry with Universidad Rey Juan Carlos, in Madrid. Kish is currently working towards completion of a Masters of Surgery degree at the Medical School of UCL, in Aesthetic Medicine.
 
Outside of dentistry, Kishan loves Bollywood dancing, reading plays, watching films and keeping active at the gym. He has even written a novel, ‘The Ramayan Returns’.">
                        <div class="team-card-img-wrapper">
                            <img src="../assets/images/kishan seth.jpeg" onerror="this.src='../assets/images/team/michael.png'" alt="Dr Kishan Sheth" class="team-card-img">
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Kishan Sheth</h3>
                            <div class="team-role">Principal Dentist</div>
                            <p class="team-desc">GDC: 279027</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 2: Dr Hana Shafi -->
                    <div class="team-card" data-name="Dr Hana Shafi" data-role="Associate Dentist" data-gdc="GDC: 310312" data-image="../assets/images/team/hana-shafi.jpg" data-bio="Dr Hana Shafi is an Associate Dentist specializing in preventive care, restorative work, and root canal therapy. She has a gentle clinical manner that helps put nervous patients at ease.">
                        <div class="team-card-img-wrapper">
                            <!-- <img src="../assets/images/team/hana-shafi.jpg" onerror="this.src='../assets/images/team/emily.png'" alt="Dr Hana Shafi" class="team-card-img"> -->
                              <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre> 
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Hana Shafi</h3>
                            <div class="team-role">Associate Dentist</div>
                            <p class="team-desc">GDC: 310312</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 3: Dr Rawan Kamil -->
                    <div class="team-card" data-name="Dr Rawan Kamil" data-role="Associate Dentist" data-gdc="GDC: 325702" data-image="../assets/images/rawan.jpeg" data-bio="Rawan graduated from Bucharest, Romania with a Doctor of Dental Medicine, with a 90% average. She is passionate about dentistry and the vital role it plays in overall health and quality of life.

Rawan recognises that access to affordable dental care is a privilege not everyone has. This is why she has committed to volunteering every year in underprivileged parts of the world, providing essential treatments such as checkups, fillings, extractions, hygiene and fluoride applications in orphanages, schools, and emergency hospitals across Tanzania, Egypt, and Romania.

Outside of dentistry, Rawan loves being in nature and often goes for walks in the park to clear her mind and enjoy the outdoors.">
                        <div class="team-card-img-wrapper">
                            <img src="../assets/images/rawan.jpeg" onerror="this.src='../assets/images/team/emily.png'" alt="Dr Rawan Kamil" class="team-card-img">
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Rawan Kamil</h3>
                            <div class="team-role">Associate Dentist</div>
                            <p class="team-desc">GDC: 325702</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 4: Dr Deesha Ramji -->
                    <div class="team-card" data-name="Dr Deesha Ramji" data-role="Associate Dentist" data-gdc="GDC: 84160" data-image="../assets/images/team/deesha-ramji.jpg" data-bio="Dr Deesha Ramji is a highly skilled Associate Dentist with extensive experience in aesthetic procedures, patient-first general treatments, and clear aligner therapies.">
                        <div class="team-card-img-wrapper">
                            <!-- <img src="../assets/images/team/deesha-ramji.jpg" onerror="this.src='../assets/images/team/sophie.png'" alt="Dr Deesha Ramji" class="team-card-img"> -->

                             <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre> 
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Deesha Ramji</h3>
                            <div class="team-role">Associate Dentist</div>
                            <p class="team-desc">GDC: 84160</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 5: Dr Mohammed Maki -->
                    <div class="team-card" data-name="Dr Mohammed Maki" data-role="Associate Dentist" data-gdc="GDC: 295609" data-image="../assets/images/mohmad_maki.jpeg" data-bio="After graduating from the University of Plymouth, Mohammed has enjoyed all aspects of general dentistry, with a particular interest in aesthetic dentistry and helping patients achieve healthy, confident smiles they can be proud of.

Mohammed believes in providing gentle, patient-centred care and always take the time to listen to my patients, explain their treatment options clearly, and make every visit as comfortable and relaxed as possible.

Outside of dentistry, he enjoys following football and basketball, keeping active, and spending time with family and friends.">
                        <div class="team-card-img-wrapper">
                            <img src="../assets/images/mohmad_maki.jpeg" onerror="this.src='../assets/images/team/michael.png'" alt="Dr Mohammed Maki" class="team-card-img">
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Mohammed Maki</h3>
                            <div class="team-role">Associate Dentist</div>
                            <p class="team-desc">GDC: 295609</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 6: Dr Rishil Lamba -->
                    <div class="team-card" data-name="Dr Rishil Lamba" data-role="Associate Dentist" data-gdc="GDC: 111524" data-image="../assets/images/team/rishil-lamba.jpg" data-bio="Dr Rishil Lamba is an Associate Dentist committed to excellence in all areas of general dentistry. He specializes in preventative care, restorative treatments, and root canal therapy, focused on patient comfort and high quality care.">
                        <div class="team-card-img-wrapper">
                            <!-- <img src="../assets/images/team/rishil-lamba.jpg" onerror="this.src='../assets/images/team/michael.png'" alt="Dr Rishil Lamba" class="team-card-img"> -->
                              <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre> 
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Dr Rishil Lamba</h3>
                            <div class="team-role">Associate Dentist</div>
                            <p class="team-desc">GDC: 111524</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dental Hygienists Section -->
            <div class="team-section-wrapper">
                <div class="explore-heading-wrapper">
                    <div class="heading-line"></div>
                    <h2 class="explore-heading">Dental Hygienists</h2>
                    <div class="heading-line"></div>
                </div>
                <div class="team-grid">
                    <!-- Card 1: Sara Moshtofar -->
                    <div class="team-card" data-name="Sara Moshtofar" data-role="Dental Hygienist" data-gdc="" data-image="../assets/images/sara.jpeg" data-bio="Sara qualified from the prestigious Barts and The London School of Medicine and Dentistry with a dual qualification in Dental Hygiene and Dental Therapy. Since qualifying, she has worked as a Dental Hygienist and Dental Therapist within practice, hospital and as part of the Community Dental Services.

Sara always ensures to deliver patient-centred care and is diligent in delivering high quality care tailored to her patient’s needs. She takes pride in being part of her patient’s oral health journey, through raising awareness on prevention and motivation. She is passionate in helping the oral health needs of the nation and works hard to ensure that her patients leave the clinic with a happy, healthy smile. She does this by working together with dentists and the patient to ensure that all patients leave with a bespoke plan suited for their lifestyle. In her free time, Sara enjoys baking, reading, and travelling.">
                        <div class="team-card-img-wrapper">
                            <img src="../assets/images/sara.jpeg" onerror="this.src='../assets/images/team/sarah.png'" alt="Sara Moshtofar" class="team-card-img">
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Sara Moshtofar</h3>
                            <div class="team-role">Dental Hygienist</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 2: Jackie Jigmeddamba -->
                    <div class="team-card" data-name="Jackie Jigmeddamba" data-role="Dental Hygienist" data-gdc="GDC: 280230" data-image="../assets/images/team/jackie-jigmeddamba.jpg" data-bio="Jackie Jigmeddamba works closely with patients to prevent gum disease, delivering exceptional hygienist treatments, deep cleans, and customized oral hygiene routines.">
                        <div class="team-card-img-wrapper">
                            <!-- <img src="../assets/images/team/jackie-jigmeddamba.jpg" onerror="this.src='../assets/images/team/sarah.png'" alt="Jackie Jigmeddamba" class="team-card-img"> -->

                             <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre> 
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Jackie Jigmeddamba</h3>
                            <div class="team-role">Dental Hygienist</div>
                            <p class="team-desc">GDC: 280230</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 3: Vaish Panchal -->
                    <div class="team-card" data-name="Vaish Panchal" data-role="Dental Hygienist" data-gdc="GDC: 311286" data-image="../assets/images/team/vaish-panchal.jpg" data-bio="Vaish Panchal is an experienced Dental Hygienist specializing in deep scaling, stain removal, and educating patients on optimal home care routines for healthy gums.">
                        <div class="team-card-img-wrapper">
                            <!-- <img src="../assets/images/team/vaish-panchal.jpg" onerror="this.src='../assets/images/team/sarah.png'" alt="Vaish Panchal" class="team-card-img"> -->

                             <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre> 
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Vaish Panchal</h3>
                            <div class="team-role">Dental Hygienist</div>
                            <p class="team-desc">GDC: 311286</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dental Nurses Section -->
            <div class="team-section-wrapper">
                <div class="explore-heading-wrapper">
                    <div class="heading-line"></div>
                    <h2 class="explore-heading">Dental Nurses</h2>
                    <div class="heading-line"></div>
                </div>
                <div class="team-grid">
                    <!-- Card 1: Ghezala Benmoulai -->
                    <div class="team-card" data-name="Ghezala Benmoulai" data-role="Dental Nurse" data-gdc="" data-image="../assets/images/team/ghezala-benmoulai.jpg" data-bio="Ghezala Benmoulai supports our clinical staff as a Dental Nurse, maintaining strict hygiene standards, sterilization protocols, and assisting during complex dental procedures.">
                        <div class="team-card-img-wrapper">
                            <!-- <img src="../assets/images/team/ghezala-benmoulai.jpg" onerror="this.src='../assets/images/team/sarah.png'" alt="Ghezala Benmoulai" class="team-card-img"> -->

                             <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre> 
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Ghezala Benmoulai</h3>
                            <div class="team-role">Dental Nurse</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Card 2: Rickey Lama Sherpa -->
                    <div class="team-card" data-name="Rickey Lama Sherpa" data-role="Trainee Dental Nurse" data-gdc="" data-image="../assets/images/ricky.jpeg" data-bio="Rickey Lama Sherpa is a Trainee Dental Nurse, assisting in patient care and sterilization protocols while completing clinical qualifications.">
                        <div class="team-card-img-wrapper">
                            <img src="../assets/images/ricky.jpeg" onerror="this.src='../assets/images/team/michael.png'" alt="Rickey Lama Sherpa" class="team-card-img">
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Rickey Lama Sherpa</h3>
                            <div class="team-role">Trainee Dental Nurse</div>
                            <p class="team-desc">&nbsp;</p>
                            <!-- <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div> -->
                        </div>
                    </div>
                    <!-- Card 3: Samet Karahan -->
                    <div class="team-card" data-name="Samet Karahan" data-role="Trainee Dental Nurse" data-gdc="" data-image="../assets/images/team/samet-karahan.jpg" data-bio="Samet Karahan is a Trainee Dental Nurse, focused on clinical preparation, surgery hygiene, and ensuring patients feel relaxed and supported during their visits.">
                        <div class="team-card-img-wrapper">
                            <!-- <img src="../assets/images/team/samet-karahan.jpg" onerror="this.src='../assets/images/team/michael.png'" alt="Samet Karahan" class="team-card-img"> -->
                              <pre style=" margin-left:-120px;  height: 100%; width: 100%; display: flex;justify-content: center;align-items: center;text-align: center;">
                               Coming soon...
                           </pre> 
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Samet Karahan</h3>
                            <div class="team-role">Trainee Dental Nurse</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Front of House Section -->
            <div class="team-section-wrapper">
                <div class="explore-heading-wrapper">
                    <div class="heading-line"></div>
                    <h2 class="explore-heading">Front of House</h2>
                    <div class="heading-line"></div>
                </div>
                <div class="team-grid">
                    <!-- Placeholder Card 1 -->
                    <!-- <div class="team-card foh-placeholder-card" data-name="Patient Coordinator" data-role="Receptionist / Care Coordinator" data-gdc="" data-image="../assets/images/team/sarah.png" data-bio="Our friendly reception team is here to help you coordinate your appointments and make your visit as smooth as possible. We look forward to welcoming you soon.">
                        <div class="team-card-img-wrapper">
                            <div class="foh-placeholder-img-bg">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Patient Coordinator</h3>
                            <div class="team-role">Front of House</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div> -->
                    <!-- Placeholder Card 2 -->
                    <div class="team-card foh-placeholder-card" data-name="Receptionist" data-role="Receptionist / Care Coordinator" data-gdc="" data-image="#" data-bio="Our patient care coordinators ensure a seamless journey from booking your consultation to completing your custom treatment plan.">
                        <div class="team-card-img-wrapper">
                            <div class="foh-placeholder-img-bg">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Hina Farooq</h3>
                            <!-- <h3 class="team-name" style="font-size:16px">Receptionist</h3> -->
                            <div class="team-role">Receptionist</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Placeholder Card 3 -->
                    <!-- <div class="team-card foh-placeholder-card" data-name="Practice Ambassador" data-role="Patient Care Coordinator" data-gdc="" data-image="../assets/images/team/michael.png" data-bio="We are always expanding our front desk team to provide the highest level of personal service and patient care.">
                        <div class="team-card-img-wrapper">
                            <div class="foh-placeholder-img-bg">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="team-card-content">
                            <h3 class="team-name">Practice Ambassador</h3>
                            <div class="team-role">Front of House</div>
                            <p class="team-desc">&nbsp;</p>
                            <div class="team-learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div> -->
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
                    <!-- <a href="#" class="btn-outline-custom">Learn More</a> -->
                    <a href="<?php echo $base_url; ?>/book-online.php" class="btn-primary-custom">
                        <i class="fa-regular fa-calendar"></i> Book Online
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Team Member Modal -->
    <div class="team-modal" id="teamModal">
        <div class="team-modal-backdrop" id="teamModalBackdrop"></div>
        <div class="team-modal-content">
            <button class="team-modal-close" id="teamModalClose" aria-label="Close modal"><i class="fa-solid fa-xmark"></i></button>
            <div class="team-modal-body">
                <h2 class="team-modal-title" id="teamModalTitle">Member Name</h2>
                <div class="team-modal-image-container">
                    <img src="" alt="" id="teamModalImg" class="team-modal-img">
                </div>
                <div class="team-modal-info">
                    <h4 class="team-modal-role" id="teamModalRole">Role</h4>
                    <p class="team-modal-gdc" id="teamModalGDC">GDC: 123456</p>
                    <p class="team-modal-bio" id="teamModalBio">Bio content here...</p>
                </div>
                <div class="team-modal-footer">
                    <a href="<?php echo $base_url; ?>/book-online.php" class="team-modal-btn">
                        Book Online <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const teamCards = document.querySelectorAll('.team-card');
        const modal = document.getElementById('teamModal');
        const modalTitle = document.getElementById('teamModalTitle');
        const modalImg = document.getElementById('teamModalImg');
        const modalRole = document.getElementById('teamModalRole');
        const modalGDC = document.getElementById('teamModalGDC');
        const modalBio = document.getElementById('teamModalBio');
        const modalClose = document.getElementById('teamModalClose');
        const modalBackdrop = document.getElementById('teamModalBackdrop');

        teamCards.forEach(card => {
            card.addEventListener('click', function() {
                const name = this.getAttribute('data-name');
                const role = this.getAttribute('data-role');
                const gdc = this.getAttribute('data-gdc');
                const imgPath = this.getAttribute('data-image');
                const bio = this.getAttribute('data-bio');

                modalTitle.textContent = name;
                modalRole.textContent = role;
                
                // Hide GDC label if empty or not applicable
                const cleanedGdc = gdc ? gdc.replace('GDC:', '').trim() : '';
                if (cleanedGdc && cleanedGdc !== '') {
                    modalGDC.textContent = gdc;
                    modalGDC.style.display = 'block';
                } else {
                    modalGDC.style.display = 'none';
                }

                modalBio.textContent = bio || "A dedicated member of our team, committed to providing exceptional care and helping you achieve a healthy, confident smile.";
                
                modalImg.src = imgPath;
                modalImg.onerror = function() {
                    // Fallback to local default profile images in assets/images/team
                    const nameLower = name.toLowerCase();
                    const roleLower = role.toLowerCase();
                    if (nameLower.includes('kishan') || nameLower.includes('samet') || nameLower.includes('sedat') || nameLower.includes('maki') || nameLower.includes('lamba') || nameLower.includes('rickey')) {
                        this.src = '../assets/images/team/michael.png'; // male fallback
                    } else if (nameLower.includes('rawan')) {
                        this.src = '../assets/images/team/emily.png'; // Rawan fallback
                    } else if (nameLower.includes('deesha')) {
                        this.src = '../assets/images/team/sophie.png'; // Deesha fallback
                    } else if (roleLower.includes('manager') && !nameLower.includes('hina')) {
                        this.src = '../assets/images/team/sarah.png'; // Rajeshri fallback
                    } else if (roleLower.includes('hygienist') || roleLower.includes('nurse') || roleLower.includes('manager')) {
                        this.src = '../assets/images/team/sarah.png'; // female fallback
                    } else {
                        this.src = '../assets/images/team/michael.png'; // default male fallback
                    }
                };

                modal.classList.add('active');
            });
        });

        function closeModal() {
            modal.classList.remove('active');
        }

        if (modalClose) modalClose.addEventListener('click', closeModal);
        if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeModal();
            }
        });
    });
    </script>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>



