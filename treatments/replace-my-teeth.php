<?php
// treatments/replace-my-teeth.php
$current_page = 'treatments.php'; // For navbar active state
$page_title = "Replace My Teeth | Icon Dental Wembley";
include dirname(__DIR__) . '/includes/header.php';
?>

<style>
/* Premium Style Overrides for Treatments Subpages */
.subpage-hero {
    padding: 100px 0 80px;
    background: linear-gradient(135deg, rgba(63,75,61,0.03), rgba(177,152,111,0.05));
    border-bottom: 1px solid rgba(177,152,111,0.15);
}
body.dark-theme .subpage-hero {
    background: linear-gradient(135deg, rgba(23,32,22,0.6), rgba(177,152,111,0.03));
}
.hero-label {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #b1986f;
    text-transform: uppercase;
    margin-bottom: 16px;
    display: inline-block;
}
.hero-title {
    font-family: var(--heading-font);
    font-size: 48px;
    font-weight: 600;
    line-height: 1.15;
    color: var(--text-dark);
    margin-bottom: 24px;
}
body.dark-theme .hero-title {
    color: #ffffff;
}
.hero-desc {
    font-size: 16px;
    line-height: 1.6;
    color: var(--text-gray);
    margin-bottom: 35px;
    max-width: 540px;
}
body.dark-theme .hero-desc {
    color: rgba(255,255,255,0.7);
}
.hero-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(177,152,111,0.25);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}
.hero-image-wrapper img {
    width: 100%;
    height: auto;
    display: block;
}

