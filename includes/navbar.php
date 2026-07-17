<?php
// includes/navbar.php
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
if (!isset($current_page)) {
    $current_page = basename($_SERVER['PHP_SELF']);
    if (empty($current_page) || $current_page == '') {
        $current_page = 'index.php';
    }
}
?>


<!-- Initial Theme Script to Prevent FOUC -->
<script>
(function() {
    const savedTheme = localStorage.getItem('iconDentalTheme') || 'light';
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-theme');
        document.body.classList.remove('light-theme');
    } else {
        document.body.classList.add('light-theme');
        document.body.classList.remove('dark-theme');
    }
})();
</script>

<!-- Top Information Banner -->
<div class="top-info-banner">
    <div class="top-info-container">
        <div class="top-info-left">
            <a href="<?php echo $clinic_map_link; ?>" target="_blank" rel="noopener noreferrer">
                <i class="fa-solid fa-location-dot"></i>
                <span class="d-none d-md-inline"><?php echo $clinic_address; ?></span>
                <span class="d-inline d-md-none"><?php echo $clinic_address_short; ?></span>
            </a>
        </div>
        <div class="top-info-center">
            <span>Welcoming New Patients</span>
        </div>
        <div class="top-info-right">
            <a href="tel:<?php echo str_replace(' ', '', $clinic_phone); ?>">
                <i class="fa-solid fa-phone"></i>
                <span><?php echo $clinic_phone; ?></span>
            </a>
        </div>
    </div>
</div>

