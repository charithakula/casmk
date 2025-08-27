<!-- COMPREHENSIVE NAVIGATION -->
<nav class="nav" id="nav">
    <div class="section-container">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="logo">CA SMK</a>
            
            <!-- DESKTOP MENU -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">About Us</a>
                </li>
                
                <!-- INVEST INDIA DROPDOWN -->
                <li class="nav-item">
                    <a href="{{ route('invest-india') }}" class="nav-link dropdown-toggle">Invest India</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('investment.overview') }}" class="dropdown-item">Investment Overview</a>
                        <div class="sub-dropdown">
                            <a href="#" class="dropdown-item">Wholly Owned Subsidiary <i class="fas fa-chevron-right" style="float: right;"></i></a>
                            <div class="sub-dropdown-menu">
                                <a href="{{ route('services.company.private-limited') }}" class="dropdown-item">Private Limited Company</a>
                                <a href="{{ route('services.company.llp') }}" class="dropdown-item">Limited Liability Partnership</a>
                                <a href="{{ route('services.company.opc') }}" class="dropdown-item">One Person Company</a>
                            </div>
                        </div>
                        <a href="{{ route('services.branch-office') }}" class="dropdown-item">Branch Office Setup</a>
                        <a href="{{ route('services.representative-office') }}" class="dropdown-item">Representative Office</a>
                        <a href="{{ route('services.fema-compliance') }}" class="dropdown-item">FEMA Compliance</a>
                    </div>
                </li>

                <!-- MEGA SERVICES MENU -->
                <li class="nav-item service-dropdown">
                    <a href="{{ route('services') }}" class="nav-link dropdown-toggle">Services</a>
                    <div class="mega-menu">
                        <div class="mega-menu-content">
                            <!-- LEFT CATEGORIES -->
                            <div class="menu-categories">
                                <div class="menu-category active" data-category="auditing">
                                    <i class="fas fa-search-plus"></i> Auditing
                                </div>
                                <div class="menu-category" data-category="taxation">
                                    <i class="fas fa-calculator"></i> Taxation
                                </div>
                                <div class="menu-category" data-category="gst">
                                    <i class="fas fa-receipt"></i> GST Services
                                </div>
                                <div class="menu-category" data-category="startup">
                                    <i class="fas fa-rocket"></i> Start Up
                                </div>
                                <div class="menu-category" data-category="outsourcing">
                                    <i class="fas fa-handshake"></i> Outsourcing
                                </div>
                                <div class="menu-category" data-category="advisory">
                                    <i class="fas fa-lightbulb"></i> Advisory
                                </div>
                                <div class="menu-category" data-category="management">
                                    <i class="fas fa-cogs"></i> Management
                                </div>
                                <div class="menu-category" data-category="international">
                                    <i class="fas fa-globe"></i> International
                                </div>
                            </div>

                            <!-- RIGHT SUBMENU CONTENT -->
                            <div class="submenu-content">
                                <!-- AUDITING SUBMENU -->
                                <div class="submenu-section active" id="auditing">
                                    <h4><i class="fas fa-search-plus"></i> Audit & Assurance</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.audit.statutory') }}" class="featured-service">Statutory Audit</a></li>
                                        <li><a href="{{ route('services.audit.internal') }}">Internal Audit</a></li>
                                        <li><a href="{{ route('services.audit.tax') }}">Tax Audit</a></li>
                                        <li><a href="{{ route('services.audit.bank') }}">Bank Audit</a></li>
                                        <li><a href="{{ route('services.audit.public-sector') }}">Public Sector Audit</a></li>
                                        <li><a href="{{ route('services.audit.ind-as') }}">IND AS Implementation</a></li>
                                        <li><a href="{{ route('services.company-secretarial') }}">Company Secretarial Services</a></li>
                                        <li><a href="{{ route('services.due-diligence') }}">Due Diligence</a></li>
                                        <li><a href="{{ route('services.audit.forensic') }}">Forensic Audit</a></li>
                                    </ul>
                                </div>

                                <!-- TAXATION SUBMENU -->
                                <div class="submenu-section" id="taxation">
                                    <h4><i class="fas fa-calculator"></i> Income Tax Services</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.tax.filing') }}" class="featured-service">Income Tax Filing</a></li>
                                        <li><a href="{{ route('services.tax.planning') }}">Tax Planning & Advisory</a></li>
                                        <li><a href="{{ route('services.tax.audit') }}">Tax Audit</a></li>
                                        <li><a href="{{ route('services.tax.nri') }}">NRI Taxation</a></li>
                                        <li><a href="{{ route('services.tax.corporate') }}">Corporate Tax Planning</a></li>
                                        <li><a href="{{ route('services.tax.litigation') }}">Tax Litigation Support</a></li>
                                        <li><a href="{{ route('services.tax.advance') }}">Advance Tax Calculation</a></li>
                                        <li><a href="{{ route('services.tax.tds') }}">TDS Compliance</a></li>
                                    </ul>
                                </div>

                                <!-- GST SUBMENU -->
                                <div class="submenu-section" id="gst">
                                    <h4><i class="fas fa-receipt"></i> GST Solutions</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.gst.registration') }}" class="featured-service">GST Registration</a></li>
                                        <li><a href="{{ route('services.gst.filing') }}">GST Return Filing</a></li>
                                        <li><a href="{{ route('services.gst.audit') }}">GST Audit</a></li>
                                        <li><a href="{{ route('services.gst.advisory') }}">GST Advisory</a></li>
                                        <li><a href="{{ route('services.gst.itc') }}">Input Tax Credit</a></li>
                                        <li><a href="{{ route('services.gst.refund') }}">GST Refund</a></li>
                                        <li><a href="{{ route('services.gst.eway') }}">E-Way Bill Services</a></li>
                                        <li><a href="{{ route('services.gst.compliance') }}">GST Compliance</a></li>
                                    </ul>
                                </div>

                                <!-- STARTUP SUBMENU -->
                                <div class="submenu-section" id="startup">
                                    <h4><i class="fas fa-rocket"></i> Business Formation</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.startup.private-limited') }}" class="featured-service">Private Limited Company</a></li>
                                        <li><a href="{{ route('services.startup.llp') }}">Limited Liability Partnership</a></li>
                                        <li><a href="{{ route('services.startup.opc') }}">One Person Company</a></li>
                                        <li><a href="{{ route('services.startup.partnership') }}">Partnership Firm</a></li>
                                        <li><a href="{{ route('services.startup.proprietorship') }}">Proprietorship</a></li>
                                        <li><a href="{{ route('services.startup.trust') }}">Trust Registration</a></li>
                                        <li><a href="{{ route('services.startup.society') }}">Society Registration</a></li>
                                        <li><a href="{{ route('services.startup.startup-india') }}">Startup India Registration</a></li>
                                        <li><a href="{{ route('services.startup.msme') }}">MSME Registration</a></li>
                                    </ul>
                                </div>

                                <!-- OUTSOURCING SUBMENU -->
                                <div class="submenu-section" id="outsourcing">
                                    <h4><i class="fas fa-handshake"></i> Business Support</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.outsourcing.cfo') }}" class="featured-service">CFO Services</a></li>
                                        <li><a href="{{ route('services.outsourcing.accounting') }}">Accounting Outsourcing</a></li>
                                        <li><a href="{{ route('services.outsourcing.bookkeeping') }}">Bookkeeping Services</a></li>
                                        <li><a href="{{ route('services.outsourcing.payroll') }}">Payroll Management</a></li>
                                        <li><a href="{{ route('services.outsourcing.financial-reporting') }}">Financial Reporting</a></li>
                                        <li><a href="{{ route('services.outsourcing.mis') }}">MIS Reporting</a></li>
                                        <li><a href="{{ route('services.outsourcing.virtual-assistant') }}">Virtual Assistant</a></li>
                                        <li><a href="{{ route('services.outsourcing.document') }}">Document Management</a></li>
                                    </ul>
                                </div>

                                <!-- ADVISORY SUBMENU -->
                                <div class="submenu-section" id="advisory">
                                    <h4><i class="fas fa-lightbulb"></i> Strategic Advisory</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.advisory.restructuring') }}" class="featured-service">Business Restructuring</a></li>
                                        <li><a href="{{ route('services.advisory.financial-planning') }}">Financial Planning</a></li>
                                        <li><a href="{{ route('services.advisory.investment') }}">Investment Advisory</a></li>
                                        <li><a href="{{ route('services.advisory.ma') }}">Mergers & Acquisitions</a></li>
                                        <li><a href="{{ route('services.advisory.capital-gains') }}">Capital Gains Planning</a></li>
                                        <li><a href="{{ route('services.advisory.risk') }}">Risk Management</a></li>
                                        <li><a href="{{ route('services.advisory.valuation') }}">Business Valuation</a></li>
                                        <li><a href="{{ route('services.advisory.ipo') }}">IPO Advisory</a></li>
                                    </ul>
                                </div>

                                <!-- MANAGEMENT SUBMENU -->
                                <div class="submenu-section" id="management">
                                    <h4><i class="fas fa-cogs"></i> Management Consulting</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.management.process') }}">Process Optimization</a></li>
                                        <li><a href="{{ route('services.management.financial-controls') }}">Financial Controls</a></li>
                                        <li><a href="{{ route('services.management.compliance') }}">Compliance Management</a></li>
                                        <li><a href="{{ route('services.management.project') }}">Project Management</a></li>
                                        <li><a href="{{ route('services.management.change') }}">Change Management</a></li>
                                        <li><a href="{{ route('services.management.performance') }}">Performance Improvement</a></li>
                                        <li><a href="{{ route('services.management.cost') }}">Cost Optimization</a></li>
                                        <li><a href="{{ route('services.management.digital') }}">Digital Transformation</a></li>
                                    </ul>
                                </div>

                                <!-- INTERNATIONAL SUBMENU -->
                                <div class="submenu-section" id="international">
                                    <h4><i class="fas fa-globe"></i> International Services</h4>
                                    <ul class="submenu-links">
                                        <li><a href="{{ route('services.international.transfer-pricing') }}" class="featured-service">Transfer Pricing</a></li>
                                        <li><a href="{{ route('services.international.taxation') }}">International Taxation</a></li>
                                        <li><a href="{{ route('services.international.fema') }}">FEMA Compliance</a></li>
                                        <li><a href="{{ route('services.international.forex') }}">Foreign Exchange Management</a></li>
                                        <li><a href="{{ route('services.international.dta') }}">Double Taxation Avoidance</a></li>
                                        <li><a href="{{ route('services.international.cross-border') }}">Cross-border Transactions</a></li>
                                        <li><a href="{{ route('services.international.global-tax') }}">Global Tax Planning</a></li>
                                        <li><a href="{{ route('services.international.regulatory') }}">Regulatory Compliance</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- INDUSTRIES DROPDOWN -->
                <li class="nav-item">
                    <a href="{{ route('industries') }}" class="nav-link dropdown-toggle">Industries</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('industries.it') }}" class="dropdown-item"><i class="fas fa-laptop-code"></i> Information Technology</a>
                        <a href="{{ route('industries.manufacturing') }}" class="dropdown-item"><i class="fas fa-industry"></i> Manufacturing</a>
                        <a href="{{ route('industries.real-estate') }}" class="dropdown-item"><i class="fas fa-building"></i> Real Estate</a>
                        <a href="{{ route('industries.healthcare') }}" class="dropdown-item"><i class="fas fa-heartbeat"></i> Healthcare</a>
                        <a href="{{ route('industries.ecommerce') }}" class="dropdown-item"><i class="fas fa-shopping-cart"></i> E-commerce</a>
                        <a href="{{ route('industries.education') }}" class="dropdown-item"><i class="fas fa-graduation-cap"></i> Education</a>
                        <a href="{{ route('industries.hospitality') }}" class="dropdown-item"><i class="fas fa-utensils"></i> Hospitality</a>
                    </div>
                </li>

                <!-- RESOURCES DROPDOWN -->
                <li class="nav-item">
                    <a href="{{ route('resources') }}" class="nav-link dropdown-toggle">Resources</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('resources.videos') }}" class="dropdown-item"><i class="fas fa-video"></i> Video Gallery</a>
                        <a href="{{ route('resources.newsletters') }}" class="dropdown-item"><i class="fas fa-newspaper"></i> Newsletters</a>
                        <a href="{{ route('resources.guides') }}" class="dropdown-item"><i class="fas fa-book"></i> Tax Guides</a>
                        <a href="{{ route('resources.faq') }}" class="dropdown-item"><i class="fas fa-question-circle"></i> FAQ</a>
                        <a href="{{ route('resources.case-studies') }}" class="dropdown-item"><i class="fas fa-chart-line"></i> Case Studies</a>
                    </div>
                </li>

                <!-- CAREER DROPDOWN -->
                <li class="nav-item">
                    <a href="{{ route('career') }}" class="nav-link dropdown-toggle">Career</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('career.openings') }}" class="dropdown-item"><i class="fas fa-briefcase"></i> Current Openings</a>
                        <a href="{{ route('career.apply') }}" class="dropdown-item"><i class="fas fa-file-upload"></i> Apply Online</a>
                        <a href="{{ route('career.internships') }}" class="dropdown-item"><i class="fas fa-users"></i> Internships</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- CALL TO ACTION BUTTONS -->
            <div class="nav-actions">
                <a href="{{ route('payment') }}" class="action-btn payment-btn">Payment</a>
                <a href="{{ route('client.login') }}" class="action-btn login-btn">Client Login</a>
            </div>

            <!-- MOBILE MENU TOGGLE -->
            <div class="mobile-menu" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>

