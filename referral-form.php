<?php
// referral-form.php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: -1");
$page_title = "Referral Form - Icon Dental Wembley";
include __DIR__ . '/includes/header.php';
?>

    <section class="referral-section">
        <div class="container custom-container">
            
            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb-nav">
                <a href="<?php echo $base_url; ?>/index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <a href="<?php echo $base_url; ?>/for-dentists.php">For Dentists</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>Referral Form</span>
            </div>

            <!-- Page Title Section -->
            <div class="referral-header text-center">
                <span class="gold-pill">ONLINE REFERRALS</span>
                <h1 class="referral-title">Dental Referral Form</h1>
                <div class="gold-line mx-auto"></div>
                <p class="referral-subtitle">Complete the referral form below and our reception team will contact you within 48 hours.</p>
            </div>

            <!-- Referral Form Container -->
            <div class="referral-container">
                <form action="#" method="POST" enctype="multipart/form-data">
                    
                    <!-- Section 1: Referring Dentist Details -->
                    <div class="referral-card">
                        <div class="referral-card-header">
                            <i class="fa-solid fa-user-doctor"></i>
                            <h2>1. Referring Dentist Details</h2>
                        </div>
                        <div class="referral-card-body">
                            <div class="form-row">
                                <div class="form-col form-col-title">
                                    <div class="form-group">
                                        <label class="form-label" for="dentistTitle">Title <span>*</span></label>
                                        <select class="form-control-custom" id="dentistTitle" name="dentistTitle" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                        </select>
                                        <i class="fa-solid fa-chevron-down input-icon" style="top: 45px; font-size: 12px;"></i>
                                    </div>
                                </div>
                                <div class="form-col form-col-name">
                                    <div class="form-group">
                                        <label class="form-label" for="dentistFirstName">First Name <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="dentistFirstName" name="dentistFirstName" placeholder="Enter first name" required>
                                    </div>
                                </div>
                                <div class="form-col form-col-name">
                                    <div class="form-group">
                                        <label class="form-label" for="dentistLastName">Last Name <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="dentistLastName" name="dentistLastName" placeholder="Enter last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="dentistEmail">Email Address <span>*</span></label>
                                        <input type="email" class="form-control-custom" id="dentistEmail" name="dentistEmail" placeholder="dentist@example.com" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="dentistPhone">Telephone <span>*</span></label>
                                        <input type="tel" class="form-control-custom" id="dentistPhone" name="dentistPhone" placeholder="Enter phone number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Referring Practice Details -->
                    <div class="referral-card">
                        <div class="referral-card-header">
                            <i class="fa-solid fa-hospital"></i>
                            <h2>2. Referring Practice Details</h2>
                        </div>
                        <div class="referral-card-body">
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="practiceName">Practice Name <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="practiceName" name="practiceName" placeholder="Enter practice name" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="practicePostcode">Postcode <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="practicePostcode" name="practicePostcode" placeholder="Enter postcode" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label" for="practiceAddress">Practice Address <span>*</span></label>
                                <input type="text" class="form-control-custom" id="practiceAddress" name="practiceAddress" placeholder="Enter street address" required>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="practicePhone">Telephone Number <span>*</span></label>
                                        <input type="tel" class="form-control-custom" id="practicePhone" name="practicePhone" placeholder="Enter practice phone" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="practiceEmail">Email <span>*</span></label>
                                        <input type="email" class="form-control-custom" id="practiceEmail" name="practiceEmail" placeholder="practice@example.com" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Patient Details -->
                    <div class="referral-card">
                        <div class="referral-card-header">
                            <i class="fa-solid fa-user-injured"></i>
                            <h2>3. Patient Details</h2>
                        </div>
                        <div class="referral-card-body">
                            <div class="form-row">
                                <div class="form-col form-col-title">
                                    <div class="form-group">
                                        <label class="form-label" for="patientTitle">Title <span>*</span></label>
                                        <select class="form-control-custom" id="patientTitle" name="patientTitle" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Master">Master</option>
                                        </select>
                                        <i class="fa-solid fa-chevron-down input-icon" style="top: 45px; font-size: 12px;"></i>
                                    </div>
                                </div>
                                <div class="form-col form-col-name">
                                    <div class="form-group">
                                        <label class="form-label" for="patientFirstName">First Name <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="patientFirstName" name="patientFirstName" placeholder="Enter first name" required>
                                    </div>
                                </div>
                                <div class="form-col form-col-name">
                                    <div class="form-group">
                                        <label class="form-label" for="patientLastName">Last Name <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="patientLastName" name="patientLastName" placeholder="Enter last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="patientDOB">Date of Birth <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="patientDOB" name="patientDOB" placeholder="Select DOB" onfocus="(this.type='date'); try { this.showPicker(); } catch(e) {}" onclick="if(this.type==='date') try { this.showPicker(); } catch(e) {}" onblur="if(!this.value) this.type='text'" required>
                                        <i class="fa-regular fa-calendar input-icon" style="top: 45px;"></i>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="patientGender">Gender <span>*</span></label>
                                        <select class="form-control-custom" id="patientGender" name="patientGender" required>
                                            <option value="" disabled selected>Select gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                            <option value="PreferNotToSay">Prefer not to say</option>
                                        </select>
                                        <i class="fa-solid fa-chevron-down input-icon" style="top: 45px; font-size: 12px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="patientAddress">Address <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="patientAddress" name="patientAddress" placeholder="Enter patient street address" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="patientPostcode">Postcode <span>*</span></label>
                                        <input type="text" class="form-control-custom" id="patientPostcode" name="patientPostcode" placeholder="Enter postcode" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="patientPhone">Telephone Number <span>*</span></label>
                                        <input type="tel" class="form-control-custom" id="patientPhone" name="patientPhone" placeholder="Enter patient phone" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label" for="patientEmail">Email <span>*</span></label>
                                        <input type="email" class="form-control-custom" id="patientEmail" name="patientEmail" placeholder="patient@example.com" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label" for="patientMedicalHistory">Relevant Medical History <span>*</span></label>
                                <textarea class="form-control-custom" id="patientMedicalHistory" name="patientMedicalHistory" placeholder="List any medical conditions, allergies, or medications..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4: Treatment Required -->
                    <div class="referral-card">
                        <div class="referral-card-header">
                            <i class="fa-solid fa-notes-medical"></i>
                            <h2>4. Treatment Required</h2>
                        </div>
                        <div class="referral-card-body">
                            <label class="form-label">Please select all treatments that apply <span>*</span></label>
                            
                            <div class="checkbox-grid">
                                <!-- Option 1 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txImplants" name="treatment[]" value="Implants">
                                    <label for="txImplants" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        Implants
                                    </label>
                                </div>
                                <!-- Option 2 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txOrthodontics" name="treatment[]" value="Orthodontics">
                                    <label for="txOrthodontics" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        Orthodontics
                                    </label>
                                </div>
                                <!-- Option 3 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txOralSurgery" name="treatment[]" value="Oral Surgery">
                                    <label for="txOralSurgery" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        Oral Surgery
                                    </label>
                                </div>
                                <!-- Option 4 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txRestorative" name="treatment[]" value="Restorative">
                                    <label for="txRestorative" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        Restorative
                                    </label>
                                </div>
                                <!-- Option 5 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txEndodontics" name="treatment[]" value="Endodontics">
                                    <label for="txEndodontics" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        Endodontics
                                    </label>
                                </div>
                                <!-- Option 6 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txPeriodontics" name="treatment[]" value="Periodontics">
                                    <label for="txPeriodontics" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        Periodontics
                                    </label>
                                </div>
                                <!-- Option 7 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txDPT" name="treatment[]" value="DPT">
                                    <label for="txDPT" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        DPT
                                    </label>
                                </div>
                                <!-- Option 8 -->
                                <div class="checkbox-item">
                                    <input type="checkbox" id="txCBCT" name="treatment[]" value="CBCT">
                                    <label for="txCBCT" class="checkbox-label">
                                        <span class="checkbox-checkmark"><i class="fa-solid fa-check"></i></span>
                                        CBCT
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 5: Type of Referral -->
                    <div class="referral-card">
                        <div class="referral-card-header">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <h2>5. Type & Detail of Referral</h2>
                        </div>
                        <div class="referral-card-body">
                            <label class="form-label">Type of Referral <span>*</span></label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="refRoutine" name="referralType" value="Routine" checked required>
                                    <label for="refRoutine" class="radio-label">
                                        <span class="radio-checkmark"></span>
                                        Routine
                                    </label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="refUrgent" name="referralType" value="Urgent" required>
                                    <label for="refUrgent" class="radio-label">
                                        <span class="radio-checkmark"></span>
                                        Urgent
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label class="form-label" for="refReason">Reason for Referral <span>*</span></label>
                                <textarea class="form-control-custom" id="refReason" name="refReason" placeholder="Please outline the key reasons for referral..." required></textarea>
                            </div>


                            <!-- <div class="form-group mt-4">
                                <label class="form-label" for="refNotes">Clinical Notes</label>
                                <textarea class="form-control-custom" id="refNotes" name="refNotes" placeholder="Enter relevant clinical findings, history of treatments, etc..."></textarea>
                            </div>

                            <div class="form-group mt-4">
                                <label class="form-label" for="refAdditional">Additional Information</label>
                                <textarea class="form-control-custom" id="refAdditional" name="refAdditional" placeholder="Add any extra details, comments, or guidelines..."></textarea>
                            </div>

                            <div class="form-group mt-4">
                                <label class="form-label">Supporting Documents / X-rays (Optional)</label>
                                <div class="file-upload-wrapper">
                                    <input type="file" class="file-upload-input" id="refFiles" name="refFiles[]" multiple accept=".jpg,.jpeg,.png,.pdf,.docx,.doc">
                                    <div class="file-upload-dropzone">
                                        <div class="file-upload-icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                                        <p class="file-upload-text">Drag and drop files here, or <span>browse</span></p>
                                        <p class="file-upload-hint">Accepted formats: JPG, PNG, PDF, DOCX (Max size: 10MB per file)</p>
                                        <p id="fileListDisplay" style="margin: 5px 0 0 0; font-size: 13.5px; color: #b1986f; font-weight: 600; display: none;"></p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit-referral mb-5">
                        <i class="fa-regular fa-paper-plane"></i>
                        Submit Referral
                    </button>

                </form>
            </div>

        </div>
    </section>

    <!-- Success Popup Modal -->
    <div id="successModal" class="success-modal">
        <div class="success-modal-content">
            <div class="success-modal-icon">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <h2>Referral Submitted Successfully</h2>
            <p>Thank you for your referral. Our reception team will contact you within 48 hours to confirm details.</p>
            <button id="closeSuccessModal" class="btn-success-close">Done</button>
        </div>
    </div>

    <!-- Centralized form validation and behavior logic -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validation function for a single input element
        function validateField(input) {
            const inputGroup = input.closest('.form-group');
            if (!inputGroup) return true;
            
            let errorDiv = inputGroup.querySelector('.error-msg');
            if (!errorDiv) {
                errorDiv = document.createElement('div');
                errorDiv.className = 'error-msg';
                inputGroup.appendChild(errorDiv);
            }
            
            let isValid = true;
            let message = "";
            const value = input.value.trim();
            
            // Check required fields
            if (value === "") {
                if (input.hasAttribute('required')) {
                    isValid = false;
                    message = "This field is required.";
                } else {
                    input.classList.remove('input-error');
                    errorDiv.style.display = 'none';
                    return true;
                }
            } else {
                if (input.type === 'tel') {
                    // Telephone validation (must be 10 or 11 digits)
                    const digits = value.replace(/[^0-9]/g, '');
                    if (digits.length < 10 || digits.length > 11) {
                        isValid = false;
                        message = "Phone number is not valid (must be 10-11 digits).";
                    }
                } else if (input.type === 'email') {
                    // Specific email validations for missing parts
                    if (!value.includes('@')) {
                        isValid = false;
                        message = "@ is missing in email address.";
                    } else {
                        const parts = value.split('@');
                        const domain = parts[1] || "";
                        if (!domain.includes('.')) {
                            isValid = false;
                            message = ".com or domain extension is missing in email address.";
                        } else {
                            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                            if (!emailRegex.test(value)) {
                                isValid = false;
                                message = "Email address is not valid.";
                            }
                        }
                    }
                }
            }
            
            if (!isValid) {
                input.classList.add('input-error');
                errorDiv.textContent = message;
                errorDiv.style.display = 'block';
            } else {
                input.classList.remove('input-error');
                errorDiv.style.display = 'none';
            }
            
            return isValid;
        }

        // Phone number key restriction (strictly only digits 0-9)
        const phoneInputs = document.querySelectorAll('input[type="tel"]');
        phoneInputs.forEach(input => {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                validateField(this); // Real-time validation
            });
            input.addEventListener('blur', function() {
                validateField(this);
            });
        });

        // Email real-time validation
        const emailInputs = document.querySelectorAll('input[type="email"]');
        emailInputs.forEach(input => {
            input.addEventListener('input', function() {
                validateField(this);
            });
            input.addEventListener('blur', function() {
                validateField(this);
            });
        });

        // General validation event listener for other required fields
        const requiredFields = document.querySelectorAll('.form-control-custom[required]');
        requiredFields.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            input.addEventListener('change', function() {
                validateField(this);
            });
        });

        // Intercept form submit event to run custom checks and trigger success popup
        const form = document.querySelector('form');
        const successModal = document.getElementById('successModal');
        const closeSuccessBtn = document.getElementById('closeSuccessModal');

        if (form && successModal && closeSuccessBtn) {
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Stop page reload or top scroll

                let formValid = true;
                
                // Validate all fields on submit
                const inputsToValidate = form.querySelectorAll('.form-control-custom');
                inputsToValidate.forEach(input => {
                    const isFieldValid = validateField(input);
                    if (!isFieldValid) {
                        formValid = false;
                    }
                });

                if (!formValid) {
                    // Scroll to the first error input field
                    const firstError = form.querySelector('.form-control-custom.input-error');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstError.focus();
                    }
                    return;
                }

                // Show submission success popup
                successModal.style.display = 'flex';
            });

            closeSuccessBtn.addEventListener('click', function() {
                successModal.style.display = 'none';
                
                // Remove error styling & messages on form reset
                const inputsToReset = form.querySelectorAll('.form-control-custom');
                inputsToReset.forEach(input => {
                    input.classList.remove('input-error');
                });
                const errorMessages = form.querySelectorAll('.error-msg');
                errorMessages.forEach(msg => {
                    msg.style.display = 'none';
                });
                
                form.reset(); // Reset form elements
            });
        }
    });
    </script>

<?php include __DIR__ . '/includes/footer.php'; ?>
