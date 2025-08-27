<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'Expert Chartered Accountant Services',
            'meta_description' => 'Professional chartered accountant services for taxation, audit, compliance, and business advisory. Trusted by 500+ businesses across India.',
            'meta_keywords' => 'chartered accountant, CA services, tax consultant, audit services, GST filing, business incorporation',
            'stats' => [
                'clients' => '500+',
                'experience' => '15+',
                'services' => '50+',
                'satisfaction' => '99%'
            ],
            'featured_services' => [
                [
                    'icon' => 'fas fa-calculator',
                    'title' => 'Income Tax Services',
                    'description' => 'Complete tax planning, filing, and compliance services for individuals and businesses.',
                    'route' => 'services.tax'
                ],
                [
                    'icon' => 'fas fa-search-plus',
                    'title' => 'Audit & Assurance',
                    'description' => 'Statutory audits, internal audits, and assurance services to ensure regulatory compliance.',
                    'route' => 'services.audit'
                ],
                [
                    'icon' => 'fas fa-receipt',
                    'title' => 'GST Services',
                    'description' => 'Complete GST registration, filing, and compliance management solutions.',
                    'route' => 'services.gst'
                ],
                [
                    'icon' => 'fas fa-rocket',
                    'title' => 'Business Formation',
                    'description' => 'Company incorporation, LLP registration, and startup services.',
                    'route' => 'services.startup'
                ],
                [
                    'icon' => 'fas fa-handshake',
                    'title' => 'CFO Services',
                    'description' => 'Outsourced CFO solutions for growing businesses.',
                    'route' => 'services.outsourcing.cfo'
                ],
                [
                    'icon' => 'fas fa-globe',
                    'title' => 'International Services',
                    'description' => 'Transfer pricing, international taxation, and foreign investment compliance.',
                    'route' => 'services.international'
                ]
            ],
            'features' => [
                [
                    'icon' => 'fas fa-clock',
                    'title' => 'Timely Delivery',
                    'description' => 'Never miss a deadline with our efficient processes and proactive approach.'
                ],
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => '100% Accuracy',
                    'description' => 'Our rigorous quality checks ensure error-free deliverables every time.'
                ],
                [
                    'icon' => 'fas fa-users',
                    'title' => 'Expert Team',
                    'description' => 'Qualified chartered accountants dedicated to your business success.'
                ],
                [
                    'icon' => 'fas fa-headset',
                    'title' => '24/7 Support',
                    'description' => 'Round-the-clock availability for urgent queries and support.'
                ],
                [
                    'icon' => 'fas fa-laptop',
                    'title' => 'Technology Driven',
                    'description' => 'Latest accounting software for efficient service delivery.'
                ],
                [
                    'icon' => 'fas fa-rupee-sign',
                    'title' => 'Competitive Pricing',
                    'description' => 'Transparent, affordable pricing with flexible packages.'
                ]
            ]
        ];

        return view('pages.home', $data);
    }

    /**
     * Privacy Policy page
     */
    public function privacyPolicy(): View
    {
        $data = [
            'page_title' => 'Privacy Policy - CA Sai Manoj Kumar',
            'meta_description' => 'Privacy policy for CA Sai Manoj Kumar professional services.',
            'last_updated' => '2024-01-15'
        ];

        return view('pages.privacy-policy', $data);
    }

    /**
     * Terms of Service page
     */
    public function termsOfService(): View
    {
        $data = [
            'page_title' => 'Terms of Service - CA Sai Manoj Kumar',
            'meta_description' => 'Terms of service for CA Sai Manoj Kumar professional services.',
            'last_updated' => '2024-01-15'
        ];

        return view('pages.terms-of-service', $data);
    }

    /**
     * Disclaimer page
     */
    public function disclaimer(): View
    {
        $data = [
            'page_title' => 'Disclaimer - CA Sai Manoj Kumar',
            'meta_description' => 'Disclaimer for CA Sai Manoj Kumar professional services.',
            'last_updated' => '2024-01-15'
        ];

        return view('pages.disclaimer', $data);
    }

    /**
     * HTML Sitemap
     */
    public function sitemap(): View
    {
        $data = [
            'page_title' => 'Site Map - CA Sai Manoj Kumar',
            'meta_description' => 'Complete site map for CA Sai Manoj Kumar website.',
            'routes' => $this->getSitemapRoutes()
        ];

        return view('pages.sitemap', $data);
    }

    /**
     * XML Sitemap
     */
    public function xmlSitemap()
    {
        $urls = $this->getSitemapUrls();
        
        return response()->view('sitemaps.xml', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Get sitemap routes for HTML sitemap
     */
    private function getSitemapRoutes(): array
    {
        return [
            'Main Pages' => [
                'Home' => route('home'),
                'About Us' => route('about'),
                'Contact' => route('contact')
            ],
            'Services' => [
                'All Services' => route('services'),
                'Audit & Assurance' => route('services.audit'),
                'Taxation Services' => route('services.tax'),
                'GST Services' => route('services.gst'),
                'Business Formation' => route('services.startup'),
                'CFO Services' => route('services.outsourcing.cfo'),
                'International Services' => route('services.international')
            ],
            'Industries' => [
                'All Industries' => route('industries'),
                'Information Technology' => route('industries.it'),
                'Manufacturing' => route('industries.manufacturing'),
                'Real Estate' => route('industries.real-estate'),
                'Healthcare' => route('industries.healthcare')
            ],
            'Resources' => [
                'All Resources' => route('resources'),
                'Tax Guides' => route('resources.guides'),
                'FAQ' => route('resources.faq'),
                'Case Studies' => route('resources.case-studies')
            ],
            'Career' => [
                'Career Home' => route('career'),
                'Current Openings' => route('career.openings'),
                'Apply Online' => route('career.apply')
            ]
        ];
    }

    /**
     * Get sitemap URLs for XML sitemap
     */
    private function getSitemapUrls(): array
    {
        return [
            [
                'url' => route('home'),
                'lastmod' => '2024-01-15',
                'changefreq' => 'weekly',
                'priority' => '1.0'
            ],
            [
                'url' => route('about'),
                'lastmod' => '2024-01-10',
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'url' => route('services'),
                'lastmod' => '2024-01-12',
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ],
            [
                'url' => route('contact'),
                'lastmod' => '2024-01-05',
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            // Add more URLs as needed
        ];
    }
}