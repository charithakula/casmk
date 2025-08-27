@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Branch Office <span class="highlight">Setup</span> in India</h1>
                    <p>Establish your foreign company's branch office in India with complete regulatory compliance. Expert guidance through RBI approvals, registrations, and ongoing compliance requirements.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-building"></i>
                            Start Branch Office Setup
                        </a>
                        <a href="{{ route('contact.quote') }}" class="hero-btn secondary">
                            <i class="fas fa-calculator"></i>
                            Get Setup Quote
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <h3>Complete Setup Support</h3>
                        <p>End-to-end branch office establishment services with full regulatory compliance and ongoing support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Requirements -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Branch Office Setup Requirements</h2>
                <p>Essential requirements for establishing a branch office in India</p>
            </div>
            
            <div class="services-grid">
                @foreach($requirements as $index => $requirement)
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, 
                        @switch($index % 4)
                            @case(0) #667eea 0%, #764ba2 100%); color: white; @break
                            @case(1) #f093fb 0%, #f5576c 100%); color: white; @break
                            @case(2) #4facfe 0%, #00f2fe 100%); color: white; @break
                            @case(3) #a8edea 0%, #fed6e3 100%); color: #333; @break
                        @endswitch
                    ">
                        <i class="fas 
                            @switch($index % 4)
                                @case(0) fa-university @break
                                @case(1) fa-building @break
                                @case(2) fa-file-alt @break
                                @case(3) fa-check-circle @break
                            @endswitch
                        "></i>
                    </div>
                    <h3>{{ $requirement }}</h3>
                    <p>
                        @switch($requirement)
                            @case('RBI Approval')
                                Reserve Bank of India approval is mandatory for establishing a branch office. We handle the entire approval process including documentation and follow-up.
                                @break
                            @case('Company Registration')
                                Complete company registration with Ministry of Corporate Affairs including obtaining Corporate Identity Number (CIN) and other required registrations.
                                @break
                            @case('Tax Registrations')
                                PAN, TAN, GST registration, and other applicable tax registrations to ensure complete compliance with Indian tax laws.
                                @break
                            @case('Compliance Setup')
                                Setting up systems for ongoing compliance including statutory filings, regulatory reporting, and audit requirements.
                                @break
                            @default
                                Complete assistance with {{ strtolower($requirement) }} requirements for your branch office setup.
                        @endswitch
                    </p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Expert Guidance</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Complete Documentation</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Timely Processing</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Ongoing Support</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Permitted Activities -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Permitted Activities for Branch Office</h2>
                <p>Activities that can be undertaken by a branch office in India</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h3>Export/Import Business</h3>
                    <p>Branch offices are primarily permitted to engage in export and import activities related to the parent company's business.</p>
                    
                    <div style="margin-top: 2rem;">
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-shipping-fast"></i> Export Activities</h4>
                        <p style="margin-bottom: 1.5rem;">• Export of goods and services<br>• Export promotion activities<br>• Export documentation and logistics</p>
                        
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-download"></i> Import Activities</h4>
                        <p style="margin-bottom: 1.5rem;">• Import of goods for parent company<br>• Technology transfer<br>• Import documentation and clearance</p>
                        
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-handshake"></i> Professional Services</h4>
                        <p>Rendering professional or consultancy services directly related to the parent company's expertise and business.</p>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card">
                        <h3 style="text-align: center; margin-bottom: 2rem; color: var(--dark);">Key Benefits</h3>
                        
                        <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem;">
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-globe"></i> Direct Operations</div>
                                <p style="margin: 0; font-size: 0.9rem;">Direct operational presence in India without separate incorporation</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-money-bill-wave"></i> Profit Repatriation</div>
                                <p style="margin: 0; font-size: 0.9rem;">Ability to repatriate profits to the parent company</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-shield-alt"></i> Limited Liability</div>
                                <p style="margin: 0; font-size: 0.9rem;">Branch operations backed by parent company's financial strength</p>
                            </div>
                        </div>
                        
                        <div style="text-align: center; margin-top: 2rem;">
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <i class="fas fa-phone"></i>
                                Discuss Your Requirements
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Setup Process -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Branch Office Setup Process</h2>
                <p>Step-by-step process for establishing your branch office in India</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>RBI Application</h3>
                        <p>Prepare and submit application to Reserve Bank of India for branch office establishment approval.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>RBI Approval</h3>
                        <p>Obtain RBI approval letter with specific terms and conditions for branch office operations.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>ROC Registration</h3>
                        <p>Register with Registrar of Companies (ROC) and obtain Corporate Identity Number (CIN).</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Tax Registrations</h3>
                        <p>Obtain PAN, TAN, GST registration, and other applicable tax registrations.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Bank Account & Operations</h3>
                        <p>Open bank account, set up office premises, and commence business operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Documentation Required -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Required Documentation</h2>
                <p>Essential documents needed for branch office registration</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-building"></i> Parent Company Documents</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Certificate of Incorporation</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Memorandum & Articles of Association</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Board Resolution</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Audited Financial Statements</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-user-tie"></i> Authorized Representative</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Passport Copy</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Visa Documentation</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Educational Qualifications</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Experience Certificate</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Establish Your Branch Office?</h2>
            <p>Let our experts handle the entire process from RBI approval to operations commencement. Get professional guidance for your branch office setup in India.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="cta-btn white">
                    <i class="fas fa-building"></i>
                    Start Branch Office Setup
                </a>
                <a href="{{ route('contact.quote') }}" class="cta-btn outline">
                    <i class="fas fa-calculator"></i>
                    Get Setup Quote
                </a>
            </div>
        </div>
    </section>
@endsection