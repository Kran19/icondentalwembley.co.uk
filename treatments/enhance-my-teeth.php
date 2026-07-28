<?php
// treatments/enhance-my-teeth.php
$current_page = 'treatments.php'; // For navbar active state
$page_title = "Enhance My Teeth | Icon Dental Wembley";
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
                <span class="hero-label">Enhance My Teeth</span>
                <h1 class="hero-title">Create Your Perfect Smile</h1>
                <p class="hero-desc">Design your dream smile with Invisalign clear aligners, professional clinical whitening, premium porcelain veneers, composite bonding, and comprehensive cosmetic makeovers.</p>
                
                <div class="hf-list">
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <div>
                            <h4>Invisalign Provider</h4>
                            <p>Certified clear aligner orthodontics</p>
                        </div>
                    </div>
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-solid fa-clipboard-check"></i></div>
                        <div>
                            <h4>Bespoke Smile Styling</h4>
                            <p>Custom shapes tailored to you</p>
                        </div>
                    </div>
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-regular fa-face-smile"></i></div>
                        <div>
                            <h4>Radiant Whiteness</h4>
                            <p>Safe, deep stain removal</p>
                        </div>
                    </div>
                    <div class="hf-item">
                        <div class="hf-icon-circle"><i class="fa-solid fa-heart-pulse"></i></div>
                        <div>
                            <h4>Minimally Invasive</h4>
                            <p>Preserves healthy natural enamel</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <a href="<?php echo $base_url; ?>/book-online.php" class="btn-cta-luxury">
                        Enhance My Smile <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#overview" class="btn-outline-custom" style="padding: 13px 25px; border-radius: 10px;">
                        Explore Treatments
                    </a>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="hero-image-wrapper">
                    <img src="../assets/images/invisalign-treatment.png" alt="Cosmetic smile enhancements at Icon Dental Wembley">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction & Overview Section -->
<section class="overview-section" id="overview">
    <div class="container custom-container">
        <p class="section-intro-text">
            At Icon Dental Wembley, we craft stunning, natural-looking cosmetic makeovers tailored to your individual features. Using advanced digital planning, clear alignments, and custom materials, we enhance your confidence and your teeth beautifully.
        </p>

        <h2 class="section-title-luxury">Our Cosmetic & Orthodontic Services</h2>

        <div class="treatment-cards-grid">
            <!-- Service 1 -->
            <div class="treatment-detail-card" onclick="openFaq(0)">
                <div class="td-icon-box"><i class="fa-solid fa-tooth"></i></div>
                <h3 class="td-title">Invisalign® Aligners</h3>
                <p class="td-desc">Virtually invisible, comfortable plastic alignment trays designed to straighten crowded or gapped teeth discreetly.</p>
                <!-- <span class="td-link">Read Details <i class="fa-solid fa-arrow-right"></i></span> -->
            </div>

            <!-- Service 2 -->
            <div class="treatment-detail-card" onclick="openFaq(1)">
                <div class="td-icon-box"><i class="fa-solid fa-pump-medical"></i></div>
                <h3 class="td-title">Teeth Whitening</h3>
                <p class="td-desc">Highly effective in-chair or take-home professional bleaching systems to remove enamel stains safely and quickly.</p>
                <!-- <span class="td-link">Read Details <i class="fa-solid fa-arrow-right"></i></span> -->
            </div>

            <!-- Service 3 -->
            <div class="treatment-detail-card" onclick="openFaq(2)">
                <div class="td-icon-box"><i class="fa-solid fa-shield-halved"></i></div>
                <h3 class="td-title">Porcelain Veneers</h3>
                <p class="td-desc">Custom-made, ultra-thin ceramic shells bonded permanently to the front of teeth for instant corrections of shape and shade.</p>
                <!-- <span class="td-link">Read Details <i class="fa-solid fa-arrow-right"></i></span> -->
            </div>

            <!-- Service 4 -->
            <div class="treatment-detail-card" onclick="openFaq(3)">
                <div class="td-icon-box"><i class="fa-solid fa-kit-medical"></i></div>
                <h3 class="td-title">Composite Bonding</h3>
                <p class="td-desc">Hand-crafted composite resin applied directly to correct minor tooth chips, discolorations, and gaps in a single visit.</p>
                <!-- <span class="td-link">Read Details <i class="fa-solid fa-arrow-right"></i></span> -->
            </div>
        </div>
    </div>
</section>

