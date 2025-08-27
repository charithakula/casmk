@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Get In <span class="highlight">Touch</span> With Us</h1>
                    <p>Ready to take your business to the next level? Contact our expert team for personalized financial solutions and professional guidance.</p>
                    <div class="hero-actions">
                        <a href="tel:+919876543210" class="hero-btn primary">
                            <i class="fas fa-phone"></i>
                            Call Now: +91 98765 43210
                        </a>
                        <a href="mailto:info@casmk.com" class="hero-btn secondary">
                            <i class="fas fa-envelope"></i>
                            Email Us
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>24/7 Professional Support</h3>
                        <p>Our team is available round-the-clock to address your urgent financial queries and provide immediate assistance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="section">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours. For urgent matters, please call us directly.</p>
                    
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div class="form-group">
                                <label for="company" class="form-label">Company Name</label>
                                <input type="text" id="company" name="company" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="service" class="form-label">Service Required</label>
                                <select id="service" name="service" class="form-control">
                                    <option value="">Select a service</option>
                                    <option value="Income Tax Services">Income Tax Services</option>
                                    <option value="Audit & Assurance">Audit & Assurance</option>
                                    <option value="GST Services">GST Services</option>
                                    <option value="Business Formation">Business Formation</option>
                                    <option value="CFO Services">CFO Services</option>
                                    <option value="International Services">International Services</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Please describe your requirements in detail..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="about-image">
                    <div class="contact-info">
                        <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-map-marker-alt"></i> Our Offices</h3>
                        
                        @foreach($contact_info as $office)
                        <div class="contact-detail" style="margin-bottom: 2rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--light-accent);">
                            <strong style="color: var(--dark); font-size: 1.1rem;">{{ $office['name'] }}</strong>
                            <p style="margin: 0.5rem 0;"><i class="fas fa-map-marker-alt" style="color: var(--primary); margin-right: 0.5rem;"></i>{{ $office['address'] }}</p>
                            <p style="margin: 0.5rem 0;"><i class="fas fa-phone" style="color: var(--primary); margin-right: 0.5rem;"></i><a href="tel:{{ $office['phone'] }}" style="color: var(--dark-secondary); text-decoration: none;">{{ $office['phone'] }}</a></p>
                            <p style="margin: 0.5rem 0;"><i class="fas fa-envelope" style="color: var(--primary); margin-right: 0.5rem;"></i><a href="mailto:{{ $office['email'] }}" style="color: var(--dark-secondary); text-decoration: none;">{{ $office['email'] }}</a></p>
                            <p style="margin: 0.5rem 0;"><i class="fas fa-clock" style="color: var(--primary); margin-right: 0.5rem;"></i>{{ $office['timings'] }}</p>
                        </div>
                        @endforeach

                        <div style="text-align: center; margin-top: 2rem;">
                            <a href="{{ route('contact.quote') }}" class="btn btn-secondary">
                                <i class="fas fa-calculator"></i>
                                Request Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Quick Actions</h2>
                <p>Need immediate assistance? Use our quick action buttons below</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Emergency Support</h3>
                    <p>For urgent tax matters and compliance deadlines</p>
                    <a href="tel:+918765432109" class="service-link">
                        Call Emergency Line <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Video Consultation</h3>
                    <p>Schedule a video call with our experts</p>
                    <a href="#" class="service-link" onclick="alert('Video consultation booking will be implemented')">
                        Book Video Call <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-file-upload"></i>
                    </div>
                    <h3>Document Upload</h3>
                    <p>Securely upload your financial documents</p>
                    <a href="#" class="service-link" onclick="alert('Document upload portal will be implemented')">
                        Upload Documents <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <p>Chat with our support team in real-time</p>
                    <a href="#" class="service-link" onclick="alert('Live chat will be implemented')">
                        Start Chat <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.contact-form .form-group {
    margin-bottom: 1.5rem;
}

.contact-form .form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--dark);
}

.contact-form .form-control {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid var(--light-accent);
    border-radius: var(--border-radius-small);
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
    font-family: inherit;
}

.contact-form .form-control:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
}

.contact-form textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

.contact-form select.form-control {
    cursor: pointer;
}

.contact-info {
    background: white;
    padding: 2rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-medium);
    height: fit-content;
}

@media (max-width: 768px) {
    .contact-form [style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
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
            alert('Message sent successfully! We will get back to you soon.');
            this.reset();
        } else {
            alert(data.message || 'Failed to send message. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to send message. Please try again.');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});
</script>
@endpush