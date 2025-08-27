// NAVIGATION JAVASCRIPT - public/js/navigation.js

document.addEventListener('DOMContentLoaded', function() {
    // Get navigation elements
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNav = document.getElementById('mobile-nav');
    const nav = document.getElementById('nav');
    
    // Mobile Navigation Toggle
    if (mobileMenu && mobileNav) {
        mobileMenu.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileNav.classList.toggle('active');
            
            // Prevent body scroll when mobile menu is open
            if (mobileNav.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
    }

    // Mega Menu Category Switching
    const menuCategories = document.querySelectorAll('.menu-category');
    menuCategories.forEach(category => {
        category.addEventListener('mouseenter', function() {
            // Remove active class from all categories and submenus
            document.querySelectorAll('.menu-category').forEach(cat => {
                cat.classList.remove('active');
            });
            document.querySelectorAll('.submenu-section').forEach(sub => {
                sub.classList.remove('active');
            });
            
            // Add active class to current category and corresponding submenu
            this.classList.add('active');
            const targetId = this.getAttribute('data-category');
            const targetSubmenu = document.getElementById(targetId);
            if (targetSubmenu) {
                targetSubmenu.classList.add('active');
            }
        });
    });

    // Navbar Scroll Effect
    let lastScrollY = window.scrollY;
    let ticking = false;

    function updateNavbar() {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 100) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
        
        // Hide mobile menu on significant scroll
        if (Math.abs(currentScrollY - lastScrollY) > 50) {
            if (mobileMenu && mobileNav) {
                mobileMenu.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
        
        lastScrollY = currentScrollY;
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (nav && !nav.contains(e.target)) {
            if (mobileMenu && mobileNav) {
                mobileMenu.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });

    // Handle orientation change on mobile
    window.addEventListener('orientationchange', function() {
        setTimeout(() => {
            if (mobileMenu && mobileNav) {
                mobileMenu.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            }
        }, 100);
    });

    // Close dropdowns when clicking elsewhere
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-item')) {
            const dropdowns = document.querySelectorAll('.dropdown-menu, .mega-menu');
            dropdowns.forEach(menu => {
                menu.style.opacity = '0';
                menu.style.visibility = 'hidden';
            });
        }
    });

    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Skip if href is just "#" or empty
            if (!href || href === '#' || href.length <= 1) {
                return;
            }
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const isMobile = window.innerWidth <= 768;
                const offsetTop = target.offsetTop - (isMobile ? 70 : 90);
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                
                // Close mobile menu after navigation
                if (mobileMenu && mobileNav) {
                    mobileMenu.classList.remove('active');
                    mobileNav.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
        });
    });

    // Keyboard navigation support
    document.addEventListener('keydown', function(e) {
        // Close mobile menu with Escape key
        if (e.key === 'Escape') {
            if (mobileMenu && mobileNav && mobileNav.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });

    // Focus management for accessibility
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        const dropdown = item.querySelector('.dropdown-menu, .mega-menu');
        
        if (link && dropdown) {
            // Show dropdown on focus
            link.addEventListener('focus', function() {
                dropdown.style.opacity = '1';
                dropdown.style.visibility = 'visible';
                dropdown.style.transform = 'translateY(0)';
            });
            
            // Hide dropdown when focus leaves the nav item
            item.addEventListener('focusout', function(e) {
                // Check if the new focus target is within this nav item
                if (!item.contains(e.relatedTarget)) {
                    dropdown.style.opacity = '0';
                    dropdown.style.visibility = 'hidden';
                    dropdown.style.transform = 'translateY(-10px)';
                }
            });
        }
    });
});

// Mobile Submenu Toggle Function (called from HTML)
function toggleMobileSubmenu(submenuId) {
    const submenu = document.getElementById(submenuId);
    if (submenu) {
        submenu.classList.toggle('active');
        
        // Update chevron icon
        const toggleLink = document.querySelector(`[onclick="toggleMobileSubmenu('${submenuId}')"]`);
        if (toggleLink) {
            const chevron = toggleLink.querySelector('.fas');
            if (chevron) {
                if (submenu.classList.contains('active')) {
                    chevron.classList.remove('fa-chevron-down');
                    chevron.classList.add('fa-chevron-up');
                } else {
                    chevron.classList.remove('fa-chevron-up');
                    chevron.classList.add('fa-chevron-down');
                }
            }
        }
    }
}

// Newsletter subscription handler
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.textContent;
            
            // Show loading state
            button.textContent = 'Subscribing...';
            button.disabled = true;
            
            // Simulate API call (replace with actual endpoint)
            fetch(this.action || '/newsletter/subscribe', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    button.textContent = 'Subscribed!';
                    button.style.backgroundColor = '#10b981';
                    this.reset();
                    
                    setTimeout(() => {
                        button.textContent = originalText;
                        button.style.backgroundColor = '';
                        button.disabled = false;
                    }, 3000);
                } else {
                    throw new Error(data.message || 'Subscription failed');
                }
            })
            .catch(error => {
                console.error('Newsletter subscription error:', error);
                button.textContent = 'Try Again';
                button.style.backgroundColor = '#ef4444';
                
                setTimeout(() => {
                    button.textContent = originalText;
                    button.style.backgroundColor = '';
                    button.disabled = false;
                }, 3000);
            });
        });
    });
});