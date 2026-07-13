<?php
// includes/navbar.php
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

<!-- Desktop Navigation -->
<nav class="premium-glass-nav d-none d-xl-flex">
    <!-- Logo -->
    <a href="/dental/icon-dental/index.php" class="pgn-logo-section">
        <img src="/dental/icon-dental/assets/images/logo-light.png?v=2" alt="Icon Dental" class="logo-light" style="height: 102px; padding-top: 10px; padding-bottom:10px; padding-left: 73px;">
        <img src="/dental/icon-dental/assets/images/logo-dark.png?v=2" alt="Icon Dental" class="logo-dark" style="height: 102px; padding-top: 10px; padding-bottom:10px; padding-left: 73px;">
    </a>
    
    <div class="pgn-divider"></div>

    <!-- Menu -->
    <div class="pgn-menu-section">
        <!-- Home -->
        <a href="/dental/icon-dental/index.php" class="pgn-menu-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <i class="fa-solid fa-house pgn-menu-icon"></i>
            <span class="pgn-menu-text">Home</span>
        </a>
        
        <!-- About Dropdown -->
        <div class="pgn-dropdown">
            <a href="/dental/icon-dental/about.php" class="pgn-menu-item <?= (strpos($current_page, 'about') !== false || strpos($current_page, 'smile-stories') !== false || strpos($current_page, 'meet-the-team') !== false || strpos($current_page, 'why-choose-us') !== false) ? 'active' : '' ?>">
                <i class="fa-solid fa-user-group pgn-menu-icon"></i>
                <span class="pgn-menu-text">About <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="/dental/icon-dental/about.php" class="pgn-dropdown-item">About Us</a>
                <a href="/dental/icon-dental/about/why-choose-us.php" class="pgn-dropdown-item">Why Choose Us</a>
                <a href="/dental/icon-dental/about/meet-the-team.php" class="pgn-dropdown-item">Meet The Team</a>
                <a href="/dental/icon-dental/about/smile-stories.php" class="pgn-dropdown-item">Smile Stories</a>
            </div>
        </div>
        
        <!-- Treatments Dropdown -->
        <div class="pgn-dropdown">
            <a href="/dental/icon-dental/treatments.php" class="pgn-menu-item <?= ($current_page == 'treatments.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-tooth pgn-menu-icon"></i>
                <span class="pgn-menu-text">Treatments <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="/dental/icon-dental/treatments.php" class="pgn-dropdown-item">View All Treatments</a>
                <a href="/dental/icon-dental/treatments/general-dentistry.php" class="pgn-dropdown-item">General Dentistry</a>
                <a href="/dental/icon-dental/treatments/cosmetic-dentistry.php" class="pgn-dropdown-item">Cosmetic Dentistry</a>
                <a href="/dental/icon-dental/treatments/bone-grafting.php" class="pgn-dropdown-item">Bone Grafting</a>
                <a href="/dental/icon-dental/treatments.php#implants" class="pgn-dropdown-item">Dental Implants</a>
            </div>
        </div>
        
        <!-- Fees & Membership -->
        <a href="/dental/icon-dental/fees-membership.php" class="pgn-menu-item <?= ($current_page == 'fees-membership.php') ? 'active' : '' ?>">
            <i class="fa-regular fa-credit-card pgn-menu-icon"></i>
            <span class="pgn-menu-text">Fees &amp; Membership</span>
        </a>
        
        <!-- For Dentists Dropdown -->
        <div class="pgn-dropdown">
            <a href="/dental/icon-dental/for-dentists.php" class="pgn-menu-item <?= ($current_page == 'for-dentists.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-user-doctor pgn-menu-icon"></i>
                <span class="pgn-menu-text">For Dentists <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="/dental/icon-dental/for-dentists.php" class="pgn-dropdown-item">Refer a Patient</a>
                <a href="/dental/icon-dental/for-dentists.php#careers" class="pgn-dropdown-item">Education &amp; Careers</a>
            </div>
        </div>
    </div>

    <div class="pgn-divider"></div>
    
    <div class="d-flex align-items-center">
        <!-- Theme Toggle -->
        <button id="desktopThemeToggle" class="pgn-theme-btn">
            <i class="fa-solid fa-moon"></i>
        </button>

        <!-- CTA Button -->
        <a href="/dental/icon-dental/book-online.php" class="pgn-btn-book">
            <i class="fa-regular fa-calendar" style="font-size:24px;"></i> 
            Book Online 
            <i class="fa-solid fa-arrow-right" style="font-size:20px;"></i>
        </a>
    </div>
