@extends('layouts.app')

@section('title', $page_title)
@section('meta_description', $meta_description)

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="section-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Secure <span class="highlight">Online Payment</span></h1>
                    <p>Pay your invoices safely and conveniently through our secure payment gateway. We accept multiple payment methods including cards, net banking, UPI, and digital wallets.</p>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-shield-alt"></i>
                            <span>SSL Secured</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-lock"></i>
                            <span>PCI Compliant</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--success); font-weight: 600;">
                            <i class="fas fa-check-circle"></i>
                            <span>Bank Grade Security</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-card">
                        <div class="icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h3>Multiple Payment Options</h3>
                        <p>Choose from various secure payment methods that suit your preference and convenience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Form Section -->
    <section class="section">
        <div class="section-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Make Payment</h2>
                    <p>Fill in your details below to process your payment securely. All transactions are encrypted and processed through trusted payment gateways.</p>
                    
                    <form id="paymentForm" action="{{ route('payment.process') }}" method="POST" class="payment-form">
                        @csrf
                        
                        <!-- Client Information -->
                        <div style="background: var(--light-secondary); padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-user"></i> Client Information</h3>
                            
                            <div class="form-group">
                                <label for="client_name" class="form-label">Full Name *</label>
                                <input type="text" id="client_name" name="client_name" class="form-control" required>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="client_email" class="form-label">Email Address *</label>
                                    <input type="email" id="client_email" name="client_email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="client_phone" class="form-label">Phone Number *</label>
                                    <input type="tel" id="client_phone" name="client_phone" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Service & Payment Details -->
                        <div style="background: white; padding: 2rem; border-radius: var(--border-radius-small); box-shadow: var(--shadow-soft); margin-bottom: 2rem;">
                            <h3 style="color: var(--primary); margin-bottom: 1.5rem;"><i class="fas fa-receipt"></i> Service & Payment Details</h3>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="service_type" class="form-label">Service Type *</label>
                                    <select id="service_type" name="service_type" class="form-control" required>
                                        <option value="">Select Service</option>
                                        @foreach($service_categories as $service)
                                        <option value="{{ $service }}">{{ $service }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="amount" class="form-label">Amount (₹) *</label>
                                    <input type="number" id="amount" name="amount" class="form-control" min="1" step="0.01" required>
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div class="form-group">
                                    <label for="invoice_number" class="form-label">Invoice Number (Optional)</label>
                                    <input type="text" id="invoice_number" name="invoice_number" class="form-control" placeholder="INV-2024-001">
                                </div>
                                <div class="form-group">
                                    <label for="payment_method" class="form-label">Preferred Payment Method *</label>
                                    <select id="payment_method" name="payment_method" class="form-control" required>
                                        <option value="">Select Payment Method</option>
                                        <option value="card">Credit/Debit Card</option>
                                        <option value="netbanking">Net Banking</option>
                                        <option value="upi">UPI</option>
                                        <option value="wallet">Digital Wallet</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="form-label">Payment Description (Optional)</label>
                                <textarea id="description" name="description" class="form-control" rows="3" placeholder="Additional details about this payment..."></textarea>
                            </div>
                        </div>

                        <!-- Payment Summary -->
                        <div style="background: var(--gradient-primary); color: white; padding: 2rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <h3 style="color: white; margin-bottom: 1.5rem;"><i class="fas fa-calculator"></i> Payment Summary</h3>
                            
                            <div style="display: flex; justify-content: space-between; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(255,255,255,0.3);">
                                <span>Subtotal:</span>
                                <span id="subtotal">₹0.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(255,255,255,0.3);">
                                <span>Processing Fee:</span>
                                <span id="processing_fee">₹0.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 1.2rem; font-weight: 700;">
                                <span>Total Amount:</span>
                                <span id="total_amount">₹0.00</span>
                            </div>
                        </div>

                        <!-- Terms & Conditions -->
                        <div style="background: var(--light-secondary); padding: 1.5rem; border-radius: var(--border-radius-small); margin-bottom: 2rem;">
                            <label style="display: flex; align-items: flex-start; gap: 0.5rem; cursor: pointer;">
                                <input type="checkbox" id="terms_accepted" name="terms_accepted" required style="margin-top: 0.2rem;">
                                <span style="font-size: 0.9rem; color: var(--dark-secondary);">
                                    I agree to the <a href="{{ route('terms-of-service') }}" target="_blank" style="color: var(--primary); text-decoration: none;">Terms of Service</a> and 
                                    <a href="{{ route('privacy-policy') }}" target="_blank" style="color: var(--primary); text-decoration: none;">Privacy Policy</a>. 
                                    I understand that all payments are secure and processed through encrypted channels.
                                </span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; padding: 1rem; font-size: 1.1rem;">
                            <i class="fas fa-lock"></i>
                            Proceed to Secure Payment
                        </button>
                    </form>
                </div>

                <div class="about-image">
                    <!-- Payment Methods -->
                    <div class="about-card" style="margin-bottom: 2rem;">
                        <h3 style="text-align: center; margin-bottom: 1.5rem; color: var(--dark);">Accepted Payment Methods</h3>
                        
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-bottom: 2rem;">
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <i class="fas fa-credit-card" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                <p style="margin: 0; font-size: 0.9rem; font-weight: 600;">Credit/Debit Cards</p>
                            </div>
                            
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <i class="fas fa-university" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                <p style="margin: 0; font-size: 0.9rem; font-weight: 600;">Net Banking</p>
                            </div>
                            
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <i class="fas fa-mobile-alt" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                <p style="margin: 0; font-size: 0.9rem; font-weight: 600;">UPI</p>
                            </div>
                            
                            <div style="text-align: center; padding: 1rem; background: var(--light-secondary); border-radius: var(--border-radius-small);">
                                <i class="fas fa-wallet" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                <p style="margin: 0; font-size: 0.9rem; font-weight: 600;">Digital Wallets</p>
                            </div>
                        </div>
                    </div>

                    <!-- Security Features -->
                    <div class="about-card" style="background: var(--success); color: white;">
                        <h3 style="color: white; text-align: center; margin-bottom: 1.5rem;">Security Features</h3>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-shield-alt" style="color: white; margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.9rem;">256-bit SSL Encryption</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-lock" style="color: white; margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.9rem;">PCI DSS Compliant</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-user-shield" style="color: white; margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.9rem;">Fraud Protection</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-eye-slash" style="color: white; margin-right: 1rem; font-size: 1.2rem;"></i>
                                <span style="font-size: 0.9rem;">No Card Details Stored</span>
                            </div>
                        </div>
                        
                        <div style="text-align: center; padding: 1rem; background: rgba(255,255,255,0.2); border-radius: var(--border-radius-small);">
                            <p style="margin: 0; font-size: 0.9rem;">Your payment information is completely secure and encrypted during transmission.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help Section -->
    <section class="section" style="background: var(--light-secondary);">
        <div class="section-container">
            <div class="section-title">
                <h2>Need Help?</h2>
                <p>If you face any issues with payment or have questions about our payment process</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Call Support</h3>
                    <p>Speak directly with our support team for immediate assistance with payments.</p>
                    <a href="tel:+919876543210" class="service-link">
                        Call +91 98765 43210 <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Support</h3>
                    <p>Send us your payment queries and we'll respond within 24 hours.</p>
                    <a href="mailto:payments@casmk.com" class="service-link">
                        Email payments@casmk.com <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h3>Payment FAQ</h3>
                    <p>Find answers to common questions about our payment process and policies.</p>
                    <a href="{{ route('resources.faq') }}" class="service-link">
                        View Payment FAQ <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.payment-form .form-group {
    margin-bottom: 1.5rem;
}

.payment-form .form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--dark);
}

