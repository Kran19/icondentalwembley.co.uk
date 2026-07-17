<?php
// includes/footer.php

if (!isset($base_url)) {
    $doc_root = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
    $proj_root = str_replace('\\', '/', dirname(__DIR__));
    if (strncasecmp($proj_root, $doc_root, strlen($doc_root)) === 0) {
        $base_url = substr($proj_root, strlen($doc_root));
    } else {
        $base_url = '';
    }
    $base_url = '/' . ltrim($base_url, '/');
    if ($base_url === '/') {
        $base_url = '';
    }
}

date_default_timezone_set('Europe/London');
$currentDay = date('N'); // 1 (Mon) to 7 (Sun)
$currentHour = (int)date('G');
$isOpen = false;

if ($currentDay >= 1 && $currentDay <= 3) {
    if ($currentHour >= 9 && $currentHour < 17) $isOpen = true;
} elseif ($currentDay == 5) {
    if ($currentHour >= 9 && $currentHour < 15) $isOpen = true;
}
?>


<footer class="editorial-footer">
    <div class="footer-bg-text">ICON DENTAL</div>
    
    <div class="footer-container">
        
        <!-- Horizontal Top Bar -->
        <div class="footer-top-bar">
            <a href="<?php echo $base_url; ?>/index.php" class="footer-brand-logo">
                <img src="<?php echo $base_url; ?>/assets/images/logo-light.png" alt="Icon Dental" class="logo-light" style="height: 140px;">
                <img src="<?php echo $base_url; ?>/assets/images/logo-dark.png" alt="Icon Dental" class="logo-dark" style="height: 140px;">
            </a>
            
            <div class="footer-contact-row">
                <a href="tel:<?php echo str_replace(' ', '', $clinic_phone); ?>" class="footer-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>Tel: <?php echo $clinic_phone; ?></span>
                </a>
                <span class="footer-contact-item" style="cursor: default;">
                    <i class="fa-solid fa-fax"></i>
                    <span>Fax: <?php echo $clinic_fax; ?></span>
                </span>
                <a href="mailto:<?php echo $clinic_email; ?>" class="footer-contact-item">
                    <i class="fa-regular fa-envelope"></i>
                    <span><?php echo $clinic_email; ?></span>
                </a>
                <a href="<?php echo $clinic_map_link; ?>" target="_blank" rel="noopener noreferrer" class="footer-contact-item" style="text-decoration: none;">
                    <i class="fa-solid fa-location-dot"></i>
                    <span><?php echo $clinic_address; ?></span>
                </a>
            </div>
        </div>

        <!-- Asymmetrical Content Grid -->
        <div class="footer-asymmetric-grid">
            
            <div class="footer-manifesto">
                <h3>Elevating the standard of modern dentistry.</h3>
                <p>We combine advanced technology with a premium patient experience. From routine care to complex cosmetic makeovers, we design smiles that exude health and confidence.</p>
                <a href="<?php echo $clinic_google_reviews_url; ?>" target="_blank" rel="noopener noreferrer" class="footer-review-card">
                    <div class="frc-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="frc-content">
                        <span class="frc-label">LEAVE US A REVIEW</span>
                        <span class="frc-sub">We'd love to hear about your experience at Icon Dental Wembley.</span>
                    </div>
                </a>
            </div>

            <div>
                <h4 class="footer-title">Navigation</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_url; ?>/index.php" class="footer-link-item">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>/about.php" class="footer-link-item">About Us</a></li>
                    <li><a href="<?php echo $base_url; ?>/fees-membership.php" class="footer-link-item">Fees & Membership</a></li>
                    <li><a href="<?php echo $base_url; ?>/for-dentists.php" class="footer-link-item">For Dentists</a></li>
                    <li><a href="<?php echo $base_url; ?>/contact-us.php" class="footer-link-item">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">Expertise</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_url; ?>/treatments.php#general" class="footer-link-item">General Dentistry</a></li>
                    <li><a href="<?php echo $base_url; ?>/treatments.php#cosmetic" class="footer-link-item">Cosmetic Dentistry</a></li>
                    <li><a href="<?php echo $base_url; ?>/treatments/bone-grafting.php" class="footer-link-item">Bone Grafting</a></li>
                    <li><a href="<?php echo $base_url; ?>/treatments.php#implants" class="footer-link-item">Dental Implants</a></li>
                    <li><a href="<?php echo $base_url; ?>/treatments.php#emergency" class="footer-link-item">Emergency Care</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">
                    Visiting Hours
                    <?php if ($isOpen): ?>
                        <span class="status-badge status-open"><i class="fa-solid fa-circle" style="font-size:8px;"></i> Open</span>
                    <?php else: ?>
                        <span class="status-badge status-closed"><i class="fa-solid fa-moon" style="font-size:10px;"></i> Closed</span>
                    <?php endif; ?>
                </h4>
                <ul class="footer-hours">
                    <?php foreach ($clinic_hours as $days => $hours): ?>
                        <li><span><?php echo $days; ?></span> <span><?php echo $hours; ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="footer-left-col">
                <!-- Testimonial/Review Widget -->
                <div class="footer-reviews-widget" id="footerReviewsWidget">
                    <div class="review-stars">★★★★★</div>
                    <div class="review-carousel-container">
                        <div class="review-slides-wrapper" id="reviewSlidesWrapper">
                            <div class="review-slide active">
                                <p class="review-text">"Wonderful experience! The staff is so gentle and professional."</p>
                                <span class="review-author">- Sarah M.</span>
                            </div>
                            <div class="review-slide">
                                <p class="review-text">"Best dental clinic in Wembley. Highly recommend Invisalign here."</p>
                                <span class="review-author">- James T.</span>
                            </div>
                            <div class="review-slide">
                                <p class="review-text">"Very modern facilities and extremely caring doctors."</p>
                                <span class="review-author">- Priya K.</span>
                            </div>
                            <div class="review-slide">
                                <p class="review-text">"Excellent patient care. Made me feel comfortable from start to finish."</p>
                                <span class="review-author">- David L.</span>
                            </div>
                            <div class="review-slide">
                                <p class="review-text">"Professional hygiene treatment. My teeth feel and look amazing!"</p>
                                <span class="review-author">- Emma W.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-socials">
                    <a href="#" class="footer-social-link instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="footer-social-link facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="footer-social-link linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-copyright">
                &copy; <?= date('Y') ?> ICON DENTAL WEMBLEY. ALL RIGHTS RESERVED.
            </div>
        </div>

    </div>
</footer>

<!-- Testimonial Slider Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.getElementById('reviewSlidesWrapper');
    if (!wrapper) return;
    
    const slides = wrapper.querySelectorAll('.review-slide');
    if (slides.length <= 1) return;
    
    let currentSlide = 0;
    let intervalId = null;
    
    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function startTimer() {
        if (!intervalId) {
            intervalId = setInterval(nextSlide, 2000);
        }
    }
    
    function stopTimer() {
        if (intervalId) {
            clearInterval(intervalId);
            intervalId = null;
        }
    }
    
    const widget = document.getElementById('footerReviewsWidget');
    if (widget) {
        widget.addEventListener('mouseenter', stopTimer);
        widget.addEventListener('mouseleave', startTimer);
    }
    
    startTimer();
});
</script>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
