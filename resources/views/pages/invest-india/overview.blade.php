@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Investment <span class="highlight">Overview</span> India</h1>
                    <p>Comprehensive guide to investment opportunities in India. Navigate the regulatory landscape, understand compliance requirements, and make informed investment decisions with our expert guidance.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-handshake"></i>
                            Start Your Investment Journey
                        </a>
                        <a href="{{ route('contact.quote') }}" class="hero-btn secondary">
                            <i class="fas fa-calculator"></i>
                            Get Investment Consultation
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Growing Economy</h3>
                        <p>India offers tremendous investment opportunities with its rapidly growing economy, skilled workforce, and supportive government policies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Sectors -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Key Investment Sectors</h2>
                <p>Explore high-potential sectors for foreign investment in India</p>
            </div>
            
            <div class="services-grid">
                @foreach($sectors as $index => $sector)
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, 
                        @switch($index % 6)
                            @case(0) #667eea 0%, #764ba2 100%); color: white; @break
                            @case(1) #f093fb 0%, #f5576c 100%); color: white; @break
                            @case(2) #4facfe 0%, #00f2fe 100%); color: white; @break
                            @case(3) #a8edea 0%, #fed6e3 100%); color: #333; @break
                            @case(4) #ffecd2 0%, #fcb69f 100%); color: #333; @break
                            @case(5) #d299c2 0%, #fef9d7 100%); color: #333; @break
                        @endswitch
                    ">
                        <i class="fas 
                            @switch($index % 6)
                                @case(0) fa-laptop-code @break
                                @case(1) fa-industry @break
                                @case(2) fa-heartbeat @break
                                @case(3) fa-university @break
                                @case(4) fa-shopping-cart @break
                                @case(5) fa-building @break
                            @endswitch
                        "></i>
                    </div>
                    <h3>{{ $sector }}</h3>
                    <p>{{ $sector }} sector offers excellent investment opportunities with supportive policies and growing market demand.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>FDI Policy Support</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Tax Incentives Available</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Growing Market</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Regulatory Support</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FDI Routes -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Foreign Direct Investment Routes</h2>
                <p>Choose the right investment route for your business needs</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h3>Automatic Route</h3>
                    <p>Foreign investment is allowed without prior approval from the Government or RBI in sectors/activities where FDI is permitted under the automatic route.</p>
                    
                    <div style="margin-top: 2rem;">
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-check-circle"></i> Key Benefits</h4>
                        <p style="margin-bottom: 1.5rem;">• No prior government approval required<br>• Faster processing time<br>• Reduced compliance burden</p>
                        
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-list"></i> Eligible Sectors</h4>
                        <p>Most sectors including manufacturing, IT services, telecommunications, and pharmaceuticals are covered under automatic route with specified limits.</p>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card">
                        <h3>Government Route</h3>
                        <p style="margin-bottom: 2rem;">Foreign investment requires prior approval from the Government in certain sensitive sectors or beyond prescribed limits.</p>
                        
                        <div style="display: grid; grid-template-columns: 1fr; gap: 1rem;">
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.5rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;">FIPB Route</div>
                                <p style="margin: 0; font-size: 0.9rem;">Foreign Investment Promotion Board approval required for certain sectors</p>
                            </div>
                            
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.5rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;">Sectoral Caps</div>
                                <p style="margin: 0; font-size: 0.9rem;">Different sectors have different FDI limits ranging from 26% to 100%</p>
                            </div>
                        </div>
                        
                        <div style="text-align: center; margin-top: 2rem;">
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <i class="fas fa-phone"></i>
                                Discuss Your Investment Plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Process -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Investment Process Overview</h2>
                <p>Step-by-step guide to investing in India</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Market Research & Planning</h3>
                        <p>Conduct thorough market research, identify opportunities, and develop investment strategy.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Structure Selection</h3>
                        <p>Choose appropriate business structure - subsidiary, branch office, or representative office.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Regulatory Approvals</h3>
                        <p>Obtain necessary approvals from RBI, FIPB, and sector-specific regulators as required.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Entity Incorporation</h3>
                        <p>Incorporate the entity, complete registration formalities, and obtain required licenses.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Fund Transfer & Compliance</h3>
                        <p>Transfer funds through proper channels and ensure ongoing compliance requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Invest in India?</h2>
            <p>Let our experts guide you through the entire investment process, from planning to implementation and ongoing compliance management.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="cta-btn white">
                    <i class="fas fa-handshake"></i>
                    Schedule Consultation
                </a>
                <a href="{{ route('contact.quote') }}" class="cta-btn outline">
                    <i class="fas fa-calculator"></i>
                    Get Investment Quote
                </a>
            </div>
        </div>
    </section>
@endsection