<!-- Comparison & Key Benefits Section -->
<section class="comparison-section">
    <div class="container custom-container">
        <div class="row g-5">
            <div class="col-md-6 comparison-col">
                <h3>Key Benefits of Cosmetic Styling</h3>
                <ul class="comparison-list">
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Symmetrical Alignment:</strong> Achieves a highly organized, balanced smile contour.</li>
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Self-Esteem Boost:</strong> Elevates professional appearance and confidence.</li>
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Minimally Invasive:</strong> Bonding and clear aligners preserve natural tooth structure.</li>
                    <li><i class="fa-solid fa-circle-check"></i> <strong>Resists Stains:</strong> Porcelain veneers do not discolor from coffee, tea, or red wine.</li>
                </ul>
            </div>
            <div class="col-md-6 comparison-col">
                <h3>Is this right for you?</h3>
                <ul class="comparison-list">
                    <li><i class="fa-solid fa-circle-check"></i> Perfect for adults looking to correct crooked, crowded, or rotated teeth.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Ideal if you want to lighten teeth that are yellowed or discolored.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Great for repairing chips, minor fractures, and aesthetic wear.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Best if you desire a comprehensive, tailored smile rejuvenation.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Process Section -->
<section class="process-section">
    <div class="container custom-container">
        <h2 class="section-title-luxury">Your Cosmetic Treatment Path</h2>
        <div class="process-timeline">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="step-number">1</div>
                <h4 class="step-title">3D Consultation</h4>
                <p class="step-desc">We scan your teeth digitally, creating a detailed 3D model of your current alignment and bite.</p>
            </div>
            <!-- Step 2 -->
            <div class="process-step">
                <div class="step-number">2</div>
                <h4 class="step-title">Bespoke Design</h4>
                <p class="step-desc">We simulate the final alignment preview so you can approve your new smile before we begin.</p>
            </div>
            <!-- Step 3 -->
            <div class="process-step">
                <div class="step-number">3</div>
                <h4 class="step-title">Active Styling</h4>
                <p class="step-desc">We carry out treatments, whether fitting aligners, applying veneers, or hand-crafting resin.</p>
            </div>
            <!-- Step 4 -->
            <div class="process-step">
                <div class="step-number">4</div>
                <h4 class="step-title">Smile Reveal</h4>
                <p class="step-desc">We clean, polish, and fit retainers, completing your premium smile transformation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Before/After Gallery Section -->
<section class="gallery-section">
    <div class="container custom-container">
        <h2 class="section-title-luxury">Cosmetic Transformation Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="../assets/images/before-dada.jpeg" style="width: 100%;" alt="">
                    <div class="gallery-label">Before</div>
                </div>
                <h4 class="gallery-caption">Initial Smile Alignment</h4>
            </div>
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="../assets/images/after-before2.jpeg" style="width: 100%;" alt="">
                    <div class="gallery-label" style="background:#b1986f;">After</div>
                </div>
                <h4 class="gallery-caption">Completed Enhancement</h4>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<div class="container custom-container">
    <div class="testimonial-banner-custom">
        <div class="tb-quotes"><i class="fa-solid fa-quote-left"></i></div>
        <p class="tb-quote-text">
            "My smile makeover exceeded all my expectations. The Invisalign and whitening results are absolutely incredible. I can't stop smiling!"
        </p>
        <span class="tb-author">Priya S. — Wembley</span>
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
                    <span>How long does Invisalign treatment take?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        The length of Invisalign treatment depends on the complexity of your alignment needs. Most cases are completed within 6 to 18 months, with visible improvements starting in just a few weeks.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
                <button class="faq-header-btn" onclick="toggleFaq(this)">
                    <span>Does professional teeth whitening cause tooth sensitivity?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        We use advanced whitening formulas specifically designed to minimize tooth and gum sensitivity. Any mild sensitivity experienced during treatment is temporary and fades within 24–48 hours.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
                <button class="faq-header-btn" onclick="toggleFaq(this)">
                    <span>What is the difference between porcelain veneers and composite bonding?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        Veneers are custom ceramic pieces fabricated in a specialized lab and permanently bonded over the front of teeth, lasting 10–15 years. Composite bonding is directly applied and shaped by the dentist in a single visit, offering a faster and more cost-effective but slightly less durable solution.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
                <button class="faq-header-btn" onclick="toggleFaq(this)">
                    <span>What is a complete Smile Makeover?</span>
                    <i class="fa-solid fa-chevron-down faq-icon-arrow"></i>
                </button>
                <div class="faq-content">
                    <div class="faq-content-inner">
                        A smile makeover combines multiple cosmetic treatments—such as whitening, aligners, veneers, or bonding—into a single, custom treatment plan designed to completely rejuvenate your smile's aesthetic appearance.
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
            <a href="replace-my-teeth.php" class="related-link-card">
                <span>Replace My Teeth</span>
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
            <h3>Start Your Cosmetic Journey</h3>
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
