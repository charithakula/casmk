<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndustryController extends Controller
{
    /**
     * Display all industries
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'Industries We Serve - CA Sai Manoj Kumar',
            'meta_description' => 'Specialized chartered accountant services for various industries including IT, manufacturing, healthcare, and more.',
            'industries' => [
                [
                    'name' => 'Information Technology',
                    'icon' => 'fas fa-laptop-code',
                    'description' => 'Specialized services for IT companies, startups, and software firms.',
                    'services' => ['Transfer Pricing', 'Software Export Benefits', 'R&D Tax Benefits']
                ],
                [
                    'name' => 'Manufacturing',
                    'icon' => 'fas fa-industry',
                    'description' => 'Manufacturing sector compliance and tax optimization services.',
                    'services' => ['Excise & Customs', 'Factory Act Compliance', 'Environmental Clearances']
                ],
                [
                    'name' => 'Real Estate',
                    'icon' => 'fas fa-building',
                    'description' => 'Real estate development and investment advisory services.',
                    'services' => ['RERA Compliance', 'Project Financing', 'Tax Planning']
                ],
                [
                    'name' => 'Healthcare',
                    'icon' => 'fas fa-heartbeat',
                    'description' => 'Healthcare and pharmaceutical industry specialized services.',
                    'services' => ['Drug Licensing', 'Medical Device Compliance', 'Clinical Trial Accounting']
                ]
            ]
        ];

        return view('pages.industries.index', $data);
    }

    public function it(): View
    {
        $data = [
            'page_title' => 'IT Industry Services - CA Sai Manoj Kumar',
            'meta_description' => 'Specialized chartered accountant services for IT companies, software firms, and technology startups.',
        ];
        return view('pages.industries.it', $data);
    }

    public function manufacturing(): View
    {
        $data = [
            'page_title' => 'Manufacturing Industry Services - CA Sai Manoj Kumar',
            'meta_description' => 'Comprehensive financial services for manufacturing companies including compliance and tax optimization.',
        ];
        return view('pages.industries.manufacturing', $data);
    }

    public function realEstate(): View
    {
        $data = [
            'page_title' => 'Real Estate Industry Services - CA Sai Manoj Kumar',
            'meta_description' => 'Real estate accounting, RERA compliance, and investment advisory services.',
        ];
        return view('pages.industries.real-estate', $data);
    }

    public function healthcare(): View
    {
        $data = [
            'page_title' => 'Healthcare Industry Services - CA Sai Manoj Kumar',
            'meta_description' => 'Healthcare and pharmaceutical industry specialized accounting and compliance services.',
        ];
        return view('pages.industries.healthcare', $data);
    }

    public function ecommerce(): View
    {
        $data = [
            'page_title' => 'E-commerce Industry Services - CA Sai Manoj Kumar',
            'meta_description' => 'E-commerce business accounting, GST compliance, and digital business advisory.',
        ];
        return view('pages.industries.ecommerce', $data);
    }

    public function education(): View
    {
        $data = [
            'page_title' => 'Education Sector Services - CA Sai Manoj Kumar',
            'meta_description' => 'Educational institution accounting, compliance, and financial management services.',
        ];
        return view('pages.industries.education', $data);
    }

    public function hospitality(): View
    {
        $data = [
            'page_title' => 'Hospitality Industry Services - CA Sai Manoj Kumar',
            'meta_description' => 'Hospitality and tourism industry accounting and business advisory services.',
        ];
        return view('pages.industries.hospitality', $data);
    }
}