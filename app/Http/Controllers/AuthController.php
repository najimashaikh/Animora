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
     * Show the dedicated Sign In page.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    /**
     * Show the dedicated Sign Up page.
     */
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    /**
     * Handle user Sign In.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember', true);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'))->with('status', 'Welcome back!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Handle user Sign Up / Registration.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'program' => ['nullable', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'program' => $request->input('program', 'General'),
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user, true);

        return redirect()->route('home')->with('status', 'Account created successfully! Welcome to Animora.');
    }

    /**
     * Handle user logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    /**
     * Handle contact form submission:
     * Stores contact data in Neon PostgreSQL database and sends email notification.
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
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'course_interest' => $request->course_interest,
                'message' => $request->message,
            ]);

            // Forward to Web3Forms for email alert to najimashaikh267@gmail.com
            try {
                Http::timeout(5)->post('https://api.web3forms.com/submit', [
                    'access_key' => '82d62467-fdbb-4b4c-852d-f44e8be9bc5d',
                    'subject' => 'New Student Inquiry - ' . $request->name,
                    'from_name' => 'Animora Campus Portal',
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone ?? 'N/A',
                    'course_interest' => $request->course_interest ?? 'General Inquiry',
                    'message' => $request->message,
                ]);
            } catch (\Exception $ex) {
                // Background email forwarding should not block successful DB save
            }

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully. Our campus team will contact you shortly.',
                'contact_id' => $contact->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to save inquiry: ' . $e->getMessage(),
            ], 500);
        }
    }
}
