@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Frequently Asked <span class="highlight">Questions</span></h1>
                    <p>Find answers to common questions about our chartered accountant services, processes, and policies. Can't find what you're looking for? Contact us directly for personalized assistance.</p>
                    <div class="hero-actions">
                        <a href="{{ route('contact') }}" class="hero-btn primary">
                            <i class="fas fa-question-circle"></i>
                            Ask a Question
                        </a>
                        <a href="{{ route('resources') }}" class="hero-btn secondary">
                            <i class="fas fa-book"></i>
                            All Resources
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Quick Answers</h3>
                        <p>Get instant answers to the most commonly asked questions about our services and processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Search -->
    <section class="section" style="padding: 2rem 0; background: var(--light-secondary);">
        <div class="section-container">
            <div style="max-width: 600px; margin: 0 auto; text-align: center;">
                <h3 style="margin-bottom: 1rem; color: var(--dark);">Search FAQs</h3>
                <div style="position: relative;">
                    <input type="text" id="faqSearch" placeholder="Type your question here..." style="width: 100%; padding: 1rem 3rem 1rem 1rem; border: 2px solid var(--light-accent); border-radius: 50px; font-size: 1.1rem; outline: none; transition: all 0.3s ease;">
                    <i class="fas fa-search" style="position: absolute; right: 1.5rem; top: 50%; transform: translateY(-50%); color: var(--dark-secondary);"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="section">
        <div class="section-container">
            @foreach($faqs as $category)
            <div class="faq-category" style="margin-bottom: 3rem;">
                <h2 style="color: var(--primary); margin-bottom: 2rem; padding-bottom: 0.5rem; border-bottom: 2px solid var(--primary);"><i class="fas fa-folder-open"></i> {{ $category['category'] }}</h2>
                
                <div class="faq-list">
                    @foreach($category['questions'] as $index => $faq)
                    <div class="faq-item" style="margin-bottom: 1rem; background: white; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq('faq-{{ $loop->parent->index }}-{{ $index }}')" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--light-secondary); border-bottom: 1px solid var(--light-accent); transition: all 0.3s ease;">
                            <h3 style="margin: 0; color: var(--dark); font-size: 1.1rem; font-weight: 600;">{{ $faq['q'] }}</h3>
                            <i class="fas fa-chevron-down faq-icon" style="color: var(--primary); transition: transform 0.3s ease;"></i>
                        </div>
                        <div class="faq-answer" id="faq-{{ $loop->parent->index }}-{{ $index }}" style="padding: 0 1.5rem; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                            <div style="padding: 1.5rem 0;">
                                <p style="margin: 0; color: var(--dark-secondary); line-height: 1.7;">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Additional FAQ Categories -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="faq-category">
                <h2 style="color: var(--primary); margin-bottom: 2rem; padding-bottom: 0.5rem; border-bottom: 2px solid var(--primary);"><i class="fas fa-cogs"></i> Services & Pricing</h2>
                
                <div class="faq-list">
                    <div class="faq-item" style="margin-bottom: 1rem; background: white; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq('faq-services-1')" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--light-secondary); border-bottom: 1px solid var(--light-accent);">
                            <h3 style="margin: 0; color: var(--dark); font-size: 1.1rem; font-weight: 600;">How do you determine your service fees?</h3>
                            <i class="fas fa-chevron-down faq-icon" style="color: var(--primary);"></i>
                        </div>
                        <div class="faq-answer" id="faq-services-1" style="padding: 0 1.5rem; max-height: 0; overflow: hidden;">
                            <div style="padding: 1.5rem 0;">
                                <p style="margin: 0; color: var(--dark-secondary);">Our fees are based on the complexity of your requirements, transaction volume, and time involved. We provide transparent quotes upfront with no hidden charges.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" style="margin-bottom: 1rem; background: white; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq('faq-services-2')" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--light-secondary); border-bottom: 1px solid var(--light-accent);">
                            <h3 style="margin: 0; color: var(--dark); font-size: 1.1rem; font-weight: 600;">Do you provide services to clients outside India?</h3>
                            <i class="fas fa-chevron-down faq-icon" style="color: var(--primary);"></i>
                        </div>
                        <div class="faq-answer" id="faq-services-2" style="padding: 0 1.5rem; max-height: 0; overflow: hidden;">
                            <div style="padding: 1.5rem 0;">
                                <p style="margin: 0; color: var(--dark-secondary);">Yes, we provide services to NRIs and international clients, especially for India-related tax compliance, investment advice, and business setup.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" style="margin-bottom: 1rem; background: white; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq('faq-services-3')" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--light-secondary); border-bottom: 1px solid var(--light-accent);">
                            <h3 style="margin: 0; color: var(--dark); font-size: 1.1rem; font-weight: 600;">What is your typical turnaround time for tax returns?</h3>
                            <i class="fas fa-chevron-down faq-icon" style="color: var(--primary);"></i>
                        </div>
                        <div class="faq-answer" id="faq-services-3" style="padding: 0 1.5rem; max-height: 0; overflow: hidden;">
                            <div style="padding: 1.5rem 0;">
                                <p style="margin: 0; color: var(--dark-secondary);">Individual returns: 3-5 working days. Business returns: 7-10 working days. Complex cases may require additional time, which we communicate upfront.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-category" style="margin-top: 3rem;">
                <h2 style="color: var(--primary); margin-bottom: 2rem; padding-bottom: 0.5rem; border-bottom: 2px solid var(--primary);"><i class="fas fa-file-alt"></i> Documentation & Process</h2>
                
                <div class="faq-list">
                    <div class="faq-item" style="margin-bottom: 1rem; background: white; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq('faq-docs-1')" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--light-secondary); border-bottom: 1px solid var(--light-accent);">
                            <h3 style="margin: 0; color: var(--dark); font-size: 1.1rem; font-weight: 600;">What documents do I need for tax filing?</h3>
                            <i class="fas fa-chevron-down faq-icon" style="color: var(--primary);"></i>
                        </div>
                        <div class="faq-answer" id="faq-docs-1" style="padding: 0 1.5rem; max-height: 0; overflow: hidden;">
                            <div style="padding: 1.5rem 0;">
                                <p style="margin: 0; color: var(--dark-secondary);">Form 16, salary slips, bank statements, investment proofs (80C, 80D), property documents, business records, and previous year's return. We provide a detailed checklist based on your specific situation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" style="margin-bottom: 1rem; background: white; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq('faq-docs-2')" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--light-secondary); border-bottom: 1px solid var(--light-accent);">
                            <h3 style="margin: 0; color: var(--dark); font-size: 1.1rem; font-weight: 600;">How do you ensure the security of my financial information?</h3>
                            <i class="fas fa-chevron-down faq-icon" style="color: var(--primary);"></i>
                        </div>
                        <div class="faq-answer" id="faq-docs-2" style="padding: 0 1.5rem; max-height: 0; overflow: hidden;">
                            <div style="padding: 1.5rem 0;">
                                <p style="margin: 0; color: var(--dark-secondary);">We maintain strict confidentiality protocols, use secure document transfer systems, and are bound by professional ethics and legal requirements to protect client information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Still Have Questions -->
    <section class="section">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Still Have Questions?</h2>
                    <p>If you couldn't find the answer to your question in our FAQ section, don't hesitate to reach out to us directly. Our team is always ready to provide personalized assistance.</p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                        <div style="text-align: center; padding: 1.5rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                            <i class="fas fa-phone" style="color: var(--primary); font-size: 2rem; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 0.5rem; color: var(--dark);">Call Us</h4>
                            <p style="margin: 0; font-size: 0.9rem;"><a href="tel:+919876543210" style="color: var(--primary); text-decoration: none;">+91 98765 43210</a></p>
                        </div>
                        
                        <div style="text-align: center; padding: 1.5rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                            <i class="fas fa-envelope" style="color: var(--primary); font-size: 2rem; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 0.5rem; color: var(--dark);">Email Us</h4>
                            <p style="margin: 0; font-size: 0.9rem;"><a href="mailto:info@casmk.com" style="color: var(--primary); text-decoration: none;">info@casmk.com</a></p>
                        </div>
                        
                        <div style="text-align: center; padding: 1.5rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                            <i class="fas fa-comments" style="color: var(--primary); font-size: 2rem; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 0.5rem; color: var(--dark);">Live Chat</h4>
                            <p style="margin: 0; font-size: 0.9rem;"><a href="#" onclick="alert('Live chat will be implemented')" style="color: var(--primary); text-decoration: none;">Start Chat</a></p>
                        </div>
                    </div>
                </div>

                <div class="about-image">
                    <div class="about-card" style="background: var(--gradient-primary); color: white;">
                        <h3 style="color: white; text-align: center; margin-bottom: 1.5rem;">Expert Consultation</h3>
                        
                        <div style="text-align: center; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; font-size: 0.95rem;">Schedule a one-on-one consultation with our CA experts to discuss your specific requirements and get personalized advice.</p>
                        </div>
                        
                        <div style="text-align: center;">
                            <a href="{{ route('contact') }}" style="background: white; color: var(--primary); padding: 0.75rem 1.5rem; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-calendar-check"></i>
                                Book Consultation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.faq-question:hover {
    background: var(--primary) !important;
    color: white;
}

