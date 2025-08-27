<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InvestIndiaController extends Controller
{
    /**
     * Display Invest India main page
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'Invest in India - CA Sai Manoj Kumar',
            'meta_description' => 'Foreign investment services in India including company formation, subsidiary setup, and compliance support.',
            'investment_options' => [
                'Wholly Owned Subsidiary',
                'Branch Office',
                'Representative Office',
                'Limited Liability Partnership',
                'Joint Venture'
            ]
        ];

        return view('pages.invest-india.index', $data);
    }

    /**
     * Investment overview page
     */
    public function overview(): View
    {
        $data = [
            'page_title' => 'Investment Overview - Invest India',
            'meta_description' => 'Comprehensive overview of foreign investment opportunities and procedures in India.',
            'sectors' => [
                'Information Technology',
                'Manufacturing',
                'Healthcare',
                'Financial Services',
                'Retail & E-commerce',
                'Real Estate'
            ]
        ];

        return view('pages.invest-india.overview', $data);
    }

    /**
     * Branch office setup page
     */
    public function branchOffice(): View
    {
        $data = [
            'page_title' => 'Branch Office Setup in India',
            'meta_description' => 'Complete branch office registration and setup services for foreign companies in India.',
            'requirements' => [
                'RBI Approval',
                'Company Registration',
                'Tax Registrations',
                'Compliance Setup'
            ]
        ];

        return view('pages.invest-india.branch-office', $data);
    }

    /**
     * Representative office page
     */
    public function representativeOffice(): View
    {
        $data = [
            'page_title' => 'Representative Office Setup in India',
            'meta_description' => 'Representative office registration services for foreign companies exploring Indian market.',
            'activities_allowed' => [
                'Market Research',
                'Liaison Activities',
                'Promotion of Technical Collaboration',
                'Export Promotion'
            ]
        ];

        return view('pages.invest-india.representative-office', $data);
    }

    /**
     * FEMA compliance page
     */
    public function femaCompliance(): View
    {
        $data = [
            'page_title' => 'FEMA Compliance Services',
            'meta_description' => 'Foreign Exchange Management Act (FEMA) compliance services for international businesses in India.',
            'services' => [
                'FEMA Compliance Audit',
                'Foreign Investment Reporting',
                'Overseas Direct Investment',
                'External Commercial Borrowing'
            ]
        ];

        return view('pages.invest-india.fema-compliance', $data);
    }
}