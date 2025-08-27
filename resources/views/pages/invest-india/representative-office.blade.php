@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Representative Office <span class="highlight">Setup</span> in India</h1>
                    <p>Establish a representative office in India for market research and liaison activities. Perfect for foreign companies exploring the Indian market without direct commercial operations.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-handshake"></i>
                            Setup Representative Office
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
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Market Research Hub</h3>
                        <p>Perfect for companies looking to explore the Indian market, conduct research, and establish initial presence without commercial activities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Allowed Activities -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Permitted Activities</h2>
                <p>Activities that can be undertaken by a representative office in India</p>
            </div>
            
            <div class="services-grid">
                @foreach($activities_allowed as $index => $activity)
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
                                @case(0) fa-chart-bar @break
                                @case(1) fa-comments @break
                                @case(2) fa-cogs @break
                                @case(3) fa-shipping-fast @break
                            @endswitch
                        "></i>
                    </div>
                    <h3>{{ $activity }}</h3>
                    <p>
                        @switch($activity)
                            @case('Market Research')
                                Conduct comprehensive market research, feasibility studies, and analysis of business opportunities in the Indian market.
                                @break
                            @case('Liaison Activities')
                                Act as a liaison between the parent company and Indian parties, facilitate communication and coordination.
                                @break
                            @case('Promotion of Technical Collaboration')
                                Promote technical and financial collaboration between parent company and Indian entities.
                                @break
                            @case('Export Promotion')
                                Promote export of goods and services from India to various countries on behalf of the parent company.
                                @break
                            @default
                                {{ $activity }} activities as permitted under RBI guidelines for representative offices.
                        @endswitch
                    </p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>RBI Approved</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>No Commercial Sales</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Information Gathering</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Market Analysis</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Key Restrictions -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Important Restrictions</h2>
                <p>Activities that representative offices cannot undertake</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h3>Commercial Restrictions</h3>
                    <p>Representative offices cannot engage in any commercial, trading, or industrial activities. They serve purely as liaison and research entities.</p>
                    
                    <div style="margin-top: 2rem;">
                        <h4 style="color: var(--error); margin-bottom: 1rem;"><i class="fas fa-times-circle"></i> Prohibited Activities</h4>
                        <p style="margin-bottom: 1.5rem;">• Direct or indirect commercial activities<br>• Any form of trading operations<br>• Manufacturing or processing<br>• Earning income in India</p>
                        
                        <h4 style="color: var(--error); margin-bottom: 1rem;"><i class="fas fa-ban"></i> Financial Restrictions</h4>
                        <p style="margin-bottom: 1.5rem;">• Cannot earn any income in India<br>• No profit generation allowed<br>• Cannot undertake any business activity</p>
                        
                        <h4 style="color: var(--warning); margin-bottom: 1rem;"><i class="fas fa-exclamation-triangle"></i> Compliance Requirements</h4>
                        <p>Must comply with all RBI reporting requirements and cannot exceed the approved scope of activities.</p>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card">
                        <h3 style="text-align: center; margin-bottom: 2rem; color: var(--dark);">Key Advantages</h3>
                        
                        <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem;">
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-rocket"></i> Quick Setup</div>
                                <p style="margin: 0; font-size: 0.9rem;">Faster approval process compared to branch office or subsidiary</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-dollar-sign"></i> Cost Effective</div>
                                <p style="margin: 0; font-size: 0.9rem;">Lower setup and maintenance costs for market exploration</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-eye"></i> Market Insight</div>
                                <p style="margin: 0; font-size: 0.9rem;">Valuable market intelligence and business opportunity identification</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-step-forward"></i> Stepping Stone</div>
                                <p style="margin: 0; font-size: 0.9rem;">Perfect first step before establishing commercial operations</p>
                            </div>
                        </div>
                        
                        <div style="text-align: center; margin-top: 2rem;">
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <i class="fas fa-phone"></i>
                                Discuss Your Plans
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
                <h2>Representative Office Setup Process</h2>
                <p>Step-by-step process for establishing your representative office in India</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>RBI Application Preparation</h3>
                        <p>Prepare comprehensive application with all required documents and business justification for RBI approval.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>RBI Approval</h3>
                        <p>Submit application to RBI and obtain approval letter with specific terms and conditions for operations.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Registration & PAN</h3>
                        <p>Complete registration formalities and obtain Permanent Account Number (PAN) for tax purposes.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Office Setup</h3>
                        <p>Establish office premises, hire local staff, and set up operational infrastructure within approved scope.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Compliance Framework</h3>
                        <p>Establish systems for ongoing RBI reporting, tax compliance, and regulatory requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Requirements & Documentation -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Requirements & Documentation</h2>
                <p>Essential requirements and documents for representative office setup</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-list-check"></i> Eligibility Criteria</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Foreign company in existence for minimum 5 years</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Profitable operations in home country</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Minimum net worth requirements</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Clear business justification for Indian operations</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-file-alt"></i> Required Documents</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Application Form RO</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Certificate of Incorporation</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Memorandum & Articles</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Audited Financial Statements</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Board Resolution</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-clock"></i> Timeline & Costs</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-calendar" style="color: var(--primary); margin-right: 0.5rem;"></i>RBI Approval: 6-8 weeks</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-calendar" style="color: var(--primary); margin-right: 0.5rem;"></i>Complete Setup: 10-12 weeks</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-rupee-sign" style="color: var(--primary); margin-right: 0.5rem;"></i>Government Fees: ₹15,000-25,000</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-rupee-sign" style="color: var(--primary); margin-right: 0.5rem;"></i>Professional Fees: As per scope</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Establish Your Representative Office?</h2>
            <p>Start your market research and business exploration in India with our expert guidance for representative office setup and ongoing compliance management.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="cta-btn white">
                    <i class="fas fa-handshake"></i>
                    Start Your Application
                </a>
                <a href="{{ route('contact.quote') }}" class="cta-btn outline">
                    <i class="fas fa-calculator"></i>
                    Get Setup Quote
                </a>
            </div>
        </div>
    </section>
@endsection