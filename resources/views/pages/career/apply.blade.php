@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Apply <span class="highlight">Online</span></h1>
                    <p>Take the first step towards an exciting career with CA Sai Manoj Kumar. Submit your application and join our team of dedicated professionals.</p>
                    <div style="display: flex; align-items: center; gap: 2rem; margin-top: 1.5rem; flex-wrap: wrap;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-clock"></i>
                            <span>Quick Process</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-shield-alt"></i>
                            <span>Confidential</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-reply"></i>
                            <span>Quick Response</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3>Join Our Growing Team</h3>
                        <p>Be part of a dynamic workplace that values professional growth and excellence in service delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form -->
    <section class="section">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Job Application Form</h2>
                    <p>Please fill out all sections of the application form completely and accurately. All information will be kept confidential.</p>
                    
                    <form id="applicationForm" action="{{ route('career.apply.submit') }}" method="POST" enctype="multipart/form-data" class="application-form">
                        @csrf
                        
                        <!-- Personal Information -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-user"></i> Personal Information</h3>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="location" class="form-label">Current Location *</label>
                                    <input type="text" id="location" name="location" class="form-control" placeholder="City, State" required>
                                </div>
                            </div>
                        </div>

                        <!-- Position Information -->
                        <div style="background: white; padding: 2rem; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-briefcase"></i> Position Details</h3>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="position" class="form-label">Position Applied For *</label>
                                    <select id="position" name="position" class="form-control" required>
                                        <option value="">Select Position</option>
                                        @foreach($positions as $pos)
                                        <option value="{{ $pos }}">{{ $pos }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="preferred_location" class="form-label">Preferred Work Location</label>
                                    <select id="preferred_location" name="preferred_location" class="form-control">
                                        <option value="">Any Location</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Bangalore">Bangalore</option>
                                        <option value="Mumbai">Mumbai</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Professional Information -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-graduation-cap"></i> Professional Background</h3>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="experience" class="form-label">Total Experience *</label>
                                    <select id="experience" name="experience" class="form-control" required>
                                        <option value="">Select Experience</option>
                                        <option value="Fresher">Fresher (0 years)</option>
                                        <option value="1-2 years">1-2 years</option>
                                        <option value="3-5 years">3-5 years</option>
                                        <option value="6-10 years">6-10 years</option>
                                        <option value="10+ years">10+ years</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="qualification" class="form-label">Highest Qualification *</label>
                                    <select id="qualification" name="qualification" class="form-control" required>
                                        <option value="">Select Qualification</option>
                                        <option value="CA">Chartered Accountant (CA)</option>
                                        <option value="CA Inter">CA Intermediate</option>
                                        <option value="M.Com">M.Com</option>
                                        <option value="B.Com">B.Com</option>
                                        <option value="MBA Finance">MBA - Finance</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="current_salary" class="form-label">Current Salary (Optional)</label>
                                    <select id="current_salary" name="current_salary" class="form-control">
                                        <option value="">Select Range</option>
                                        <option value="Below 3 LPA">Below ₹3 LPA</option>
                                        <option value="3-5 LPA">₹3-5 LPA</option>
                                        <option value="5-8 LPA">₹5-8 LPA</option>
                                        <option value="8-12 LPA">₹8-12 LPA</option>
                                        <option value="12-18 LPA">₹12-18 LPA</option>
                                        <option value="Above 18 LPA">Above ₹18 LPA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="expected_salary" class="form-label">Expected Salary (Optional)</label>
                                    <select id="expected_salary" name="expected_salary" class="form-control">
                                        <option value="">Select Range</option>
                                        <option value="3-5 LPA">₹3-5 LPA</option>
                                        <option value="5-8 LPA">₹5-8 LPA</option>
                                        <option value="8-12 LPA">₹8-12 LPA</option>
                                        <option value="12-18 LPA">₹12-18 LPA</option>
                                        <option value="18-25 LPA">₹18-25 LPA</option>
                                        <option value="Above 25 LPA">Above ₹25 LPA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="notice_period" class="form-label">Notice Period</label>
                                <select id="notice_period" name="notice_period" class="form-control">
                                    <option value="">Select Notice Period</option>
                                    <option value="Immediate">Immediate</option>
                                    <option value="15 days">15 days</option>
                                    <option value="1 month">1 month</option>
                                    <option value="2 months">2 months</option>
                                    <option value="3 months">3 months</option>
                                </select>
                            </div>
                        </div>

                        <!-- Cover Letter -->
                        <div style="background: white; padding: 2rem; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-edit"></i> Cover Letter *</h3>
                            
                            <div class="form-group">
                                <label for="cover_letter" class="form-label">Tell us about yourself and why you're interested in this position</label>
                                <textarea id="cover_letter" name="cover_letter" class="form-control" rows="8" placeholder="Please include:
• Your relevant experience and skills
• Why you want to join our team
• What makes you a good fit for this role
• Your career goals and aspirations
• Any specific achievements or projects you'd like to highlight" required></textarea>
                            </div>
                        </div>

                        <!-- Resume Upload -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-file-upload"></i> Resume Upload *</h3>
                            
                            <div class="form-group">
                                <label for="resume" class="form-label">Upload your resume (PDF, DOC, DOCX - Max 5MB)</label>
                                <input type="file" id="resume" name="resume" class="form-control" accept=".pdf,.doc,.docx" required style="padding: 1rem; border: 2px dashed var(--light-accent); background: white;">
                                <div id="fileInfo" style="margin-top: 0.5rem; font-size: 0.9rem; color: var(--dark-secondary);"></div>
                            </div>
                        </div>

                        <!-- References (Optional) -->
                        <div style="background: white; padding: 2rem; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-users"></i> Professional References (Optional)</h3>
                            
                            <div id="referencesContainer">
                                <div class="reference-entry" style="padding: 1.5rem; background: var(--light-secondary); border-radius: var(--border-radius-small); margin-bottom: 1rem;">
                                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                        <div class="form-group">
                                            <label class="form-label">Reference Name</label>
                                            <input type="text" name="references[0][name]" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Company/Organization</label>
                                            <input type="text" name="references[0][company]" class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                        <div class="form-group">
                                            <label class="form-label">Position/Title</label>
                                            <input type="text" name="references[0][position]" class="form-control" placeholder="Job Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Contact Number</label>
                                            <input type="tel" name="references[0][phone]" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="button" id="addReference" style="background: var(--primary); color: white; border: none; padding: 0.5rem 1rem; border-radius: var(--border-radius-small); cursor: pointer;">
                                <i class="fas fa-plus"></i> Add Another Reference
                            </button>
                        </div>

                        <!-- Consent & Submit -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <div class="form-group">
                                <label style="display: flex; align-items: flex-start; gap: 0.5rem; cursor: pointer;">
                                    <input type="checkbox" id="consent" name="consent" required style="margin-top: 0.2rem;">
                                    <span style="font-size: 0.95rem; color: var(--dark-secondary);">
                                        I consent to the processing of my personal data for recruitment purposes. I understand that my information will be kept confidential and used only for the hiring process. I agree to the 
                                        <a href="{{ route('privacy-policy') }}" target="_blank" style="color: var(--primary); text-decoration: none;">Privacy Policy</a> and 
                                        <a href="{{ route('terms-of-service') }}" target="_blank" style="color: var(--primary); text-decoration: none;">Terms of Service</a>.
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding: 1rem 3rem; font-size: 1.1rem;">
                                <i class="fas fa-paper-plane"></i>
                                Submit Application
                            </button>
                            <p style="margin-top: 1rem; color: var(--dark-secondary); font-size: 0.9rem;">
                                We'll review your application and get back to you within 5-7 business days.
                            </p>
                        </div>
                    </form>
                </div>

                <div class="about-image">
                    <!-- Application Guidelines -->
                    <div class="about-card" style="margin-bottom: 2rem;">
                        <h3 style="text-align: center; margin-bottom: 2rem; color: var(--dark);">Application Guidelines</h3>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <h4 style="color: var(--primary); margin-bottom: 1rem; font-size: 1rem;"><i class="fas fa-lightbulb"></i> Tips for Success</h4>
                            <ul style="margin: 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                                <li style="margin-bottom: 0.75rem;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Fill all mandatory fields completely</li>
                                <li style="margin-bottom: 0.75rem;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Write a compelling cover letter</li>
                                <li style="margin-bottom: 0.75rem;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Upload an updated resume</li>
                                <li style="margin-bottom: 0.75rem;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Double-check all information</li>
                                <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Provide professional references</li>
                            </ul>
                        </div>
                        
                        <div style="background: var(--primary); color: white; padding: 1.5rem; border-radius: var(--border-radius-small);">
                            <h4 style="color: white; margin-bottom: 1rem; font-size: 1rem;"><i class="fas fa-clock"></i> What to Expect</h4>
                            <ul style="margin: 0; padding-left: 1rem; font-size: 0.9rem; list-style: none;">
                                <li style="margin-bottom: 0.5rem;">• Application acknowledgment within 24 hours</li>
                                <li style="margin-bottom: 0.5rem;">• Initial screening within 5-7 days</li>
                                <li style="margin-bottom: 0.5rem;">• Interview process for shortlisted candidates</li>
                                <li>• Final decision within 2-3 weeks</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="about-card">
                        <h3 style="text-align: center; margin-bottom: 1.5rem; color: var(--dark);">Need Help?</h3>
                        
                        <div style="text-align: center;">
                            <div style="margin-bottom: 1rem;">
                                <i class="fas fa-envelope" style="color: var(--primary); font-size: 1.2rem; margin-bottom: 0.5rem;"></i>
                                <p style="margin: 0; font-size: 0.9rem;"><a href="mailto:hr@casmk.com" style="color: var(--primary); text-decoration: none;">hr@casmk.com</a></p>
                            </div>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <i class="fas fa-phone" style="color: var(--primary); font-size: 1.2rem; margin-bottom: 0.5rem;"></i>
                                <p style="margin: 0; font-size: 0.9rem;"><a href="tel:+919876543210" style="color: var(--primary); text-decoration: none;">+91 98765 43210</a></p>
                            </div>
                            
                            <a href="{{ route('career.openings') }}" class="btn btn-secondary" style="font-size: 0.9rem;">
                                <i class="fas fa-briefcase"></i>
                                View Open Positions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.application-form .form-group {
    margin-bottom: 1.5rem;
}

.application-form .form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--dark);
}

