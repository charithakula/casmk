@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Current Job <span class="highlight">Openings</span></h1>
                    <p>Join our growing team of professional chartered accountants and financial experts. We're looking for talented individuals who are passionate about delivering excellence in financial services.</p>
                    <div class="hero-actions">
                        <a href="{{ route('career.apply') }}" class="hero-btn primary">
                            <i class="fas fa-paper-plane"></i>
                            Apply Now
                        </a>
                        <a href="{{ route('career.internships') }}" class="hero-btn secondary">
                            <i class="fas fa-graduation-cap"></i>
                            Internship Programs
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>{{ count($openings) }} Active Positions</h3>
                        <p>Multiple opportunities across different departments and experience levels. Find the perfect role for your career growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Openings -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Available Positions</h2>
                <p>Explore exciting career opportunities that match your skills and aspirations</p>
            </div>
            
            <!-- Filter Options -->
            <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 3rem;">
                <div style="display: flex; gap: 2rem; align-items: center; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <label for="departmentFilter" style="font-weight: 600; color: var(--dark);">Filter by Department:</label>
                        <select id="departmentFilter" style="padding: 0.5rem; border: 1px solid var(--light-accent); border-radius: var(--border-radius-small); background: white;">
                            <option value="">All Departments</option>
                            <option value="Taxation">Taxation</option>
                            <option value="Audit & Assurance">Audit & Assurance</option>
                            <option value="GST Services">GST Services</option>
                            <option value="Business Advisory">Business Advisory</option>
                        </select>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <label for="experienceFilter" style="font-weight: 600; color: var(--dark);">Experience Level:</label>
                        <select id="experienceFilter" style="padding: 0.5rem; border: 1px solid var(--light-accent); border-radius: var(--border-radius-small); background: white;">
                            <option value="">All Levels</option>
                            <option value="Entry Level">Entry Level (0-2 years)</option>
                            <option value="Mid Level">Mid Level (2-5 years)</option>
                            <option value="Senior Level">Senior Level (5+ years)</option>
                        </select>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <label for="locationFilter" style="font-weight: 600; color: var(--dark);">Location:</label>
                        <select id="locationFilter" style="padding: 0.5rem; border: 1px solid var(--light-accent); border-radius: var(--border-radius-small); background: white;">
                            <option value="">All Locations</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Mumbai">Mumbai</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Job Listings -->
            <div class="job-listings">
                @foreach($openings as $job)
                <div class="job-card" style="background: white; padding: 2.5rem; border-radius: var(--border-radius); box-shadow: var(--shadow-soft); margin-bottom: 2rem; transition: all 0.3s ease;" data-department="{{ $job['department'] }}" data-experience="{{ $job['experience'] }}" data-location="{{ $job['location'] }}">
                    <div style="display: grid; grid-template-columns: 1fr auto; gap: 2rem; align-items: start;">
                        <!-- Job Details -->
                        <div>
                            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; flex-wrap: wrap;">
                                <h3 style="color: var(--dark); margin: 0; font-size: 1.5rem; font-weight: 700;">{{ $job['title'] }}</h3>
                                <span style="background: var(--primary); color: white; padding: 0.25rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">{{ $job['type'] }}</span>
                            </div>
                            
                            <div style="display: flex; gap: 2rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--dark-secondary);">
                                    <i class="fas fa-building" style="color: var(--primary);"></i>
                                    <span>{{ $job['department'] }}</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--dark-secondary);">
                                    <i class="fas fa-clock" style="color: var(--primary);"></i>
                                    <span>{{ $job['experience'] }}</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--dark-secondary);">
                                    <i class="fas fa-map-marker-alt" style="color: var(--primary);"></i>
                                    <span>{{ $job['location'] }}</span>
                                </div>
                            </div>
                            
                            <p style="color: var(--dark-secondary); margin-bottom: 1.5rem; line-height: 1.6;">{{ $job['description'] }}</p>
                            
                            <div>
                                <h4 style="color: var(--primary); margin-bottom: 1rem; font-size: 1.1rem;">Key Requirements:</h4>
                                <ul style="margin: 0; padding-left: 1.5rem; color: var(--dark-secondary);">
                                    @foreach($job['requirements'] as $requirement)
                                    <li style="margin-bottom: 0.5rem;">{{ $requirement }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Apply Button -->
                        <div style="text-align: center;">
                            <a href="{{ route('career.apply') }}?position={{ urlencode($job['title']) }}" class="btn btn-primary" style="white-space: nowrap; padding: 1rem 2rem;">
                                <i class="fas fa-paper-plane"></i>
                                Apply Now
                            </a>
                            <div style="margin-top: 1rem; font-size: 0.8rem; color: var(--dark-secondary);">
                                Posted: {{ \Carbon\Carbon::parse($job['posted_date'] ?? now())->format('M d, Y') }}
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Job Details (Expandable) -->
                    <div class="job-details-expanded" style="display: none; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--light-accent);">
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                            <div>
                                <h4 style="color: var(--primary); margin-bottom: 1rem;">Responsibilities:</h4>
                                <ul style="margin: 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.95rem;">
                                    @switch($job['title'])
                                        @case('Senior Tax Consultant')
                                            <li>Handle income tax compliance and planning for corporate clients</li>
                                            <li>Provide tax advisory services and optimization strategies</li>
                                            <li>Manage client relationships and ensure service delivery</li>
                                            <li>Review and file complex tax returns</li>
                                            @break
                                        @case('Audit Associate')
                                            <li>Conduct statutory and internal audits for various clients</li>
                                            <li>Prepare audit working papers and reports</li>
                                            <li>Assist in risk assessment and internal control evaluation</li>
                                            <li>Support senior team members in audit planning</li>
                                            @break
                                        @case('GST Specialist')
                                            <li>Handle GST registration, filing, and compliance</li>
                                            <li>Provide GST advisory and optimization services</li>
                                            <li>Assist clients with input tax credit reconciliation</li>
                                            <li>Stay updated with GST law changes and updates</li>
                                            @break
                                        @default
                                            <li>Execute assigned tasks with high quality and accuracy</li>
                                            <li>Support team members and contribute to projects</li>
                                            <li>Maintain professional client relationships</li>
                                            <li>Participate in continuous learning and development</li>
                                    @endswitch
                                </ul>
                            </div>
                            
                            <div>
                                <h4 style="color: var(--primary); margin-bottom: 1rem;">Benefits & Perks:</h4>
                                <ul style="margin: 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.95rem;">
                                    <li>Competitive salary package</li>
                                    <li>Health and medical insurance</li>
                                    <li>Professional development opportunities</li>
                                    <li>Flexible working arrangements</li>
                                    <li>Performance-based bonuses</li>
                                    <li>CA study support and guidance</li>
                                    <li>Annual team outings and events</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div style="margin-top: 2rem; padding: 1.5rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                            <h4 style="color: var(--primary); margin-bottom: 1rem;">Application Process:</h4>
                            <p style="margin: 0; color: var(--dark-secondary); font-size: 0.95rem;">
                                Submit your application through our online form. Selected candidates will be contacted within 5-7 business days for the initial screening round. 
                                The interview process typically includes a technical assessment, HR interview, and final discussion with the department head.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Toggle Button for Details -->
                    <div style="text-align: center; margin-top: 1.5rem;">
                        <button type="button" class="toggle-details" onclick="toggleJobDetails(this)" style="background: none; border: 1px solid var(--primary); color: var(--primary); padding: 0.5rem 1.5rem; border-radius: 25px; cursor: pointer; transition: all 0.3s ease;">
                            <i class="fas fa-chevron-down"></i>
                            View More Details
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Application Tips -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Application Tips</h2>
                <p>Increase your chances of success with these application guidelines</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Tailored Resume</h3>
                    <p>Customize your resume for the specific role, highlighting relevant experience and skills that match the job requirements.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Strong Cover Letter</h3>
                    <p>Write a compelling cover letter that explains your motivation, relevant experience, and what you can bring to our team.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Highlight Certifications</h3>
                    <p>Emphasize your professional qualifications, certifications, and continuous learning efforts in your application.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Professional References</h3>
                    <p>Include relevant professional references who can vouch for your skills, work ethic, and character.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Join Our Team?</h2>
            <p>Take the next step in your career with CA Sai Manoj Kumar. Apply for open positions or submit your resume for future opportunities.</p>
            
            <div class="cta-actions">
                <a href="{{ route('career.apply') }}" class="cta-btn white">
                    <i class="fas fa-paper-plane"></i>
                    Submit Application
                </a>
                <a href="mailto:hr@casmk.com" class="cta-btn outline">
                    <i class="fas fa-envelope"></i>
                    Email HR Team
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.job-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.job-card.hidden {
    display: none;
}

.toggle-details:hover {
    background: var(--primary);
    color: white;
}

.job-details-expanded.active {
    display: block !important;
}

@media (max-width: 768px) {
    .job-card > div[style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .job-details-expanded > div[style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Job filtering functionality
function filterJobs() {
    const departmentFilter = document.getElementById('departmentFilter').value;
    const experienceFilter = document.getElementById('experienceFilter').value;
    const locationFilter = document.getElementById('locationFilter').value;
    
    const jobCards = document.querySelectorAll('.job-card');
    let visibleCount = 0;
    
    jobCards.forEach(card => {
        const department = card.getAttribute('data-department');
        const experience = card.getAttribute('data-experience');
        const location = card.getAttribute('data-location');
        
        let show = true;
        
        if (departmentFilter && department !== departmentFilter) show = false;
        if (experienceFilter && !experience.includes(experienceFilter.replace(' Level', ''))) show = false;
        if (locationFilter && location !== locationFilter) show = false;
        
        if (show) {
            card.classList.remove('hidden');
            visibleCount++;
        } else {
            card.classList.add('hidden');
        }
    });
    
    // Update results count or show message if no jobs found
    if (visibleCount === 0) {
        // Could show a "no jobs found" message
        console.log('No jobs match the current filters');
    }
}

// Add event listeners to filters
document.getElementById('departmentFilter').addEventListener('change', filterJobs);
document.getElementById('experienceFilter').addEventListener('change', filterJobs);
document.getElementById('locationFilter').addEventListener('change', filterJobs);

// Toggle job details functionality
function toggleJobDetails(button) {
    const jobCard = button.closest('.job-card');
    const detailsSection = jobCard.querySelector('.job-details-expanded');
    const icon = button.querySelector('i');
    const text = button.childNodes[2]; // Text node after icon and space
    
    if (detailsSection.classList.contains('active')) {
        detailsSection.classList.remove('active');
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
        button.innerHTML = '<i class="fas fa-chevron-down"></i> View More Details';
    } else {
        detailsSection.classList.add('active');
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
        button.innerHTML = '<i class="fas fa-chevron-up"></i> View Less Details';
    }
}

// Auto-populate application form if coming from a specific job
document.addEventListener('DOMContentLoaded', function() {
    // Get URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const jobTitle = urlParams.get('position');
    
    if (jobTitle) {
        // Store in sessionStorage to use in application form
        sessionStorage.setItem('selectedPosition', jobTitle);
    }
});
</script>
@endpush