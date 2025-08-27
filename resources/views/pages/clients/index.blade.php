@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="padding: 4rem 0;">
        <div class="section-container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <div class="hero-text">
                    <h1>Client <span class="highlight">Portal Login</span></h1>
                    <p>Access your secure client portal to view documents, track service progress, and manage your account information.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Form Section -->
    <section class="section" style="padding: 2rem 0 4rem;">
        <div class="section-container">
            <div style="max-width: 500px; margin: 0 auto;">
                <!-- Login Card -->
                <div class="login-card" style="background: white; padding: 3rem; border-radius: var(--border-radius); box-shadow: var(--shadow-strong);">
                    <div style="text-align: center; margin-bottom: 2rem;">
                        <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <h2 style="color: var(--dark); margin-bottom: 0.5rem;">Welcome Back</h2>
                        <p style="color: var(--dark-secondary); margin: 0;">Sign in to access your client portal</p>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger" style="margin-bottom: 2rem;">
                        <ul style="margin: 0; padding-left: 1rem;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (session('success'))
                    <div class="alert alert-success" style="margin-bottom: 2rem;">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('client.authenticate') }}" method="POST" class="login-form">
                        @csrf
                        
                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label for="email" class="form-label" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--dark);">
                                <i class="fas fa-envelope" style="margin-right: 0.5rem; color: var(--primary);"></i>
                                Email Address
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-control" 
                                value="{{ old('email') }}"
                                style="width: 100%; padding: 1rem; border: 2px solid var(--light-accent); border-radius: var(--border-radius-small); font-size: 1rem; transition: all 0.3s ease;"
                                required 
                                autofocus
                            >
                        </div>

                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label for="password" class="form-label" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--dark);">
                                <i class="fas fa-lock" style="margin-right: 0.5rem; color: var(--primary);"></i>
                                Password
                            </label>
                            <div style="position: relative;">
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password" 
                                    class="form-control" 
                                    style="width: 100%; padding: 1rem 3rem 1rem 1rem; border: 2px solid var(--light-accent); border-radius: var(--border-radius-small); font-size: 1rem; transition: all 0.3s ease;"
                                    required
                                >
                                <button type="button" onclick="togglePassword()" style="position: absolute; right: 1rem; top: 50%; transform: translateY(-50%); background: none; border: none; color: var(--dark-secondary); cursor: pointer;">
                                    <i class="fas fa-eye" id="togglePasswordIcon"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 2rem;">
                            <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer; font-size: 0.9rem; color: var(--dark-secondary);">
                                <input type="checkbox" name="remember" style="margin: 0;">
                                Remember me for 30 days
                            </label>
                        </div>

                        <button type="submit" class="login-btn" style="width: 100%; padding: 1rem; background: var(--gradient-primary); color: white; border: none; border-radius: var(--border-radius-small); font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                            <i class="fas fa-sign-in-alt" style="margin-right: 0.5rem;"></i>
                            Sign In to Portal
                        </button>
                    </form>

                    <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--light-accent);">
                        <p style="margin-bottom: 1rem; color: var(--dark-secondary); font-size: 0.9rem;">Forgot your password?</p>
                        <a href="mailto:support@casmk.com?subject=Password Reset Request" style="color: var(--primary); text-decoration: none; font-weight: 600;">
                            <i class="fas fa-envelope"></i>
                            Contact Support
                        </a>
                    </div>
                </div>

                <!-- Information Cards -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-top: 3rem;">
                    <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small); text-align: center;">
                        <i class="fas fa-file-alt" style="color: var(--primary); font-size: 2rem; margin-bottom: 1rem;"></i>
                        <h4 style="color: var(--dark); margin-bottom: 0.5rem; font-size: 1rem;">Access Documents</h4>
                        <p style="margin: 0; font-size: 0.85rem; color: var(--dark-secondary);">View and download your tax returns, financial reports, and compliance documents.</p>
                    </div>

                    <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small); text-align: center;">
                        <i class="fas fa-chart-line" style="color: var(--primary); font-size: 2rem; margin-bottom: 1rem;"></i>
                        <h4 style="color: var(--dark); margin-bottom: 0.5rem; font-size: 1rem;">Track Progress</h4>
                        <p style="margin: 0; font-size: 0.85rem; color: var(--dark-secondary);">Monitor the status of your ongoing projects and service requests.</p>
                    </div>

                    <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small); text-align: center;">
                        <i class="fas fa-calendar-alt" style="color: var(--primary); font-size: 2rem; margin-bottom: 1rem;"></i>
                        <h4 style="color: var(--dark); margin-bottom: 0.5rem; font-size: 1rem;">Important Dates</h4>
                        <p style="margin: 0; font-size: 0.85rem; color: var(--dark-secondary);">Stay updated with compliance deadlines and payment schedules.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Client Section -->
    <section class="section" style="background: var(--gradient-primary); color: white; padding: 3rem 0;">
        <div class="section-container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 style="color: white; margin-bottom: 1rem;">New Client?</h2>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; font-size: 1.1rem;">
                    Join hundreds of satisfied clients who trust us with their financial success. 
                    Get professional CA services and access to our secure client portal.
                </p>
                
                <div style="display: flex; gap: 1rem; justify-content: center; align-items: center; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" style="background: white; color: var(--primary); padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.3s ease;">
                        <i class="fas fa-user-plus"></i>
                        Become a Client
                    </a>
                    
                    <a href="{{ route('services') }}" style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3); padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.3s ease;">
                        <i class="fas fa-list"></i>
                        View Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="section" style="padding: 3rem 0;">
        <div class="section-container">
            <div class="section-title">
                <h2>Need Help?</h2>
                <p>Our support team is here to assist you with login issues and account access</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); max-width: 800px; margin: 0 auto;">
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Support</h3>
                    <p>Speak with our support team for immediate login assistance.</p>
                    <a href="tel:+919876543210" class="service-link">
                        Call +91 98765 43210 <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Support</h3>
                    <p>Send us your login issues and we'll help you resolve them quickly.</p>
                    <a href="mailto:support@casmk.com" class="service-link">
                        Email Support <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h3>Login Help</h3>
                    <p>Find answers to common login and account access questions.</p>
                    <a href="{{ route('resources.faq') }}" class="service-link">
                        Login FAQ <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.form-control:focus {
    outline: none;
    border-color: var(--primary) !important;
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
}

