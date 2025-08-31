@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>FEMA <span class="highlight">Compliance</span> Services</h1>
                    <p>Expert Foreign Exchange Management Act (FEMA) compliance services for international businesses. Ensure complete regulatory compliance with comprehensive FEMA advisory and reporting services.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-shield-alt"></i>
                            Get FEMA Compliance
                        </a>
                        <a href="{{ route('contact.quote') }}" class="hero-btn secondary">
                            <i class="fas fa-calculator"></i>
                            Get Compliance Quote
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3>Complete FEMA Compliance</h3>
                        <p>Comprehensive compliance management for all foreign exchange transactions and regulatory reporting requirements under FEMA.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEMA Services -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Our FEMA Compliance Services</h2>
                <p>Comprehensive range of services to ensure complete FEMA compliance</p>
            </div>
            
            <div class="services-grid">
                @foreach($services as $index => $service)
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
                                @case(0) fa-search-plus @break
                                @case(1) fa-file-alt @break
                                @case(2) fa-globe @break
                                @case(3) fa-money-bill-wave @break
                            @endswitch
                        "></i>
                    </div>
                    <h3>{{ $service }}</h3>
                    <p>
                        @switch($service)
                            @case('FEMA Compliance Audit')
                                Comprehensive audit of all foreign exchange transactions to ensure compliance with FEMA regulations and identify any gaps or violations.
                                @break
                            @case('Foreign Investment Reporting')
                                Complete reporting services for foreign direct investment (FDI) and foreign institutional investment (FII) including FC-GPR and other mandatory filings.
                                @break
                            @case('Overseas Direct Investment')
                                Advisory and compliance services for Indian companies investing abroad including ODI approvals and reporting requirements.
                                @break
                            @case('External Commercial Borrowing')
                                ECB compliance services including approvals, documentation, reporting, and ongoing compliance management.
                                @break
                            @default
                                Expert {{ strtolower($service) }} services to ensure complete FEMA compliance.
                        @endswitch
                    </p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>RBI Approved Procedures</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Timely Reporting</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Expert Advisory</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Ongoing Support</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FEMA Overview -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Understanding FEMA</h2>
                <p>Key aspects of Foreign Exchange Management Act and its implications</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h3>What is FEMA?</h3>
                    <p>The Foreign Exchange Management Act (FEMA) is an Act of the Parliament of India that regulates foreign exchange transactions and promotes orderly development and maintenance of foreign exchange market in India.</p>
                    
                    <div style="margin-top: 2rem;">
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-gavel"></i> Key Objectives</h4>
                        <p style="margin-bottom: 1.5rem;">• Facilitate external trade and payments<br>• Promote orderly development of forex market<br>• Conserve foreign exchange<br>• Regulate foreign exchange transactions</p>
                        
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-users"></i> Who Needs to Comply</h4>
                        <p style="margin-bottom: 1.5rem;">• Foreign companies operating in India<br>• Indian companies with foreign investments<br>• Individuals dealing in foreign exchange<br>• Banks and financial institutions</p>
                        
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-exclamation-triangle"></i> Non-Compliance Penalties</h4>
                        <p>Penalties for FEMA violations can include monetary fines, criminal prosecution, and restriction of future foreign exchange transactions.</p>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card">
                        <h3 style="text-align: center; margin-bottom: 2rem; color: var(--dark);">FEMA Compliance Areas</h3>
                        
                        <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem;">
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-arrow-down"></i> FDI Compliance</div>
                                <p style="margin: 0; font-size: 0.9rem;">Foreign Direct Investment reporting and compliance</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-arrow-up"></i> ODI Compliance</div>
                                <p style="margin: 0; font-size: 0.9rem;">Overseas Direct Investment approvals and reporting</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-exchange-alt"></i> Trade Transactions</div>
                                <p style="margin: 0; font-size: 0.9rem;">Import/export and trade-related foreign exchange</p>
                            </div>
                            
                            <div style="padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 1.2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;"><i class="fas fa-credit-card"></i> Current Account</div>
                                <p style="margin: 0; font-size: 0.9rem;">Current account transactions and remittances</p>
                            </div>
                        </div>
                        
                        <div style="text-align: center; margin-top: 2rem;">
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <i class="fas fa-phone"></i>
                                Get FEMA Advisory
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compliance Process -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>FEMA Compliance Process</h2>
                <p>Our systematic approach to ensure complete FEMA compliance</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Compliance Assessment</h3>
                        <p>Comprehensive assessment of current foreign exchange transactions and identification of compliance requirements.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Gap Analysis</h3>
                        <p>Identify gaps in current compliance procedures and develop remediation plan for any violations.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Documentation & Reporting</h3>
                        <p>Prepare all required documentation and complete mandatory reporting to RBI and other authorities.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>System Implementation</h3>
                        <p>Implement compliance systems and procedures for ongoing monitoring and reporting.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Ongoing Monitoring</h3>
                        <p>Regular monitoring and review to ensure continued compliance with evolving FEMA regulations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Common FEMA Requirements -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Common FEMA Requirements</h2>
                <p>Key compliance requirements under FEMA for different types of transactions</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-building"></i> FDI Reporting</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>FC-GPR (Foreign Currency - Gross Provisional Return)</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Annual Return on FDI (ARF)</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>FLA (Foreign Liability and Asset) Return</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>DIR-3 KYC for foreign directors</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-globe"></i> ODI Compliance</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>ODI application and approval</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Annual Performance Report (APR)</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Quarterly reporting requirements</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Compliance with sectoral caps</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-money-bill-wave"></i> ECB Compliance</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>ECB approval and documentation</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Monthly ECB return (ECB-2)</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Utilization certificate</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>End-use monitoring and reporting</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light);">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-exchange-alt"></i> Trade Transactions</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Export-Import documentation</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>FIDR (Foreign Investment in India Return)</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>BOP (Balance of Payment) reporting</li>
                        <li style="padding: 0.5rem 0;"><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>SOFTEX/STPI reporting for IT exports</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Why Choose Our FEMA Services</h2>
                <p>Expert compliance management with deep regulatory knowledge</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Expert Team</h3>
                    <p>Chartered accountants and legal experts with deep FEMA knowledge and regulatory experience.</p>
                </div>

                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Timely Compliance</h3>
                    <p>Proactive approach ensuring all filings and reporting requirements are completed on time.</p>
                </div>

                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Risk Management</h3>
                    <p>Comprehensive risk assessment and management to avoid penalties and violations.</p>
                </div>

                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Ongoing Support</h3>
                    <p>Continuous support and advisory services for evolving regulatory requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ensure FEMA Compliance Today</h2>
            <p>Don't risk penalties and violations. Get expert FEMA compliance services and maintain complete regulatory compliance for your international business operations.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="cta-btn white">
                    <i class="fas fa-shield-alt"></i>
                    Get FEMA Compliance
                </a>
                <a href="{{ route('contact.quote') }}" class="cta-btn outline">
                    <i class="fas fa-calculator"></i>
                    Get Compliance Quote
                </a>
            </div>
        </div>
    </section>
@endsection