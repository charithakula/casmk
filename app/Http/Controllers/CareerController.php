<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class CareerController extends Controller
{
    /**
     * Display career page
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'Career Opportunities - CA Sai Manoj Kumar',
            'meta_description' => 'Join our team of professional chartered accountants and financial experts. Explore career opportunities and internships.',
            'why_join_us' => [
                'Professional Growth' => 'Continuous learning and skill development opportunities',
                'Work-Life Balance' => 'Flexible work arrangements and supportive environment',
                'Competitive Package' => 'Attractive salary and benefits package',
                'Team Culture' => 'Collaborative and inclusive work culture',
                'Career Advancement' => 'Clear career progression paths'
            ],
            'current_openings_count' => 5,
            'internships_available' => true
        ];

        return view('pages.career.index', $data);
    }

    /**
     * Display current job openings
     */
    public function openings(): View
    {
        $data = [
            'page_title' => 'Current Job Openings - CA Sai Manoj Kumar',
            'meta_description' => 'Current job openings for chartered accountants, tax consultants, and financial analysts.',
            'openings' => [
                [
                    'title' => 'Senior Tax Consultant',
                    'department' => 'Taxation',
                    'experience' => '3-5 years',
                    'location' => 'Hyderabad',
                    'type' => 'Full-time',
                    'description' => 'Handle income tax compliance, planning, and advisory for corporate clients.',
                    'requirements' => ['CA qualification', 'Tax return filing experience', 'Client handling skills']
                ],
                [
                    'title' => 'Audit Associate',
                    'department' => 'Audit & Assurance',
                    'experience' => '1-3 years',
                    'location' => 'Bangalore',
                    'type' => 'Full-time',
                    'description' => 'Conduct statutory audits and internal audits for various clients.',
                    'requirements' => ['CA/CPA qualification', 'Audit experience', 'Analytical skills']
                ],
                [
                    'title' => 'GST Specialist',
                    'department' => 'GST Services',
                    'experience' => '2-4 years',
                    'location' => 'Mumbai',
                    'type' => 'Full-time',
                    'description' => 'GST compliance, filing, and advisory services.',
                    'requirements' => ['GST expertise', 'Communication skills', 'Problem-solving ability']
                ]
            ]
        ];

        return view('pages.career.openings', $data);
    }

    /**
     * Display job application page
     */
    public function apply(): View
    {
        $data = [
            'page_title' => 'Apply Online - CA Sai Manoj Kumar',
            'meta_description' => 'Apply for career opportunities at CA Sai Manoj Kumar. Submit your application online.',
            'positions' => [
                'Senior Tax Consultant',
                'Audit Associate',
                'GST Specialist',
                'Financial Analyst',
                'Junior Accountant',
                'Other'
            ]
        ];

        return view('pages.career.apply', $data);
    }

    /**
     * Handle job application submission
     */
    public function submitApplication(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'experience' => 'required|string|max:100',
            'qualification' => 'required|string|max:255',
            'current_salary' => 'nullable|string|max:100',
            'expected_salary' => 'nullable|string|max:100',
            'notice_period' => 'nullable|string|max:100',
            'cover_letter' => 'required|string|max:2000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120' // 5MB max
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields correctly.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Handle file upload
            if ($request->hasFile('resume')) {
                $resumePath = $request->file('resume')->store('resumes', 'public');
            }

            // Store application in database
            // JobApplication::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'phone' => $request->phone,
            //     'position' => $request->position,
            //     'experience' => $request->experience,
            //     'qualification' => $request->qualification,
            //     'current_salary' => $request->current_salary,
            //     'expected_salary' => $request->expected_salary,
            //     'notice_period' => $request->notice_period,
            //     'cover_letter' => $request->cover_letter,
            //     'resume_path' => $resumePath ?? null,
            //     'status' => 'received'
            // ]);

            // Send email notification
            // Mail::to('hr@casmk.com')->send(new JobApplicationMail($request->all()));

            return response()->json([
                'success' => true,
                'message' => 'Application submitted successfully! We will review your application and get back to you soon.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'There was an error submitting your application. Please try again.'
            ], 500);
        }
    }

    /**
     * Display internship opportunities
     */
    public function internships(): View
    {
        $data = [
            'page_title' => 'Internship Programs - CA Sai Manoj Kumar',
            'meta_description' => 'Internship opportunities for CA students and fresh graduates in taxation, audit, and financial services.',
            'programs' => [
                [
                    'title' => 'CA Articleship Program',
                    'duration' => '3 years',
                    'stipend' => 'As per ICAI guidelines',
                    'description' => 'Complete articleship training covering all aspects of chartered accountancy practice.',
                    'requirements' => ['CA Intermediate pass', 'GMCS & ITT completion', 'Good academic record']
                ],
                [
                    'title' => 'Summer Internship',
                    'duration' => '2-3 months',
                    'stipend' => 'Performance-based',
                    'description' => 'Summer internship for students to gain practical experience.',
                    'requirements' => ['Pursuing CA/MBA/M.Com', 'Basic accounting knowledge', 'Communication skills']
                ],
                [
                    'title' => 'Project Internship',
                    'duration' => '6 months',
                    'stipend' => 'Fixed monthly stipend',
                    'description' => 'Project-based internship for specific assignments and research work.',
                    'requirements' => ['Final year students', 'Research aptitude', 'Analytical skills']
                ]
            ]
        ];

        return view('pages.career.internships', $data);
    }
}