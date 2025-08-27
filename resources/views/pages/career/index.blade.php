@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Build Your <span class="highlight">Career</span> With Us</h1>
                    <p>Join our team of professional chartered accountants and financial experts. We offer exciting career opportunities, continuous learning, and a supportive work environment for growth and success.</p>
                    <div class="hero-actions">
                        <a href="{{ route('career.openings') }}" class="hero-btn primary">
                            <i class="fas fa-briefcase"></i>
                            View Open Positions ({{ $current_openings_count }})
                        </a>
                        <a href="{{ route('career.apply') }}" class="hero-btn secondary">
                            <i class="fas fa-file-upload"></i>
                            Apply Now
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Growing Team of 50+ Professionals</h3>
                        <p>Join a diverse team of chartered accountants, tax experts, and financial consultants working together to deliver excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Us -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Why Work With Us</h2>
                <p>Discover what makes our workplace special and rewarding</p>
            </div>
            
            <div class="features-grid">
                @foreach($why_join_us as $benefit => $description)
                <div class="feature-card">
                    <div class="icon">
                        @switch($benefit)
                            @case('Professional Growth')
                                <i class="fas fa-chart-line"></i>
                                @break
                            @case('Work-Life Balance')
                                <i class="fas fa-balance-scale"></i>
                                @break
                            @case('Competitive Package')
                                <i class="fas fa-money-bill-wave"></i>
                                @break
                            @case('Team Culture')
                                <i class="fas fa-heart"></i>
                                @break
                            @case('Career Advancement')
                                <i class="fas fa-stairs"></i>
                                @break
                            @default
                                <i class="fas fa-star"></i>
                        @endswitch
                    </div>
                    <h3>{{ $benefit }}</h3>
                    <p>{{ $description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Current Opportunities -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Current Opportunities</h2>
                <p>Explore exciting career opportunities across different departments</p>
            </div>
            
            <div class="about-content">
                <div class="about-text">
                    <h3>{{ $current_openings_count }} Open Positions Available</h3>
                    <p>We're actively seeking talented professionals to join our growing team. Whether you're a fresh graduate or an experienced professional, we have opportunities that match your skills and aspirations.</p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                        <div style="background: white; padding: 1.5rem; border-radius: var(--border-radius-small); text-align: center; box-shadow: var(--shadow-soft);">
                            <div style="color: var(--primary); font-size: 2rem; margin-bottom: 0.5rem;"><i class="fas fa-calculator"></i></div>
                            <h4 style="color: var(--dark); margin-bottom: 0.5rem;">Tax Department</h4>
                            <p style="margin: 0; font-size: 0.9rem; color: var(--dark-secondary);">2 Positions</p>
                        </div>
                        
                        <div style="background: white; padding: 1.5rem; border-radius: var(--border-radius-small); text-align: center; box-shadow: var(--shadow-soft);">
                            <div style="color: var(--primary); font-size: 2rem; margin-bottom: 0.5rem;"><i class="fas fa-search-plus"></i></div>
                            <h4 style="color: var(--dark); margin-bottom: 0.5rem;">Audit Team</h4>
                            <p style="margin: 0; font-size: 0.9rem; color: var(--dark-secondary);">2 Positions</p>
                        </div>
                        
                        <div style="background: white; padding: 1.5rem; border-radius: var(--border-radius-small); text-align: center; box-shadow: var(--shadow-soft);">
                            <div style="color: var(--primary); font-size: 2rem; margin-bottom: 0.5rem;"><i class="fas fa-receipt"></i></div>
                            <h4 style="color: var(--dark); margin-bottom: 0.5rem;">GST Specialist</h4>
                            <p style="margin: 0; font-size: 0.9rem; color: var(--dark-secondary);">1 Position</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="{{ route('career.openings') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i>
                            View All Openings
                        </a>
                        <a href="{{ route('career.apply') }}" class="btn btn-secondary">
                            <i class="fas fa-paper-plane"></i>
                            Submit Application
                        </a>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card" style="background: var(--gradient-primary); color: white;">
                        <h3 style="color: white; text-align: center; margin-bottom: 2rem;">Employee Benefits</h3>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span>Health & Medical Insurance</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span>Professional Development Budget</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span>Flexible Working Hours</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span>Performance Bonuses</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span>CA Study Support</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span>Team Outings & Events</span>
                            </div>
                        </div>
                        
                        <div style="text-align: center;">
                            <a href="mailto:hr@casmk.com" style="background: white; color: var(--primary); padding: 0.75rem 1.5rem; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-envelope"></i>
                                Contact HR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Internship Programs -->
    @if($internships_available)
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Internship Programs</h2>
                <p>Start your career journey with our comprehensive internship programs</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>CA Articleship Program</h3>
                    <p>Complete 3-year articleship training covering all aspects of chartered accountancy practice under experienced CAs.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Comprehensive practical training</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Structured learning modules</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>ICAI stipend guidelines</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Final exam preparation support</li>
                    </ul>
                    <a href="{{ route('career.internships') }}" class="service-link">
                        Apply for Articleship <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <h3>Summer Internship</h3>
                    <p>2-3 month summer internship program for students to gain practical experience in real-world accounting scenarios.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Hands-on project experience</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Mentorship program</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Performance-based stipend</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Certificate of completion</li>
                    </ul>
                    <a href="{{ route('career.internships') }}" class="service-link">
                        Summer Program Details <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Project-Based Internship</h3>
                    <p>6-month project-based internship for specific assignments, research work, and specialized learning opportunities.</p>
                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--dark-secondary); font-size: 0.9rem; list-style: none;">
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Specialized project focus</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Research opportunities</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Fixed monthly stipend</li>
                        <li><i class="fas fa-check" style="color: var(--success); margin-right: 0.5rem;"></i>Potential for full-time offer</li>
                    </ul>
                    <a href="{{ route('career.internships') }}" class="service-link">
                        Project Internship <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Application Process -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Application Process</h2>
                <p>Simple and transparent recruitment process</p>
            </div>
            
            <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">1</div>
                    <h3>Submit Application</h3>
                    <p>Complete the online application form with your resume and cover letter.</p>
                </div>

                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">2</div>
                    <h3>Initial Screening</h3>
                    <p>Our HR team reviews your application and shortlists candidates for the next round.</p>
                </div>

                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">3</div>
                    <h3>Technical Interview</h3>
                    <p>Technical assessment with our subject matter experts to evaluate your skills.</p>
                </div>

                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">4</div>
                    <h3>Final Interview</h3>
                    <p>Final interview with leadership team to discuss role fit and career aspirations.</p>
                </div>

                <div class="feature-card" style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: var(--success); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">5</div>
                    <h3>Welcome Aboard</h3>
                    <p>Comprehensive onboarding process and orientation to get you started successfully.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Start Your Journey?</h2>
            <p>Join our team of dedicated professionals and build a rewarding career in chartered accountancy and financial services.</p>
            
            <div class="cta-actions">
                <a href="{{ route('career.apply') }}" class="cta-btn white">
                    <i class="fas fa-paper-plane"></i>
                    Apply Now
                </a>
                <a href="{{ route('career.openings') }}" class="cta-btn outline">
                    <i class="fas fa-briefcase"></i>
                    View Open Positions
                </a>
            </div>
        </div>
    </section>
@endsection