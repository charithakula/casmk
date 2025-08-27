@extends('layouts.app')

@section('title', 'Industries We Serve - CA Sai Manoj Kumar')
@section('meta_description', 'Specialized chartered accountant services for various industries including IT, manufacturing, healthcare, real estate, and more.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Industries We <span class="highlight">Specialize</span> In</h1>
                    <p>Deep industry expertise across multiple sectors. Our specialized knowledge helps businesses navigate industry-specific regulations, optimize operations, and achieve sustainable growth.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-handshake"></i>
                            Discuss Your Industry
                        </a>
                        <a href="{{ route('services') }}" class="hero-btn secondary">
                            <i class="fas fa-cogs"></i>
                            View All Services
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3>7+ Industry Verticals</h3>
                        <p>Comprehensive expertise across major industry sectors with specialized teams and industry-specific solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Grid -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Our Industry Expertise</h2>
                <p>Specialized services tailored to your industry's unique requirements</p>
            </div>
            
            <div class="services-grid">
                <!-- Information Technology -->
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Information Technology</h3>
                    <p>Specialized services for IT companies, software firms, and technology startups with expertise in complex IT regulations.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Software Export Benefits</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Transfer Pricing</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>R&D Tax Benefits</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>STPI/SEZ Compliance</li>
                    </ul>
                    <a href="{{ route('industries.it') }}" class="service-link">
                        IT Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Manufacturing -->
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Manufacturing</h3>
                    <p>Comprehensive financial solutions for manufacturing companies including compliance, cost optimization, and growth strategies.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Factory Act Compliance</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Environmental Clearances</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Excise & Customs</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Working Capital Management</li>
                    </ul>
                    <a href="{{ route('industries.manufacturing') }}" class="service-link">
                        Manufacturing Solutions <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Real Estate -->
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white;">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Real Estate</h3>
                    <p>Real estate development and investment advisory services with expertise in property regulations and tax planning.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>RERA Compliance</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Project Financing</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Capital Gains Planning</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Joint Development Agreements</li>
                    </ul>
                    <a href="{{ route('industries.real-estate') }}" class="service-link">
                        Real Estate Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Healthcare -->
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: #333;">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Healthcare & Pharma</h3>
                    <p>Healthcare and pharmaceutical industry specialized services including regulatory compliance and research benefits.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Drug Licensing</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Medical Device Compliance</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Clinical Trial Accounting</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Hospital Financial Management</li>
                    </ul>
                    <a href="{{ route('industries.healthcare') }}" class="service-link">
                        Healthcare Solutions <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- E-commerce -->
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%); color: #333;">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-commerce & Retail</h3>
                    <p>Digital business accounting, multi-channel compliance, and strategic growth advisory for online retailers.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Marketplace Compliance</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Multi-state GST</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Digital Payment Reconciliation</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Inventory Valuation</li>
                    </ul>
                    <a href="{{ route('industries.ecommerce') }}" class="service-link">
                        E-commerce Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Education -->
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%); color: #333;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education Sector</h3>
                    <p>Educational institution accounting, compliance, and financial management for schools, colleges, and training institutes.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Trust & Society Compliance</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Fee Structure Planning</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Grant Management</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Educational Loans</li>
                    </ul>
                    <a href="{{ route('industries.education') }}" class="service-link">
                        Education Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Hospitality -->
                <div class="service-card">
                    <div class="icon" style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%); color: white;">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Hospitality & Tourism</h3>
                    <p>Hospitality and tourism industry accounting, seasonal business planning, and regulatory compliance services.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Tourism License Compliance</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Seasonal Cash Flow Planning</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>F&B Cost Management</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Hotel Revenue Management</li>
                    </ul>
                    <a href="{{ route('industries.hospitality') }}" class="service-link">
                        Hospitality Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Additional Industries -->
                <div class="service-card" style="background: var(--gradient-primary); color: white;">
                    <div class="icon" style="background: rgba(255,255,255,0.2); color: white;">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <h3 style="color: white;">Other Industries</h3>
                    <p style="color: rgba(255,255,255,0.9);">We also serve financial services, logistics, agriculture, construction, and many other industries with specialized expertise.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: rgba(255,255,255,0.8); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i>Financial Services</li>
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i>Logistics & Transportation</li>
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i>Agriculture & Food Processing</li>
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i>Construction & Infrastructure</li>
                    </ul>
                    <a href="{{ route('contact') }}?subject=other-industry" class="service-link" style="color: white;">
                        Discuss Your Industry <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Expertise -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Our Industry-Specific Approach</h2>
                <p>How we deliver specialized value to different industries</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h3>Deep Industry Knowledge</h3>
                    <p>Our team combines chartered accountancy expertise with deep industry knowledge to provide solutions that address sector-specific challenges and opportunities.</p>
                    
                    <div style="margin-top: 2rem;">
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-chart-line"></i> Industry Insights</h4>
                        <p style="margin-bottom: 1.5rem;">We stay updated with industry trends, regulatory changes, and best practices to provide forward-thinking advice.</p>
                        
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-users"></i> Specialized Teams</h4>
                        <p style="margin-bottom: 1.5rem;">Dedicated teams for each industry vertical with relevant experience and certifications.</p>
                        
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-cog"></i> Customized Solutions</h4>
                        <p>Tailored services and workflows designed specifically for your industry's unique requirements.</p>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card">
                        <h3 style="text-align: center; margin-bottom: 2rem; color: var(--dark);">Industry Statistics</h3>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 2rem; font-weight: 900; color: var(--primary); margin-bottom: 0.5rem;">70%</div>
                                <p style="margin: 0; font-size: 0.9rem;">IT Sector Clients</p>
                            </div>
                            
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 2rem; font-weight: 900; color: var(--primary); margin-bottom: 0.5rem;">15+</div>
                                <p style="margin: 0; font-size: 0.9rem;">Years Experience</p>
                            </div>
                            
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 2rem; font-weight: 900; color: var(--primary); margin-bottom: 0.5rem;">500+</div>
                                <p style="margin: 0; font-size: 0.9rem;">Companies Served</p>
                            </div>
                            
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <div style="font-size: 2rem; font-weight: 900; color: var(--primary); margin-bottom: 0.5rem;">7+</div>
                                <p style="margin: 0; font-size: 0.9rem;">Industry Verticals</p>
                            </div>
                        </div>
                        
                        <div style="text-align: center; margin-top: 2rem;">
                            <a href="{{ route('about') }}" class="btn btn-primary">
                                <i class="fas fa-info-circle"></i>
                                Learn More About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Work With Industry Experts?</h2>
            <p>Get specialized financial solutions designed specifically for your industry. Let our experts help you navigate sector-specific challenges and opportunities.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="cta-btn white">
                    <i class="fas fa-handshake"></i>
                    Discuss Your Industry Needs
                </a>
                <a href="{{ route('contact.quote') }}" class="cta-btn outline">
                    <i class="fas fa-calculator"></i>
                    Get Industry-Specific Quote
                </a>
            </div>
        </div>
    </section>
@endsection