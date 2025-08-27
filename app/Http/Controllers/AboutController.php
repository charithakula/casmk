<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the about us page
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'About Us - CA Sai Manoj Kumar',
            'meta_description' => 'Learn about CA Sai Manoj Kumar - 15+ years of experience in chartered accountancy, taxation, and financial advisory services.',
            'meta_keywords' => 'about CA Sai Manoj Kumar, chartered accountant experience, professional background',
            'about_content' => [
                'experience_years' => '15+',
                'clients_served' => '500+',
                'services_offered' => '50+',
                'satisfaction_rate' => '99%',
                'mission' => 'To provide comprehensive financial solutions that drive business success and ensure regulatory compliance.',
                'vision' => 'To be the most trusted chartered accountant firm in India, known for excellence and integrity.',
                'values' => [
                    'Integrity' => 'We maintain the highest ethical standards in all our professional dealings.',
                    'Excellence' => 'We strive for perfection in every service we deliver.',
                    'Innovation' => 'We embrace technology and modern practices to serve our clients better.',
                    'Client Focus' => 'Our clients\' success is our primary objective.',
                    'Transparency' => 'We believe in clear communication and honest reporting.'
                ]
            ],
            'certifications' => [
                'ICAI Member',
                'Income Tax Practitioner',
                'Company Secretary',
                'Cost Accountant'
            ]
        ];

        return view('pages.about.index', $data);
    }

    /**
     * Display team page
     */
    public function team(): View
    {
        $data = [
            'page_title' => 'Our Team - CA Sai Manoj Kumar',
            'meta_description' => 'Meet our experienced team of chartered accountants and financial experts.',
            'team_members' => [
                [
                    'name' => 'CA Sai Manoj Kumar',
                    'designation' => 'Founder & Managing Partner',
                    'experience' => '15+ years',
                    'specialization' => 'Taxation, Audit, Corporate Law',
                    'qualifications' => ['CA', 'CPA'],
                    'image' => 'team/sai-manoj-kumar.jpg'
                ],
                [
                    'name' => 'CA Priya Sharma',
                    'designation' => 'Senior Manager - Tax',
                    'experience' => '8+ years',
                    'specialization' => 'Income Tax, GST, International Taxation',
                    'qualifications' => ['CA'],
                    'image' => 'team/priya-sharma.jpg'
                ],
                [
                    'name' => 'CA Rajesh Kumar',
                    'designation' => 'Senior Manager - Audit',
                    'experience' => '10+ years',
                    'specialization' => 'Statutory Audit, Internal Audit',
                    'qualifications' => ['CA', 'DISA'],
                    'image' => 'team/rajesh-kumar.jpg'
                ]
            ]
        ];

        return view('pages.about.team', $data);
    }

    /**
     * Display company history
     */
    public function history(): View
    {
        $data = [
            'page_title' => 'Our History - CA Sai Manoj Kumar',
            'meta_description' => 'Discover the journey and milestones of CA Sai Manoj Kumar firm.',
            'timeline' => [
                [
                    'year' => '2009',
                    'title' => 'Foundation',
                    'description' => 'CA Sai Manoj Kumar founded the practice with a vision to provide quality financial services.'
                ],
                [
                    'year' => '2012',
                    'title' => 'First Milestone',
                    'description' => 'Reached 100+ satisfied clients and expanded service offerings.'
                ],
                [
                    'year' => '2015',
                    'title' => 'Team Expansion',
                    'description' => 'Added specialized professionals for audit and taxation services.'
                ],
                [
                    'year' => '2018',
                    'title' => 'Digital Transformation',
                    'description' => 'Implemented modern accounting software and digital processes.'
                ],
                [
                    'year' => '2020',
                    'title' => 'International Services',
                    'description' => 'Launched international taxation and transfer pricing services.'
                ],
                [
                    'year' => '2024',
                    'title' => 'Current Success',
                    'description' => 'Serving 500+ clients with comprehensive financial solutions.'
                ]
            ]
        ];

        return view('pages.about.history', $data);
    }
}