.login-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-medium);
}

.login-card {
    position: relative;
}

.login-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: var(--border-radius) var(--border-radius) 0 0;
}

@media (max-width: 768px) {
    .login-card {
        padding: 2rem 1.5rem;
        margin: 0 1rem;
    }
    
    .section-container > div[style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
    }
}

.alert {
    padding: 1rem 1.25rem;
    border: 1px solid transparent;
    border-radius: var(--border-radius-small);
}

.alert-danger {
    color: var(--danger);
    background-color: rgba(239, 68, 68, 0.1);
    border-color: rgba(239, 68, 68, 0.2);
}

.alert-success {
    color: var(--success);
    background-color: rgba(16, 185, 129, 0.1);
    border-color: rgba(16, 185, 129, 0.2);
}
</style>
@endpush

@push('scripts')
<script>
function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePasswordIcon');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

// Form validation and submission handling
document.querySelector('.login-form').addEventListener('submit', function(e) {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    
    if (!email || !password) {
        e.preventDefault();
        alert('Please fill in all fields.');
        return;
    }
    
    // Show loading state
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Signing In...';
    submitBtn.disabled = true;
    
    // Note: The actual form submission will be handled by Laravel
    // This is just for UX feedback
    setTimeout(() => {
        if (submitBtn.disabled) {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }
    }, 5000);
});

// Remember email in localStorage for convenience (optional)
document.addEventListener('DOMContentLoaded', function() {
    const emailField = document.getElementById('email');
    const rememberedEmail = localStorage.getItem('client_email');
    
    if (rememberedEmail && !emailField.value) {
        emailField.value = rememberedEmail;
    }
    
    // Save email when form is submitted
    document.querySelector('.login-form').addEventListener('submit', function() {
        const email = emailField.value.trim();
        if (email) {
            localStorage.setItem('client_email', email);
        }
    });
});
</script>
@endpush