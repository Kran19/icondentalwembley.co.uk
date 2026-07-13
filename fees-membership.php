<?php
// fees-membership.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Guide - Icon Dental Wembley</title>
    
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
    <section class="hero-section">
        <div class="container custom-container">
            <div class="breadcrumb-wrap mb-4">
                <a href="index.php">Home</a> &gt; <span>Fee Guide</span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="hero-label">PRIVATE TREATMENT FEE GUIDE</span>
                    <h2 class="hero-title">Quality Dental Care.<br>Simple, Transparent &<br>Great Value.</h2>
                    <p class="hero-desc">Our fee guide provides simple, transparent pricing for all our private and NHS treatments.</p>
                    
                    <div class="hero-features">
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-shield"></i></div>
                            <div>
                                <div class="hf-title">Transparent Pricing</div>
                                <p class="hf-desc">No hidden costs, ever.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                            <div>
                                <div class="hf-title">Great Value</div>
                                <p class="hf-desc">Premium care at accessible prices.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-briefcase-medical"></i></div>
                            <div>
                                <div class="hf-title">NHS & Private Options</div>
                                <p class="hf-desc">Flexible care to suit your needs.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-star"></i></div>
                            <div>
                                <div class="hf-title">High Quality Materials</div>
                                <p class="hf-desc">We use the best for your smile.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Luxury Dental Reception" class="hero-image">
                        
                        <div class="floating-card">
                            <div class="fc-icon"><i class="fa-solid fa-users"></i></div>
                            <p class="fc-text">Join 1000+<br>happy members<br><span style="font-size:13px; font-weight:400; color:var(--text-gray);">across Wembley</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Plans Section -->
    <!-- Fees Table Section -->
    <section class="fees-section" style="padding: 90px 0; padding-bottom: 120px;">
        <div class="container custom-container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Treatment Fee Guide</h2>
                    <div class="section-desc" style="max-width: 800px; margin: 0 auto; background: rgba(177, 152, 111, 0.1); padding: 24px; border-radius: 12px; border-left: 4px solid var(--primary-blue); text-align: left;">
                        <div style="display: flex; gap: 16px; align-items: flex-start;">
                            <i class="fa-solid fa-circle-exclamation" style="color: var(--primary-blue); font-size: 24px; margin-top: 4px;"></i>
                            <div>
                                <h4 style="margin: 0 0 8px 0; font-size: 18px; font-family: var(--body-font); font-weight: 600; color: var(--dark-navy);" class="alert-title">Important Appointment Information</h4>
                                <p style="margin: 0; font-size: 15px; line-height: 1.6;">In order to book an appointment, a deposit of <strong>£100</strong> is required for all Private Dental Treatments.<br>Failure to cancel your Dental Hygiene appointment may result in a cancellation fee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table custom-fee-table">
                    <thead>
                        <tr>
                            <th><i class="fa-solid fa-tooth"></i> Treatment Item</th>
                            <th class="text-center"><i class="fa-solid fa-briefcase-medical"></i> NHS</th>
                            <th class="text-center"><i class="fa-solid fa-star"></i> Private</th>
                            <th class="text-center"><i class="fa-solid fa-shield-heart"></i> Denplan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>New Patient Consultation</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £45.00</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                        <tr><td>Routine Examination</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £40.00</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                        <tr><td>Xrays</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £15 each</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                        <tr><td>Fillings</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £140**</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                        <tr><td>Veneers</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £900**</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                        <tr><td>Root Canal Therapy</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £350**</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-xmark"></i> Not Included</span></td></tr>
                        <tr><td>Crowns and Bridges</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £600**</td><td class="text-center"><span class="badge-lab">Lab fee only</span></td></tr>
                        <tr><td>Inlays</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £700**</td><td class="text-center"><span class="badge-lab">Lab fee only</span></td></tr>
                        <tr><td>Extraction appointment</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £250**</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                        <tr><td>Gumshields</td><td class="text-center"><span class="text-muted">N/A</span></td><td class="text-center">£120</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                        <tr><td>Dentures – per arch</td><td class="text-center"><span class="badge-nhs">NHS Fees Apply</span></td><td class="text-center">from £800</td><td class="text-center"><span class="badge-lab">Lab fee only</span></td></tr>
                        <tr><td>Implant</td><td class="text-center"><span class="text-muted">N/A</span></td><td class="text-center">from £2000**</td><td class="text-center"><span class="badge-lab">fees on assessment only</span></td></tr>
                        <tr><td>Hygienist Consultation</td><td class="text-center"><span class="text-muted">N/A</span></td><td class="text-center">£70</td><td class="text-center"><span class="badge-inc"><i class="fa-solid fa-check"></i> Included</span></td></tr>
                    </tbody>
                </table>
                <p class="text-muted text-center mt-3" style="font-size: 13px;">** Starting prices. Final cost may vary based on individual assessment.</p>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/dental/icon-dental/includes/footer.php'; ?>
</body>
</html>



