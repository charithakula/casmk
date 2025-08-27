<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display payment page
     */
    public function index(): View
    {
        $data = [
            'page_title' => 'Online Payment - CA Sai Manoj Kumar',
            'meta_description' => 'Secure online payment gateway for CA services. Pay your invoices safely and conveniently.',
            'payment_methods' => [
                'Credit Card',
                'Debit Card', 
                'Net Banking',
                'UPI',
                'Digital Wallets'
            ],
            'service_categories' => [
                'Income Tax Services',
                'Audit & Assurance',
                'GST Services',
                'Business Formation',
                'CFO Services',
                'Consultation Fees',
                'Other Services'
            ]
        ];

        return view('pages.payment.index', $data);
    }

    /**
     * Process payment request
     */
    public function process(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:20',
            'service_type' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1|max:1000000',
            'invoice_number' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:500',
            'payment_method' => 'required|string|in:card,netbanking,upi,wallet'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields correctly.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $paymentData = [
                'client_name' => $request->client_name,
                'client_email' => $request->client_email,
                'client_phone' => $request->client_phone,
                'service_type' => $request->service_type,
                'amount' => $request->amount,
                'invoice_number' => $request->invoice_number,
                'description' => $request->description,
                'payment_method' => $request->payment_method,
                'transaction_id' => 'TXN' . time() . rand(1000, 9999),
                'status' => 'pending'
            ];

            // Store payment record in database
            // Payment::create($paymentData);

            // Initialize payment gateway (example with Razorpay)
            $gatewayResponse = $this->initializePaymentGateway($paymentData);

            if ($gatewayResponse['success']) {
                return response()->json([
                    'success' => true,
                    'message' => 'Payment initialized successfully.',
                    'payment_url' => $gatewayResponse['payment_url'],
                    'transaction_id' => $paymentData['transaction_id']
                ]);
            } else {
                throw new \Exception($gatewayResponse['message']);
            }

        } catch (\Exception $e) {
            \Log::error('Payment processing error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'There was an error processing your payment. Please try again or contact us for assistance.'
            ], 500);
        }
    }

    /**
     * Handle payment callback/webhook
     */
    public function callback(Request $request): JsonResponse
    {
        try {
            // Verify payment signature (for Razorpay or similar)
            $transactionId = $request->input('transaction_id');
            $paymentId = $request->input('payment_id');
            $status = $request->input('status');

            // Update payment status in database
            // Payment::where('transaction_id', $transactionId)
            //     ->update([
            //         'payment_gateway_id' => $paymentId,
            //         'status' => $status,
            //         'payment_date' => now(),
            //         'gateway_response' => json_encode($request->all())
            //     ]);

            if ($status === 'success') {
                // Send payment confirmation email
                // Mail::to($payment->client_email)->send(new PaymentConfirmationMail($payment));
                
                // Send internal notification
                // Mail::to('accounts@casmk.com')->send(new PaymentReceivedMail($payment));

                return response()->json([
                    'success' => true,
                    'message' => 'Payment completed successfully! You will receive a confirmation email shortly.'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment was not successful. Please try again or contact us for assistance.'
                ]);
            }

        } catch (\Exception $e) {
            \Log::error('Payment callback error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'There was an error processing the payment response.'
            ], 500);
        }
    }

    /**
     * Display payment success page
     */
    public function success(Request $request): View
    {
        $transactionId = $request->query('transaction_id');
        
        // Fetch payment details
        // $payment = Payment::where('transaction_id', $transactionId)->first();

        $data = [
            'page_title' => 'Payment Successful - CA Sai Manoj Kumar',
            'meta_description' => 'Payment completed successfully.',
            'transaction_id' => $transactionId,
            // 'payment' => $payment
        ];

        return view('pages.payment.success', $data);
    }

    /**
     * Display payment failure page
     */
    public function failure(Request $request): View
    {
        $transactionId = $request->query('transaction_id');
        
        $data = [
            'page_title' => 'Payment Failed - CA Sai Manoj Kumar',
            'meta_description' => 'Payment was not successful.',
            'transaction_id' => $transactionId,
            'error_message' => $request->query('error', 'Payment was not completed successfully.')
        ];

        return view('pages.payment.failure', $data);
    }

    /**
     * Initialize payment gateway
     */
    private function initializePaymentGateway(array $paymentData): array
    {
        try {
            // Example with Razorpay (replace with your preferred gateway)
            
            // $api = new \Razorpay\Api\Api(config('services.razorpay.key'), config('services.razorpay.secret'));
            
            // $order = $api->order->create([
            //     'receipt' => $paymentData['transaction_id'],
            //     'amount' => $paymentData['amount'] * 100, // Amount in paise
            //     'currency' => 'INR',
            //     'notes' => [
            //         'service_type' => $paymentData['service_type'],
            //         'client_name' => $paymentData['client_name'],
            //         'invoice_number' => $paymentData['invoice_number']
            //     ]
            // ]);

            // Mock response for demonstration
            return [
                'success' => true,
                'payment_url' => route('payment.success') . '?transaction_id=' . $paymentData['transaction_id'],
                'order_id' => 'order_' . time(),
                'amount' => $paymentData['amount']
            ];

        } catch (\Exception $e) {
            \Log::error('Payment gateway initialization error: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => 'Failed to initialize payment gateway.'
            ];
        }
    }

    /**
     * Get payment status (AJAX endpoint)
     */
    public function status(Request $request): JsonResponse
    {
        $transactionId = $request->input('transaction_id');
        
        // Fetch payment status from database
        // $payment = Payment::where('transaction_id', $transactionId)->first();
        
        // if (!$payment) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Payment record not found.'
        //     ], 404);
        // }

        // Mock response
        return response()->json([
            'success' => true,
            'status' => 'success',
            'transaction_id' => $transactionId,
            'amount' => 5000,
            'payment_date' => now()->format('Y-m-d H:i:s')
        ]);
    }
}