/* Feature List */
.hf-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 35px;
}
.hf-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}
.hf-icon-circle {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(177,152,111,0.1);
    border: 1px solid rgba(177,152,111,0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #b1986f;
    font-size: 14px;
    flex-shrink: 0;
}
.hf-item h4 {
    font-family: var(--heading-font);
    font-size: 16px;
    font-weight: 600;
    color: var(--text-dark);
    margin: 0 0 4px;
}
body.dark-theme .hf-item h4 {
    color: #ffffff;
}
.hf-item p {
    font-size: 13px;
    color: var(--text-gray);
    margin: 0;
}
body.dark-theme .hf-item p {
    color: rgba(255,255,255,0.6);
}

/* Overview Section */
.overview-section {
    padding: 90px 0;
}
.section-intro-text {
    font-size: 17px;
    line-height: 1.7;
    color: var(--text-gray);
    max-width: 800px;
    margin: 0 auto 50px;
    text-align: center;
}
body.dark-theme .section-intro-text {
    color: rgba(255,255,255,0.85);
}
.section-title-luxury {
    font-family: var(--heading-font);
    font-size: 38px;
    font-weight: 500;
    color: var(--text-dark);
    text-align: center;
    margin-bottom: 45px;
}
body.dark-theme .section-title-luxury {
    color: #ffffff;
}
.treatment-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 25px;
    margin-bottom: 60px;
}
.treatment-detail-card {
    background: #ffffff;
    border: 1px solid rgba(177,152,111,0.2);
    border-radius: 18px;
    padding: 30px 24px;
    display: flex;
    flex-direction: column;
    height: 100%;
    box-shadow: 0 10px 25px rgba(0,0,0,0.04);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    text-decoration: none !important;
}
body.dark-theme .treatment-detail-card {
    background: #233222;
    border-color: rgba(177,152,111,0.25);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
.treatment-detail-card:hover {
    transform: translateY(-6px);
    border-color: rgba(177,152,111,0.7);
    box-shadow: 0 15px 35px rgba(177,152,111,0.15);
}
.td-icon-box {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: rgba(177,152,111,0.1);
    color: #b1986f;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}
.treatment-detail-card:hover .td-icon-box {
    background: #b1986f;
    color: #ffffff;
}
.td-title {
    font-family: var(--heading-font);
    font-size: 22px;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 10px;
}
body.dark-theme .td-title {
    color: #ffffff;
}
.td-desc {
    font-size: 13.5px;
    color: var(--text-gray);
    line-height: 1.5;
    margin-bottom: 20px;
    flex-grow: 1;
}
body.dark-theme .td-desc {
    color: rgba(255,255,255,0.7);
}
.td-link {
    font-size: 13px;
    font-weight: 600;
    color: #b1986f;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.25s ease;
}
.treatment-detail-card:hover .td-link {
    color: #9f875e;
    padding-left: 4px;
}

/* Two Column Section */
.comparison-section {
    padding: 80px 0;
    background: rgba(177,152,111,0.03);
    border-top: 1px solid rgba(177,152,111,0.12);
    border-bottom: 1px solid rgba(177,152,111,0.12);
}
body.dark-theme .comparison-section {
    background: rgba(23,32,22,0.4);
}
.comparison-col h3 {
    font-family: var(--heading-font);
    font-size: 26px;
    font-weight: 6500;
    color: var(--text-dark);
    margin-bottom: 25px;
}
body.dark-theme .comparison-col h3 {
    color: #ffffff;
}
.comparison-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.comparison-list li {
    font-size: 14.5px;
    color: var(--text-gray);
    line-height: 1.55;
    display: flex;
    align-items: flex-start;
    gap: 10px;
}
body.dark-theme .comparison-list li {
    color: rgba(255,255,255,0.75);
}
.comparison-list li i {
    color: #b1986f;
    margin-top: 4px;
    font-size: 13px;
}

/* Process section */
.process-section {
    padding: 90px 0;
}
.process-timeline {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-top: 45px;
    position: relative;
}
@media (max-width: 991px) {
    .process-timeline {
        grid-template-columns: 1fr;
        gap: 35px;
    }
}
.process-step {
    text-align: center;
    position: relative;
}
@media (max-width: 991px) {
    .process-step {
        text-align: left;
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }
}
.step-number {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #b1986f;
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-family: var(--heading-font);
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 18px;
    box-shadow: 0 0 15px rgba(177,152,111,0.3);
    flex-shrink: 0;
}
@media (max-width: 991px) {
    .step-number {
        margin-bottom: 0;
    }
}
.step-title {
    font-family: var(--heading-font);
    font-size: 18px;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 8px;
}
body.dark-theme .step-title {
    color: #ffffff;
}
.step-desc {
    font-size: 13px;
    color: var(--text-gray);
    line-height: 1.5;
    margin: 0;
}
body.dark-theme .step-desc {
    color: rgba(255,255,255,0.65);
}

/* Gallery Section */
.gallery-section {
    padding: 80px 0;
    background: linear-gradient(180deg, transparent, rgba(177,152,111,0.03));
}
.gallery-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 960px;
    margin: 0 auto;
}
@media (max-width: 767px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }
}
.gallery-item {
    background: #ffffff;
    border: 1px solid rgba(177,152,111,0.2);
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.03);
}
body.dark-theme .gallery-item {
    background: #233222;
    border-color: rgba(177,152,111,0.25);
}
.gallery-img-wrapper {
    aspect-ratio: 4/3;
    background: #e9e5df;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--heading-font);
    color: #b1986f;
    font-size: 18px;
    position: relative;
}
body.dark-theme .gallery-img-wrapper {
    background: #172416;
}
.gallery-label {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(23,34,22,0.85);
    color: #ffffff;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
}
.gallery-caption {
    padding: 18px 20px;
    text-align: center;
    font-family: var(--heading-font);
    font-size: 16px;
    color: var(--text-dark);
    font-weight: 600;
    margin: 0;
}
body.dark-theme .gallery-caption {
    color: #ffffff;
}

/* FAQ Accordion */
.faq-section {
    padding: 90px 0;
}
.faq-accordion {
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.faq-item {
    border: 1px solid rgba(177,152,111,0.2);
    border-radius: 12px;
    overflow: hidden;
    background: #ffffff;
    transition: all 0.3s ease;
}
body.dark-theme .faq-item {
    background: #233222;
    border-color: rgba(177,152,111,0.25);
}
.faq-header-btn {
    width: 100%;
    padding: 18px 24px;
    background: transparent;
    border: none;
    text-align: left;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: var(--heading-font);
    font-size: 17px;
    font-weight: 600;
    color: var(--text-dark);
    cursor: pointer;
}
body.dark-theme .faq-header-btn {
    color: #ffffff;
}
.faq-icon-arrow {
    color: #b1986f;
    transition: transform 0.3s ease;
}
.faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgba(177,152,111,0.015);
}
.faq-content-inner {
    padding: 0 24px 20px;
    font-size: 14px;
    color: var(--text-gray);
    line-height: 1.6;
}
body.dark-theme .faq-content-inner {
    color: rgba(255,255,255,0.7);
}
.faq-item.active {
    border-color: rgba(177,152,111,0.6);
}
.faq-item.active .faq-icon-arrow {
    transform: rotate(180deg);
}

