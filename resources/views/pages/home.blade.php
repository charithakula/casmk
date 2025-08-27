@extends('layouts.app')

@section('title', 'CA Sai Manoj Kumar - Expert Chartered Accountant Services')
@section('meta_description', 'Professional chartered accountant services for taxation, audit, compliance, and business advisory. Trusted by 500+ businesses across India for comprehensive financial solutions.')
@section('meta_keywords', 'chartered accountant, CA services, tax consultant, audit services, GST filing, business incorporation, financial advisory, Hyderabad CA')

@section('content')
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Expert <span class="highlight">Chartered Accountant</span> Services for Your Business Growth</h1>
                    <p>Professional accounting, taxation, and compliance solutions tailored to your needs. With over 15+ years of experience, we help businesses navigate complex financial regulations while maximizing growth opportunities.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-calendar-check"></i>
                            Book Consultation
                        </a>
                        <a href="{{ route('services') }}" class="hero-btn secondary">
                            <i class="fas fa-arrow-right"></i>
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Trusted by 500+ Businesses</h3>
                        <p>From startups to established corporations, we provide comprehensive financial solutions that drive success across all industries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="section services" id="services">
        <div class="section-container">
            <div class="section-title">
                <h2>Comprehensive CA Services</h2>
                <p>Expert financial solutions designed to simplify compliance, optimize taxes, and accelerate your business growth</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Income Tax Services</h3>
                    <p>Complete tax planning, filing, and compliance services for individuals and businesses. Minimize tax liability while ensuring full compliance.</p>
                    <a href="{{ route('services.tax') }}" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Audit & Assurance</h3>
                    <p>Statutory audits, internal audits, and assurance services to ensure your financial statements meet regulatory standards.</p>
                    <a href="{{ route('services.audit') }}" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <h3>GST Services</h3>
                    <p>Complete GST registration, filing, and compliance management. Stay updated with the latest GST regulations and optimize your tax position.</p>
                    <a href="{{ route('services.gst') }}" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Business Formation</h3>
                    <p>Company incorporation, LLP registration, and startup services. Complete support from idea to incorporation and beyond.</p>
                    <a href="{{ route('services.startup') }}" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>CFO Services</h3>
                    <p>Outsourced CFO solutions for growing businesses. Strategic financial management without the overhead of a full-time CFO.</p>
                    <a href="{{ route('services.outsourcing.cfo') }}" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>International Services</h3>
                    <p>Transfer pricing, international taxation, and foreign investment compliance. Navigate global business complexities with confidence.</p>
                    <a href="{{ route('services.international') }}" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="section about" id="about">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h3>About CA Sai Manoj Kumar</h3>
                    <p>With over 15 years of experience in chartered accountancy, taxation, and financial advisory, CA Sai Manoj Kumar has built a reputation for excellence in professional services. Our firm combines traditional accounting expertise with modern technology to deliver efficient, accurate, and timely solutions.</p>
                    
                    <p>We serve clients across various industries, from emerging startups to established corporations, providing personalized attention and strategic guidance that drives business success. Our commitment to staying current with regulatory changes ensures our clients always remain compliant while optimizing their financial position.</p>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <span class="number">500+</span>
                            <span class="label">Happy Clients</span>
                        </div>
                        <div class="stat-card">
                            <span class="number">15+</span>
                            <span class="label">Years Experience</span>
                        </div>
                        <div class="stat-card">
                            <span class="number">50+</span>
                            <span class="label">Services Offered</span>
                        </div>
                        <div class="stat-card">
                            <span class="number">99%</span>
                            <span class="label">Client Satisfaction</span>
                        </div>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card">
                        <div class="icon" style="width: 100px; height: 100px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; font-size: 2.5rem; color: white;">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 style="text-align: center; margin-bottom: 1rem; color: var(--dark);">Professional Excellence</h3>
                        <p style="text-align: center; color: var(--dark-secondary); line-height: 1.6;">Certified member of the Institute of Chartered Accountants of India (ICAI) with expertise in taxation, audit, and financial consulting across multiple industries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section class="section features">
        <div class="section-container">
            <div class="section-title">
                <h2>Why Choose Our Services</h2>
                <p>Experience the difference that professional expertise, personalized attention, and cutting-edge technology make for your business</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Timely Delivery</h3>
                    <p>Never miss a deadline with our efficient processes and proactive approach to all your compliance requirements.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Accuracy</h3>
                    <p>Our rigorous quality checks and experienced team ensure error-free deliverables every time.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Expert Team</h3>
                    <p>Qualified chartered accountants and financial experts dedicated to your business success.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock availability for urgent queries and continuous support for your business needs.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Technology Driven</h3>
                    <p>Latest accounting software and digital tools for efficient service delivery and transparent reporting.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h3>Competitive Pricing</h3>
                    <p>Transparent, affordable pricing with flexible packages tailored to your business size and requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Transform Your Business Finances?</h2>
            <p>Get expert chartered accountant services that drive growth and ensure compliance. Schedule your free consultation today.</p>
            
            <div class="cta-actions">
                <a href="tel:+919876543210" class="cta-btn white">
                    <i class="fas fa-phone"></i>
                    Call Now: +91 98765 43210
                </a>
                <a href="{{ route('contact') }}" class="cta-btn outline">
                    <i class="fas fa-envelope"></i>
                    Get Free Consultation
                </a>
            </div>
        </div>
    </section>
@endsection