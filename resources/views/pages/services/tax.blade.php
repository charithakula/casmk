@extends('layouts.app')

@section('title', 'Income Tax Services - CA Sai Manoj Kumar')
@section('meta_description', 'Professional income tax services including filing, planning, and compliance for individuals and businesses.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1><span class="highlight">Income Tax</span> Services</h1>
                    <p>Comprehensive income tax solutions for individuals, businesses, and NRIs. Our expert tax consultants ensure maximum savings while maintaining full compliance with tax regulations.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact.quote') }}?service=tax" class="hero-btn primary">
                            <i class="fas fa-calculator"></i>
                            Get Tax Quote
                        </a>
                        <a href="{{ route('contact') }}" class="hero-btn secondary">
                            <i class="fas fa-phone"></i>
                            Call Tax Expert
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3>Average 30% Tax Savings</h3>
                        <p>Our strategic tax planning helps clients save an average of 30% on their tax liability through legal optimization strategies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Our Income Tax Services</h2>
                <p>Complete tax solutions covering all aspects of income tax compliance and planning</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Income Tax Filing</h3>
                    <p>Expert preparation and filing of income tax returns for individuals, HUFs, and businesses with maximum deductions.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem;">
                        <li>ITR-1, ITR-2, ITR-3, ITR-4 filing</li>
                        <li>Revised returns</li>
                        <li>Belated returns</li>
                        <li>Loss carry forward returns</li>
                    </ul>
                    <a href="{{ route('services.tax.filing') }}" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card featured-service">
                    <div class="icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Tax Planning & Advisory</h3>
                    <p>Strategic tax planning to minimize your tax burden through legal and effective tax optimization strategies.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem;">
                        <li>Investment planning under 80C</li>
                        <li>Capital gains optimization</li>
                        <li>Business structure planning</li>
                        <li>Retirement planning</li>
                    </ul>
                    <a href="{{ route('services.tax.planning') }}" class="service-link">
                        Start Planning <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3>NRI Taxation</h3>
                    <p>Specialized tax services for Non-Resident Indians including return filing and compliance management.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem;">
                        <li>NRI return filing</li>
                        <li>DTAA benefits</li>
                        <li>Foreign income reporting</li>
                        <li>Tax residency determination</li>
                    </ul>
                    <a href="{{ route('services.tax.nri') }}" class="service-link">
                        NRI Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Corporate Tax Services</h3>
                    <p>Complete corporate tax solutions including planning, compliance, and optimization for businesses.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem;">
                        <li>Corporate return filing</li>
                        <li>Tax audit under 44AB</li>
                        <li>Transfer pricing compliance</li>
                        <li>MAT & AMT planning</li>
                    </ul>
                    <a href="{{ route('services.tax.corporate') }}" class="service-link">
                        Corporate Tax <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>TDS Compliance</h3>
                    <p>Complete TDS management including registration, filing, and compliance for businesses and individuals.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem;">
                        <li>TDS registration</li>
                        <li>Monthly TDS returns</li>
                        <li>TDS reconciliation</li>
                        <li>Lower deduction certificates</li>
                    </ul>
                    <a href="{{ route('services.tax.tds') }}" class="service-link">
                        TDS Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Tax Litigation Support</h3>
                    <p>Expert representation and support for tax disputes, appeals, and litigation matters.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem;">
                        <li>Assessment proceedings</li>
                        <li>CIT(A) appeals</li>
                        <li>ITAT representation</li>
                        <li>Settlement commission</li>
                    </ul>
                    <a href="{{ route('services.tax.litigation') }}" class="service-link">
                        Legal Support <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tax Deadlines -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Important Tax Deadlines 2024-25</h2>
                <p>Stay compliant with key income tax deadlines</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div class="service-card" style="text-align: center;">
                    <div class="icon" style="background: var(--danger); color: white;">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>ITR Filing</h3>
                    <p style="font-size: 1.2rem; font-weight: 700; color: var(--danger); margin: 1rem 0;">July 31, 2024</p>
                    <p>Last date for filing income tax returns for individuals (without audit)</p>
                </div>

                <div class="service-card" style="text-align: center;">
                    <div class="icon" style="background: var(--warning); color: white;">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Advance Tax Q3</h3>
                    <p style="font-size: 1.2rem; font-weight: 700; color: var(--warning); margin: 1rem 0;">Dec 15, 2024</p>
                    <p>Third installment of advance tax payment (75% of total tax)</p>
                </div>

                <div class="service-card" style="text-align: center;">
                    <div class="icon" style="background: var(--success); color: white;">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>TDS Returns</h3>
                    <p style="font-size: 1.2rem; font-weight: 700; color: var(--success); margin: 1rem 0;">Monthly</p>
                    <p>Monthly TDS return filing by 7th of following month</p>
                </div>

                <div class="service-card" style="text-align: center;">
                    <div class="icon" style="background: var(--primary); color: white;">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Tax Audit</h3>
                    <p style="font-size: 1.2rem; font-weight: 700; color: var(--primary); margin: 1rem 0;">Sep 30, 2024</p>
                    <p>Tax audit report filing under section 44AB</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="{{ route('contact') }}?subject=tax-deadline-help" class="btn btn-primary btn-lg">
                    <i class="fas fa-calendar-check"></i>
                    Get Deadline Reminder Service
                </a>
            </div>
        </div>
    </section>

    <!-- Tax Benefits & Deductions -->
    <section class="section">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Maximize Your Tax Savings</h2>
                    <p>Our tax experts help you identify and utilize all available deductions and exemptions to minimize your tax liability legally.</p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                        <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small);">
                            <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-piggy-bank"></i> Section 80C</h4>
                            <p style="margin: 0; font-size: 0.9rem;">Up to ₹1.5 lakh deduction on investments in PPF, ELSS, NSC, and more.</p>
                        </div>
                        
                        <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small);">
                            <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-home"></i> Home Loan</h4>
                            <p style="margin: 0; font-size: 0.9rem;">Interest deduction up to ₹2 lakh under section 24(b) for home loans.</p>
                        </div>
                        
                        <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small);">
                            <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-heartbeat"></i> Health Insurance</h4>
                            <p style="margin: 0; font-size: 0.9rem;">Up to ₹25,000 deduction for health insurance premiums under 80D.</p>
                        </div>
                        
                        <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small);">
                            <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-graduation-cap"></i> Education Loan</h4>
                            <p style="margin: 0; font-size: 0.9rem;">Complete interest deduction on education loan under section 80E.</p>
                        </div>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card" style="background: var(--gradient-primary); color: white;">
                        <div style="text-align: center; margin-bottom: 2rem;">
                            <div style="width: 100px; height: 100px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2.5rem;">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <h3 style="color: white; margin-bottom: 1rem;">Tax Calculator</h3>
                            <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">Get an instant estimate of your tax liability and potential savings with our advanced tax calculator.</p>
                            <a href="#" onclick="alert('Tax calculator will be implemented')" style="background: white; color: var(--primary); padding: 0.75rem 1.5rem; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-calculator"></i>
                                Calculate Tax
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Our Tax Service Process</h2>
                <p>Simple, transparent, and efficient tax service delivery</p>
            </div>
            
            <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">1</div>
                    <h3>Document Collection</h3>
                    <p>We collect all necessary documents and financial information from you.</p>
                </div>

                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">2</div>
                    <h3>Analysis & Review</h3>
                    <p>Our experts analyze your financial data for maximum deductions and compliance.</p>
                </div>

                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">3</div>
                    <h3>Return Preparation</h3>
                    <p>We prepare your tax return with maximum savings and complete accuracy.</p>
                </div>

                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">4</div>
                    <h3>Filing & Follow-up</h3>
                    <p>We file your return and handle all follow-up communications with tax authorities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Optimize Your Taxes?</h2>
            <p>Let our tax experts help you save money while staying fully compliant. Get started with a free consultation today.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact.quote') }}?service=income-tax" class="cta-btn white">
                    <i class="fas fa-calculator"></i>
                    Get Free Tax Quote
                </a>
                <a href="tel:+919876543210" class="cta-btn outline">
                    <i class="fas fa-phone"></i>
                    Call Tax Expert: +91 98765 43210
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.service-card ul {
    list-style-type: none;
    padding-left: 0;
}

.service-card ul li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
    color: var(--dark-secondary);
}

.service-card ul li::before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--success);
    font-size: 0.8rem;
}
</style>
@endpush