<!-- MOBILE NAVIGATION -->
<div class="mobile-nav" id="mobile-nav">
    <ul class="mobile-nav-menu">
        <li class="mobile-nav-item">
            <a href="{{ route('about') }}" class="mobile-nav-link">About Us</a>
        </li>
        
        <li class="mobile-nav-item">
            <a href="#" class="mobile-nav-link" onclick="toggleMobileSubmenu('invest-submenu')">
                Invest India <i class="fas fa-chevron-down" style="float: right;"></i>
            </a>
            <div class="mobile-submenu" id="invest-submenu">
                <a href="{{ route('investment.overview') }}">Investment Overview</a>
                <a href="{{ route('services.company.private-limited') }}">Private Limited Company</a>
                <a href="{{ route('services.company.llp') }}">Limited Liability Partnership</a>
                <a href="{{ route('services.branch-office') }}">Branch Office Setup</a>
                <a href="{{ route('services.fema-compliance') }}">FEMA Compliance</a>
            </div>
        </li>

        <li class="mobile-nav-item">
            <a href="#" class="mobile-nav-link" onclick="toggleMobileSubmenu('services-submenu')">
                Services <i class="fas fa-chevron-down" style="float: right;"></i>
            </a>
            <div class="mobile-submenu" id="services-submenu">
                <a href="{{ route('services.audit') }}"><strong>Auditing</strong></a>
                <a href="{{ route('services.audit.statutory') }}">Statutory Audit</a>
                <a href="{{ route('services.audit.internal') }}">Internal Audit</a>
                <a href="{{ route('services.audit.tax') }}">Tax Audit</a>
                <a href="{{ route('services.tax') }}"><strong>Taxation</strong></a>
                <a href="{{ route('services.tax.filing') }}">Income Tax Filing</a>
                <a href="{{ route('services.tax.planning') }}">Tax Planning</a>
                <a href="{{ route('services.gst') }}"><strong>GST Services</strong></a>
                <a href="{{ route('services.gst.registration') }}">GST Registration</a>
                <a href="{{ route('services.gst.filing') }}">GST Filing</a>
                <a href="{{ route('services.startup') }}"><strong>Business Formation</strong></a>
                <a href="{{ route('services.startup.private-limited') }}">Company Registration</a>
                <a href="{{ route('services.startup.llp') }}">LLP Registration</a>
            </div>
        </li>

        <li class="mobile-nav-item">
            <a href="{{ route('industries') }}" class="mobile-nav-link">Industries</a>
        </li>

        <li class="mobile-nav-item">
            <a href="{{ route('resources') }}" class="mobile-nav-link">Resources</a>
        </li>

        <li class="mobile-nav-item">
            <a href="{{ route('career') }}" class="mobile-nav-link">Career</a>
        </li>

        <li class="mobile-nav-item">
            <a href="{{ route('contact') }}" class="mobile-nav-link">Contact</a>
        </li>

        <li class="mobile-nav-item" style="margin-top: 2rem;">
            <a href="tel:+919876543210" class="call-btn" style="display: block; text-align: center;">
                <i class="fas fa-phone"></i> +91 98765 43210
            </a>
        </li>
    </ul>
</div>