/* Testimonial Banner */
.testimonial-banner-custom {
    padding: 70px 40px;
    background: linear-gradient(135deg, #3f4b3d, #273026);
    border: 1px solid rgba(177,152,111,0.3);
    border-radius: 24px;
    color: #ffffff;
    max-width: 960px;
    margin: 0 auto 90px;
    text-align: center;
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    position: relative;
    overflow: hidden;
}
.tb-quotes {
    font-size: 32px;
    color: #b1986f;
    margin-bottom: 20px;
}
.tb-quote-text {
    font-family: var(--heading-font);
    font-size: 20px;
    line-height: 1.6;
    color: rgba(255,255,255,0.92);
    margin-bottom: 18px;
    font-style: italic;
}
.tb-author {
    font-size: 13.5px;
    font-weight: 700;
    color: #b1986f;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/* Bottom CTA */
.subpage-cta-banner {
    padding: 60px 40px;
    background: linear-gradient(135deg, #5c6e5a, #3f4b3d);
    border-radius: 20px;
    border: 1px solid rgba(177,152,111,0.35);
    color: #ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}
@media (max-width: 767px) {
    .subpage-cta-banner {
        flex-direction: column;
        text-align: center;
    }
}
.subpage-cta-left h3 {
    font-family: var(--heading-font);
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 8px;
}
.subpage-cta-left p {
    font-size: 15px;
    color: rgba(255,255,255,0.8);
    margin: 0;
}
.btn-cta-luxury {
    background: #b1986f;
    color: #ffffff;
    border: 1px solid #b1986f;
    padding: 14px 28px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none !important;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}
.btn-cta-luxury:hover {
    background: #9f875e;
    border-color: #9f875e;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(177,152,111,0.4);
}

/* Related links styles */
.related-section {
    padding: 60px 0;
    border-top: 1px solid rgba(177,152,111,0.15);
}
.related-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
@media (max-width: 767px) {
    .related-grid {
        grid-template-columns: 1fr;
    }
}
.related-link-card {
    border: 1px solid rgba(177,152,111,0.25);
    border-radius: 12px;
    padding: 18px 20px;
    color: var(--text-dark);
    font-family: var(--heading-font);
    font-size: 16px;
    font-weight: 600;
    text-decoration: none !important;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.25s ease;
}
body.dark-theme .related-link-card {
    color: #ffffff;
    border-color: rgba(177,152,111,0.2);
    background: rgba(255,255,255,0.02);
}
.related-link-card:hover {
    border-color: #b1986f;
    background: rgba(177,152,111,0.05);
    color: #b1986f;
}
.related-link-card i {
    color: #b1986f;
}
</style>

<!-- Hero Section -->
<section class="subpage-hero">
    <div class="container custom-container">
        <div class="row align-items-center g-5">
            <!-- Left Column -->
            <div class="col-lg-6">
                <span class="hero-label">Replace My Teeth</span>
                <h1 class="hero-title">Durable & Natural Tooth Replacement</h1>
                <p class="hero-desc">Reclaim complete confidence, speech, and biting function with advanced dental implant solutions, custom bridges, and lightweight dentures crafted for natural aesthetics.</p>
                
                <div class="hf-list">
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-solid fa-tooth"></i></div>
                        <div>
                            <h4>Stable Foundations</h4>
                            <p>Direct titanium bone anchoring</p>
                        </div>
                    </div>
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h4>Bone Preservation</h4>
                            <p>Prevents natural jaw bone loss</p>
                        </div>
                    </div>
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-regular fa-face-smile"></i></div>
                        <div>
                            <h4>Realistic Aesthetics</h4>
                            <p>Blends with existing teeth</p>
                        </div>
                    </div>
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-solid fa-heart-pulse"></i></div>
                        <div>
                            <h4>Full Comfort</h4>
                            <p>Eat, speak, and smile freely</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <a href="<?php echo $base_url; ?>/book-online.php" class="btn-cta-luxury">
                        Book Consultation <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#overview" class="btn-outline-custom" style="padding: 13px 25px; border-radius: 10px;">
                        Explore Treatments
                    </a>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="hero-image-wrapper">
                    <img src="../assets/images/implant.png" alt="Tooth replacement at Icon Dental Wembley">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction & Overview Section -->
<section class="overview-section" id="overview">
    <div class="container custom-container">
        <p class="section-intro-text">
            At Icon Dental Wembley, we specialize in advanced tooth replacement options designed to replicate the function and visual appeal of natural teeth. From single-tooth titanium implants to full mouth restorations (All-on-4), we reconstruct your smile beautifully using premium materials.
        </p>

        <h2 class="section-title-luxury">Our Replacement Services</h2>

        <div class="treatment-cards-grid">
            <!-- Service 1 -->
            <div class="treatment-detail-card" onclick="openFaq(0)">
                <div class="td-icon-box"><i class="fa-solid fa-tooth"></i></div>
                <h3 class="td-title">Dental Implants</h3>
                <p class="td-desc">Titanium posts surgically anchored into the jawbone, serving as permanent roots to support realistic porcelain dental crowns.</p>
                <span class="td-link">Read Details <i class="fa-solid fa-arrow-right"></i></span>
            </div>

            <!-- Service 2 -->
            <div class="treatment-detail-card" onclick="openFaq(1)">
                <div class="td-icon-box"><i class="fa-solid fa-pump-medical"></i></div>
                <h3 class="td-title">Complete Dentures</h3>
                <p class="td-desc">Custom-made, lightweight removable prosthetics designed to restore full dental arches comfortably and naturally.</p>
                <span class="td-link">Read Details <i class="fa-solid fa-arrow-right"></i></span>
            </div>

            <!-- Service 3 -->
            <div class="treatment-detail-card" onclick="openFaq(2)">
                <div class="td-icon-box"><i class="fa-solid fa-shield-halved"></i></div>
                <h3 class="td-title">Full Smile Restoration</h3>
                <p class="td-desc">Advanced All-on-4 or All-on-6 implant bridges that replace entire arches of missing teeth, providing permanent stability.</p>
                <span class="td-link">Read Details <i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </div>
    </div>
</section>

<!-- Comparison & Key Benefits Section -->
<section class="comparison-section">
    <div class="container custom-container">
        <div class="row g-5">
            <div class="col-md-6 comparison-col">
                <h3>Key Benefits of Tooth Replacement</h3>
                <ul class="comparison-list">
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Bone Health:</strong> Implants stimulate jawbone density to prevent facial collapse.</li>
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Natural Feel:</strong> Looks, cleans, and functions exactly like normal teeth.</li>
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Protects Surrounding Teeth:</strong> Replaces teeth without needing to grind adjacent enamel.</li>
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Confidence Boost:</strong> Restores full speech, smile appearance, and chew force.</li>
                </ul>
            </div>
            <div class="col-md-6 comparison-col">
                <h3>Is this right for you?</h3>
                <ul class="comparison-list">
                    <li><i class="fa-solid fa-circle-check"></i> Perfect if you are missing one, several, or all of your natural teeth.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Ideal if you struggle with loose, slipping, or painful dentures.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Suitable for adults of any age with healthy gums and jawbone structure.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Recommended to prevent teeth migration after tooth loss.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Process Section -->
<section class="process-section">
    <div class="container custom-container">
        <h2 class="section-title-luxury">Your Implant Journey</h2>
        <div class="process-timeline">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="step-number">1</div>
                <h4 class="step-title">Diagnostic Scans</h4>
                <p class="step-desc">We take digital CBCT 3D scans to evaluate bone structure and plan precise implant positioning.</p>
            </div>
            <!-- Step 2 -->
            <div class="process-step">
                <div class="step-number">2</div>
                <h4 class="step-title">Implant Placement</h4>
                <p class="step-desc">The titanium post is gently placed into the jawbone under comfortable local anesthesia.</p>
            </div>
            <!-- Step 3 -->
            <div class="process-step">
                <div class="step-number">3</div>
                <h4 class="step-title">Osseointegration</h4>
                <p class="step-desc">Over a few months, the implant naturally fuses with the bone, forming a rock-solid foundation.</p>
            </div>
            <!-- Step 4 -->
            <div class="process-step">
                <div class="step-number">4</div>
                <h4 class="step-title">Crown Matching</h4>
                <p class="step-desc">We fit your bespoke ceramic crown, matching the exact color, shape, and height of your smile.</p>
            </div>
        </div>
    </div>
</section>

<!-- Before/After Gallery Section -->
<section class="gallery-section">
    <div class="container custom-container">
        <h2 class="section-title-luxury">Replacement Before & After</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    Before (Empty Gap/Lost Tooth Space)
                    <div class="gallery-label">Before</div>
                </div>
                <h4 class="gallery-caption">Missing Tooth Area</h4>
            </div>
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    After (Anchor Implant & Crown Fitted)
                    <div class="gallery-label" style="background:#b1986f;">After</div>
                </div>
                <h4 class="gallery-caption">Fully Restored Crown</h4>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<div class="container custom-container">
    <div class="testimonial-banner-custom">
        <div class="tb-quotes"><i class="fa-solid fa-quote-left"></i></div>
        <p class="tb-quote-text">
            "My new dental implants have changed my life. I can eat anything again, my speech is clear, and I can smile with complete confidence!"
        </p>
        <span class="tb-author">Robert K. — Wembley</span>
    </div>
</div>

<!-- FAQs Section -->
<section class="faq-section" id="faq">
    <div class="container custom-container">
        <h2 class="section-title-luxury">Frequently Asked Questions</h2>
        <div class="faq-accordion">
            <!-- FAQ 1 -->
            <div class="faq-item">
                <button class="faq-header-btn" onclick="toggleFaq(this)">
                    <span>Am I suitable for dental implants?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        Most healthy adults with fully developed jaws are excellent candidates. During your initial consultation, we will inspect your bone density, gum health, and medical history to confirm eligibility.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
                <button class="faq-header-btn" onclick="toggleFaq(this)">
                    <span>How long does the dental implant process take?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        Typically, the process takes between 3 to 6 months. This allows the titanium post to fully fuse with your jawbone (osseointegration) before we attach the final ceramic crown.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
                <button class="faq-header-btn" onclick="toggleFaq(this)">
                    <span>How do I care for my dental implants?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        You brush and floss dental implants exactly like natural teeth. Regular check-ups and hygiene appointments are vital to keep the surrounding gum tissues healthy.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
                <button class="faq-header-btn" onclick="toggleFaq(this)">
                    <span>What is All-on-4 smile restoration?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        All-on-4 is an advanced surgical technique where a full bridge of replacement teeth is securely anchored using only four strategically angled dental implants, offering a permanent alternative to removable dentures.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Treatments Links -->
<section class="related-section">
    <div class="container custom-container">
        <h3 class="mb-4 text-center" style="font-family:var(--heading-font); color:#b1986f; font-size:24px; font-weight:500;">Explore Other Treatments</h3>
        <div class="related-grid">
            <a href="check-my-teeth.php" class="related-link-card">
                <span>Check My Teeth</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="repair-my-teeth.php" class="related-link-card">
                <span>Repair My Teeth</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="enhance-my-teeth.php" class="related-link-card">
                <span>Enhance My Teeth</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="facial-aesthetics.php" class="related-link-card">
                <span>Facial Aesthetics</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- CTA Booking Banner -->
<section class="container custom-container mb-5 pb-5">
    <div class="subpage-cta-banner">
        <div class="subpage-cta-left">
            <h3>Start Your Replacement Journey</h3>
            <p>Schedule your assessment today and let our specialists build a custom care plan.</p>
        </div>
        <a href="<?php echo $base_url; ?>/book-online.php" class="btn-cta-luxury">
            Book Online Now <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>

<script>
// FAQ Accordion Toggle
function toggleFaq(button) {
    const item = button.parentElement;
    const content = item.querySelector('.faq-content');
    
    // Toggle active state
    if (item.classList.contains('active')) {
        item.classList.remove('active');
        content.style.maxHeight = '0';
    } else {
        // Close other items
        document.querySelectorAll('.faq-item').forEach(otherItem => {
            otherItem.classList.remove('active');
            otherItem.querySelector('.faq-content').style.maxHeight = '0';
        });
        
        item.classList.add('active');
        content.style.maxHeight = content.scrollHeight + "px";
    }
}

// Redirect or scroll to specific FAQ
function openFaq(index) {
    const items = document.querySelectorAll('.faq-item');
    if (items[index]) {
        const faqHeaderBtn = items[index].querySelector('.faq-header-btn');
        document.getElementById('faq').scrollIntoView({ behavior: 'smooth' });
        setTimeout(() => {
            toggleFaq(faqHeaderBtn);
        }, 600);
    }
}
</script>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