<!-- Desktop Navigation -->
<nav class="premium-glass-nav d-none d-xl-flex">
    <!-- Logo -->
    <a href="<?php echo $base_url; ?>/index.php" class="pgn-logo-section">
        <img src="<?php echo $base_url; ?>/assets/images/logo-light.png?v=2" alt="Icon Dental" class="logo-light" style="height: 102px; padding-top: 10px; padding-bottom:10px; padding-left: 73px;">
        <img src="<?php echo $base_url; ?>/assets/images/logo-dark.png?v=2" alt="Icon Dental" class="logo-dark" style="height: 102px; padding-top: 10px; padding-bottom:10px; padding-left: 73px;">
    </a>
    
    <div class="pgn-divider"></div>

    <!-- Menu -->
    <div class="pgn-menu-section">
        <!-- Home -->
        <a href="<?php echo $base_url; ?>/index.php" class="pgn-menu-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <i class="fa-solid fa-house pgn-menu-icon"></i>
            <span class="pgn-menu-text">Home</span>
        </a>
        
        <!-- About Dropdown -->
        <div class="pgn-dropdown">
            <a href="<?php echo $base_url; ?>/about.php" class="pgn-menu-item <?= (strpos($current_page, 'about') !== false || strpos($current_page, 'smile-stories') !== false || strpos($current_page, 'meet-the-team') !== false || strpos($current_page, 'why-choose-us') !== false) ? 'active' : '' ?>">
                <i class="fa-solid fa-user-group pgn-menu-icon"></i>
                <span class="pgn-menu-text">About Us <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="<?php echo $base_url; ?>/about.php" class="pgn-dropdown-item">About Us</a>
                <!-- <a href="<?php echo $base_url; ?>/about/why-choose-us.php" class="pgn-dropdown-item">Why Choose Us</a> -->
                <a href="<?php echo $base_url; ?>/about/meet-the-team.php" class="pgn-dropdown-item">Meet The Team</a>
                <a href="<?php echo $base_url; ?>/about/smile-stories.php" class="pgn-dropdown-item">Smile Stories</a>
            </div>
        </div>
        
        <!-- Treatments Mega Menu -->
        <div class="pgn-dropdown mega-dropdown">
            <a href="<?php echo $base_url; ?>/treatments.php" class="pgn-menu-item <?= ($current_page == 'treatments.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-tooth pgn-menu-icon"></i>
                <span class="pgn-menu-text">Treatments <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="mega-menu">
                <!-- Column 1: Check My Teeth -->
                <div class="mega-column">
                    <a href="<?php echo $base_url; ?>/treatments/check-my-teeth.php" class="mega-column-header">
                        <div class="mega-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                        <h4 class="mega-column-title">Check My Teeth</h4>
                    </a>
                    <p class="mega-column-desc">Routine examinations, advanced diagnostics, and preventive treatments for healthy teeth.</p>
                    <ul class="mega-links-list">
                        <li><a href="<?php echo $base_url; ?>/treatments/check-my-teeth.php#checkup">Dental Check-up</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/check-my-teeth.php#hygiene">Hygiene & Cleanings</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/check-my-teeth.php#gum-health">Gum Health Care</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/check-my-teeth.php#emergency">Emergency Dentistry</a></li>
                    </ul>
                </div>

                <!-- Column 2: Repair My Teeth -->
                <div class="mega-column">
                    <a href="<?php echo $base_url; ?>/treatments/repair-my-teeth.php" class="mega-column-header">
                        <div class="mega-icon"><i class="fa-solid fa-kit-medical"></i></div>
                        <h4 class="mega-column-title">Repair My Teeth</h4>
                    </a>
                    <p class="mega-column-desc">Restorative dentistry to fix damage, treat decay, and rebuild structural tooth integrity.</p>
                    <ul class="mega-links-list">
                        <li><a href="<?php echo $base_url; ?>/treatments/repair-my-teeth.php#fillings">Tooth Fillings</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/repair-my-teeth.php#root-canal">Root Canal Treatment</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/repair-my-teeth.php#crowns">Dental Crowns</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/repair-my-teeth.php#bridges">Dental Bridges</a></li>
                    </ul>
                </div>

                <!-- Column 3: Replace My Teeth -->
                <div class="mega-column">
                    <a href="<?php echo $base_url; ?>/treatments/replace-my-teeth.php" class="mega-column-header">
                        <div class="mega-icon"><i class="fa-solid fa-arrows-rotate"></i></div>
                        <h4 class="mega-column-title">Replace My Teeth</h4>
                    </a>
                    <p class="mega-column-desc">State-of-the-art replacement options to restore confidence, speech, and biting function.</p>
                    <ul class="mega-links-list">
                        <li><a href="<?php echo $base_url; ?>/treatments/replace-my-teeth.php#implants">Dental Implants</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/replace-my-teeth.php#dentures">Complete Dentures</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/replace-my-teeth.php#full-reconstruction">Full Smile Restoration</a></li>
                    </ul>
                </div>

                <!-- Column 4: Enhance My Teeth -->
                <div class="mega-column">
                    <a href="<?php echo $base_url; ?>/treatments/enhance-my-teeth.php" class="mega-column-header">
                        <div class="mega-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <h4 class="mega-column-title">Enhance My Teeth</h4>
                    </a>
                    <p class="mega-column-desc">Bespoke cosmetic treatments designed to elevate your aesthetic appearance.</p>
                    <ul class="mega-links-list">
                        <li><a href="<?php echo $base_url; ?>/treatments/enhance-my-teeth.php#invisalign">Invisalign® Aligners</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/enhance-my-teeth.php#whitening">Teeth Whitening</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/enhance-my-teeth.php#veneers">Porcelain Veneers</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/enhance-my-teeth.php#bonding">Composite Bonding</a></li>
                    </ul>
                </div>

                <!-- Column 5: Facial Aesthetics -->
                <div class="mega-column">
                    <a href="<?php echo $base_url; ?>/treatments/facial-aesthetics.php" class="mega-column-header">
                        <div class="mega-icon"><i class="fa-regular fa-face-smile"></i></div>
                        <h4 class="mega-column-title">Facial Aesthetics</h4>
                    </a>
                    <p class="mega-column-desc">Non-surgical cosmetic procedures to enhance skin tone and refresh natural youthfulness.</p>
                    <ul class="mega-links-list">
                        <li><a href="<?php echo $base_url; ?>/treatments/facial-aesthetics.php#wrinkles">Anti-Wrinkle Care</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/facial-aesthetics.php#fillers">Dermal Fillers</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/facial-aesthetics.php#lips">Lip Enhancement</a></li>
                        <li><a href="<?php echo $base_url; ?>/treatments/facial-aesthetics.php#rejuvenation">Skin Rejuvenation</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Fees & Membership -->
        <a href="<?php echo $base_url; ?>/fees-membership.php" class="pgn-menu-item <?= ($current_page == 'fees-membership.php') ? 'active' : '' ?>">
            <i class="fa-regular fa-credit-card pgn-menu-icon"></i>
            <span class="pgn-menu-text">Fees  </span>
        </a>
        
        <!-- For Dentists Dropdown -->
        <div class="pgn-dropdown">
            <a href="<?php echo $base_url; ?>/for-dentists.php" class="pgn-menu-item <?= ($current_page == 'for-dentists.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-user-doctor pgn-menu-icon"></i>
                <span class="pgn-menu-text">For Dentists <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="<?php echo $base_url; ?>/referral-form.php" class="pgn-dropdown-item">Referral Form</a>
                <a href="<?php echo $base_url; ?>/for-dentists.php" class="pgn-dropdown-item">Refer a Patient</a>
            </div>
        </div>

        <!-- Contact Us -->
        <a href="<?php echo $base_url; ?>/contact-us.php" class="pgn-menu-item <?= ($current_page == 'contact-us.php') ? 'active' : '' ?>">
            <i class="fa-regular fa-envelope pgn-menu-icon"></i>
            <span class="pgn-menu-text">Contact Us</span>
        </a>
    </div>


    <div class="pgn-divider"></div>
    
    <div class="d-flex align-items-center">
        <!-- Theme Toggle -->
        <button id="desktopThemeToggle" class="pgn-theme-btn">
            <i class="fa-solid fa-moon"></i>
        </button>

        <!-- CTA Button -->
        <a href="<?php echo $base_url; ?>/book-online.php" class="pgn-btn-book">
            <i class="fa-regular fa-calendar" style="font-size:24px;"></i> 
            Book Online 
            <i class="fa-solid fa-arrow-right" style="font-size:20px;"></i>
        </a>
    </div>