.application-form .form-control {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid var(--light-accent);
    border-radius: var(--border-radius-small);
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
    font-family: inherit;
}

.application-form .form-control:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
}

.application-form textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

@media (max-width: 768px) {
    .application-form [style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
// File upload handler
document.getElementById('resume').addEventListener('change', function() {
    const file = this.files[0];
    const fileInfo = document.getElementById('fileInfo');
    
    if (file) {
        const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
        const fileName = file.name;
        
        if (fileSizeMB > 5) {
            fileInfo.innerHTML = '<span style="color: var(--danger);">File size exceeds 5MB limit. Please choose a smaller file.</span>';
            this.value = '';
        } else {
            fileInfo.innerHTML = `<span style="color: var(--success);">Selected: ${fileName} (${fileSizeMB} MB)</span>`;
        }
    } else {
        fileInfo.innerHTML = '';
    }
});

// Add reference functionality
let referenceCount = 1;
document.getElementById('addReference').addEventListener('click', function() {
    if (referenceCount < 3) {
        const container = document.getElementById('referencesContainer');
        const newReference = document.createElement('div');
        newReference.className = 'reference-entry';
        newReference.style.cssText = 'padding: 1.5rem; background: var(--light-secondary); border-radius: var(--border-radius-small); margin-bottom: 1rem;';
        
        newReference.innerHTML = `
            <div style="display: grid; grid-template-columns: 1fr auto; gap: 1rem; align-items: start;">
                <div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label">Reference Name</label>
                            <input type="text" name="references[${referenceCount}][name]" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Company/Organization</label>
                            <input type="text" name="references[${referenceCount}][company]" class="form-control" placeholder="Company Name">
                        </div>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label">Position/Title</label>
                            <input type="text" name="references[${referenceCount}][position]" class="form-control" placeholder="Job Title">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Contact Number</label>
                            <input type="tel" name="references[${referenceCount}][phone]" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <button type="button" onclick="removeReference(this)" style="background: var(--danger); color: white; border: none; padding: 0.5rem; border-radius: var(--border-radius-small); cursor: pointer;">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        
        container.appendChild(newReference);
        referenceCount++;
        
        if (referenceCount >= 3) {
            this.style.display = 'none';
        }
    }
});

function removeReference(button) {
    button.closest('.reference-entry').remove();
    referenceCount--;
    document.getElementById('addReference').style.display = 'inline-block';
}

// Form submission
document.getElementById('applicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Check required fields
    const requiredFields = ['name', 'email', 'phone', 'location', 'position', 'experience', 'qualification', 'cover_letter'];
    let isValid = true;
    
    for (let field of requiredFields) {
        const element = document.getElementById(field);
        if (!element.value.trim()) {
            element.style.borderColor = 'var(--danger)';
            isValid = false;
        } else {
            element.style.borderColor = 'var(--light-accent)';
        }
    }
    
    // Check file upload
    const resumeFile = document.getElementById('resume').files[0];
    if (!resumeFile) {
        document.getElementById('resume').style.borderColor = 'var(--danger)';
        isValid = false;
    }
    
    // Check consent
    if (!document.getElementById('consent').checked) {
        alert('Please provide consent to proceed with your application.');
        return;
    }
    
    if (!isValid) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting Application...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Application submitted successfully! We will review your application and get back to you soon.');
            this.reset();
        } else {
            alert(data.message || 'Failed to submit application. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to submit application. Please try again.');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Pre-fill position if coming from job listing
document.addEventListener('DOMContentLoaded', function() {
    const selectedPosition = sessionStorage.getItem('selectedPosition');
    if (selectedPosition) {
        const positionSelect = document.getElementById('position');
        positionSelect.value = selectedPosition;
        sessionStorage.removeItem('selectedPosition');
    }
});
</script>
@endpush