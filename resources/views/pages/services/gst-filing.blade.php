{{-- GST Filing: pages/services/gst-filing.blade.php --}}
@extends('layouts.app')
@section('title', 'GST Filing Services - CA Sai Manoj Kumar')
@section('content')
<section class="hero">
    <div class="section-container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>GST <span class="highlight">Filing</span> Services</h1>
                <p>Monthly and quarterly GST return filing with accurate calculations and timely submissions.</p>
                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="hero-btn primary">Get GST Filing Services</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta">
    <div class="section-container">
        <h2>GST Returns Due?</h2>
        <p>Never miss GST filing deadlines with our professional filing services.</p>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="cta-btn white">Get GST Filing Services</a>
        </div>
    </div>
</section>
@endsection