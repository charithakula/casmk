<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display contact page
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'Contact Us - CA Sai Manoj Kumar',
            'meta_description' => 'Get in touch with CA Sai Manoj Kumar for professional chartered accountant services. Multiple office locations and 24/7 support.',
            'contact_info' => [
                'head_office' => [
                    'name' => 'Head Office - Hyderabad',
                    'address' => 'Financial District, HITEC City, Hyderabad, Telangana 500081',
                    'phone' => '+91 98765 43210',
                    'email' => 'info@casmk.com',
                    'timings' => 'Monday - Saturday: 9:00 AM - 7:00 PM'
                ],
                'bangalore_office' => [
                    'name' => 'Bangalore Office',
                    'address' => 'Koramangala, 5th Block, Bangalore, Karnataka 560095',
                    'phone' => '+91 98765 43211',
                    'email' => 'bangalore@casmk.com',
                    'timings' => 'Monday - Saturday: 9:00 AM - 6:00 PM'
                ],
                'mumbai_office' => [
                    'name' => 'Mumbai Office',
                    'address' => 'Bandra Kurla Complex, Mumbai, Maharashtra 400051',
                    'phone' => '+91 98765 43212',
                    'email' => 'mumbai@casmk.com',
                    'timings' => 'Monday - Saturday: 9:00 AM - 6:00 PM'
                ]
            ]
        ];

        return view('pages.contact.index', $data);
    }

    /**
     * Handle contact form submission
     */
    public function submit(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields correctly.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Store contact in database (create Contact model if needed)
            // Contact::create($request->all());

            // Send email notification
            // Mail::to('info@casmk.com')->send(new ContactFormMail($request->all()));

            return response()->json([
                'success' => true,
                'message' => 'Thank you for contacting us! We will get back to you soon.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'There was an error sending your message. Please try again.'
            ], 500);
        }
    }

    /**
     * Display quote request page
     */
    public function quote(): View
    {
        $data = [
            'page_title' => 'Request Quote - CA Sai Manoj Kumar',
            'meta_description' => 'Request a customized quote for your chartered accountant service requirements.',
            'services' => [
                'Income Tax Services',
                'Audit & Assurance',
                'GST Services',
                'Business Formation',
                'CFO Services',
                'International Services',
                'Other Services'
            ]
        ];

        return view('pages.contact.quote', $data);
    }

    /**
     * Handle quote request submission
     */
    public function submitQuote(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'services' => 'required|array|min:1',
            'annual_turnover' => 'nullable|string|max:100',
            'employees_count' => 'nullable|string|max:50',
            'requirements' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields correctly.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Store quote request
            // QuoteRequest::create($request->all());

            // Send email notification
            // Mail::to('info@casmk.com')->send(new QuoteRequestMail($request->all()));

            return response()->json([
                'success' => true,
                'message' => 'Quote request submitted successfully! We will contact you with details within 24 hours.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'There was an error submitting your quote request. Please try again.'
            ], 500);
        }
    }
}