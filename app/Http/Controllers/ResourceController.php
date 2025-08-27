<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ResourceController extends Controller
{
    /**
     * Display all resources
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'Resources - CA Sai Manoj Kumar',
            'meta_description' => 'Valuable resources including tax guides, newsletters, case studies, and frequently asked questions.',
            'resource_categories' => [
                'Tax Guides' => 'Comprehensive guides on income tax, GST, and other taxation matters',
                'Newsletters' => 'Monthly updates on tax changes and regulatory updates',
                'Case Studies' => 'Real-world examples of our successful client engagements',
                'FAQ' => 'Frequently asked questions about our services',
                'Compliance Checklists' => 'Essential compliance requirements for businesses'
            ]
        ];

        return view('pages.resources.index', $data);
    }

    public function videos(): View
    {
        $data = [
            'page_title' => 'Video Gallery - CA Sai Manoj Kumar',
            'meta_description' => 'Educational videos on taxation, compliance, and business advisory topics.',
        ];
        return view('pages.resources.videos', $data);
    }

    public function newsletters(): View
    {
        $data = [
            'page_title' => 'Newsletters - CA Sai Manoj Kumar',
            'meta_description' => 'Monthly newsletters with latest updates on taxation and regulatory changes.',
        ];
        return view('pages.resources.newsletters', $data);
    }

    public function guides(): View
    {
        $data = [
            'page_title' => 'Tax Guides - CA Sai Manoj Kumar',
            'meta_description' => 'Comprehensive tax guides and resources for businesses and individuals.',
            'guides' => [
                'Income Tax Filing Guide 2024-25',
                'GST Compliance Manual',
                'Company Formation Guide',
                'NRI Taxation Handbook',
                'Startup Tax Benefits Guide'
            ]
        ];
        return view('pages.resources.guides', $data);
    }

    public function faq(): View
    {
        $data = [
            'page_title' => 'FAQ - CA Sai Manoj Kumar',
            'meta_description' => 'Frequently asked questions about our chartered accountant services.',
            'faqs' => [
                [
                    'category' => 'General',
                    'questions' => [
                        ['q' => 'What services do you offer?', 'a' => 'We offer comprehensive CA services including taxation, audit, GST, and business advisory.'],
                        ['q' => 'How can I contact you?', 'a' => 'You can reach us via phone, email, or through our contact form on the website.']
                    ]
                ],
                [
                    'category' => 'Taxation',
                    'questions' => [
                        ['q' => 'When is the deadline for income tax filing?', 'a' => 'The deadline varies based on the type of taxpayer. Generally, it\'s July 31st for individuals.'],
                        ['q' => 'Do you handle NRI taxation?', 'a' => 'Yes, we have specialized services for Non-Resident Indian taxation.']
                    ]
                ]
            ]
        ];
        return view('pages.resources.faq', $data);
    }

    public function caseStudies(): View
    {
        $data = [
            'page_title' => 'Case Studies - CA Sai Manoj Kumar',
            'meta_description' => 'Real-world case studies showcasing our successful client engagements and solutions.',
        ];
        return view('pages.resources.case-studies', $data);
    }

    public function compliance(): View
    {
        $data = [
            'page_title' => 'Compliance Checklists - CA Sai Manoj Kumar',
            'meta_description' => 'Essential compliance checklists for businesses to ensure regulatory adherence.',
        ];
        return view('pages.resources.compliance', $data);
    }

    public function insights(): View
    {
        $data = [
            'page_title' => 'Industry Insights - CA Sai Manoj Kumar',
            'meta_description' => 'Latest insights and trends in taxation, compliance, and business advisory.',
        ];
        return view('pages.resources.insights', $data);
    }
}