@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Request a <span class="highlight">Custom Quote</span></h1>
                    <p>Get a personalized quote for your specific requirements. Our experts will analyze your needs and provide transparent, competitive pricing for our professional services.</p>
                    <div style="display: flex; align-items: center; gap: 2rem; margin-top: 1.5rem; flex-wrap: wrap;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-check-circle"></i>
                            <span>Free Consultation</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-clock"></i>
                            <span>24-Hour Response</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-shield-alt"></i>
                            <span>No Obligation</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3>Transparent Pricing</h3>
                        <p>Get detailed quotes with no hidden fees. Our pricing is transparent and competitive with flexible payment options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Request Form -->
    <section class="section">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Tell Us About Your Requirements</h2>
                    <p>The more details you provide, the more accurate quote we can prepare for you. All information is kept strictly confidential.</p>
                    
                    <form id="quoteForm" action="{{ route('contact.quote.submit') }}" method="POST" class="quote-form">
                        @csrf
                        
                        <!-- Business Information -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-building"></i> Business Information</h3>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="company" class="form-label">Company Name *</label>
                                    <input type="text" id="company" name="company" class="form-control" required>
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Services Required -->
                        <div style="background: white; padding: 2rem; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-list-check"></i> Services Required *</h3>
                            <p style="color: var(--dark-secondary); margin-bottom: 1.5rem; font-size: 0.9rem;">Select all services you need (multiple selection allowed)</p>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                                @foreach($services as $service)
                                <label style="display: flex; align-items: center; gap: 0.75rem; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small); cursor: pointer; transition: all 0.3s ease;" class="service-checkbox">
                                    <input type="checkbox" name="services[]" value="{{ $service }}" style="margin: 0; transform: scale(1.2);">
                                    <span style="font-weight: 500;">{{ $service }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Business Details -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-chart-bar"></i> Business Details</h3>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="annual_turnover" class="form-label">Annual Turnover</label>
                                    <select id="annual_turnover" name="annual_turnover" class="form-control">
                                        <option value="">Select Range</option>
                                        <option value="Below 20 Lakh">Below ₹20 Lakh</option>
                                        <option value="20 Lakh - 1 Crore">₹20 Lakh - ₹1 Crore</option>
                                        <option value="1 Crore - 5 Crore">₹1 Crore - ₹5 Crore</option>
                                        <option value="5 Crore - 25 Crore">₹5 Crore - ₹25 Crore</option>
                                        <option value="Above 25 Crore">Above ₹25 Crore</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="employees_count" class="form-label">Number of Employees</label>
                                    <select id="employees_count" name="employees_count" class="form-control">
                                        <option value="">Select Range</option>
                                        <option value="1-10">1-10 Employees</option>
                                        <option value="11-50">11-50 Employees</option>
                                        <option value="51-200">51-200 Employees</option>
                                        <option value="200+">200+ Employees</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="business_type" class="form-label">Business Type</label>
                                    <select id="business_type" name="business_type" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="Startup">Startup</option>
                                        <option value="Private Limited">Private Limited</option>
                                        <option value="LLP">LLP</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Proprietorship">Proprietorship</option>
                                        <option value="Public Limited">Public Limited</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Requirements -->
                        <div style="background: white; padding: 2rem; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-clipboard-list"></i> Detailed Requirements *</h3>
                            
                            <div class="form-group">
                                <label for="requirements" class="form-label">Describe Your Specific Requirements</label>
                                <textarea id="requirements" name="requirements" class="form-control" rows="6" placeholder="Please provide detailed information about:
• Current challenges you're facing
• Timeline expectations
• Specific deliverables needed
• Any compliance deadlines
• Previous service providers (if any)
• Budget range (optional but helpful)
• Any other relevant details..." required></textarea>
                            </div>
                        </div>

                        <!-- Timeline & Budget -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-calendar-alt"></i> Timeline & Preferences</h3>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="timeline" class="form-label">When do you need to start?</label>
                                    <select id="timeline" name="timeline" class="form-control">
                                        <option value="">Select Timeline</option>
                                        <option value="Immediately">Immediately</option>
                                        <option value="Within 1 week">Within 1 week</option>
                                        <option value="Within 1 month">Within 1 month</option>
                                        <option value="Within 3 months">Within 3 months</option>
                                        <option value="Flexible">Flexible</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="preferred_contact" class="form-label">Preferred Contact Method</label>
                                    <select id="preferred_contact" name="preferred_contact" class="form-control">
                                        <option value="Phone">Phone Call</option>
                                        <option value="Email">Email</option>
                                        <option value="Video Call">Video Call</option>
                                        <option value="In-person">In-person Meeting</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding: 1rem 3rem; font-size: 1.1rem;">
                                <i class="fas fa-paper-plane"></i>
                                Submit Quote Request
                            </button>
                            <p style="margin-top: 1rem; color: var(--dark-secondary); font-size: 0.9rem;">
                                We'll review your requirements and get back to you within 24 hours with a detailed quote.
                            </p>
                        </div>
                    </form>
                </div>

                <div class="about-image">
                    <!-- What Happens Next -->
                    <div class="about-card" style="margin-bottom: 2rem;">
                        <h3 style="text-align: center; margin-bottom: 2rem; color: var(--dark);">What Happens Next?</h3>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <div style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem;">
                                <div style="width: 30px; height: 30px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; flex-shrink: 0;">1</div>
                                <div>
                                    <h4 style="margin-bottom: 0.5rem; color: var(--dark); font-size: 1rem;">Requirement Analysis</h4>
                                    <p style="margin: 0; font-size: 0.9rem; color: var(--dark-secondary);">Our experts analyze your requirements within 2-4 hours</p>
                                </div>
                            </div>
                            
                            <div style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem;">
                                <div style="width: 30px; height: 30px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; flex-shrink: 0;">2</div>
                                <div>
                                    <h4 style="margin-bottom: 0.5rem; color: var(--dark); font-size: 1rem;">Detailed Quote</h4>
                                    <p style="margin: 0; font-size: 0.9rem; color: var(--dark-secondary);">Receive comprehensive quote with service breakdown</p>
                                </div>
                            </div>
                            
                            <div style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem;">
                                <div style="width: 30px; height: 30px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; flex-shrink: 0;">3</div>
                                <div>
                                    <h4 style="margin-bottom: 0.5rem; color: var(--dark); font-size: 1rem;">Consultation Call</h4>
                                    <p style="margin: 0; font-size: 0.9rem; color: var(--dark-secondary);">Free consultation to discuss details and clarifications</p>
                                </div>
                            </div>
                            
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 30px; height: 30px; background: var(--success); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; flex-shrink: 0;">4</div>
                                <div>
                                    <h4 style="margin-bottom: 0.5rem; color: var(--dark); font-size: 1rem;">Service Agreement</h4>
                                    <p style="margin: 0; font-size: 0.9rem; color: var(--dark-secondary);">Finalize terms and begin professional services</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Information -->
                    <div class="about-card" style="background: var(--gradient-primary); color: white;">
                        <h3 style="color: white; text-align: center; margin-bottom: 1.5rem;">Why Choose Our Services?</h3>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.95rem;">Competitive & Transparent Pricing</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.95rem;">15+ Years of Experience</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.95rem;">500+ Satisfied Clients</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.95rem;">99% Compliance Record</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.95rem;">24/7 Professional Support</span>
                            </div>
                        </div>
                        
                        <div style="text-align: center; padding: 1rem; background: rgba(255,255,255,0.2); border-radius: var(--border-radius-small);">
                            <p style="margin: 0; font-size: 0.9rem;">
                                <strong>Average Response Time:</strong><br>
                                Quote requests answered within 4 hours during business days
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Quote Request FAQ</h2>
                <p>Common questions about our quote process</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto;">
                <div class="service-card">
                    <div class="icon" style="background: var(--primary); color: white;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>How quickly will I receive a quote?</h3>
                    <p>Most quote requests are responded to within 4-6 hours during business hours. Complex requirements may take up to 24 hours for a comprehensive quote.</p>
                </div>

                <div class="service-card">
                    <div class="icon" style="background: var(--primary); color: white;">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Are there any charges for quotes?</h3>
                    <p>No, all quotes and initial consultations are completely free with no obligation. You only pay when you decide to proceed with our services.</p>
                </div>

                <div class="service-card">
                    <div class="icon" style="background: var(--primary); color: white;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Can I negotiate the quoted price?</h3>
                    <p>We provide competitive quotes, but we're open to discussing pricing based on your specific requirements and long-term engagement possibilities.</p>
                </div>

                <div class="service-card">
                    <div class="icon" style="background: var(--primary); color: white;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Is my information kept confidential?</h3>
                    <p>Absolutely. All information provided in quote requests is kept strictly confidential and is only used for preparing your quote and initial consultation.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.quote-form .form-group {
    margin-bottom: 1.5rem;
}

.quote-form .form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--dark);
}

.quote-form .form-control {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid var(--light-accent);
    border-radius: var(--border-radius-small);
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
    font-family: inherit;
}

.quote-form .form-control:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
}

.service-checkbox:hover {
    background: var(--primary) !important;
    color: white;
}

.service-checkbox:hover span {
    color: white;
}

.service-checkbox input:checked + span {
    color: var(--primary);
    font-weight: 700;
}

@media (max-width: 768px) {
    .quote-form [style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.getElementById('quoteForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Check if at least one service is selected
    const services = document.querySelectorAll('input[name="services[]"]:checked');
    if (services.length === 0) {
        alert('Please select at least one service.');
        return;
    }
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting Request...';
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
            alert('Quote request submitted successfully! We will contact you with details within 24 hours.');
            this.reset();
        } else {
            alert(data.message || 'Failed to submit quote request. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to submit quote request. Please try again.');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});
</script>
@endpush