</nav>

<!-- Mobile Navigation - Logo + Theme Toggle + Hamburger ONLY -->
<nav class="premium-glass-nav-mobile d-xl-none" style="position: sticky; top: 15px; z-index: 9999;">
    <!-- Left: Hamburger -->
    <button class="pgn-mobile-toggle" id="pgnMobileToggle" aria-label="Open menu" style="margin-right: auto;">
        <i class="fa-solid fa-bars"></i>
    </button>
    
    <!-- Center: Logo -->
    <a href="/dental/icon-dental/index.php" class="pgn-logo-section-mobile" style="position: absolute; left: 50%; transform: translateX(-50%); margin: 0; padding: 0;">
        <img src="/dental/icon-dental/assets/images/logo-light.png?v=2" alt="Icon Dental" class="logo-light" style="height: 65px;">
        <img src="/dental/icon-dental/assets/images/logo-dark.png?v=2" alt="Icon Dental" class="logo-dark" style="height: 65px;">
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
    <a href="/dental/icon-dental/index.php" class="pgn-mobile-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
        <i class="fa-solid fa-house"></i> Home
    </a>
    
    <div class="pgn-mobile-group">
        <div class="pgn-mobile-item-container">
            <a href="/dental/icon-dental/about.php" class="pgn-mobile-item <?= (strpos($current_page, 'about') !== false) ? 'active' : '' ?>">
                <i class="fa-solid fa-user-group"></i> About
            </a>
            <button class="pgn-submenu-toggle"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="pgn-mobile-submenu">
            <a href="/dental/icon-dental/about/why-choose-us.php" class="pgn-mobile-subitem">Why Choose Us</a>
            <a href="/dental/icon-dental/about/meet-the-team.php" class="pgn-mobile-subitem">Meet The Team</a>
            <a href="/dental/icon-dental/about/smile-stories.php" class="pgn-mobile-subitem">Smile Stories</a>
        </div>
    </div>
    
    <div class="pgn-mobile-group">
        <div class="pgn-mobile-item-container">
            <a href="/dental/icon-dental/treatments.php" class="pgn-mobile-item <?= ($current_page == 'treatments.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-tooth"></i> Treatments
            </a>
            <button class="pgn-submenu-toggle"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="pgn-mobile-submenu">
            <a href="/dental/icon-dental/treatments/general-dentistry.php" class="pgn-mobile-subitem">General Dentistry</a>
            <a href="/dental/icon-dental/treatments/cosmetic-dentistry.php" class="pgn-mobile-subitem">Cosmetic Dentistry</a>
            <a href="/dental/icon-dental/treatments/bone-grafting.php" class="pgn-mobile-subitem">Bone Grafting</a>
            <a href="/dental/icon-dental/treatments.php#implants" class="pgn-mobile-subitem">Dental Implants</a>
        </div>
    </div>
    
    <a href="/dental/icon-dental/fees-membership.php" class="pgn-mobile-item <?= ($current_page == 'fees-membership.php') ? 'active' : '' ?>">
        <i class="fa-regular fa-credit-card"></i> Fees &amp; Membership
    </a>
    
    <div class="pgn-mobile-group">
        <div class="pgn-mobile-item-container">
            <a href="/dental/icon-dental/for-dentists.php" class="pgn-mobile-item <?= ($current_page == 'for-dentists.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-user-doctor"></i> For Dentists
            </a>
            <button class="pgn-submenu-toggle"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="pgn-mobile-submenu">
            <a href="/dental/icon-dental/for-dentists.php#careers" class="pgn-mobile-subitem">Education &amp; Careers</a>
        </div>
    </div>

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
    <a href="/dental/icon-dental/book-online.php" class="pgn-mobile-book-btn">
        <i class="fa-regular fa-calendar"></i>
        Book Online
        <i class="fa-solid fa-arrow-right"></i>
    </a>
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