.faq-question:hover h3 {
    color: white !important;
}

.faq-question:hover .faq-icon {
    color: white !important;
}

.faq-answer.active {
    max-height: 200px !important;
}

.faq-answer.active + .faq-question .faq-icon {
    transform: rotate(180deg);
}

#faqSearch:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
}
</style>
@endpush

@push('scripts')
<script>
function toggleFaq(faqId) {
    const faqAnswer = document.getElementById(faqId);
    const faqIcon = faqAnswer.previousElementSibling.querySelector('.faq-icon');
    
    // Close all other FAQs
    document.querySelectorAll('.faq-answer').forEach(answer => {
        if (answer.id !== faqId) {
            answer.classList.remove('active');
            answer.style.maxHeight = '0';
            const icon = answer.previousElementSibling.querySelector('.faq-icon');
            icon.style.transform = 'rotate(0deg)';
        }
    });
    
    // Toggle current FAQ
    if (faqAnswer.classList.contains('active')) {
        faqAnswer.classList.remove('active');
        faqAnswer.style.maxHeight = '0';
        faqIcon.style.transform = 'rotate(0deg)';
    } else {
        faqAnswer.classList.add('active');
        faqAnswer.style.maxHeight = faqAnswer.scrollHeight + 'px';
        faqIcon.style.transform = 'rotate(180deg)';
    }
}

// FAQ Search functionality
document.getElementById('faqSearch').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
        const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();
        
        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = searchTerm === '' ? 'block' : 'none';
        }
    });
});
</script>
@endpush