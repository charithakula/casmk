@extends('layouts.app')

@section('title', 'Professional CA Services - CA Sai Manoj Kumar')
@section('meta_description', 'Comprehensive chartered accountant services including audit, taxation, GST, business formation, and financial advisory.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Comprehensive <span class="highlight">CA Services</span></h1>
                    <p>From taxation and audit to business advisory and international services, we provide end-to-end financial solutions for businesses of all sizes. Our expert team ensures compliance, optimization, and strategic growth.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact.quote') }}" class="hero-btn primary">
                            <i class="fas fa-calculator"></i>
                            Get Custom Quote
                        </a>
                        <a href="{{ route('contact') }}" class="hero-btn secondary">
                            <i class="fas fa-comments"></i>
                            Free Consultation
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>50+ Professional Services</h3>
                        <p>Complete suite of chartered accountant services designed to meet all your business financial needs under one roof.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Categories -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Our Service Categories</h2>
                <p>Explore our comprehensive range of professional services</p>
            </div>
            
            <div class="services-grid">
                <!-- Audit & Assurance -->
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Audit & Assurance</h3>
                    <p>Professional audit services to ensure compliance and build stakeholder confidence in your financial statements.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary);">
                        <li>Statutory Audit</li>
                        <li>Internal Audit</li>
                        <li>Tax Audit</li>
                        <li>Bank Audit</li>
                    </ul>
                    <a href="{{ route('services.audit') }}" class="service-link">
                        Explore Audit Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Taxation Services -->
                <div class="service-card featured-service">
                    <div class="icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Income Tax Services</h3>
                    <p>Complete tax planning, filing, and compliance services to minimize your tax liability while ensuring full compliance.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary);">
                        <li>Income Tax Filing</li>
                        <li>Tax Planning & Advisory</li>
                        <li>NRI Taxation</li>
                        <li>Corporate Tax</li>
                    </ul>
                    <a href="{{ route('services.tax') }}" class="service-link">
                        View Tax Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- GST Services -->
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <h3>GST Services</h3>
                    <p>End-to-end GST compliance and advisory services to navigate the complex GST regulations seamlessly.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary);">
                        <li>GST Registration</li>
                        <li>GST Return Filing</li>
                        <li>GST Audit</li>
                        <li>Input Tax Credit</li>
                    </ul>
                    <a href="{{ route('services.gst') }}" class="service-link">
                        GST Solutions <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Business Formation -->
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Business Formation</h3>
                    <p>Complete business setup and incorporation services from idea to execution and beyond.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary);">
                        <li>Private Limited Company</li>
                        <li>LLP Registration</li>
                        <li>One Person Company</li>
                        <li>Startup Registration</li>
                    </ul>
                    <a href="{{ route('services.startup') }}" class="service-link">
                        Start Your Business <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- CFO Services -->
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Outsourced CFO Services</h3>
                    <p>Strategic financial management and leadership without the overhead of a full-time CFO.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary);">
                        <li>Financial Planning</li>
                        <li>Strategic Advisory</li>
                        <li>Investor Relations</li>
                        <li>Risk Management</li>
                    </ul>
                    <a href="{{ route('services.outsourcing.cfo') }}" class="service-link">
                        CFO Solutions <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- International Services -->
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>International Services</h3>
                    <p>Cross-border taxation and compliance services for global businesses and investments.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary);">
                        <li>Transfer Pricing</li>
                        <li>International Taxation</li>
                        <li>FEMA Compliance</li>
                        <li>Foreign Investment</li>
                    </ul>
                    <a href="{{ route('services.international') }}" class="service-link">
                        Global Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Services -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Why Choose Our Services</h2>
                <p>Experience the difference that professional expertise makes</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Expert Professionals</h3>
                    <p>Qualified CAs and financial experts with extensive industry experience across various sectors.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Timely Delivery</h3>
                    <p>We understand deadlines matter. Our efficient processes ensure on-time delivery every time.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Compliance</h3>
                    <p>Stay fully compliant with all regulatory requirements and avoid penalties with our expert guidance.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Personalized Service</h3>
                    <p>Tailored solutions designed specifically for your business needs and industry requirements.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Technology Driven</h3>
                    <p>Latest accounting software and digital tools for efficient service delivery and reporting.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h3>Competitive Pricing</h3>
                    <p>Transparent, affordable pricing with flexible packages to suit businesses of all sizes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Packages -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Service Packages</h2>
                <p>Choose the perfect package for your business needs</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <!-- Startup Package -->
                <div class="service-card" style="border: 2px solid var(--primary); position: relative;">
                    <div style="position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: var(--primary); color: white; padding: 0.25rem 1rem; border-radius: 15px; font-size: 0.8rem; font-weight: 600;">POPULAR</div>
                    <div class="icon" style="background: var(--primary); color: white;">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Startup Package</h3>
                    <p style="margin-bottom: 1.5rem;">Perfect for new businesses and entrepreneurs starting their journey.</p>
                    <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small); margin-bottom: 1.5rem;">
                        <div style="font-size: 2rem; font-weight: 900; color: var(--primary); margin-bottom: 0.5rem;">₹15,000</div>
                        <div style="color: var(--dark-secondary); font-size: 0.9rem;">Starting from / One-time</div>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Company Registration</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>GST Registration</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Basic Bookkeeping Setup</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Tax Registration</li>
                    </ul>
                    <a href="{{ route('contact.quote') }}?package=startup" class="btn btn-primary" style="width: 100%; margin-top: 1.5rem;">
                        Choose Startup Package
                    </a>
                </div>

                <!-- Growing Business Package -->
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Growing Business</h3>
                    <p style="margin-bottom: 1.5rem;">Comprehensive services for established businesses looking to scale.</p>
                    <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small); margin-bottom: 1.5rem;">
                        <div style="font-size: 2rem; font-weight: 900; color: var(--primary); margin-bottom: 0.5rem;">₹25,000</div>
                        <div style="color: var(--dark-secondary); font-size: 0.9rem;">Starting from / Monthly</div>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Monthly Bookkeeping</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>GST Filing</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>TDS Compliance</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Financial Reports</li>
                    </ul>
                    <a href="{{ route('contact.quote') }}?package=growing" class="btn btn-secondary" style="width: 100%; margin-top: 1.5rem;">
                        Choose Growing Package
                    </a>
                </div>

                <!-- Enterprise Package -->
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Enterprise Solutions</h3>
                    <p style="margin-bottom: 1.5rem;">Complete financial management for large enterprises and corporations.</p>
                    <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small); margin-bottom: 1.5rem;">
                        <div style="font-size: 2rem; font-weight: 900; color: var(--primary); margin-bottom: 0.5rem;">Custom</div>
                        <div style="color: var(--dark-secondary); font-size: 0.9rem;">Tailored Pricing</div>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Full CFO Services</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Statutory Audit</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Tax Planning</li>
                        <li style="margin: 0.5rem 0; color: var(--dark-secondary);"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Dedicated Team</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline" style="width: 100%; margin-top: 1.5rem;">
                        Request Custom Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Get Started?</h2>
            <p>Join 500+ businesses that trust us with their financial success. Get expert CA services tailored to your needs.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact.quote') }}" class="cta-btn white">
                    <i class="fas fa-calculator"></i>
                    Get Free Quote
                </a>
                <a href="tel:+919876543210" class="cta-btn outline">
                    <i class="fas fa-phone"></i>
                    Call: +91 98765 43210
                </a>
            </div>
        </div>
    </section>
@endsection