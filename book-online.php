<?php
// book-online.php
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
    <title>Icon Dental- Wembley | Book Online</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    
    <link rel="stylesheet" href="/dental/icon-dental/assets/css/style.css?v=6">
</head>
<body>

    <!-- Navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/navbar.php'; ?>

    <section class="book-hero">
        <div class="container custom-container">
            
            <div class="breadcrumb-nav">
                <a href="index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>Book Online</span>
            </div>

            <div class="book-grid">
                <!-- LEFT COLUMN -->
                <div class="book-left">
                    <span class="gold-pill">BOOK ONLINE</span>
                    
                    <h1 class="book-title">Book Your Appointment<br>With Ease</h1>
                    
                    <div class="gold-line"></div>
                    
                    <p class="book-desc">We're here to help you achieve a healthy, confident smile.<br>Fill in the form and our team will get back to you<br>to confirm your appointment.</p>
                    
                    <div class="feature-row">
                        <div class="feature-item">
                            <div class="feature-icon-wrapper">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <div>
                                <h3 class="feature-item-title">Easy Scheduling</h3>
                                <p class="feature-item-text">Choose a date and time that<br>works best for you.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrapper">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h3 class="feature-item-title">Quick Confirmation</h3>
                                <p class="feature-item-text">We'll confirm your appointment<br>as soon as possible.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrapper">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <h3 class="feature-item-title">Patient Care</h3>
                                <p class="feature-item-text">Your comfort and care<br>are our top priority.</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <i class="fa-solid fa-phone-volume" style="transform: rotate(-30deg);"></i>
                        </div>
                        <div class="contact-card-text">
                            <span>Need Help?</span>
                            Call us on <a href="tel:02089983030">020 8998 3030</a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN (FORM) -->
                <div class="book-right">
                    <div class="form-card">
                        <div class="form-header">
                            <i class="fa-regular fa-calendar form-header-icon"></i>
                            <h2 class="form-heading">Appointment Details</h2>
                        </div>

                        <form action="#" method="POST">
                            <!-- Row 1 -->
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Full Name <span>*</span></label>
                                        <input type="text" class="form-control-custom" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Email Address <span>*</span></label>
                                        <input type="email" class="form-control-custom" placeholder="Enter your email" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number <span>*</span></label>
                                        <input type="tel" class="form-control-custom" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Preferred Date <span>*</span></label>
                                        <input type="text" class="form-control-custom" placeholder="Select a date" onfocus="(this.type='date'); try { this.showPicker(); } catch(e) {}" onclick="if(this.type==='date') try { this.showPicker(); } catch(e) {}" onblur="if(!this.value) this.type='text'" required>
                                        <i class="fa-regular fa-calendar input-icon"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Preferred Time <span>*</span></label>
                                        <select class="form-control-custom" required>
                                            <option value="" disabled selected>Select a time</option>
                                            <option value="morning">Morning (9am - 12pm)</option>
                                            <option value="afternoon">Afternoon (12pm - 4pm)</option>
                                            <option value="evening">Evening (4pm - 6pm)</option>
                                        </select>
                                        <i class="fa-regular fa-clock input-icon"></i>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Reason for Visit <span>*</span></label>
                                        <select class="form-control-custom" required>
                                            <option value="" disabled selected>Select a reason</option>
                                            <option value="checkup">General Checkup</option>
                                            <option value="cleaning">Hygiene / Cleaning</option>
                                            <option value="whitening">Tooth Whitening</option>
                                            <option value="consultation">Consultation</option>
                                            <option value="emergency">Emergency</option>
                                        </select>
                                        <i class="fa-solid fa-chevron-down input-icon" style="font-size: 12px;"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="form-group" style="margin-bottom: 24px;">
                                <label class="form-label">Additional Notes (Optional)</label>
                                <textarea class="form-control-custom" placeholder="Tell us anything we should know"></textarea>
                            </div>

                            <button type="submit" class="btn-submit">
                                <i class="fa-regular fa-calendar"></i>
                                Book Appointment
                                <i class="fa-solid fa-arrow-right ms-1"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/footer.php'; ?>
</body>
</html>
