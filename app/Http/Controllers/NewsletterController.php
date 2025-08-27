<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    /**
     * Handle newsletter subscription
     */
    public function subscribe(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please enter a valid email address.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $email = $request->email;

            // Check if already subscribed (create Newsletter model if needed)
            // $existingSubscription = Newsletter::where('email', $email)->first();
            
            // if ($existingSubscription) {
            //     if ($existingSubscription->is_active) {
            //         return response()->json([
            //             'success' => false,
            //             'message' => 'This email is already subscribed to our newsletter.'
            //         ]);
            //     } else {
            //         // Reactivate subscription
            //         $existingSubscription->update(['is_active' => true, 'subscribed_at' => now()]);
            //     }
            // } else {
            //     // Create new subscription
            //     Newsletter::create([
            //         'email' => $email,
            //         'subscribed_at' => now(),
            //         'is_active' => true,
            //         'source' => $request->header('referer') ?? 'website'
            //     ]);
            // }

            // Send welcome email (optional)
            // Mail::to($email)->send(new WelcomeNewsletterMail());

            // Add to mailing list service (e.g., Mailchimp, SendGrid)
            // $this->addToMailingList($email);

            return response()->json([
                'success' => true,
                'message' => 'Successfully subscribed to our newsletter! You will receive updates on tax changes and financial insights.'
            ]);

        } catch (\Exception $e) {
            \Log::error('Newsletter subscription error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'There was an error processing your subscription. Please try again.'
            ], 500);
        }
    }

    /**
     * Handle newsletter unsubscription (optional)
     */
    public function unsubscribe(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please enter a valid email address.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $email = $request->email;

            // Deactivate subscription
            // Newsletter::where('email', $email)
            //     ->update(['is_active' => false, 'unsubscribed_at' => now()]);

            return response()->json([
                'success' => true,
                'message' => 'Successfully unsubscribed from our newsletter.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'There was an error processing your request. Please try again.'
            ], 500);
        }
    }

    /**
     * Add email to external mailing list service
     */
    private function addToMailingList($email)
    {
        // Example: Mailchimp integration
        // $mailchimp = new \MailchimpMarketing\ApiClient();
        // $mailchimp->setConfig([
        //     'apiKey' => config('services.mailchimp.api_key'),
        //     'server' => config('services.mailchimp.server_prefix'),
        // ]);
        
        // $mailchimp->lists->addListMember(config('services.mailchimp.list_id'), [
        //     'email_address' => $email,
        //     'status' => 'subscribed',
        //     'merge_fields' => [
        //         'FNAME' => '',
        //         'LNAME' => ''
        //     ]
        // ]);
    }
}