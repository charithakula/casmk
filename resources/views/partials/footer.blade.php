<!-- COMPREHENSIVE FOOTER -->
<footer class="footer">
    <div class="footer-main">
        <div class="section-container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <h3>CA Sai Manoj Kumar</h3>
                        <p>Professional chartered accountant services with expertise in taxation, audit, compliance, and financial advisory. Trusted by businesses across India for comprehensive financial management and strategic growth solutions.</p>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('services.tax') }}">Taxation Services</a></li>
                        <li><a href="{{ route('services.audit') }}">Audit & Assurance</a></li>
                        <li><a href="{{ route('services.advisory') }}">Business Advisory</a></li>
                        <li><a href="{{ route('services.corporate') }}">Corporate Solutions</a></li>
                        <li><a href="{{ route('services.outsourcing.financial') }}">Financial Management</a></li>
                        <li><a href="{{ route('services.compliance') }}">Regulatory Compliance</a></li>
                        <li><a href="{{ route('services.startup') }}">Company Incorporation</a></li>
                        <li><a href="{{ route('services.gst') }}">GST Registration & Filing</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Specialized Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('services.international.taxation') }}">International Taxation</a></li>
                        <li><a href="{{ route('services.international.transfer-pricing') }}">Transfer Pricing</a></li>
                        <li><a href="{{ route('services.outsourcing.cfo') }}">CFO Services</a></li>
                        <li><a href="{{ route('services.outsourcing.bookkeeping') }}">Bookkeeping Services</a></li>
                        <li><a href="{{ route('services.outsourcing.payroll') }}">Payroll Management</a></li>
                        <li><a href="{{ route('services.startup') }}">Startup Registration</a></li>
                        <li><a href="{{ route('services.international.subsidiary') }}">Foreign Subsidiary Setup</a></li>
                        <li><a href="{{ route('services.advisory.investment') }}">Investment Advisory</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Our Branches</h4>
                    <div class="branch-info">
                        <h5>Head Office - Hyderabad</h5>
                        <p>Financial District, HITEC City<br>Hyderabad, Telangana 500081</p>
                        <p><strong>Phone:</strong> <a href="tel:+919876543210">+91 98765 43210</a></p>
                        <p><strong>Email:</strong> <a href="mailto:info@casmk.com">info@casmk.com</a></p>
                    </div>
                    <div class="branch-info">
                        <h5>Bangalore Office</h5>
                        <p>Koramangala, 5th Block<br>Bangalore, Karnataka 560095</p>
                    </div>
                    <div class="branch-info">
                        <h5>Mumbai Office</h5>
                        <p>Bandra Kurla Complex<br>Mumbai, Maharashtra 400051</p>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Resources</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('resources.guides') }}">Tax Guides</a></li>
                        <li><a href="{{ route('resources.faq') }}">FAQ Section</a></li>
                        <li><a href="{{ route('resources.newsletters') }}">Monthly Newsletters</a></li>
                        <li><a href="{{ route('resources.compliance') }}">Compliance Checklists</a></li>
                        <li><a href="{{ route('resources.insights') }}">Industry Insights</a></li>
                        <li><a href="{{ route('resources.case-studies') }}">Case Studies</a></li>
                        <li><a href="{{ route('client.portal') }}">Client Portal</a></li>
                        <li><a href="{{ route('career') }}">Career Opportunities</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Contact</h4>
                    <div class="contact-info">
                        <div class="contact-detail">
                            <strong>Business Hours:</strong>
                            <p>Monday - Saturday: 9:00 AM - 7:00 PM<br>Sunday: By Appointment</p>
                        </div>
                        
                        <div class="contact-detail">
                            <strong>Emergency Support:</strong>
                            <p><a href="tel:+918765432109">+91 87654 32109</a></p>
                        </div>
                        
                        <div class="contact-detail">
                            <strong>Client Support:</strong>
                            <p><a href="mailto:support@casmk.com">support@casmk.com</a></p>
                        </div>
                    </div>
                    
                    <div class="newsletter-signup">
                        <h5>Newsletter Subscription</h5>
                        <p>Get monthly updates on tax changes, compliance requirements, and financial insights</p>
                        <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Enter your email address" required>
                            <button type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="section-container">
            <div class="footer-bottom-content">
                <p>&copy; {{ date('Y') }} CA Sai Manoj Kumar. All rights reserved. Professional Chartered Accountant Services.</p>
                <div class="footer-bottom-links">
                    <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                    <a href="{{ route('terms-of-service') }}">Terms of Service</a>
                    <a href="{{ route('disclaimer') }}">Disclaimer</a>
                    <a href="{{ route('sitemap') }}">Site Map</a>
                </div>
            </div>
        </div>
    </div>
</footer>