</nav>

<!-- Mobile Navigation & Menu Wrapper -->
<div class="mobile-nav-wrapper d-xl-none">
    <!-- Mobile Navigation -->
    <nav class="premium-glass-nav-mobile">
        <!-- Left: Hamburger -->
        <button class="pgn-mobile-toggle" id="pgnMobileToggle" aria-label="Open menu" style="margin-right: auto;">
            <i class="fa-solid fa-bars"></i>
        </button>
        
        <!-- Center: Logo -->
        <a href="<?php echo $base_url; ?>/index.php" class="pgn-logo-section-mobile" style="position: absolute; left: 50%; transform: translateX(-50%); margin: 0; padding: 0;">
            <img src="<?php echo $base_url; ?>/assets/images/logo-light.png?v=2" alt="Icon Dental" class="logo-light" style="height: 65px;">
            <img src="<?php echo $base_url; ?>/assets/images/logo-dark.png?v=2" alt="Icon Dental" class="logo-dark" style="height: 65px;">
        </a>
        
        <!-- Right: Theme Toggle & Login Button -->
        <div class="pgn-mobile-controls" style="margin-left: auto;">
            <!-- Theme Toggle -->
            <button id="mobileThemeToggle" class="pgn-mobile-theme-btn">
                <i class="fa-solid fa-moon"></i>
            </button>

            <!-- Static Login Icon -->
            <a href="#" class="pgn-mobile-theme-btn" aria-label="Login" style="text-decoration: none;">
                <i class="fa-regular fa-user"></i>
            </a>
        </div>
    </nav>

    <!-- Mobile Slide-Down Menu -->
    <div class="pgn-mobile-menu" id="pgnMobileMenu">
        <a href="<?php echo $base_url; ?>/index.php" class="pgn-mobile-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <i class="fa-solid fa-house"></i> Home
        </a>
        
        <div class="pgn-mobile-group">
            <div class="pgn-mobile-item-container">
                <a href="<?php echo $base_url; ?>/about.php" class="pgn-mobile-item <?= (strpos($current_page, 'about') !== false) ? 'active' : '' ?>">
                    <i class="fa-solid fa-user-group"></i> About
                </a>
                <button class="pgn-submenu-toggle"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="pgn-mobile-submenu">
                <a href="<?php echo $base_url; ?>/about/why-choose-us.php" class="pgn-mobile-subitem"></a>
                <a href="<?php echo $base_url; ?>/about/meet-the-team.php" class="pgn-mobile-subitem">Meet The Team</a>
                <a href="<?php echo $base_url; ?>/about/smile-stories.php" class="pgn-mobile-subitem">Smile Stories</a>
            </div>
        </div>
        
        <div class="pgn-mobile-group">
            <div class="pgn-mobile-item-container">
                <a href="<?php echo $base_url; ?>/treatments.php" class="pgn-mobile-item <?= ($current_page == 'treatments.php') ? 'active' : '' ?>">
                    <i class="fa-solid fa-tooth"></i> Treatments
                </a>
                <button class="pgn-submenu-toggle"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="pgn-mobile-submenu">
                <a href="<?php echo $base_url; ?>/treatments/check-my-teeth.php" class="pgn-mobile-subitem">Check My Teeth</a>
                <a href="<?php echo $base_url; ?>/treatments/repair-my-teeth.php" class="pgn-mobile-subitem">Repair My Teeth</a>
                <a href="<?php echo $base_url; ?>/treatments/replace-my-teeth.php" class="pgn-mobile-subitem">Replace My Teeth</a>
                <a href="<?php echo $base_url; ?>/treatments/enhance-my-teeth.php" class="pgn-mobile-subitem">Enhance My Teeth</a>
                <a href="<?php echo $base_url; ?>/treatments/facial-aesthetics.php" class="pgn-mobile-subitem">Facial Aesthetics</a>
            </div>
        </div>
        
        <a href="<?php echo $base_url; ?>/fees-membership.php" class="pgn-mobile-item <?= ($current_page == 'fees-membership.php') ? 'active' : '' ?>">
            <i class="fa-regular fa-credit-card"></i> Fees &amp; Membership
        </a>
        
        <div class="pgn-mobile-group">
            <div class="pgn-mobile-item-container">
                <a href="<?php echo $base_url; ?>/for-dentists.php" class="pgn-mobile-item <?= ($current_page == 'for-dentists.php') ? 'active' : '' ?>">
                    <i class="fa-solid fa-user-doctor"></i> For Dentists
                </a>
                <button class="pgn-submenu-toggle"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="pgn-mobile-submenu">
                <a href="<?php echo $base_url; ?>/referral-form.php" class="pgn-mobile-subitem">Refer a Patient</a>
                <a href="<?php echo $base_url; ?>/for-dentists.php#careers" class="pgn-mobile-subitem">Education &amp; Careers</a>
            </div>
        </div>

        <a href="<?php echo $base_url; ?>/contact-us.php" class="pgn-mobile-item <?= ($current_page == 'contact-us.php') ? 'active' : '' ?>">
            <i class="fa-regular fa-envelope"></i> Contact Us
        </a>

        <div class="pgn-mobile-divider"></div>

        <!-- Login & Signup buttons inside hamburger menu -->
        <a href="#" class="pgn-mobile-book-btn">
            <i class="fa-regular fa-user"></i>
            Login
        </a>

        <a href="#" class="pgn-mobile-book-btn">
            <i class="fa-solid fa-user-plus"></i>
            Sign Up
        </a>

        <!-- Book Online button inside hamburger menu -->
        <a href="<?php echo $base_url; ?>/book-online.php" class="pgn-mobile-book-btn">
            <i class="fa-regular fa-calendar"></i>
            Book Online
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Theme Toggle Logic
    const desktopToggle = document.getElementById('desktopThemeToggle');
    const mobileThemeToggle = document.getElementById('mobileThemeToggle');
    const body = document.body;

    function updateThemeIcons() {
        const isDark = body.classList.contains('dark-theme');
        
        [desktopToggle, mobileThemeToggle].forEach(function(btn) {
            if (!btn) return;
            const i = btn.querySelector('i');
            if (isDark) {
                i.classList.remove('fa-moon');
                i.classList.add('fa-sun');
            } else {
                i.classList.remove('fa-sun');
                i.classList.add('fa-moon');
            }
        });
    }

    function toggleTheme() {
        if (body.classList.contains('dark-theme')) {
            body.classList.remove('dark-theme');
            body.classList.add('light-theme');
            localStorage.setItem('iconDentalTheme', 'light');
        } else {
            body.classList.add('dark-theme');
            body.classList.remove('light-theme');
            localStorage.setItem('iconDentalTheme', 'dark');
        }
        updateThemeIcons();
    }

    if (desktopToggle) desktopToggle.addEventListener('click', toggleTheme);
    if (mobileThemeToggle) mobileThemeToggle.addEventListener('click', toggleTheme);

    // Initial Icon State
    updateThemeIcons();

    // Mobile Menu Toggle
    const mobileNavToggle = document.getElementById('pgnMobileToggle');
    const mobileMenu = document.getElementById('pgnMobileMenu');
    
    if (mobileNavToggle && mobileMenu) {
        mobileNavToggle.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.contains('open');
            if (isOpen) {
                mobileMenu.classList.remove('open');
                mobileNavToggle.classList.remove('open');
                mobileNavToggle.querySelector('i').classList.replace('fa-xmark', 'fa-bars');
            } else {
                mobileMenu.classList.add('open');
                mobileNavToggle.classList.add('open');
                mobileNavToggle.querySelector('i').classList.replace('fa-bars', 'fa-xmark');
            }
        });

        // Toggle Submenus
        const submenuToggles = document.querySelectorAll('.pgn-submenu-toggle');
        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const submenu = this.closest('.pgn-mobile-group').querySelector('.pgn-mobile-submenu');
                
                if (this.classList.contains('expanded')) {
                    this.classList.remove('expanded');
                    submenu.classList.remove('open');
                    submenu.style.maxHeight = '0px';
                } else {
                    this.classList.add('expanded');
                    submenu.classList.add('open');
                    submenu.style.maxHeight = submenu.scrollHeight + "px";
                }
            });
        });

        // Close menu when clicking a normal link (not a toggle)
        mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('open');
                mobileNavToggle.classList.remove('open');
                mobileNavToggle.querySelector('i').classList.replace('fa-xmark', 'fa-bars');
            });
        });
    }
});
</script>



