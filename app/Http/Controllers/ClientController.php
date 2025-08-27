<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Show client login page
     */
    public function login(): View
    {
        if (Auth::guard('client')->check()) {
            return redirect()->route('client.portal');
        }

        $data = [
            'page_title' => 'Client Login - CA Sai Manoj Kumar',
            'meta_description' => 'Secure client login portal to access your financial documents and reports.',
        ];

        return view('pages.client.login', $data);
    }

    /**
     * Handle client authentication
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::guard('client')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('client.portal'))
                ->with('success', 'Welcome back! You have been successfully logged in.');
        }

        return redirect()->back()
            ->withErrors(['email' => 'Invalid email or password.'])
            ->withInput($request->only('email'));
    }

    /**
     * Show client portal dashboard
     */
    public function portal(): View
    {
        $client = Auth::guard('client')->user();
        
        $data = [
            'page_title' => 'Client Portal - CA Sai Manoj Kumar',
            'meta_description' => 'Secure client portal to access your financial documents, reports, and account information.',
            'client' => $client,
            'recent_documents' => [
                // Mock data - replace with actual client documents
                [
                    'title' => 'Income Tax Return FY 2023-24',
                    'type' => 'Tax Return',
                    'date' => '2024-07-15',
                    'status' => 'Filed',
                    'download_link' => '#'
                ],
                [
                    'title' => 'GST Returns - Q4 2024',
                    'type' => 'GST Filing',
                    'date' => '2024-04-10',
                    'status' => 'Filed',
                    'download_link' => '#'
                ],
                [
                    'title' => 'Financial Statements 2023-24',
                    'type' => 'Financial Report',
                    'date' => '2024-03-31',
                    'status' => 'Completed',
                    'download_link' => '#'
                ]
            ],
            'upcoming_deadlines' => [
                [
                    'task' => 'Advance Tax Payment',
                    'due_date' => '2024-12-15',
                    'amount' => '₹50,000',
                    'status' => 'Pending'
                ],
                [
                    'task' => 'GST Return Filing',
                    'due_date' => '2024-11-20',
                    'amount' => null,
                    'status' => 'In Progress'
                ]
            ],
            'account_summary' => [
                'total_services' => 12,
                'active_projects' => 3,
                'completed_projects' => 9,
                'pending_payments' => '₹25,000'
            ]
        ];

        return view('pages.client.portal', $data);
    }

    /**
     * Handle client logout
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('client')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')
            ->with('success', 'You have been successfully logged out.');
    }

    /**
     * Client document download (protected)
     */
    public function downloadDocument(Request $request, $documentId): mixed
    {
        $client = Auth::guard('client')->user();
        
        // Verify document belongs to authenticated client
        // $document = ClientDocument::where('id', $documentId)
        //     ->where('client_id', $client->id)
        //     ->firstOrFail();

        // Security check and file download logic
        // $filePath = storage_path('app/client_documents/' . $document->file_path);
        
        // if (!file_exists($filePath)) {
        //     abort(404, 'Document not found.');
        // }

        // return response()->download($filePath, $document->original_name);
        
        // For now, return placeholder response
        return response()->json([
            'message' => 'Document download feature will be implemented with actual client authentication system.'
        ]);
    }
}