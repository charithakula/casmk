@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>About <span class="highlight">CA Sai Manoj Kumar</span></h1>
                    <p>{{ $about_content['mission'] }}</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-handshake"></i>
                            Get In Touch
                        </a>
                        <a href="{{ route('about.team') }}" class="hero-btn secondary">
                            <i class="fas fa-users"></i>
                            Meet Our Team
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>{{ $about_content['experience_years'] }} Years of Excellence</h3>
                        <p>Trusted by {{ $about_content['clients_served'] }} businesses across India for comprehensive financial solutions and strategic growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section">
        <div class="section-container">
            <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr); gap: 2rem; margin-top: 0;">
                <div class="stat-card">
                    <span class="number">{{ $about_content['experience_years'] }}</span>
                    <span class="label">Years Experience</span>
                </div>
                <div class="stat-card">
                    <span class="number">{{ $about_content['clients_served'] }}</span>
                    <span class="label">Happy Clients</span>
                </div>
                <div class="stat-card">
                    <span class="number">{{ $about_content['services_offered'] }}</span>
                    <span class="label">Services Offered</span>
                </div>
                <div class="stat-card">
                    <span class="number">{{ $about_content['satisfaction_rate'] }}</span>
                    <span class="label">Client Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Our Vision & Mission</h2>
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-eye"></i> Vision</h4>
                        <p>{{ $about_content['vision'] }}</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-bullseye"></i> Mission</h4>
                        <p>{{ $about_content['mission'] }}</p>
                    </div>
                </div>
                <div class="about-image">
                    <div class="about-card">
                        <h3 style="text-align: center; margin-bottom: 1.5rem; color: var(--dark);">Our Certifications</h3>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                            @foreach($certifications as $certification)
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <i class="fas fa-certificate" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                <p style="font-weight: 600; margin: 0;">{{ $certification }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="section">
        <div class="section-container">
            <div class="section-title">
                <h2>Our Core Values</h2>
                <p>The principles that guide our professional practice and client relationships</p>
            </div>
            
            <div class="features-grid">
                @foreach($about_content['values'] as $value => $description)
                <div class="feature-card">
                    <div class="icon">
                        @switch($value)
                            @case('Integrity')
                                <i class="fas fa-shield-alt"></i>
                                @break
                            @case('Excellence')
                                <i class="fas fa-star"></i>
                                @break
                            @case('Innovation')
                                <i class="fas fa-lightbulb"></i>
                                @break
                            @case('Client Focus')
                                <i class="fas fa-users"></i>
                                @break
                            @case('Transparency')
                                <i class="fas fa-eye"></i>
                                @break
                            @default
                                <i class="fas fa-heart"></i>
                        @endswitch
                    </div>
                    <h3>{{ $value }}</h3>
                    <p>{{ $description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="section-container">
            <h2>Ready to Work With Us?</h2>
            <p>Join {{ $about_content['clients_served'] }} satisfied clients who trust us with their financial success.</p>
            
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="cta-btn white">
                    <i class="fas fa-calendar-check"></i>
                    Schedule Consultation
                </a>
                <a href="{{ route('services') }}" class="cta-btn outline">
                    <i class="fas fa-list"></i>
                    View Our Services
                </a>
            </div>
        </div>
    </section>
@endsection