.payment-form .form-control {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid var(--light-accent);
    border-radius: var(--border-radius-small);
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
    font-family: inherit;
}

.payment-form .form-control:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
}

@media (max-width: 768px) {
    .payment-form [style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.getElementById('paymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Validate required fields
    const requiredFields = ['client_name', 'client_email', 'client_phone', 'service_type', 'amount', 'payment_method'];
    let isValid = true;
    
    for (let field of requiredFields) {
        const element = document.getElementById(field);
        if (!element.value.trim()) {
            element.style.borderColor = 'var(--danger)';
            isValid = false;
        } else {
            element.style.borderColor = 'var(--light-accent)';
        }
    }
    
    if (!document.getElementById('terms_accepted').checked) {
        alert('Please accept the terms and conditions to proceed.');
        return;
    }
    
    if (!isValid) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing Payment...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Payment initiated successfully! You will be redirected to the payment gateway.');
            if (data.payment_url) {
                window.location.href = data.payment_url;
            }
        } else {
            alert(data.message || 'Payment initiation failed. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Payment processing failed. Please try again or contact support.');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Update payment summary when amount changes
document.getElementById('amount').addEventListener('input', function() {
    const amount = parseFloat(this.value) || 0;
    const processingFee = Math.round(amount * 0.02 * 100) / 100; // 2% processing fee
    const total = amount + processingFee;
    
    document.getElementById('subtotal').textContent = '₹' + amount.toFixed(2);
    document.getElementById('processing_fee').textContent = '₹' + processingFee.toFixed(2);
    document.getElementById('total_amount').textContent = '₹' + total.toFixed(2);
});
</script>
@endpush