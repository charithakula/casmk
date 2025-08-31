
{{-- INDIVIDUAL GST SERVICES --}}

{{-- GST Registration: pages/services/gst-registration.blade.php --}}
@extends('layouts.app')
@section('title', 'GST Registration Services - CA Sai Manoj Kumar')
@section('meta_description', 'Professional GST registration services with complete documentation and application support.')

@section('content')
<section class="hero">
    <div class="section-container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>GST <span class="highlight">Registration</span></h1>
                <p>Professional GST registration services with complete documentation, application filing, and GSTIN activation.</p>
                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="hero-btn primary">
                        <i class="fas fa-user-plus"></i>
                        Get GST Registration
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta">
    <div class="section-container">
        <h2>Need GST Registration?</h2>
        <p>Get your GST registration done professionally with complete support.</p>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="cta-btn white">Get GST Registration</a>
            <a href="{{ route('services.gst') }}" class="cta-btn outline">All GST Services</a>
        </div>
    </div>
</section>
@endsection