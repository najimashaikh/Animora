<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Handle student registration (Sign Up) and save into Neon PostgreSQL.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            'program' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'program' => $request->program,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user, true);

            return response()->json([
                'success' => true,
                'message' => '🎉 Welcome to Animora, ' . $user->name . '! Your account is saved in Neon PostgreSQL.',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'program' => $user->program,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Database error: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Handle student login (Sign In) against Neon PostgreSQL.
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        $login = $request->input('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $credentials = [
            $field => $login,
            'password' => $request->input('password'),
        ];

        $remember = $request->boolean('remember', true);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            return response()->json([
                'success' => true,
                'message' => '✨ Welcome back, ' . $user->name . '!',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'program' => $user->program,
                ],
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials. Please verify your email/ID and password.',
        ], 401);
    }

    /**
     * Handle user logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Logged out successfully.',
            ]);
        }

        return redirect()->route('home');
    }

    /**
     * Handle contact form submission:
     * 1. Store contact data permanently in Neon PostgreSQL database.
     * 2. Send email notification via Web3Forms API.
     */
    public function submitContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'course_interest' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Save contact inquiry permanently into Neon database
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'course_interest' => $request->course_interest,
                'message' => $request->message,
            ]);

            // Also forward to Web3Forms so najimashaikh267@gmail.com gets email alert
            try {
                Http::timeout(5)->post('https://api.web3forms.com/submit', [
                    'access_key' => '82d62467-fdbb-4b4c-852d-f44e8be9bc5d',
                    'subject' => 'New Student Inquiry Stored in Neon - ' . $request->name,
                    'from_name' => 'Animora Campus Portal',
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone ?? 'N/A',
                    'course_interest' => $request->course_interest ?? 'General Inquiry',
                    'message' => $request->message,
                ]);
            } catch (\Exception $ex) {
                // Email forwarding failure should not break the user's DB submission
            }

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your inquiry has been stored in our Neon database and sent to campus staff.',
                'contact_id' => $contact->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to save to Neon database: ' . $e->getMessage(),
            ], 500);
        }
    }
}
